$(function()
{
var URL = $('#form_inscripcion').data('url');

	$('#form_menu1').on('submit', function(e){
				$.post(
					URL+'/registro_estudiante',
					$(this).serialize(),
					function(data){
						
							if(data.status == 'error')
							{
								validador_errores(data.errors);
							} 
							else 
							{
								$('#form_menu1')[0].reset();
								 var menj='Ha registrado el pirmer formulario <strong>Datos del estudiante</strong>, por favor siga con el siguiente formulario.';
								 $('#mensaje').html(menj);
								$('#incripcion_creada').modal('show');
							}
					},
					'json'
				);
		e.preventDefault();
	});


var validador_errores = function(data)
	{
		$('#form_menu1 .form-group').removeClass('has-error');
		var selector = '';
		for (var error in data){
		    if (typeof data[error] !== 'function') {
		        switch(error)
		        {

		        	case 'tipoIdent_estudiante':
		        	case 'dptExp_estudiante':
		        	case 'mpioExp_estudiante':
		        	case 'dptNaci_estudiante':
		        	case 'mpioNaci_estudiante':
		        	case 'dptReci_estudiante':
		        	case 'mpioReci_estudiante':
		        	case 'mpioNaci_estudiante':
		        	case 'nvel_estudiante':
		        	case 'nvelEst_estudiante':
		        	case 'dcidad_estudiante':
		        	case 'situAcad_estudiante':
		        		selector = 'select';
		        	break;

		        	case 'repitente':
		        	case 'gnro_estudiante':
		        	case 'zna_estudiante':
		        		selector = 'radio';
		        	break;

		        	case 'numIdent_estudiante':
		        	case 'nom1_estudiante':
		        	case 'apll1_estudiante':
		        	case 'fchaNaci_estudiante':
		        	case 'nom_alumno':
		        	case 'numIdnt_alumno':
		        	case 'dirReci_estudiante':
		        	case 'brioReci_estudiante':
		        	case 'eps_estudiante':
		        	case 'tfono_estudiante':
		        	case 'ftorRh_estudiante':
		        		selector = 'input';
		        	break;
		        }
		        $('#form_menu1 '+selector+'[name="'+error+'"]').closest('.form-group').addClass('has-error');
		    }
		}
	}



	$('#form_menu2').on('submit', function(e){
				$.post(
					URL+'/registro_acudiente',
					$(this).serialize(),
					function(data){
						
							if(data.status == 'error')
							{
								validador_errores_menu2(data.errors);
							} 
							else 
							{
								$('#form_menu2')[0].reset();
								 var menj='Ha registrado el segundo formulario <strong>Datos del acudiente</strong>, por favor siga con el siguiente formulario.';
								 $('#mensaje').html(menj);
								$('#incripcion_creada').modal('show');
							}
					},
					'json'
				);
		e.preventDefault();
	});


var validador_errores_menu2 = function(data)
	{
		$('#form_menu2 .form-group').removeClass('has-error');
		var selector = '';
		for (var error in data){
		    if (typeof data[error] !== 'function') {
		        switch(error)
		        {

		        	case 'ptesco_acudi':
		        		selector = 'select';
		        	break;

		        	case 'cedu_acudi':
		        	case 'pmerNom_acudi':
		        	case 'pmerApell_acudi':
		        	case 'tfono_acudi':
		        	case 'celu_acudi':
		        		selector = 'input';
		        	break;

		        }
		        $('#form_menu2 '+selector+'[name="'+error+'"]').closest('.form-group').addClass('has-error');
		    }
		}
	}




	$('#form_menu3').on('submit', function(e){
				
				$.post(
					URL+'/registro_academico',
					$(this).serialize(),
					function(data){
						  console.log(data);
							/*if(data.status == 'error')
							{
								validador_errores_menu2(data.errors);
							} 
							else 
							{
								$('#form_menu2')[0].reset();
								 var menj='Ha registrado el segundo formulario <strong>Datos del acudiente</strong>, por favor siga con el siguiente formulario.';
								 $('#mensaje').html(menj);
								$('#incripcion_creada').modal('show');
							}*/
					},
					'json'
				);
		e.preventDefault();
	});

	



});


