<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Boleta extends Model {


    protected $table = 'boletas';

    protected $fillable = ['forma_pago', 'fecha', 'descripcion', 'valor_pagado'];

    public function consulta()
    {
        return $this->hasOne('Oral_Plus\Consulta');
    }

}
