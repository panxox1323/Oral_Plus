<?php

namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    protected $table = 'horas';

    protected $fillable = ['hora'];

    public function scopeListarHorasxDia($query, $fecha)
    {
        $query->where('fecha', $fecha);
    }

}
