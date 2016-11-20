<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		@page {
			margin-top: 10px;
			margin-bottom: 0px;
			margin-left: 10px;
			margin-right: 10px;
		}
	</style>
</head>
<body>
	<table border-collapse="collapse" border="none" width="100%">
		<tr>
			<td width="50px">
				<img style="max-width:50px; margin-top: 1px;" src="{{ public_path('/imagen/cole.jpg') }}">
			</td>
			<td>
				COLEGIO FINLANDES<br>
				Juan Pablo II
			</td>
			<td align="right" valign="top">
				<small>{{ $factura->fecha_pago->toDateString() }}</small>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<br>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				Factura N°: {{ str_pad($factura->id, 6, '0', STR_PAD_LEFT) }} <br>
				Consignación: {{ $factura->consignacion }} <br>
				Revisado por: {{ $factura->user['name'] }} <br><br>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				Estudiante: {{ $factura->planesDePagos[0]->matricula->estudiante['pmer_nombre'].' '.$factura->planesDePagos[0]->matricula->estudiante['pmer_apellido'] }} <br>

				Grado: {{ $factura->planesDePagos[0]->matricula->grado()->first()->grado }}
			</td>
		</tr>
	</table>
	<?php
		$total = 0;
	?>

	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#aaa">
		<th width="85%"><small>Pago</small></th><th align="center"><small>Total</small></th>
	</tr>
	<?php
        $total_item = 0;
        $total = 0;
    ?>
	@foreach($factura->planesDePagos as $pago)
		<?php
			$total_item = $factura->fecha_pago->gt($pago->fecha_limite) ? $pago->pago['recargo'] + $pago->pago['costo'] : $pago->pago['costo'];
            $total += $total_item;
        ?>
		
		 <tr>
		 	<td><small>{{ $pago->pago['descipcion'] }}</small></td><td align="right"><small>$ {{ number_format($total_item, 0, '', '.') }}</small></td>
		 </tr>
		 <br>
	@endforeach
	<tr style="background-color:#aaa">
		<td><small><b>Total:</b></small></td><td align="right"><small><b>$ {{ number_format($total, 0, '', '.') }}</b></small></td>
	</tr>
	</table>
</body>
</html>