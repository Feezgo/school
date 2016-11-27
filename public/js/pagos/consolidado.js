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
                        var total=0;
                        $.each(data, function(i, e){
                           //console.log(e);
                            $.each(e.planes_de_pagos, function(i, ee){
                                //console.log(ee.matricula.estudiante['sndo_apellido']);
                                var str = "" + e['id'];
                                var pad = "00000";
                                var ans = pad.substring(0, pad.length - str.length) + str;
                                t.row.add( [
                                    '<th scope="row" class="text-center">'+ans+'</th>',
                                    '<td><h4>'+ee.matricula.estudiante['pmer_apellido']+' '+ee.matricula.estudiante['sndo_apellido']+' '+ee.matricula.estudiante['pmer_nombre']+' '+ee.matricula.estudiante['sndo_nombres']+'<br>'+ee.matricula.estudiante['documento']+'<h4></td>',
                                    '<td>'+e['created_at']+'</td>',
                                    '<td>'+e.user['name']+'</td>',
                                    '<td>'+currency(ee['pagado'],0)+' <br>Concepto:<br>'+' '+ee.pago['descipcion']+'</td>',
                                    '<td>'+e['estado']+'<br>'+e['fecha_pago']+'<br>'+e['consignacion']+'</td>',
                                ] ).draw( false );
                                num++;
                                if(e['estado']=='efectuada')
                                total=total+ee['pagado'];
                            });
                        });
                        $('#valorT').html("<h2>$"+currency(total,0)+"</h2>");
                    }
                );

        e.preventDefault();
	});


     var t = $('#example').DataTable( {responsive: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf']
     });

    /*  t.on( 'search.dt', function () {
        $('#valorT').html( 'Currently applied global search: '+t.search() );
    } );*/

    function currency(value, decimals, separators) {
        decimals = decimals >= 0 ? parseInt(decimals, 0) : 2;
        separators = separators || ['.', "'", ','];
        var number = (parseFloat(value) || 0).toFixed(decimals);
        if (number.length <= (4 + decimals))
            return number.replace('.', separators[separators.length - 1]);
        var parts = number.split(/[-.]/);
        value = parts[parts.length > 1 ? parts.length - 2 : 0];
        var result = value.substr(value.length - 3, 3) + (parts.length > 1 ?
            separators[separators.length - 1] + parts[parts.length - 1] : '');
        var start = value.length - 6;
        var idx = 0;
        while (start > -3) {
            result = (start > 0 ? value.substr(start, 3) : value.substr(0, 3 + start))
                + separators[idx] + result;
            idx = (++idx) % 2;
            start -= 3;
        }
        return (parts.length == 3 ? '-' : '') + result;
    }
});