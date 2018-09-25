<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistradorActividadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('registrador_actividad', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->string('nombre')->nullable();
			$table->string('apellido')->nullable();
			$table->string('celular')->nullable();
			$table->string('email')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('registrador_actividad');
	}

}
