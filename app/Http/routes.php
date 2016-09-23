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


	Route::resource('registro_empresa','registro_empresaController');
	Route::resource('calendario_feriados','calendario_feriadosController');
	Route::resource('vehiculos', 'VehiculoController', ['only' => ['index', 'show']]);
	Route::resource('fabricantes','FabricanteController', ['except' => ['edit', 'create']]);
	Route::resource('fabricantes.vehiculos','FabricanteVehiculoController', ['except' => ['show', 'edit', 'create']]);