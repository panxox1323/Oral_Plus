<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Factura_compra extends Model {


    protected $fila = 'factura_compras';

    protected $fillable = ['cantidad', 'valor_unitario', 'fecha_compra', 'forma_pago'];

}
