<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model 
{
	Public function saludar($nombre)
	{
		return "Hola $nombre";
	}
}