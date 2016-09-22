<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Registro_Empresa;

class registro_empresaController extends Controller {

	public function __construct()
	{
		$this->middleware('auth.basic');
	}
/*
	public function __construct() 
	{
		$this->middleware('auth.basic',['only' => ['store','update','destroy']]);
	}
*/
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return response()->json(['datos' => Registro_Empresa::all()],200);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return 'Peticion de creacion recibida';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(!$request->input('licencia')|| !$request->input('rut')|| !$request->input('nombre_empresa'))
		{
			return response()->json(['mensaje' => 'No se pudieron procesar los valores', 'codigo' => 422],422);
		}
		Registro_Empresa::create($request->all());

		return response()->json(['mensaje' => 'Registro agregado satisfactoriamente', 'codigo' => 201]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($licencia)
	{
		$registro = Registro_Empresa::find($licencia);

		if(!$registro)
		{
			return response()->json(['mensaje' => 'No se encontró el registro','codigo' => 404],404);
		}

		return response()->json(['datos' => $registro],200);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
			return 'Peticion de edicion recibida';
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			return 'Peticion de actualizacion recibida';
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			return 'Peticion de eliminacion recibida';
	}

}
