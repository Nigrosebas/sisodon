<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});


/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});


Route::resource('pacientes', 'PacientesController');

Route::get('pacientes/{id}/delete', [
    'as' => 'pacientes.delete',
    'uses' => 'PacientesController@destroy',
]);

    Route::get('/home', 'HomeController@index');


Route::resource('acciones', 'AccionesController');

Route::get('acciones/{id}/delete', [
    'as' => 'acciones.delete',
    'uses' => 'AccionesController@destroy',
]);
