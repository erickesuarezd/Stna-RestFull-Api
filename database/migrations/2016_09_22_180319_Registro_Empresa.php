<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistroEmpresa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registro_empresa', function(Blueprint $table)
		{
			$table->string('licencia',24);
			$table->string('rut',12);
			$table->string('nombre_empresa');
			$table->string('direccion');
			$table->string('comuna_Estado');
			$table->string('ciudad');
			$table->string('pais');
			$table->string('fono');
			$table->string('email');
			$table->string('paginaweb');
			$table->string('descripcion_tienda');
			$table->string('monedauso');
			$table->timestamps();
			$table->primary(['licencia', 'rut']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registro_empresa');
	}

}
