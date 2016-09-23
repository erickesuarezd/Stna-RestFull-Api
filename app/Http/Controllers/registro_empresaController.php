<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Registro_Empresa;

class registro_empresaController extends Controller {
/*
	public function __construct()
	{
		$this->middleware('auth.basic');
	}
*/

	public function __construct() 
	{
		$this->middleware('auth.basic',['only' => ['store','update','destroy']]);
	}

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
		if(!$request->input('licencia')|| !$request->input('rut')|| !$request->input('nombre_empresa')|| !$request->input('direccion')|| !$request->input('comuna_estado')|| !$request->input('ciudad')|| !$request->input('pais')|| !$request->input('fono')|| !$request->input('email')|| !$request->input('monedauso'))
		{
			return response()->json(['mensaje' => 'No se pudieron procesar los valores', 'codigo' => 422],422);
		}else{

		Registro_Empresa::create($request->all());

		return response()->json(['mensaje' => 'Registro agregado satisfactoriamente', 'codigo' => 201]);
		}
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
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$metodo = $request->method();
		$registro = Registro_Empresa::find($id);

		if (!$registro)
		{
			return response()->json(['mensaje' => 'No se encuentra el la empresa con el registro '.$id, 'codigo' => 404],404);
		}else{
				$licencia = $id;
				$rut = $request ->input('rut');
				$nombre_empresa = $request ->input('nombre_empresa');
				$direccion = $request ->input('direccion');
				$comuna_estado = $request ->input('comuna_estado');
				$ciudad = $request ->input('ciudad');
				$pais = $request ->input('pais');
				$fono = $request ->input('fono');
				$email = $request ->input('email');
				$paginaweb = $request ->input('paginaweb');
				$descripcion_tienda = $request ->input('descripcion_tienda');
				$MonedaUso = $request ->input('monedauso');
			if($metodo === 'PATCH')
			{

				if($licencia != null && $licencia != '')
				{
					$registro -> licencia = $id;
				}
				if($rut != null && $rut != '')
				{
					$registro -> rut = $rut;
				}
				if($nombre_empresa != null && $nombre_empresa != '')
				{
					$registro -> nombre_empresa = $nombre_empresa;
				}
				if($direccion != null && $direccion != '')
				{
					$registro -> direccion = $direccion;
				}
				if($comuna_estado != null && $comuna_estado != '')
				{
					$registro -> comuna_estado = $comuna_estado;
				}
				if($ciudad != null && $ciudad != '')
				{
					$registro -> ciudad = $ciudad;
				}
				if($pais != null && $pais != '')
				{
					$registro -> pais = $pais;
				}
				if($fono != null && $fono != '')
				{
					$registro -> fono = $fono;
				}
				if($email != null && $email != '')
				{
					$registro -> email = $email;
				}
				if($paginaweb != null && $paginaweb != '')
				{
					$registro -> paginaweb = $paginaweb;
				}
				if($descripcion_tienda != null && $descripcion_tienda != '')
				{
					$registro -> descripcion_tienda = $descripcion_tienda;
				}
				if($MonedaUso != null && $MonedaUso != '')
				{
					$registro -> MonedaUso = $MonedaUso;
				}
				$registro->save();

				return response()->json(['mensaje' => 'Registro Nro: '.$licencia.' actualizado'],200);

			}else{

				if(!$licencia|| !$rut||!$nombre_empresa|| !$direccion|| !$comuna_estado|| !$ciudad|| !$pais|| !$fono|| !$email|| !$paginaweb|| !$descripcion_tienda|| !$MonedaUso)
				{
					return response()->json(['mensaje' => 'No se pudieron procesar los valores con el registro '.$id, 'codigo' => 404],404);
				} else{
					$registro -> licencia = $licencia;
					$registro -> rut = $rut;
					$registro -> nombre_empresa = $nombre_empresa;
					$registro -> direccion = $direccion;
					$registro -> comuna_estado = $comuna_estado;
					$registro -> ciudad = $ciudad;
					$registro -> pais = $pais;
					$registro -> fono = $fono;
					$registro -> email = $email;
					$registro -> paginaweb = $paginaweb;
					$registro -> descripcion_tienda = $descripcion_tienda;
					$registro -> monedauso = $MonedaUso;
					$registro->save();
					return response()->json(['mensaje' => 'Registro Nro: '.$licencia.' actualizado'],200);
				}
			}
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$registro = Registro_Empresa::find($id);

		if (!$registro)
		{
			return response()->json(['mensaje' => 'No se encuentra la empresa con el registro '.$id, 'codigo' => 404],404);
		}

		$registro->delete();

		return response()->json(['mensaje' => 'Registro de empresa eliminado'],200);
	}

}
