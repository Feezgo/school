<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
	protected $table = "facturas";
	protected $dates = ['fecha_pago'];

	public function user()
	{
		return $this->belongsTo('School\User', 'id_usuario');
	}

	public function planesDePagos()
	{
		return $this->belongsToMany('School\App\Modelos\PlanDePago', 'facturas_detalles', 'id_factura', 'id_plan_de_pago');
	}
}
