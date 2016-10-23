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

	public function departamento() 
	{
		return $this->hasMany('School\App\Modelos\departamento', 'id','dpto_expdicion');
	}

	public function departamento1() 
	{
		return $this->hasMany('School\App\Modelos\departamento', 'id','dpto_nacimiento');
	}

	public function departamento2() 
	{
		return $this->hasMany('School\App\Modelos\departamento', 'id','dpto_recidencia');
	}


	public function municipio() 
	{
		return $this->hasMany('School\App\Modelos\municipio', 'id','mpio_expdicion');
	}

	public function municipio1() 
	{
		return $this->hasMany('School\App\Modelos\municipio', 'id','mpio_nacimiento');
	}

	public function municipio2() 
	{
		return $this->hasMany('School\App\Modelos\municipio', 'id','mpio_recidencia');
	}


	public function discapacidad() 
	{
		return $this->hasMany('School\App\Modelos\Discapacidad', 'id','discapacidad');
	}

	public function situacion() 
	{
		return $this->hasMany('School\App\Modelos\Situacion', 'id','situacion_academica');
	}

	public function familiares()
	{
		return $this->belongsTo('School\App\Modelos\HistoriaAcademica', 'estudiantes_familiares', 'id_estudiante', 'id_familiar')
					->withPivot('acudiente');
	}
}
