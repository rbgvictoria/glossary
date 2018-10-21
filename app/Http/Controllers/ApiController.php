<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Swagger\Annotations as SWG;

/**
 *
 * @SWG\Swagger(
 *   @SWG\Info(
 *     title="Glossary API",
 *     description="",
 *     version="1.0.0",
 *     @SWG\Contact(
 *       name="Niels Klazenga, Royal Botanic Gardens Victoria",
 *       email="Niels.Klazenga@rbg.vic.gov.au"
 *     )
 *   ),
 *   host="glossary.homestead",
 *   basePath="/api",
 *   schemes={"http"},
 *   consumes={"application/json", "multipart/form-data"},
 *   produces={"application/json"},
 * )
 */
class ApiController extends Controller
{

    /**
     * Creates API documentation
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    public function apiDocs()
    {
        $swagger = \Swagger\scan(app_path());
        return response()->json($swagger);
    }
}
