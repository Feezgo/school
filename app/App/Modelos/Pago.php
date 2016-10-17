<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
	public $timestamps = false;
	protected $table = "pagos";

	public function matriculas()
	{
		return $this->belongsTo('School\App\Modelos\Matricula', 'planes_de_pagos', 'id_pago', 'id_matricula')
					->withPivot('fecha_pago');
	}
}
