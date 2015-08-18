<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consultas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->date('fecha');
            $table->dateTime('hora');
            $table->string('estado');
            $table->integer('id_paciente')->unsigned();
            $table->foreign('id_paciente')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->integer('id_especialista')->unsigned();
            $table->foreign('id_especialista')
                  ->references('id')
                  ->on('especialistas')
                  ->onDelete('cascade');
            $table->integer('valor_consulta');
            $table->integer('id_boleta')->unsigned();
            $table->foreign('id_boleta')
                  ->references('id')
                  ->on('boletas')
                  ->onDelete('cascade');
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
		Schema::drop('consultas');
	}

}
