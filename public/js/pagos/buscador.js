$(function(e)
{
	$('input[name="fecha_pago"]').datepicker({dateFormat : 'yy-mm-dd'});

	$('#buscar').on('click', function(e)
	{
		var key = $('input[name="documento"]').val();
		$(this).prop('href', $(this).prop('href')+'/'+key);
	});
});