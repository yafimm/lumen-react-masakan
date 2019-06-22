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
$router->post('/user', 'UserController@store');
$router->put('/user/{username}', 'UserController@update');
$router->delete('/user/{username}', 'Usercontroller@delete');

$router->get('/akses', 'AksesController@index');
$router->get('/akses/{id}', 'AksesController@show');
$router->post('/akses', 'AksesController@store');
$router->put('/akses/{id}', 'AksesController@update');
$router->delete('/akses/{id}', 'AksesController@delete');

$router->get('/tipeadmin', 'TipeAdminController@index');
$router->get('/tipeadmin/{id}', 'TipeAdminController@show');
$router->post('/tipeadmin', 'TipeAdminController@store');
$router->put('/tipeadmin/{id}', 'TipeAdminController@update');
$router->delete('/tipeadmin/{id}', 'TipeAdminController@delete');

$router->get('/admin', 'AdminController@index');
$router->get('/admin/{username}', 'AdminController@show');
$router->post('/admin', 'AdminController@store');
$router->put('/admin/{username}', 'AdminController@update');
$router->delete('/admin/{username}', 'AdminController@delete');

$router->get('/video', 'VideoController@index');
$router->get('/video/{id}', 'VideoController@show');
$router->post('/video', 'VideoController@create');

$router->get('/blog', 'BlogController@index');
$router->get('/blog/{id}', 'BlogController@show');
$router->post('/blog', 'BlogController@store');
$router->put('/blog/{id}', 'BlogController@update');
$router->delete('/blog/{id}', 'BlogController@delete');

$router->get('/blogkategori', 'BlogKategoriController@index');
$router->get('/blogkategori/{id}', 'BlogKategoriController@show');
$router->post('/blogkategori', 'BlogKategoriController@store');
$router->put('/blogkategori/{id}', 'BlogKategoriController@update');
$router->deletE('/blogkategori/{id}', 'BlogKategoriController@delete');
