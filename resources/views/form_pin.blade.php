@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Generador de pin</div>

                <div class="panel-body">
                    
                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for"">Nombre acudiente</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 form-group">
                        <label for"">Nombre alumno</label>
                        <input type="text" class="form-control" id="email" placeholder="" >
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for"">Correo electronico acudiente</label>
                        <input type="text" class="form-control" id="email" placeholder="" >
                      </div>
                      <div class="col-md-6 form-group">
                          <label for"">Grado</label>
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
                                <input type="radio" name="options" id="option2" autocomplete="off"> Antiguo
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="options" id="option3" autocomplete="off"> 
                                Nuevo
                              </label>
                            </div>
                      </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="button" class="btn btn-success btn-block">Generar pin</button>
                        </div>
                        <div class="col-md-12"><hr></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
