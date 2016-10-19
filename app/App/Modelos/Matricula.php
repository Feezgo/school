<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matricula extends Model
{
	protected $table = "matricula";
	protected $dates = ['deleted_at'];

	public function pagos()
	{
		return $this->belongsTo('School\App\Modelos\Pago', 'planes_de_pagos', 'id_matricula', 'id_pago')
					->withPivot('fecha_pago', 'estado');
	}
}
