@extends('layouts.app')


@section('content')

<div class="content" id="manu_alumno" class="row" data-url="alumno">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">GENERADOR DE PIN</div>

                <div class="panel-body">
                  
                  <form  action="" id="registroPin">  
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                    <input type="hidden" name="_pin" value="0"></input>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for"">Nombre acudiente</label>
                        <input type="text" class="form-control" name="nom_acudiente" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for"">Nombre alumno</label>
                        <input type="text" class="form-control" name="nom_alumno" placeholder="" >
                      </div>
                      <div class="col-md-6 form-group">
                        <label for"">N° identidad de alumno</label>
                        <input type="text" class="form-control" name="numIdnt_alumno" placeholder="" >
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for"">Correo electronico acudiente</label>
                        <input type="text" class="form-control" name="email_acudiente" placeholder="ejemplo@colegio.com" >
                      </div>
                      <div class="col-md-6 form-group">
                          <label for"">Grado al que aspira</label>
                          <select class="form-control" name="grdo_aspira">
                              <option>Pre-kinder</option>
                              <option>kinder</option>
                              <option>Transición</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                           </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for"">Telefono acudíente</label>
                        <input type="text" class="form-control" name="numTelef_acudiente" placeholder="" >
                      </div>
                      <div class="col-xs-6  form-group">
                            <label for"">Estudiante</label>
                            <div class="btn-group-justified" data-toggle="buttons">
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="tipo_estudiante" autocomplete="off"> Antiguo
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="tipo_estudiante" autocomplete="off"> 
                                Nuevo
                              </label>
                            </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button  type="submit" class="btn btn-success btn-block">Generar pin</button>
                        </div>
                        <div class="col-md-12"><hr></div>
                    </div>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade bs-example-modal-lg" id="actividad_creada" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
            <h4 class="modal-title">Registro Exitoso!!</h4>
          </div>
           <div class="modal-body">
              <div id="mensaje"></div>
           </div>
           <div class="modal-footer" id="cerrar_actividad">
              <button type="button"  data-funcion="cerrar" class="btn btn-default" data-dismiss="modal">Cerrar</button>
           </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
  @parent
  <script src="{{ elixir('js/alumno.js') }}"></script>
@stop

