$(function()
{
var URL = $('#manu_alumno').data('url');

	$('#form_login_pin').on('submit', function(e){
		
				$.post(
					URL+'/validacionPin',
					$(this).serialize(),
					function(data){
						
							if(data.status == 'error')
							{
								validador_errores(data.errors);
							} 
							else 
							{
								if(data.status == 'invalido')
								{
									alert("vacio");
								}
								else
								{
									$('#identidad').val(data[0].num_identidad_alumno);
									$('#f').submit();
								}

							}
					},
					'json'
				);

		e.preventDefault();
	});



	var validador_errores = function(data)
	{
		$('#form_login_pin .form-group').removeClass('has-error');
		var selector = '';
		for (var error in data){
		    if (typeof data[error] !== 'function') {
		        switch(error)
		        {

		        	case 'num_identidad':
		        	case 'pin':
		        		selector = 'input';
		        	break;

		        }
		        $('#form_login_pin '+selector+'[name="'+error+'"]').closest('.form-group').addClass('has-error');
		    }
		}
	}



});
