<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('factura', function(Blueprint $table)
		{
			$table->increments('id_factura');
            $table->integer('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')
                  ->references('id')
                  ->on('proveedors')
                  ->onDelete('cascade');
            $table->date('fecha');
            $table->string('forma_pago');
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
		Schema::drop('factura');
	}

}
