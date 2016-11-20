<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class PlanDePago extends Model
{
	public $timestamps = false;
	protected $table = "planes_de_pagos"; 
	protected $fillable = ['id_pago', 'fecha_pago', 'fecha_limite', 'estado', 'pagado'];
	protected $dates = ['deleted_at', 'fecha_pago', 'fecha_limite'];

	public function matricula()
	{
		return $this->belongsTo('School\App\Modelos\Matricula', 'id_matricula');
	}

	public function pago()
	{
		return $this->belongsTo('School\App\Modelos\Pago', 'id_pago');
	}

	public function facturas()
	{
		return $this->belongsToMany('School\App\Modelos\Factura', 'facturas_detalles', 'id_plan_de_pago', 'id_factura');
	}
}
