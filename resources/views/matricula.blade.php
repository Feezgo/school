<?php
//dd($estudiante['relations']['departamento1'][0]['attributes']['departamento']);
//exit();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		@page {
			margin-top: 10px;
			margin-bottom: 0px;
			margin-left: 60px;
			margin-right: 20px;
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
				<small>Ref. {{$matricula['id']}} {{ date('Y/m/d') }}</small>
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

	

	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#D7DF01; height: 12px; font-size:8;" align="left">
		<th>HOJA DE MATRICULA</th>
	</tr>
	</table>


		<table border-collapse="collapse" border="none" width="100%">

			<tr align="left">
				<td>
				 	<label><FONT SIZE=2>N° Folio</FONT></label><br>
				    <input type="text" style="width: 150px; height: 12px; font-size:8;"  value="{{$matricula['id']}}">
				</td>
				<td>
					<label><FONT SIZE=2>N° Matricula</FONT></label><br>
				    <input type="text" style="width: 150px; height: 12px; font-size:8;"  value="{{$matricula['id'].'-'.$matricula['ano']}}">
				</td>
				<td>
				    <label><FONT SIZE=2>Fecha Matricula</label><br>
				    <input type="text" style="width: 150px; height: 12px; font-size:8;"  value=""><!--{{$matricula['fecha_matricula']}}-->
				</td>
				<td rowspan="3" align="left"><img style="max-width:77px; max-height:115px; margin-top: 1px; border: 2px" src="{{ public_path('/imagen/foto.jpg') }}"><br></td>
			</tr>
			<tr align="left">
				<td>
				 	<label> <FONT SIZE=2>Año Lectivo</FONT></label><br>
				    <input type="text" style="width: 150px; height: 12px; font-size:8;"  value="{{$matricula['ano']}}">
				</td>
				<td>
					<label><FONT SIZE=2>Sede</FONT></label><br>
				    <input type="text" style="width: 150px; height: 12px; font-size:8;"  value="{{$matricula['sede']}}">
				</td>
				<td>
				    <label><FONT SIZE=2>Jornada</FONT></label><br>
				    <input type="text" style="width: 150px; height: 12px; font-size:8;"  value="{{$matricula['jornada']}}">
				</td>
				<td></td>
			</tr>
			<tr align="left">
				<td>
				 	<label> <FONT SIZE=2>Estudiante</FONT></label><br>
				    <input type="text" style="width: 150px; height: 12px; font-size:8;"  value="{{$matricula['tipo']}}">
				</td>
				<td>
					<label><FONT SIZE=2>Ingresa al grado</FONT></label><br>
				    <input type="text" style="width: 150px; height: 12px; font-size:8;"  value="{{$matricula['relations']['grado']['attributes']['grado']}}">
				</td>
				<td>
				    <label><FONT SIZE=2>Repitente</FONT></label><br>
				    <input type="text" style="width: 150px; height: 12px; font-size:8;"  value="{{$matricula['repitente']}}">
				</td>
				<td></td>
			</tr>

		</table>


	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#D7DF01; height: 12px; font-size:8;" align="left">
		<th>DATOS DEL ESTUDIANTE</th>
	</tr>
	</table>

		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td >
				 	<label><FONT SIZE=2>1° Apellido</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['pmer_apellido']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>2° Apellido</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['sndo_apellido']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>1° Nombre</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['pmer_nombre']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>2° Nombre</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['sndo_nombres']}}"/>
				</td>
			</tr>
		</table>

		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td >
				 	<label><FONT SIZE=2>Tipo de documento</FONT></label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:6;"  value="{{$estudiante['tipo_documento']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>Número de documento</FONT></label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:8;" value="{{$estudiante['documento']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Fecha de nacimiento</label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:8;" value="{{$estudiante['fecha_nacimiento']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Lugar de nacimiento</label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:8;" value="{{$estudiante['relations']['departamento1'][0]['attributes']['departamento'].' / '.$estudiante['relations']['municipio1'][0]['attributes']['municipio']}}"/>
				</td>
				<?php

					function edad($fecha){
					    $fecha = str_replace("/","-",$fecha);
					    $fecha = date('Y/m/d',strtotime($fecha));
					    $hoy = date('Y/m/d');
					    $edad = $hoy - $fecha;
					    return $edad;
					}	 
				?>
				<td>
				    <label><FONT SIZE=2>Edad</label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:8;" value="<?php echo "".edad($estudiante['fecha_nacimiento'])."" ?>"/>
				</td>
			</tr>
		</table>

		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td >
				 	<label><FONT SIZE=2>Dirección de residencia</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['direccion']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>Barrio de residencia</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['brio_recidencia']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Estrato</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['estrato']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Teléfono</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['telefono']}}"/>
				</td>
			</tr>
		</table>

		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td >
				 	<label><FONT SIZE=2>Factor RH</FONT></label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:8;"  value="{{$estudiante['rh']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>E.P.S</FONT></label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:8;" value="{{$estudiante['eps']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Nivel Sisben</label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:8;" value="{{$estudiante['nivel_sisben']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Discapacidad</label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:6;" value="{{$estudiante['relations']['discapacidad'][0]['attributes']['discapacidad']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Situación</label><br>
				    <input type="text"  style="width: 110px; height: 12px; font-size:6;" value="{{$estudiante['relations']['situacion'][0]['attributes']['situacion']}}"/>
				</td>
			</tr>
		</table>


	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#D7DF01;height: 12px; font-size:8;" align="left">
		<th>DATOS FAMILIARES</th>
	</tr>
	</table>


	    <table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td >
				 	<label><FONT SIZE=2>1° Apellido Madre</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['familiar'][0]['attributes']['pmer_apellido']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>2° Apellido Madre</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][0]['attributes']['sndo_apellido']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>1° Nombre Madre</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][0]['attributes']['pmer_nombre']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>2° Nombre Madre</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][0]['attributes']['sndo_nombres']}}"/>
				</td>
			</tr>
		</table>


		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td >
				 	<label><FONT SIZE=2>Ocupación</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['familiar'][0]['attributes']['ocupacion']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>Empresa</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][0]['attributes']['empresa']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Teléfono</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][0]['attributes']['telefono']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Celular</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][0]['attributes']['celular']}}"/>
				</td>
			</tr>
		</table>


		 <table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td >
				 	<label><FONT SIZE=2>1° Apellido Padre</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['familiar'][1]['attributes']['pmer_apellido']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>2° Apellido Padre</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][1]['attributes']['sndo_apellido']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>1° Nombre Padre</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][1]['attributes']['pmer_nombre']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>2° Nombre Padre</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][1]['attributes']['sndo_nombres']}}"/>
				</td>
			</tr>
		</table>


		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td >
				 	<label><FONT SIZE=2>Ocupación</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['familiar'][1]['attributes']['ocupacion']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>Empresa</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][1]['attributes']['empresa']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Teléfono</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][1]['attributes']['telefono']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>Celular</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][1]['attributes']['celular']}}"/>
				</td>
			</tr>
		</table>



	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#D7DF01; height: 12px; font-size:8;" align="left">
		<th>ACUDIENTE</th>
	</tr>
	</table>


	    <table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td >
				 	<label><FONT SIZE=2>1° Apellido Acudiente</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['familiar'][2]['attributes']['pmer_apellido']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>2° Apellido Acudiente</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][2]['attributes']['sndo_apellido']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>1° Nombre Acudiente</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][2]['attributes']['pmer_nombre']}}"/>
				</td>
				<td>
				    <label><FONT SIZE=2>2° Nombre Acudiente</label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][2]['attributes']['sndo_nombres']}}"/>
				</td>
			</tr>
		</table>

		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td>
				 	<label><FONT SIZE=2>Parentesco</FONT></label><br>
				    <input type="text"  style="width: 345px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['familiar'][2]['attributes']['parentesco']}}" />
				</td>
				<td>
					<label><FONT SIZE=2>Teléfono</FONT></label><br>
				    <input type="text"  style="width: 345px; height: 12px; font-size:8;" value="{{$estudiante['relations']['familiar'][2]['attributes']['telefono'].' / '.$estudiante['relations']['familiar'][2]['attributes']['celular']}}"/>
				</td>
			</tr>
		</table>


	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#D7DF01; height: 12px; font-size:8;" align="left">
		<th>LEGALIZACIÓN DE LA MATRÍCULA</th>
	</tr>
	</table>


	    <table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td>
					<br><br><br><hr>
				 	<label><FONT SIZE=2>Firma del padre o acudiente</FONT></label><br>
				 	<label><FONT SIZE=2>c.c.</FONT></label><br>
				</td>
				<td>
					<br><br><br><hr>
				 	<label><FONT SIZE=2>Firma del padre o acudiente</FONT></label><br>
				 	<label><FONT SIZE=2>c.c.</FONT></label><br>
				</td>
			</tr>
			<tr align="left">
				<td>
					<br><br><hr>
				 	<label><FONT SIZE=2>Firma del rector</FONT></label><br>
				 	<label><FONT SIZE=2>c.c.</FONT></label><br>
				</td>
				<td>
					<br><br><hr>
				 	<label><FONT SIZE=2>Firma del secretario</FONT></label><br>
				 	<label><FONT SIZE=2>c.c.</FONT></label><br>
				</td>
			</tr>
		</table>

	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#F2F2F2; height: 12px; font-size:8;" align="center">
		<th>ACEPTAMOS EL PROYECTO EDUCATIVO INSTITUCIONAL (P.E.I) Y NOS COMPROMETEMOS A CUMPLIR CON EL MANUAL DE CONVIVENCIA Y DEMAS PLANES, PROGRAMAS, NORMAS Y DISPOSICIONES DEL COLEGIO.</th>
	</tr>
	</table>


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
				<small>Ref. {{$matricula['id']}} {{ date('Y/m/d') }}</small>
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


	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#D7DF01; height: 12px; font-size:8;" align="left">
		<th>PROCEDENCIA ACADÉMICA</th>
	</tr>
	</table>


	    <table border-collapse="collapse" border="none" width="100%" >
	    	<tr align="left">
	    		<th >
				 	<label><FONT SIZE=2>Año</FONT></label><br>
				</th>
				<th>
					<label><FONT SIZE=2>Grado</FONT></label><br>
				</th>
				<th>
				    <label><FONT SIZE=2>Institución Educativa</label><br>
				</th>
				<th>
				    <label><FONT SIZE=2>Publica o Privada</label><br>
				</th>	    		
	    	</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][0]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][0]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][0]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][0]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][1]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][1]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][1]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][1]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][2]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][2]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][2]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][2]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][3]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][3]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][3]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][3]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][4]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][4]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][4]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][4]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][5]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][5]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][5]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][5]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][6]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][6]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][6]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][6]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][7]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][7]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][7]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][7]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][8]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][8]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][8]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][8]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][9]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][9]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][9]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][9]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][10]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][10]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][10]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][10]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][11]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][11]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][11]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][11]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][12]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][12]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][12]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][12]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>

			<tr align="left">
				<td >
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;"  value="{{$estudiante['relations']['historiasAcademicas'][13]['attributes']['ano']}}" />
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$estudiante['relations']['historiasAcademicas'][13]['attributes']['grado']}}"/>
				</td>
				<td>
				    <input type="text"  style="width: 150px; height: 12px; font-size:6;" value="{{$estudiante['relations']['historiasAcademicas'][13]['attributes']['institucion']}}"/>
				</td>
				<td>
				<?php if($estudiante['relations']['historiasAcademicas'][13]['attributes']['caracter']=="P"){$Caracte="Publico";}else{$Caracte="Privado";} ?>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value="{{$Caracte}}"/>
				</td>
			</tr>
		</table>


	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#D7DF01; height: 12px; font-size:8;" align="left">
		<th>OBSERVACIONES</th>
	</tr>
	</table>

		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td>
					<br>
					<textarea class="form-control" rows="12"></textarea>
				</td>
			</tr>
		</table>


	<table border-collapse="collapse" border="none" width="100%">
	<tr style="background-color:#D7DF01; height: 12px; font-size:8;" align="left">
		<th>RETIRO</th>
	</tr>
	</table>

		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td>
					<label><FONT SIZE=2>Fecha de retiro</FONT></label><br>
				    <input type="text"  style="width: 150px; height: 12px; font-size:8;" value=""/>
				</td>
			</tr>
		</table>

		<table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td>
					<label><FONT SIZE=2>Motivo del retiro</FONT></label><br>
				    <textarea class="form-control" rows="3"></textarea>
				</td>
			</tr>
		</table>


</body>
</html>