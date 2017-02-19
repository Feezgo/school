<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grado extends Model
{
    //
    protected $table = "grado";
	protected $dates = ['deleted_at'];


	public function matriculas()
	{
		return $this->hasMany('School\App\Modelos\Matricula', 'grado');
	}

	public function estudiantes2017()
	{
		return $this->hasMany('School\App\Modelos\estudiantes2017', 'grado');
	}
}
