$(function(e)
{
	$('#buscar').on('click', function(e)
	{
		var key = $('input[name="documento"]').val();
		$(this).prop('href', $(this).prop('href')+'/'+key);
	});
});