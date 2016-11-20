<?php

namespace School\Http\Controllers;

use Illuminate\Http\Request;
use School\App\Modelos\Pago;
use School\App\Modelos\PlanDePago;
use School\App\Modelos\Matricula;
use School\App\Modelos\Estudiante;
use School\App\Modelos\Factura;
use PDF;
use Auth;
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

        if($matricula)
        {
            $facturas = Factura::with(['planesDePagos' => function($query) use ($matricula)
                            {
                                $query->whereIn('planes_de_pagos.id', $matricula->planesDePagos()->pluck('id'));
                            }])
                            ->orderBy('id', 'desc')
                            ->take(20)
                            ->get();
        } else {
            $facturas = null;
        }

    	$data = [
    		'status' => session('status'),
    		'matricula' => $matricula,
            'facturas' => $facturas
    	];

    	return view('pagos.buscador')
    				->with($data);
    }

    public function gestionarPagos(Request $request)
    {
    	switch ($request->input('operacion')) {
    		case 'facturar':
    			$fecha_pago = Carbon::createFromFormat('Y-m-d', $request->input('fecha_pago'));
                $factura = new Factura;
                $factura->fecha_pago = $request->input('fecha_pago');
                $factura->consignacion = $request->input('consignacion');
                $factura->consignacion_foto = '';
                $factura->estado = 'efectuada';
                $factura->id_usuario = Auth::user()->getId();
                $factura->save();

                $factura->planesDePagos()->sync($request->input('pago'));

                $planes_de_pagos = PlanDePago::with('pago')->whereIn('id', $request->input('pago'))->get();

    			foreach ($planes_de_pagos as $pago) 
    			{
                    $pago->pagado = $fecha_pago->gt($pago->fecha_limite) ? $pago->pago['recargo'] + $pago->pago['costo'] : $pago->pago['costo'];
                    $pago->estado = 1;
    				$pago->save();
    			}

    			return redirect('pagos/buscar/'.$request->input('documento'))
    						->with(['status' => 'success']);
    		break;
    		case 'imprimir':
                $planes_de_pagos = PlanDePago::with('pago', 'matricula', 'matricula.estudiante')->whereIn('id', $request->input('pago'))->orderBy('factura', 'asc')->get();
                $html = view('pagos.factura')->with(['planes_de_pagos' => $planes_de_pagos])->render();

    			$pdf = PDF::load($html);

    			return $pdf->show();
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
    					$query->where('cursos', 'LIKE', '%'.$matricula->grado['grado'].'%')
							->orWhere('cursos', 'LIKE', '%todos%');
    				})
					->get();

		$plan_de_pagos = [];
		$fecha = Carbon::createFromFormat('Y-m-d', $matricula->ano.'-02-01');

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
