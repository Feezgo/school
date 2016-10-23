<?php

namespace School\Http\Controllers;

use Illuminate\Http\Request;
use School\App\Modelos\Pago;
use School\App\Modelos\PlanDePago;
use School\App\Modelos\Matricula;
use Carbon\Carbon;

class PagosController extends Controller
{
    public function __construct()
    {

    }

    public function obtenerPagosPendientes(Request $request)
    {
    	
    }

    public function asignarPlanPagos(Request $request)
    {
    	$matricula = Matricula::find($request->input('id_matricula'));
    	$pagos = Pago::where(function($query) use ($matricula)
			    	{
			    		return $query->where('aplica', $matricula->tipo)
			    					->orWhere('aplica', 'todos');
			    	})
    				->where(function($query) use ($matricula)
    				{
    					return $query->where('cursos', 'LIKE', '%'.$matricula->grado.'%')
									->orWhere('cursos', 'LIKE', '%todos%');
    				})
					->get();

		$plan_de_pagos = [];
		$fecha = Carbon::createFromFormat('Y-m-d', config('school.año-academico').'-02-01');

		foreach ($pagos as $pago) 
		{
			switch ($pago->concepto) {
				case 'matricula':
					$plan_de_pagos[] = [
							'id_pago' => $pago->id,
							'fecha_pago' => $fecha->toDateString(),
							'fecha_limite' => $fecha->toDateString(),
							'estado' => 0
						];
				break;
				case 'pension':
					for ($i=0; $i<9; $i++)
					{
						$fecha->addMonth();
						$fecha_pago = $fecha->copy();

						$plan_de_pagos[] = [
							'id_pago' => $pago->id,
							'fecha_pago' => $fecha_pago->toDateString(),
							'fecha_limite' => $fecha_pago->addWeekdays(7)->toDateString(),
							'estado' => 0
						];
					}
				break;
			}
		}

		foreach ($plan_de_pagos as $plan_de_pago) 
		{
			$matricula->planesDePagos()->create($plan_de_pago);
		}

		return response()->json(['estado' => 'true']);
    }

}
