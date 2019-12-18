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

    $router->GET("", "Stages@index");
    $router->GET("{stage}", "Stages@show");
    $router->POST("", "Stages@store");
    $router->PUT("{stage}", "Stages@update");
    $router->DELETE("{stage}", "Stages@destroy");

    $router->GET("{stage}/performances", "Performances@index");

});

$router->group(['prefix' => 'artists'], function ($router) {

    $router->GET("", "Artists@index");
    $router->GET("{artist}", "Artists@show");
    $router->POST("", "Artists@store");
    $router->PUT("{artist}", "Artists@update");
    $router->DELETE("{artist}", "Artists@destroy");

});