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
				
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<br>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				Factura N°:  {{$id_fact}} <br>
				Revisado por: {{ Auth::user()->name }} <br><br>
			</td>
		</tr>
		<tr>
			<td colspan="3">
				Estudiante: {{$data0[0]->nombre_est }} <br>
				Grado: {{$data0[0]->grado_est }} <br>
			</td>
		</tr>
		
	</table>
	<?php
		$total = 0;
	?>

	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#aaa">
		<th width="5%"><small>N°</small></th>
		<th width="30%"><small>Concepto</small></th>
		<th width="25%"><small>Fecha Cooperativa<br>O Mes pago</small></th>
		<th width="25%"><small>Nota</small></th>
		<th align="center"><small>Valor</small></th>
	</tr>
	<?php
        $total_item = 0;
        $total = 0;
        $var=1;
    ?>

    @foreach($data0 as $pago)	
    		
    		<?php $total =$total + $pago->valro_conc ?>
		 <tr>
		 	<td><small>{{ $var }}</small></td>
		 	<td align="left"><small>{{ $pago->nombre_concep }}</small></td>
		 	<td align="left"><small>{{$pago->mes}} {{$pago->fecha_inicio}} {{$pago->fecha_fin}}</small></td>
		 	<td align="left"><small>{{ $pago->nota }}</small></td>
		 	<td align="right"><small>{{ number_format($pago->valro_conc, 0) }}</small></td>
		 </tr>
		 <br>
		 <?php $var++;?>
	@endforeach
	
	<tr style="background-color:#aaa">
		<td><small><b>Total:</b></small></td>
		<td align="right"><small><b></b></small></td>
		<td align="right"><small><b></b></small></td>
		<td align="right"><small><b></b></small></td>
		<td align="right"><small><b></b></small>{{number_format($total, 0)}}</td>
	</tr>
	</table>
</body>
</html>