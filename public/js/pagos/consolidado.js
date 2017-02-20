$(function() {
	var URL2 = $('#form_consolidado').data('url');
     vector_datos_otrosPagos= new Array();
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

      var tt = $('#OtrosConceptos').DataTable( {responsive: true,
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

    
    $('#consolidado_otrosPagos_form').on('submit', function(e){
        var valro_conc=0;
        var f = new Date();
        var fechaRegistro=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
        var fecha_inicio=$('input[name="fecha_inicio"]').val();
        var fecha_fin=$('input[name="fecha_fin"]').val();
        var estudiante=$('#estudiante').selectpicker('val');
        
        var Concepto=$('#Concepto').selectpicker('val');
        var array =$('#Concepto').find("option:selected").text();

        var mes=$('#mes').selectpicker('val');
        var nota=$('textarea[name="nota"]').val();
        

        var respuesta=array.split(",");
        var nombre_concep =respuesta[0];
        var valro_conc =respuesta[1];

        var nombre_est0 =$('input[name="nombre_est"]').val();
        var respuesta1=nombre_est0.split("--");
        var nombre_est =respuesta1[0];
        var grado_est =respuesta1[1];
       
        var num_dias=1;
        var TotalComp=0;
        var array2 = ['288','289','290','291','292','293'];
        console.log(Concepto+" "+array2.indexOf(Concepto));
        if(array2.indexOf(Concepto)>=0){
            num_dias =restaFechas(fecha_inicio,fecha_fin);
            TotalComp=parseInt(num_dias)*parseInt(valro_conc);
            mes='';
        }else{
            TotalComp=parseInt(valro_conc);
            fecha_inicio='';
            fecha_fin='';
        }
       //console.log(num_dias);

        vector_datos_otrosPagos.push({
            "fechaRegistro":fechaRegistro,
            "fecha_inicio": fecha_inicio,
            "fecha_fin":fecha_fin,
            "estudiante": estudiante,
            "Concepto":Concepto,
            "nombre_est":nombre_est,
            "grado_est":grado_est,
            "nombre_concep":nombre_concep,
            "valro_conc":TotalComp,
            "nota":nota,
            "mes":mes

        });

        var datos_acti = JSON.stringify(vector_datos_otrosPagos);
        $('input[name="vectorDatos"]').val(datos_acti);
       // console.log(vector_datos_otrosPagos);
         ;
         tt.clear().draw();
         var num=1;
         var sumTotal=0;
         
         if(vector_datos_otrosPagos.length > 0)
            {
              $.each(vector_datos_otrosPagos, function(i, e){
                sumTotal=parseInt(sumTotal)+parseInt(e['valro_conc']);
                 tt.row.add( [
                      '<th scope="row" class="text-center">'+num+'</th>',
                      '<td>'+e['nombre_est']+'</td>',
                      '<td>'+e['fechaRegistro']+'</td>',
                      '<td>'+e['nombre_concep']+'</td>',
                      '<td>'+e['valro_conc']+'</td>',
                      '<td>'+e['mes']+e['fecha_inicio']+'<br>'+e['fecha_fin']+'</td>',
                      '<td>'+e['nota']+'</td>',
                      '<td><td class="text-center"><button type="button" data-rel="'+i+'" data-funcion="crear" class="btn btn-danger btn-xs">Eliminar</button></td>',
                  ] ).draw( false );
                  num++;
              });
            }

            $('#valorT').html(sumTotal);
        e.preventDefault();
    });


    $('#OtrosConceptos').delegate('button[data-funcion="crear"]','click',function (e) {   
      
      var f = new Date();
      var fechaRegistro=f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
      var id = $(this).data('rel'); 
      vector_datos_otrosPagos.splice(id, 1);

      var datos_acti = JSON.stringify(vector_datos_otrosPagos);
        $('input[name="vectorDatos"]').val(datos_acti);
          
         tt.clear().draw();
         var num=1;
         var sumTotal=0;
        if(vector_datos_otrosPagos.length > 0)
            {
              $.each(vector_datos_otrosPagos, function(i, e){
                sumTotal=parseInt(sumTotal)+parseInt(e['valro_conc']);
                 tt.row.add( [
                      '<th scope="row" class="text-center">'+num+'</th>',
                      '<td>'+e['nombre_est']+'</td>',
                      '<td>'+e['fechaRegistro']+'</td>',
                      '<td>'+e['nombre_concep']+'</td>',
                      '<td>'+e['valro_conc']+'</td>',
                      '<td>'+e['mes']+e['fecha_inicio']+'<br>'+e['fecha_fin']+'</td>',
                      '<td>'+e['nota']+'</td>',
                      '<td><td class="text-center"><button type="button" data-rel="'+i+'" data-funcion="crear" class="btn btn-danger btn-xs">Eliminar</button></td>',
                  ] ).draw( false );
                  num++;
              });
            }

            $('#valorT').html(sumTotal);


     }); 

    


    $('select[name="Concepto"]').on('change', function(e){
        $('input[name="nombre_concep"]').val($('#Concepto option:selected').text());
    });

     $('select[name="estudiante"]').on('change', function(e){
        $('input[name="nombre_est"]').val($('#estudiante option:selected').text());
    });

     restaFechas = function(f1,f2)
     {
     var aFecha1 = f1.split('-'); 
     var aFecha2 = f2.split('-'); 
     var fFecha1 = Date.UTC(aFecha1[0],aFecha1[1]-1,aFecha1[2]); 
     var fFecha2 = Date.UTC(aFecha2[0],aFecha2[1]-1,aFecha2[2]); 
     var dif = fFecha2 - fFecha1;
     var dias = Math.floor(dif / (1000 * 60 * 60 * 24)); 
     return dias+1;
     }



});