<?php

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

$router->get('/user', 'UserController@index');
$router->get('/user/{username}', 'UserController@show');
$router->post('/user', 'UserController@create');

$router->get('/akses', 'AksesController@index');
$router->get('/akses/{id}', 'AksesController@show');
$router->post('/akses', 'AksesController@store');
$router->put('/akses/{id}', 'AksesController@update');
$router->delete('/akses/{id}', 'AksesController@delete');

$router->get('/tipeadmin', 'TipeAdminController@index');
$router->get('/tipeadmin/{id}', 'TipeAdminController@show');
$router->post('/tipeadmin', 'TipeAdminController@create');

$router->get('/admin', 'AdminController@index');
$router->get('/admin/{username}', 'AdminController@show');
$router->post('/admin', 'tipeadmin@register');

$router->get('/video', 'VideoController@index');
$router->get('/video/{id}', 'VideoController@show');
$router->post('/video', 'VideoController@create');
