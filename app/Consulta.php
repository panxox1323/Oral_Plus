<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model {

	protected $fila = 'consltas';

    protected $fillable = ['fecha', 'hora', 'estado', 'valor_consulta'];

    public function useer()
    {
        return $this->belongsTo('Oral_Plus\User', 'id');
    }

    public function boleta()
    {
        return $this->belongsTo('Oral_plus\Boleta', 'id');
    }

    public function intervencion()
    {
        return $this->belongsTo('Oral_Plus\Intervencion', 'id');
    }

}
