<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class detalle_Compra extends Model {

	//
    protected $table = 'detalle_Compras';

    protected $fillable = ['id_factura', 'id_insumo', 'cantidad', 'precio'];

}
