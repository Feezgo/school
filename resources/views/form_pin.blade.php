@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Generador de pin</div>

                <div class="panel-body">
                  
                  <form  role="form" method="POST" action="{{ url('/registroPin') }}">  
                    
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>

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
                        <input type="text" class="form-control" name="email_acudiente" placeholder="" >
                      </div>
                      <div class="col-md-6 form-group">
                          <label for"">Grado al que aspira</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
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
@endsection
