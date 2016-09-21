<?php namespace App\Http\Controllers;

use App\Prueba;

class MyControler extends Controller 
{
	public function index()
	{
		$modelo = new Prueba();

		$saludo = $modelo->saludar("Andres");

		return view('prueba.index',['saludo' => $saludo]);
	}
}