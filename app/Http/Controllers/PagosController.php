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
                $ultimo_pago = PlanDePago::where('estado', '=', '1')->orderBy('id', 'desc')->first();
                $factura = 0;
                if ($ultimo_pago)
                    $factura = $ultimo_pago->factura;

                $factura++;

    			$planes_de_pagos = PlanDePago::with('pago')->whereIn('id', $request->input('pago'))->get();

    			foreach ($planes_de_pagos as $pago) 
    			{
    				$pago->estado = !$pago->estado;
    				$pago->factura = $factura;

    				if($pago->estado)
                    {
    					$pago->pagado = $fecha_pago->gt($pago->fecha_limite) ? $pago->pago['recargo'] + $pago->pago['costo'] : $pago->pago['costo'];
                    } else {
    					$pago->pagado = 0;
                        $pago->anulado = 1;
                    }

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

    public function asignarPlanPagos(Request $request,$id)
    {
    	$matricula = Matricula::find($id);
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

    public function consolidado(){
        return view('consolidado');
    }

    public function listadoConsolidado(Request $request){
        $tabla="<table id='Tabla_Consolidado'>
                    <thead>
                        <tr>
                            <th>Género / Edad</b></th>
                            <th>5 a 6</th>

                           
                        </tr>
                    </thead>
                        <tbody>
                        ";
                        //consulta

        $tabla=$tabla."<tr>
                                <td><font color='#0B0B61'><b>TOTAL EDAD</td>
                                <td></td>
 
                                </tr>
                                </tbody>
                                </table>";
        return  $tabla;
    }

}
