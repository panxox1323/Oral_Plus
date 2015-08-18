<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recetas', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('medicamento_1');
            $table->string('medicamento_2');
            $table->string('medicamento_3');
            $table->string('medicamento_4');
            $table->string('medicamento_5');
            $table->string('medicamento_6');
            $table->string('medicamento_7');
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
		Schema::drop('recetas');
	}

}
