<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use League\Fractal;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use Swagger\Annotations as SWG;

class GlossaryController extends Controller
{
    /**
     * Lists glossaries
     * 
     * @SWG\Get(
     *     path="/glossaries",
     *     tags={"Glossary"},
     *     @SWG\Response(
     *         response="200",
     *         description="Successful response",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(
     *                 ref="#/definitions/Glossary"
     *             )
     *         )
     *     ),
     *     @SWG\Response(
     *         response="400",
     *         description="Bad request",
     *     )
     * )
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glossaries = $this->em->getRepository('\App\Entities\Glossary')->findAll();
        $transformer = new \App\Transformers\GlossaryTransformer();
        $resource = new Fractal\Resource\Collection($glossaries, $transformer);
        $data = $this->fractal->createData($resource)->toArray();
        return response()->json($data);
    }
    
    
    /**
     * Shows single Glossary record
     * 
     * @SWG\Get(
     *     path="/glossaries/{glossary}",
     *     tags={"Glossary"},
     *     @SWG\Parameter(
     *         in="path",
     *         name="glossary",
     *         type="integer",
     *         format="int32",
     *         required=true,
     *         description="Identifier of the Glossary"
     *     ),
     *     @SWG\Response(
     *         response="200",
     *         description="Successful response",
     *         @SWG\Schema(
     *             ref="#/definitions/Glossary"
     *         )
     *     ),
     *     @SWG\Response(
     *         response="400",
     *         description="Bad request",
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="Resource could not be found",
     *     )
     * )
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $glossary = $this->em->getRepository('\App\Entities\Glossary')->find($id);
        $transformer = new \App\Transformers\GlossaryTransformer();
        $resource = new Fractal\Resource\Item($glossary, $transformer);
        $data = $this->fractal->createData($resource)->toArray();
        return response()->json($data);
    }
    
    /**
     * Gets terms from a Glossary
     * 
     * @SWG\Get(
     *     path="/glossaries/{glossary}/terms",
     *     tags={"Glossary"},
     *     @SWG\Parameter(
     *         in="path",
     *         name="glossary",
     *         type="integer",
     *         format="int32",
     *         required=true,
     *         description="Identifier of the Glossary"
     *     ),
     *     @SWG\Parameter(
     *         in="query",
     *         name="perPage",
     *         type="integer",
     *         format="int32",
     *         required=false,
     *         default=20,
     *         description="Number of records to return"
     *     ),
     *     @SWG\Parameter(
     *         in="query",
     *         name="page",
     *         type="integer",
     *         format="int32",
     *         required=false,
     *         default=1,
     *         description="Page to return"
     *     ),
     *     @SWG\Response(
     *         response="200",
     *         description="Successful response",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(
     *                 ref="#/definitions/Term"
     *             )
     *         )
     *     ),
     *     @SWG\Response(
     *         response="400",
     *         description="Bad request",
     *     ),
     *     @SWG\Response(
     *         response="404",
     *         description="Resource could not be found",
     *     )
     * )
     * 
     * @param Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function terms(Request $request, $id)
    {
        $this->fractal->parseExcludes('glossary,relationships.relatedTerm.glossary');
        if ($request->input('include')) {
            $this->fractal->parseIncludes($request->input('include'));
        }
        $this->fractal->parseFieldsets([
            'terms' => 'id,name,definition,relationships',
        ]);
        $queryParams = array_diff_key($request->all(), array_flip(['page']));
        $perPage = (isset($queryParams['perPage'])) 
                ? $queryParams['perPage'] : 20;
        $page = $request->input('page') ?: 1;
        $paginator = $this->em->getRepository('\App\Entities\Term')->getTermsForGlossary($id, $perPage, $page);
        $paginator->appends($queryParams);
        $paginatorAdapter = new IlluminatePaginatorAdapter($paginator);
        $terms = $paginator->getCollection();
        
        $resource = new Fractal\Resource\Collection($terms, new \App\Transformers\GlossaryTermTransformer, 'terms');
        $resource->setPaginator($paginatorAdapter);
        $data = $this->fractal->createData($resource)->toArray();
        return response()->json($data);
    }
}
