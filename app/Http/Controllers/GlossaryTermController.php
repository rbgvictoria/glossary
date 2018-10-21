<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Fractal;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use Swagger\Annotations as SWG;

class GlossaryTermController extends Controller
{
    public function index($glossary)
    {
        $terms = $this->em->getRepository('\App\Entities\Term')->findBy(['glossary' => $glossary]);
        return response()->json($terms);
    }
    
    /**
     * @SWG\Get(
     *     path="/terms/{term}",
     *     tags={"Glossary"},
     *     @SWG\Parameter(
     *         in="path",
     *         name="term",
     *         type="integer",
     *         format="int32",
     *         required=true,
     *         description="Identifier of the Term"
     *     ),
     *     @SWG\Response(
     *         response="200",
     *         description="Successful response",
     *         @SWG\Schema(
     *             ref="#/definitions/Term"
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
        $this->fractal->parseIncludes('relationships');
        $term = $this->em->getRepository('\App\Entities\Term')->find($id);
        $resource = new Fractal\Resource\Item($term, 
                new \App\Transformers\GlossaryTermTransformer, 'terms');
        $data = $this->fractal->createData($resource)->toArray();
        return response()->json($data);
    }
    
    /**
     * @SWG\Get(
     *     path="/search",
     *     tags={"Glossary"},
     *     @SWG\Parameter(
     *         in="query",
     *         name="glossary",
     *         type="integer",
     *         format="int32",
     *         required=false,
     *         default=4,
     *         description="Identifier of the Glossary; defaults to ID for VicFlora glossary"
     *     ),
     *     @SWG\Parameter(
     *         in="query",
     *         name="term",
     *         type="string",
     *         required=false,
     *         default="a",
     *         description="First letter(s) of the term to search for"
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
     * @return type
     */
    public function findTerms(Request $request)
    {
        $params = [
            'glossary' => $request->input('glossary') ?: 4,
            'term' => strtolower($request->input('term')) ?: 'a'
        ];
        $queryParams = array_diff_key($request->all(), array_flip(['page']));
        $perPage = (isset($queryParams['perPage'])) 
                ? $queryParams['perPage'] : 20;
        $page = $request->input('page') ?: 1;
        $paginator = $this->em->getRepository('\App\Entities\Term')->findTerms($params, $perPage, $page);
        $paginator->appends($queryParams);
        $paginatorAdapter = new IlluminatePaginatorAdapter($paginator);
        $terms = $paginator->getCollection();
        
        $resource = new Fractal\Resource\Collection($terms, new \App\Transformers\GlossaryTermTransformer, 'terms');
        $resource->setPaginator($paginatorAdapter);
        /*$this->fractal->parseFieldsets([
            'terms' => 'id,name'
        ]);*/
        $data = $this->fractal->createData($resource)->toArray();
        return response()->json($data);
    }
    
    /**
     * @SWG\Get(
     *     path="/autocomplete",
     *     tags={"Glossary"},
     *     @SWG\Parameter(
     *         in="query",
     *         name="glossary",
     *         type="integer",
     *         format="int32",
     *         required=false,
     *         default=4,
     *         description="Identifier of the Glossary; defaults to ID for VicFlora glossary"
     *     ),
     *     @SWG\Parameter(
     *         in="query",
     *         name="term",
     *         type="string",
     *         required=false,
     *         default="a",
     *         description="First letter(s) of the term to search for"
     *     ),
     *     @SWG\Response(
     *         response="200",
     *         description="Successful response",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(
     *                 ref="#/definitions/Suggestion"
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
     * @return type
     */
    public function autocomplete(Request $request)
    {
        $params = [
            'glossary' => $request->input('glossary') ?: 4,
            'term' => strtolower($request->input('term')) ?: 'a'
        ];
        $suggestions = $this->em->getRepository('\App\Entities\Term')->findTerms($params, 0);
        $resource = new Fractal\Resource\Collection($suggestions, 
                new \App\Transformers\SuggestionTransformer, 'suggestions');
        $data = $this->fractal->createData($resource)->toArray();
        return response()->json($data['data']);
    }
}
