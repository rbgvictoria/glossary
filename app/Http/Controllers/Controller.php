<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use League\Fractal;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;

    /**
     * @var Fractal\Manager
     */
    protected $fractal;
    
    /** */
    public function __construct()
    {
        $this->middleware('cors');
        $this->em = app('em');
        $this->setFractalManager();
    }

    /**
     * Sets the Fractal manager, with the appropriate response type based on the
     * Accept header and parses the requested includes and excludes
     */
    protected function setFractalManager()
    {
        $this->fractal = new Fractal\Manager();
        $this->fractal->setSerializer(new \App\Serializers\DataArraySerializer());
        if (\request()->input('include')) {
            $this->fractal->parseIncludes(\request()->input('include'));
        }
        if (\request()->input('exclude')) {
            $this->fractal->parseExcludes(\request()->input('exclude'));
        }
    }

    /**
     * @param  Uuid $id
     * @return InvalidUuidException
     */
    public function checkUuid($id) {
        if (!Uuid::isValid($id)) {
            throw new InvalidUuidException();
        }
    }

    /**
     * 
     * @param string $input
     * @param  $entity
     * @param type $vocab
     * @return type
     */
    public function getValue($input, $entity=false, $vocab=false)
    {
        if (is_array($input)) {
            if ($vocab) {
                $input = $input['name'];
            }
            else {
                $input = $input->id;
            }
        }
        if ($entity) {
            if ($vocab) {
                return $this->em->getRepository('\\App\\Entities\\' . $entity)
                        ->findOneBy(['name' => $input]);
            }
            else {
                return $this->em->getRepository('\\App\\Entities\\' . $entity)
                        ->findOneBy(['guid' => $input]);
            }
        }
        else {
            return $input;
        }
    }
}
