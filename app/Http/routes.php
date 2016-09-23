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


	Route::resource('registro_empresa','registro_empresaController', ['except' => ['edit', 'create']]);
	Route::resource('calendario_feriados','calendario_feriadosController', ['except' => ['edit', 'create']]);
	Route::resource('vehiculos', 'VehiculoController', ['only' => ['index', 'show']]);
	Route::resource('fabricantes','FabricanteController', ['except' => ['edit', 'create']]);
	Route::resource('fabricantes.vehiculos','FabricanteVehiculoController', ['except' => ['show', 'edit', 'create']]);


	Route::pattern('inexistentes','.*');
	Route::any('/{inexistentes}', function()
	{
		return response()->json(['mensaje' => 'Ruta y/o metodos incorrectos', 'codigo' => 400],400);
	});