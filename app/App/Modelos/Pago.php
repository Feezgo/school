<?php

namespace School\App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
	public $timestamps = false;
	protected $table = "pagos";

	public function planesDePagos()
	{
		return $this->hasMany('School\App\Modelos\PlanDePago', 'id_pago');
	}
}
