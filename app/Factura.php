<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Factura extends Model {


    protected $table = 'factura';

    protected $fillable = ['id_factura', 'id_proveedor', 'fecha', 'forma_pago', 'iva', 'subtotal', 'total'];



    public function proveedor()
    {
        return $this->belongsTo('Oral_Plus\Proveedor', 'id_proveedor', 'id');

    }

    public function detalle_Compra()
    {

        return $this->hasOne('Oral_Plus\detalle_Compra');

    }



    public function scopeName($query, $name)
    {
        if(trim($name) != "" && isset($name))
        {
            $query->where('id_factura',"LIKE", "%$name%");
        }

    }

    public function scopeNombre($query, $proveedor)
    {
        if(trim($proveedor) != '')
        {
            $consulta = ['nombre' => DB::table('factura')->lists('id_proveedor', 'forma_pago')];
            $query->where('id_proveedor',"LIKE","%$proveedor%");
        }
    }

    public function getNombreAttribute($query)
    {
        return $this->nombre->where('id_proveedor', '===', $this->id_proveedor);

    }


}
