<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro_Empresa extends Model
{
	protected $table = 'registro_empresa';

	protected $primaryKey = 'licencia';
	
	protected $fillable = array('licencia','rut','nombre_empresa', 'direccion', 'comuna_estado', 'ciudad', 'pais', 'fono', 'email', 'paginaweb', 'descripcion_tienda', 'monedauso');
	
	protected $hidden = ['created_at','updated_at'];
}