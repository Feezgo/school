<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Familiar extends Model
{
	protected $table = "familiares";
	protected $dates = ['deleted_at'];

    use SoftDeletes;

	public function estudiantes()
	{
		return $this->belongsTo('School\App\Modelos\HistoriaAcademica', 'estudiantes_familiares', 'id_familiar', 'id_estudiante')
					->withPivot('acudiente');
	}
}
