<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::options('/', 'ApiController@options');
Route::options('/glossaries', 'ApiController@options');
Route::options('/terms', 'ApiController@options');
Route::options('/search', 'ApiController@options');
Route::options('/autocomplete', 'ApiController@options');

Route::get('/', function() {
    return view('swagger');
});
Route::get('/swagger.json', 'ApiController@apiDocs');


Route::get('/glossaries', 'GlossaryController@index');
Route::get('/glossaries/{glossary}', 'GlossaryController@show');
Route::get('/glossaries/{glossary}/terms', 'GlossaryController@terms');
Route::get('/terms/{term}', 'GlossaryTermController@show');
Route::get('/search', 'GlossaryTermController@findTerms');
Route::get('/autocomplete', 'GlossaryTermController@autocomplete');
