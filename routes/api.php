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

$router->group(['prefix' => 'stages'], function ($router) {

    $router->GET("", "Stages@index"); // uses the StageListResource
    $router->GET("{stage}", "Stages@show"); // use the StageResource
    $router->POST("", "Stages@store"); // use the Stage Resource
    $router->PUT("{stage}", "Stages@update"); // use the StageResource
    $router->DELETE("{stage}", "Stages@destroy"); // 204 is returned

    $router->GET("{stage}/performances", "Performances@indexByStage"); 
    //$router->GET("{stage}/performances", "Performances@showForStage");
    

});

$router->group(['prefix' => 'artists'], function ($router) {

    $router->GET("", "Artists@index");
    $router->GET("{artist}", "Artists@show");
    $router->POST("", "Artists@store");
    $router->PUT("{artist}", "Artists@update");
    $router->DELETE("{artist}", "Artists@destroy");

    $router->GET("{artist}/performances", "Performances@indexByArtist");
    //$router->GET("{artist}/performances", "Performances@showForArtist");

});