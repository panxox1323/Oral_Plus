<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id')->unique();
            $table->integer('run');
			$table->string('first_name');
			$table->string('last_name');
            $table->date('fecha_nac');
            $table->integer('telefono');
			$table->string('email')->unique();
            $table->integer('saldo');
			$table->string('direccion');
			$table->date('fecha_nacimiento');
			$table->string('ciudad');
			$table->string('password', 60);
            $table->enum('type', ['admin', 'user','especialista','secretaria']);
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
