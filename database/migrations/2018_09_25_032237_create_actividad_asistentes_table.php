<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActividadAsistentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividad_asistentes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->integer('asistentes_id')->nullable();
			$table->integer('actividades_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actividad_asistentes');
	}

}
