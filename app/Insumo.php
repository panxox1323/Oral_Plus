<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model {


    protected $table = 'insumos';

    protected $fillable = ['nombre', 'precio_unitario', 'descripcion'];


    public function detalle_compra()
    {
        return $this->hasOne('Oral_Plus\detalle_Compra');
    }


    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != ""){
            $query->where('nombre',"LIKE", "%$nombre%");
        }
    }



}
