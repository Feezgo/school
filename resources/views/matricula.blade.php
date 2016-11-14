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
	<table border-collapse="collapse" border="none" width="100%" >
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
			</td>
		</tr>
		
	</table>

	<table border-collapse="collapse" border="none" width="100%">
	<tr >
		<th colspan="3" align="center"><big>TARJETA DE MATRICULA</big></th>
	</tr>
	<tr>
			<th align="left" >
				<small>007643 Sec. Edu. Cund.</small>
			</th>
			<th align="center" >
				<small>Madrid Cund.</small>
			</th>
			<th align="right" >
				<small>Educación Finlandesa</small>
			</th>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
	<tr>
		<th><hr></th>
	</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%" >
		<tr>
			<td align="center" >
				<img style="max-width:77px; max-height:115px; margin-top: 1px; border: 2px" src="{{ public_path('/imagen/foto.jpg') }}"><br>
			</td>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#D7DF01" align="left">
		<th>Hoja de matricula</th>
	</tr>
	</table>


		<table border-collapse="collapse" border="none" width="100%">

			<tr align="left">
				<th>
				 	<label><FONT SIZE=2>N° Folio</FONT></label><br>
				    <input type="text"   value="{{$matricula['folio']}}">
				</th>
				<th>
					<label><FONT SIZE=2>N° Matricula</FONT></label><br>
				    <input type="text"   value="{{$matricula['id']}}">
				</th>
				<th>
				    <label><FONT SIZE=2>Fecha Matricula</label><br>
				    <input type="text"   value="{{$matricula['fecha_matricula']}}">
				</th>
			</tr>
			<tr align="left">
				<th>
				 	<label> <FONT SIZE=2>N° Folio</FONT></label><br>
				    <input type="text"   value="{{$matricula['id_estudiante']}}">
				</th>
				<th>
					<label><FONT SIZE=2>N° Matricula</FONT></label><br>
				    <input type="text"   value="{{$matricula['id_estudiante']}}">
				</th>
				<th>
				    <label><FONT SIZE=2>Fecha Matricula</FONT></label><br>
				    <input type="text"   value="{{$matricula['id_estudiante']}}">
				</th>
			</tr>

		</table>


</body>
</html>