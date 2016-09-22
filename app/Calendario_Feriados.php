<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendario_Feriados extends Model
{
	protected $table = 'calendario_feriados';
	
	protected $primaryKey = 'id';
	
	protected $fillable = array('nu_dia','de_dia', 'fecha', 'dia', 'mes', 'ano', 'descripcion', 'ambito_nacional');
	
	protected $hidden = ['created_at','updated_at'];
}