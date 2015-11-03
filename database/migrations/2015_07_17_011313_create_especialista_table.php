<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialistaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('especialistas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('run');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->date('fecha_nac')->nullable();
            $table->string('telefono');
            $table->date('fecha_contrato');
            $table->string('titulo');

			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('especialistas');
	}

}
