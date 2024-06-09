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


// Akses untuk masing-masing sampel
$router->get('/sample', 'SampleController@index');
$router->get('/sample/{id}', 'SampleController@show');
$router->post('/sample', 'SampleController@store');
$router->put('/sample/{id}', "SampleController@update");
$router->delete('/sensor/{id}', "SampleController@delete");

// Akses data intensitas dan tegangan keluaran
$router->get('/sensor', 'SensorController@index');
$router->post('/sensor', 'SensorController@store');
$router->get('/sensor/{id}', 'SensorController@show');


