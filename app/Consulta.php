<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model {

	protected $fila = 'consltas';

    protected $fillable = ['fecha', 'hora', 'estado', 'valor_consulta'];

}
