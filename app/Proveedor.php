<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model {

	protected $file = 'proveedores';

    protected $fillable = ['nombre', 'direccion', 'telefono', 'email', 'giro'];




    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != ""){
            $query->where('nombre',"LIKE", "%$nombre%");
        }
    }

    public function scopeGiro($query, $giro)
    {
        $types = config('options.tipoGiroProveedor');

        if($giro != "" && isset($types[$giro]))
        {
            $query->where('giro', '=', $giro);
        }
    }

}
