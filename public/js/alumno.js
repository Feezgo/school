$(function()
{
var URL = $('#manu_alumno').data('url');

	$('#registroPin').on('submit', function(e){
		
				$.post(
					URL+'/registroPin',
					$(this).serialize(),
					function(data){
						
							if(data.status == 'error')
							{
								validador_errores(data.errors);
							} 
							else 
							{
								$('#registroPin')[0].reset();
								 var menj=' <table class="table table-bordered"><thead><tr><th>Alumno</th><th>Usuario</th><th>Contraseña</th></tr></thead> <tbody><tr><td>'+data.nombre_alumno+'</td><td>'+data.num_identidad_alumno+'</td><td>'+data.pin+'</td></tr></tbody></table>';
								 $('#mensaje').html(menj);
								$('#actividad_creada').modal('show');
							}
					},
					'json'
				);

	

		e.preventDefault();
	});


var validador_errores = function(data)
	{
		$('#registroPin .form-group').removeClass('has-error');
		var selector = '';
		for (var error in data){
		    if (typeof data[error] !== 'function') {
		        switch(error)
		        {

		        	case 'grdo_aspira':
		        		selector = 'select';
		        	break;

		        	case 'tipo_estudiante':
		        		selector = 'select';
		        	break;

		        	case 'nom_acudiente':
		        	case 'nom_alumno':
		        	case 'numIdnt_alumno':
		        	case 'email_acudiente':
		        		selector = 'input';
		        	break;
		        }
		        $('#registroPin '+selector+'[name="'+error+'"]').closest('.form-group').addClass('has-error');
		    }
		}
	}

	



});




