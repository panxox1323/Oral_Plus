<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaComprasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('factura_compras', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')
                  ->references('id')
                  ->on('proveedores')
                  ->onDelete('cascade');
            $table->integer('cantidad');
            $table->integer('valor_unitario');
            $table->date('fecha_compra');
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
		Schema::drop('factura_compras');
	}

}
