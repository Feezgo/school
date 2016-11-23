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
			margin-top: 20px;
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
				<small>Pag. 1 {{ date('Y/m/d') }}</small>
			</td>
		</tr>
		<tr>
			<td colspan="3">
			</td>
		</tr>
		
	</table>

	<table border-collapse="collapse" border="none" width="100%">
		<tr >
			<th colspan="3" align="center"><big>CONTRATO DE MATRICULA</big></th>
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
		<tr >
			<th colspan="3" align="center"><label><font size=1>En armonía con lo sagrado en la constitución Política, la ley 115de 1994, decreto 1860, ley 715 de 2001, el PEI institucional, el Código de la infancia y  Adolescencia y demás normas y disposiciones en materia de educación.</font></label></th>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
		<tr>
			<th><hr></th>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<th>COMO ESTUDIANTE  Y PADRE DE FAMILIA y/o ACUDIENTE ME COMPROMETO ANTE LAS DIRECTIVAS DEL COLEGIO FINLANDES JUAN PABLO II A:</th>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			Entre los suscritos a saber el Señor Rector Licenciado ALEJANDRO HERNANDEZ RIOS con C.C. No.1.073.155.116 de Madrid, en nombre del COLEGIO FINLANDES JUAN PABLO II, quién en adelante se llamará EL COLEGIO Y EL PADRE DE FAMILIA O ACUDIENTE DELEGADO: <b style="text-decoration: underline;">{{strtoupper($estudiante['relations']['familiar'][2]['attributes']['pmer_apellido'].' '.$estudiante['relations']['familiar'][2]['attributes']['sndo_apellido'].' '.$estudiante['relations']['familiar'][2]['attributes']['pmer_nombre'].' '.$estudiante['relations']['familiar'][2]['attributes']['sndo_nombres'])}}</b>
			obrando en su nombre y en su condición de Padre de familia o acudiente delegado del EDUCANDO: <b style="text-decoration: underline;">{{strtoupper($estudiante['pmer_apellido'].' '.$estudiante['sndo_apellido'].' '.$estudiante['pmer_nombre'].' '.$estudiante['sndo_nombres'])}}</b>      GRADO  <b style="text-decoration: underline;">{{strtoupper($matricula['relations']['grado']['attributes']['grado'])}} </b> quien en lo sucesivo se denominará PADRE DE FAMILIA O ACUDIENTE DELEGADO, hemos celebrado un Contrato que se regirá por las siguientes cláusulas:
			</td>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">PRIMERA: - DEFINICIÓN DEL CONTRATO </b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			El presente contrato formaliza la vinculación del EDUCANDO al servicio educativo que ofrece EL COLEGIO FINLANDES JUAN PABLO II en los términos del artículo 95 de la Ley 115 de 1994 y, compromete a las partes y al educando en las obligaciones legales y pedagógicas tendiente a hacer efectiva la prestación del servicio educativo, obligaciones que son correlativas y esenciales para la consecución del objeto y de los fines comunes ya que el derecho a la educación se considera un derecho - deber.
			</td>
		</tr>

		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">SEGUNDA:  - OBJETO DEL CONTRATO </b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			El objeto del presente Contrato es, procurar la formación integral del EDUCANDO mediante la recíproca complementación de esfuerzos del mismo, de los PADRES DE FAMILIA O ACUDIENTE DELEGADO y del COLEGIO FINLANDES JUAN PABLO II en la búsqueda del pleno desarrollo de la personalidad del EDUCANDO y de un rendimiento académico satisfactorio en el ejercicio del programa curricular correspondiente al grado matriculado, mediante el Proyecto Educativo Institucional del COLEGIO FINLANDES JUAN PABLO II.
			</td>
		</tr>

		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">TERCERO:  - OBLIGACIONES ESENCIALES DEL CONTRATO </b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			Son obligaciones de la esencia del presente Contrato para cumplir con el fin común de la educación del EDUCANDO, las siguientes:
			<ol type="A">
			<li> Por parte del mismo, asistir al COLEGIO FINLANDES JUAN PABLO II y cumplir las pautas definidas establecidas en el Proyecto Educativo Institucional; y en su Manual de Convivencia.</li>
			<li> Por parte de los padres, pagar oportunamente el costo del servicio educativo e integrarse cumplida y solidariamente al COLEGIO FINLANDES JUAN PABLO II para formación del EDUCANDO; y</li>
			<li> Por parte del COLEGIO FINLANDES JUAN PABLO II, impartir la enseñanza contratada y propiciar la mejor calidad y la continuidad del servicio.</li>
			</ol>
			</td>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">CUARTA:  - DERECHOS Y OBLIGACIONES DE LOS PADRES DE  FAMILIA O ACUDIENTE DELEGADO</b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			En cumplimiento de las normas vigentes para el servicio educativo y en concordancia con el objeto del presente Contrato, los PADRES DE FAMILIA O ACUDIENTE DELEGADO tienen los siguientes derechos:
			<ol type="A">
			<li> A exigir la regular prestación del servicio educativo,</li>
			<li> A exigir que el servicio educativo se ajuste a los programas académicos;</li>
			<li> A exigir el cumplimiento del Proyecto Educativo Institucional;</li>
			<li> A participar en el proceso educativo y</li>
			<li> A buscar y recibir orientación sobre la educación de su hijo o acudido.</li>
			</ol>
			</td>
		</tr>
	</table>
	<br><br><br><br><br><br><br><br><br>
	<table border-collapse="collapse" border="none" width="100%" >
		<tr>
			<td width="50px">
				
			</td>
			<td>
				
			</td>
			<td align="right" valign="top">
				<small>Pag. 2 {{ date('Y/m/d') }}</small>
			</td>
		</tr>
	</table>
	<table border-collapse="collapse" border="none" width="100%">
		
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			Así mismo los PADRES DE FAMILIA O ACUDIENTE DELEGADO se obligan:<br>
			
			<ol type="A">
			 <li> A pagar estricta y cumplidamente los costos del servicio educativo (pensiones) dentro de los primeros cinco (5) días de cada mes y en caso de mora cancelar los intereses al banco;</li>
			 <li> A proporcionar al EDUCANDO el ambiente adecuado para su desarrollo integral;</li>
			 <li> A velar por el progreso del EDUCANDO en todos los órdenes;</li>
			 <li> A cumplir estrictamente las citas y llamadas que hagan las Directivas del Plantel;</li>
			 <li>   A cumplir con los procesos de matrícula, lista de útiles, SEDIMO, CAFIAC, Agenda, olimpiadas deportivas, semana de evaluaciones, salidas pedagógicas, ceremonia de grado, clausura, rosario, día del colegio, semanas de recesos, tareas y todas las actividades que programe la institución.</li>
			 <li>   A cumplir el Proyecto Educativo Institucional y el Manual de Convivencia del COLEGIO FINLANDES JUAN PABLO II.</li>
			 </ol>

			</td>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">QUINTA:  - DERECHOS Y OBLIGACIONES DEL EDUCANDO </b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<br>
			En cumplimiento de las normas vigentes para el servicio educativo y en concordancia con el objetivo del presente, el EDUCANDO tiene los siguientes derechos:
			
			<ol type="A">
			<li> A recibir una educación integral acorde con los principios que inspiran el Proyecto Educativo Institucional;</li>
			<li> A ser valorado y respetado como persona;</li>
			<li> A participar en el desarrollo del servicio educativo a través de los proyectos y programas establecidos por el COLEGIO FINLANDES JUAN PABLO II.</li>
			<li> A recibir de Directivos y Educadores buen ejemplo, acompañamiento, estímulo y atención y a ser escuchados oportunamente; y</li>
			<li> A participar en las instancias establecidas en el Manual de Convivencia.</li>
			</ol>
			Así mismo, el EDUCANDO se compromete:<br>
			<ol type="A">
			<li> A cumplir, respetar y acatar el Manual de Convivencia del COLEGIO FINLANDES JUAN PABLO II y los principios que orientan el Proyecto Educativo Institucional; </li>
			<li> A respetar y valorar a todas las personas que constituyen la comunidad educativa;</li>
			<li> A enaltecer con sus actuaciones y expresiones el buen nombre del COLEGIO FINLANDES JUAN PABLO II; y</li>
			<li> A asistir puntual y respetuosamente a las clases y actividades que programa el COLEGIO FINLANDES JUAN PABLO II </li>
			<li> A participar de las salidas pedagógicas que realiza la Institución.</li>
			<li> Obligación del acudiente retirar el estudiante de la Institución con el sistema de carnet o pasaporte.</li>
			<li> A participar del ANIVERSARIO de la Institución con vestuario del estudiante  y entrada al evento.</li>
			<li> A participar de las OLIMPIADAS FINLANDESAS.</li>
			<li> A entregar la lista de útiles antes de empezar clases.</li>
			<li> A adquirir otros materiales que el docente crea necesario para el proceso educativo como libros, pilas, revistas, periódicos, etc.</li>
			</ol>

			</td>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">SEXTA:-DERECHOSY OBLIGACIONES DEL COLEGIO </b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<br>
			En cumplimiento de las normas vigentes para el servicio educativo y en concordancia con el objetivo del presente Contrato, el COLEGIO FINLANDES JUAN PABLO II tiene los siguientes derechos:
			</td>
		</tr>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<table border-collapse="collapse" border="none" width="100%" >
		<tr>
			<td width="50px">
				
			</td>
			<td>
				
			</td>
			<td align="right" valign="top">
				<small>Pag. 3 {{ date('Y/m/d') }}</small>
			</td>
		</tr>
	</table>
	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<ol type="A">
			<li> A exigir el cumplimiento del Manual de Convivencia del establecimiento por parte del EDUCANDO y de los deberes académicos que derivan del servicio;</li>
			<li> A exigir a los PADRES DE FAMILIA O ACUDIENTE DELEGADO el cumplimiento de sus obligaciones como responsables del EDUCANDO;</li>
			<li> A recuperar los costos incurridos en el servicio y a exigir y lograr el pago de los derechos correspondientes a Matrícula, Pensión y Otros Cobros, por todos los medios lícitos a su alcance; y</li>
			<li> A reservarse el derecho de no renovación de Matrícula según estipulaciones del Manual de Convivencia y por razones de comportamiento, rendimiento, incumplimiento en los pagos, o de capacidades que requieran tratamiento especial.</li>
			</ol>
			Así mismo el COLEGIO FINLANDES JUAN PABLO II se obliga:<br>
			<ol type="A">
			<li> A desarrollar los planes y programas establecidos mediante el Proyecto Educativo Institucional;</li>
			<li> A cumplir y exigir el cumplimiento del Manual de Convivencia del establecimiento; y</li>
			<li> A prestar en forma regular el servicio educativo contratado dentro de las prescripciones legales.</li>
			</ol>

			</td>
		</tr>
	</table>
	<br><br>
	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">SÉPTIMA:  - COSTO DEL CONTRATO </b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			El presente Contrato tiene un costo Anual de:
			</td>
		</tr>
	</table>
	<br>
	<table  style="border: 1px solid black; border-collapse: collapse;" width="100%">
		<tr style="height: 12px; font-size:11; border: 1px solid black; border-collapse: collapse; background-color:#E84916; font-color:#FFFFFF;" align="justify">
			<td style="border: 1px solid black; border-collapse: collapse;">
			<b>GRADO</b>
			</td>
			<td style="border: 1px solid black; border-collapse: collapse;">
			<b>COSTO ANUAL</b>
			</td>
			<td style="border: 1px solid black; border-collapse: collapse;">
			<b>COSTO MENSUAL(10)</b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11; border: 1px solid black;" align="justify">
			<td style="border: 1px solid black; border-collapse: collapse;"><br><br></td>
			<td style="border: 1px solid black; border-collapse: collapse;"></td>
			<td style="border: 1px solid black; border-collapse: collapse;"></td>
		</tr>
	</table>
	<br>
	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11; " align="justify">
			<td>
			Los cuáles serán cancelados por los PADRES DE FAMILIA O ACUDIENTE DELEGADO, así: 10 cuotas iguales que serán pagadas dentro de los CINCO (5) primeros días del mes, de febrero a noviembre.  El retardo en el pago de las pensiones causará intereses por mora, según lo establecido en los Artículo 1551 y 1608 del Código de Comercio, de acuerdo con las disposiciones legales vigentes, sin prejuicio del procedimiento establecido en el Manual de Convivencia.
			</td>
		</tr>
	</table>
	<br>
	<table  style="border: 1px solid black; border-collapse: collapse;" width="100%">
		<tr style="height: 12px; font-size:11; border: 1px solid black; border-collapse: collapse; background-color:#E84916;" align="justify">
			<td style="border: 1px solid black; border-collapse: collapse;">
			<b>DIAS EN EL MES</b>
			</td>
			<td style="border: 1px solid black; border-collapse: collapse;">
			<b>VALOR INTERESES</b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11; border: 1px solid black;" align="justify">
			<td style="border: 1px solid black; border-collapse: collapse;">1-5</td>
			<td style="border: 1px solid black; border-collapse: collapse;">0</td>
		</tr>
		<tr style="height: 12px; font-size:11; border: 1px solid black;" align="justify">
			<td style="border: 1px solid black; border-collapse: collapse;">6-10</td>
			<td style="border: 1px solid black; border-collapse: collapse;">$5000</td>
		</tr>
		<tr style="height: 12px; font-size:11; border: 1px solid black;" align="justify">
			<td style="border: 1px solid black; border-collapse: collapse;">11-16</td>
			<td style="border: 1px solid black; border-collapse: collapse;">$8000</td>
		</tr>
		<tr style="height: 12px; font-size:11; border: 1px solid black;" align="justify">
			<td style="border: 1px solid black; border-collapse: collapse;">17</td>
			<td style="border: 1px solid black; border-collapse: collapse;">Pérdida de beneficios administrativos</td>
		</tr>
	</table>
	<br>
	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11; " align="justify">
			<td>
			El costo anual se ajustará cada año según las reglamentaciones respectivas.
			</td>
		</tr>
	</table>
	<br>
	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">OCTAVA:  - CAUSALES DE TERMINACIÓN Y/O DE NO RENOVACIÓN DEL CONTRATO</b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			El presente Contrato terminará por una de las siguientes causas:
			
			<ol type="A">
			<li> Por expiración del término fijado o sea el año lectivo;</li>
			<li> Por mutuo consentimiento de las partes;</li>
			<li> Por suspensión de actividades del COLEGIO FINLANDES JUAN PABLO II por más de sesenta (60) días o por clausura definitiva del Establecimiento;</li>
			<li> Por incumplimiento de los deberes de estudiantes (académicos o disciplinarios) o acudientes</li>
			<li> Por retraso en el pago de pensiones por dos o más meses; y</li>
			<li> Por las causales determinadas en el Manual de Convivencia del Establecimiento.</li>
			</ol>

			</td>
		</tr>
	</table>
	
	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">NOVENA:  - PAGARE </b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			este contrato se encuentra en relación con el pagare  el cual se efectuara en caso de NO pago del acudiente delegado vía judicial.
			</td>
		</tr>
	</table>
	<br><br>
	<table border-collapse="collapse" border="none" width="100%" >
		<tr>
			<td width="50px">
				
			</td>
			<td>
				
			</td>
			<td align="right" valign="top">
				<small>Pag. 4 {{ date('Y/m/d') }}</small>
			</td>
		</tr>
	</table>

	<table border-collapse="collapse" border="none" width="100%">
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			<b style="text-decoration: underline;">DECIMA:  - DURACIÓN Y RENOVACIÓN </b>
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			El presente Contrato tiene vigencia de un año lectivo contado a partir del 2 de febrero del año 2017 hasta el 30 de noviembre del año 2017, su ejecución será sucesiva anual y podrá renovarse para el siguiente año, siempre y cuando el EDUCANDO y los PADRES hayan cumplido estrictamente las condiciones estipuladas en el presente Contrato y en el Manual de Convivencia del COLEGIO FINLANDES JUAN PABLO II.
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			El Proyecto Educativo Institucional y el Manual de Convivencia se integran al presente Contrato.
			</td>
		</tr>
		<tr style="height: 12px; font-size:11;" align="justify">
			<td>
			Para constancia se firma en Madrid a los <b style="text-decoration: underline;">{{date('d')}}</b> días del mes  <b style="text-decoration: underline;">{{date('m')}}</b> del año <b style="text-decoration: underline;">{{date('Y')}}</b>. 
			</td>
		</tr>
	</table>


	 <table border-collapse="collapse" border="none" width="100%" >
			<tr align="left">
				<td  width="50%">
					<br><br><br><hr>
				 	<label><FONT SIZE=2>Firma del Apoderado</FONT></label><br>
				 	<label><FONT SIZE=2>c.c.</FONT></label><br>
				</td>
				<td  width="50%">
					<br><br><br><hr>
				 	<label><FONT SIZE=2>Estudiante</FONT></label><br>
				 	<label><FONT SIZE=2>T.I. o R.C.</FONT></label><br>
				</td>
			</tr>
			<tr align="left">
				<td>
					<br><br><hr>
				 	<label><FONT SIZE=2>LIC. ALEJANDRO HERNANDEZ RIOS</FONT></label><br>
				 	<label><FONT SIZE=2>RECTOR</FONT></label><br>
				</td>
				<td>
					<br><br>
				</td>
			</tr>
		</table>

</body>
</html>