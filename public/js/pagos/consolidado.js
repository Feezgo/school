$(function() {
	var URL2 = $('#form_consolidado').data('url');

	$("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd'
    });
    $("#datepicker2").datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'yy-mm-dd'
    });



    $('#consolidado_form').on('submit', function(e){
				
				$.post(
                    URL2+'/listadoConsolidado',
                    $(this).serialize(),
                    function(data){
                        $('#contenido_consolidado').html(data);
                        $('#Tabla_Consolidado').DataTable({
					        dom: 'Bfrtip',
					        buttons: [
					            'copyHtml5',
					            'excelHtml5',
					            'csvHtml5',
					            'pdfHtml5'
					        ]
					    });
                    }
                );

        e.preventDefault();
	});


     $('#example').DataTable( {responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf']
     });
});