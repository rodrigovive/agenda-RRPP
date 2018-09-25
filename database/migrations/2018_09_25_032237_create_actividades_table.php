<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActividadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
			$table->text('detalles', 65535)->nullable();
			$table->string('hora')->nullable();
			$table->string('lugar')->nullable();
			$table->integer('categoria_id')->nullable();
			$table->integer('organizador_id')->nullable();
			$table->integer('registrador_id')->nullable();
			$table->string('estados_id')->nullable();
			$table->string('titulo')->nullable();
			$table->date('fecha_inicio')->nullable();
			$table->date('fecha_final')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actividades');
	}

}
