<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		$this->call('FabricanteSeeder');
		$this->call('VehiculoSeeder');
//		$this->call('registro_empresa');
//		$this->call('calendario_feriados');
		User::truncate();
		$this->call('UserSeeder');
	}

}
