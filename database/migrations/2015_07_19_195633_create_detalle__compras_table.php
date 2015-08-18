<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleComprasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle__compras', function(Blueprint $table)
		{
            $table->integer('id_factura')->unsigned();
            $table->foreign('id_factura')
                  ->references('id')
                  ->on('factura_compras')
                  ->onDelete('cascade');
            $table->integer('id_insumo')->unsigned();
            $table->foreign('id_insumo')
                  ->references('id')
                  ->on('insumos')
                  ->onDelete('cascade');
            $table->integer('cantidad');
            $table->integer('precio');
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
		Schema::drop('detalle__compras');
	}

}
