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
	<h5 style="text-align: center;">
		<img style="max-width:50px; margin-top: 1px;" src="{{ public_path('/imagen/cole.jpg') }}"> <br><br>
		COLEGIO FINLANDES<br>
		Juan Pablo II
	</h5>
	<?php
		$factura = -1;
	?>

	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#aaa">
		<th width="65%"><small>Pago</small></th><th align="center"><small>$</small></th>
	</tr>
	@foreach($planes_de_pagos as $plan)
		<?php 
			if ($factura != $plan->factura)
			{
				$factura = $plan->factura;
				echo '<tr style="background-color:#ddd"><td colspan="2"><small>Fact. '.date('Ymd').$plan->factura.'</td></small></tr>';
			}
		 ?>
		 <tr>
		 	<td><small>{{ $plan->pago['descripcion'] }}</small></td><td align="right"><small>${{ number_format($plan->pagado, 0) }}</small></td>
		 </tr>
		 <br>
	@endforeach
	</table>
</body>
</html>