<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoletasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('boletas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('forma_pago');
            $table->date('fecha');
            $table->string('detalle');
            $table->integer('valor_pagado');
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
		Schema::drop('boletas');
	}

}
