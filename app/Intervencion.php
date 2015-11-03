<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Intervencion extends Model {

	protected $fila = 'intercenciones';

    protected $fillable = ['fecha', 'estado'];


    public function consulta()
    {
        return $this->belongsTo('Oral_Plus\Consulta', 'id');
    }

    public function receta()
    {
        return $this->belongsTo('Oral_Plus\Receta', 'id');
    }

    public function tratamiento()
    {
        return $this->belongsTo('Oral_Plus\tratamiento', 'id');
    }


}
