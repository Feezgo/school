<?php

namespace School\Http\Controllers;

use Illuminate\Http\Request;
use School\App\Modelos\Pago;
use School\App\Modelos\PlanDePago;
use School\App\Modelos\Matricula;
use School\App\Modelos\Estudiante;
use PDF;
use Carbon;

class PagosController extends Controller
{
    public function __construct()
    {

    }

    public function obtenerPagosPendientes(Request $request, $documento = "")
    {
    	$matricula = Matricula::with('estudiante', 'planesDePagos', 'planesDePagos.pago')
    					->whereHas('estudiante', function($query) use ($documento)
    					{
    						$query->where('documento', $documento);
    					})
    					->first();

    	$data = [
    		'status' => session('status'),
    		'matricula' => $matricula
    	];

    	return view('pagos.buscador')
    				->with($data);
    }

    public function gestionarPagos(Request $request)
    {
    	switch ($request->input('operacion')) {
    		case 'pagar':
    			$fecha_pago = Carbon::now();
    			$planes_de_pagos = PlanDePago::with('pago')->whereIn('id', $request->input('pago'))->get();

    			foreach ($planes_de_pagos as $pago) 
    			{
    				$pago->estado = !$pago->estado;
    				
    				if($pago->estado)
    					$pago->pagado = $fecha_pago->gt($pago->fecha_limite) ? $pago->pago['recargo'] + $pago->pago['costo'] : $pago->pago['costo'];
    				else
    					$pago->pagado = 0;

    				$pago->save();
    			}

    			return redirect('pagos/buscar/'.$request->input('documento'))
    						->with(['status' => 'success']);
    		break;
    		case 'imprimir':
    			$html = view('pagos.factura')->render();
    			PDF::load($html);
    			PDF::setPaper([0,0,200,200], 'portrait');

    			return PDF::show();
    		break;
    	}
    }

    public function asignarPlanPagos(Request $request)
    {
    	$matricula = Matricula::find($request->input('id_matricula'));
    	$pagos = Pago::where(function($query) use ($matricula)
			    	{
			    		$query->where('aplica', $matricula->tipo)
			    			->orWhere('aplica', 'todos');
			    	})
    				->where(function($query) use ($matricula)
    				{
    					$query->where('cursos', 'LIKE', '%'.$matricula->grado.'%')
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
							'pagado' => 0,
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
							'pagado' => 0,
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
