<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
	protected $table = "estudiantes";
	protected $dates = ['deleted_at'];

    use SoftDeletes;

	public function historiasAcademicas() 
	{
		return $this->hasMany('School\App\Modelos\HistoriaAcademica', 'id_estudiante');
	}

	public function familiares()
	{
		return $this->belongsTo('School\App\Modelos\HistoriaAcademica', 'estudiantes_familiares', 'id_estudiante', 'id_familiar')
					->withPivot('acudiente');
	}
}
