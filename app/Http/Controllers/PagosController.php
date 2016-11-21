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
            $facturas = Factura::with('planesDePagos')->whereHas('planesDePagos', function($query) use ($matricula)
                            {
                                $query->whereIn('planes_de_pagos.id', $matricula->planesDePagos()->pluck('id'));
                            })
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
    	}
    }

    public function anularPago(Request $request, $documento, $id)
    {
        $factura = Factura::with('planesDePagos')->find($id);
        $factura->estado = 'anulada';
        $factura->save();

        foreach ($factura->planesDePagos as $pago) 
        {
            $pago->estado = 0;
            $pago->save();
        }

        return redirect('pagos/buscar/'.$documento)
                            ->with(['status' => 'success']);
    }

    public function imprimir(Request $request, $id)
    {
        $factura = Factura::with('planesDePagos', 'planesDePagos.pago', 'planesDePagos.matricula', 'planesDePagos.matricula.grado', 'planesDePagos.matricula.estudiante')->find($id);
        $html = view('pagos.factura')->with(['factura' => $factura])->render();

        $pdf = PDF::load($html);
        $pdf->setPaper([0,0,595,421], 'portrait'); 
        return $pdf->show(); 
    }

    public function asignarPlanPagos(Request $request, $id)
    {
    	$matricula = Matricula::find($id);
    	$pagos = Pago::where(function($query) use ($matricula)
			    	{
			    		$query->where('aplica', $matricula->tipo)
			    			->orWhere('aplica', 'todos');
			    	})
    				->where(function($query) use ($matricula)
    				{
    					$query->where('cursos', 'LIKE', '%|'.$matricula->grado()->first()->grado.'%')
							->orWhere('cursos', 'LIKE', '%|todos%');
    				})
					->get();

		$plan_de_pagos = [];
		$fecha = Carbon::createFromFormat('Y-m-d', $matricula->ano.'-02-01');

		foreach ($pagos as $pago) 
		{
			switch ($pago->concepto) {
                case 'matricula':
				case 'otro':
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
