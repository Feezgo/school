<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matricula extends Model
{
	protected $table = "matricula";
	protected $dates = ['deleted_at'];

	public function estudiante()
	{
		return $this->belongsTo('School\App\Modelos\Estudiante', 'id_estudiante');
	}

	public function planesDePagos()
	{
		return $this->hasMany('School\App\Modelos\PlanDePago', 'id_matricula');
	}

	public function grado() 
	{
		return $this->belongsTo('School\App\Modelos\Grado', 'grado');
	}
}
