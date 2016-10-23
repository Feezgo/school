<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matricula extends Model
{
	protected $table = "matricula";
	protected $dates = ['deleted_at'];

	public function planesDePagos()
	{
		return $this->hasMany('School\App\Modelos\PlanDePago', 'id_matricula');
	}
}
