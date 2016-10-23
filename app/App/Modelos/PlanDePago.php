<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class PlanDePago extends Model
{
	public $timestamps = false;
	protected $table = "planes_de_pagos"; 
	protected $fillable = ['id_pago', 'fecha_pago', 'fecha_limite', 'estado'];

	public function matricula()
	{
		return $this->belongsTo('School\App\Modelos\Matricula', 'id_matricula');
	}

	public function pago()
	{
		return $this->belongsTo('School\App\Modelos\Pago', 'id_pago');
	}
}
