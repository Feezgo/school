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
				<small>{{ date('Y/m/d') }}</small>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<br>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				Estudiante: {{ $planes_de_pagos[0]->matricula->estudiante['pmer_nombre'].' '.$planes_de_pagos[0]->matricula->estudiante['pmer_apellido'] }}
			</td>
		</tr>
	</table>
	<?php
		$factura = -1;
		$total = 0;
	?>

	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#aaa">
		<th width="85%"><small>Pago</small></th><th align="center"><small>$</small></th>
	</tr>
	@foreach($planes_de_pagos as $plan)
		<?php 
			if ($factura != $plan->factura)
			{
				$factura = $plan->factura;
				echo '<tr style="background-color:#ddd"><td colspan="2"><small>Fact. '.str_pad($plan->factura, 8, '0', STR_PAD_LEFT).'</td></small></tr>';
			}
			$total += $plan->pagado;
		 ?>
		 <tr>
		 	<td><small>{{ $plan->pago['descripcion'].' '.substr($plan->fecha_pago, 0, 10) }}</small></td><td align="right"><small>${{ number_format($plan->pagado, 0) }}</small></td>
		 </tr>
		 <br>
	@endforeach
	<tr style="background-color:#aaa">
		<td><small><b>Total:</b></small></td><td align="right"><small><b>${{ number_format($total, 0) }}</b></small></td>
	</tr>
	</table>
</body>
</html>