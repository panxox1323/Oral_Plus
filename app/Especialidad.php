<?php namespace Oral_Plus;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model {

	protected $table = 'especialidades';

    protected $fillable = ['especialidad'];



    public function scopeEspecialidad($query, $especialidad)
    {
        $especialidades = config('options.tipoEspecialidad');

        if($especialidad != "" && isset($especialidades[$especialidad]))
        {
            $query->where('especialidad', '=', $especialidad);
        }
    }


}
