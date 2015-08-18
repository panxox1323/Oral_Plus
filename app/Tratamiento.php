<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model {


    protected $table = 'tratamientos';

    protected $fillable = ['fecha_inicio', 'valor_tratamiento'];
}
