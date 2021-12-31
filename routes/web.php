<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('/new',  ['uses' => 'UsersController@create']);
  
    $router->get('/me', ['uses' => 'UsersController@mostrartodo']);
  
    $router->get('/me/{id}', ['uses' => 'UsersController@mostrar']);
  
    $router->delete('/me/{id}', ['uses' => 'UsersController@delete']);
  
    $router->put('/me/{id}', ['uses' => 'UsersController@update']);
  });
