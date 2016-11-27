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

                        t.clear().draw();
                        var num=0;
                        $.each(data, function(i, e){
                            console.log(e.planesDePagos);
                            var str = "" + e['id'];
                            var pad = "00000";
                            var ans = pad.substring(0, pad.length - str.length) + str;
                            t.row.add( [
                                '<th scope="row" class="text-center">'+ans+'</th>',
                                '<td><h4>'+e['created_at']+'<h4></td>',
                                '<td>'+e['created_at']+'</td>',
                                '<td>'+e['id_usuario']+'</td>',
                                '<td>'+e['consignacion']+'</td>',
                                '<td>'+e['estado']+'</td>',
                                '<td>'+e['fecha_pago']+'</td>',
                                '<td>'+e['consignacion']+'</td>',
                            ] ).draw( false );
                            num++;
                        });
                    }
                );

        e.preventDefault();
	});


     var t = $('#example').DataTable( {responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf']
     });
});