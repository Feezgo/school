@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


<!-- Datos del estudiante -->
            <div class="panel panel-default">
                <div class="panel-heading">Datos generales del estudiante</div>
                <div class="panel-body">

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
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Repitente</label>
                        <div class="btn-group-justified" data-toggle="buttons">
                          <label class="btn btn-primary btn-xs">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Si
                          </label>
                          <label class="btn btn-primary btn-xs">
                            <input type="radio" name="options" id="option3" autocomplete="off"> 
                            No
                          </label>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Tipo Identificación</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">N° Identificación</label>
                          <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Dpt de expedición</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Mpio de expedición</label>
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
                        <label for"">Primer nombre</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo nombre</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer apellido</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo apellido</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Genero</label>
                            <div class="btn-group-justified" data-toggle="buttons">
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Masculino
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="options" id="option3" autocomplete="off"> 
                                Femenino
                              </label>
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3">
                        <label for"">Fecha de nacimiento</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Dpt de nacimiento</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Mpio de nacimiento</label>
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
                      
                      <div class="col-xs-6 col-md-3">
                        <label for"">Dirección de recidencia</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Dpt de recidencia</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Mpio de recidencia</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Brio de recidencia</label>
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
                            <label for"">Zona</label>
                            <div class="btn-group-justified" data-toggle="buttons">
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Rural
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="options" id="option3" autocomplete="off"> 
                                Urbana
                              </label>
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Nivel sisben</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Nivel estrato</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3">
                        <label for"">Eps afiliado</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-6 col-md-3">
                        <label for"">Telefono/Celular</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3">
                        <label for"">Factor RH</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                          <label for"">Discapacidad</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                          <label for"">Situacion Academica Año Anterior</label>
                          <select class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                  </div>

                </div>
            </div>


<!-- Datos de la mamá -->
            <div class="panel panel-default">
                <div class="panel-heading">Datos Generales de la mamá</div>

                <div class="panel-body">

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Acudiente</label>
                            <div class="btn-group-justified" data-toggle="buttons">
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Si
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="options" id="option3" autocomplete="off"> 
                                No
                              </label>
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">N° Cedula</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer nombre</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo nombre</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer apellido</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo apellido</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Ocupación</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Empresa</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Telefono</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Celular</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                </div>
            </div>


<!-- Datos de la papá -->
            <div class="panel panel-default">
                <div class="panel-heading">Datos Generales del papá</div>

                <div class="panel-body">

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Acudiente</label>
                            <div class="btn-group-justified" data-toggle="buttons">
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Si
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="options" id="option3" autocomplete="off"> 
                                No
                              </label>
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">N° Cedula</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer nombre</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo nombre</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer apellido</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo apellido</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Ocupación</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Empresa</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Telefono</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Celular</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                </div>
            </div>            



<!-- Datos de la papá -->
            <div class="panel panel-default">
                <div class="panel-heading">Acudiente (Si es diferente a los padres)</div>

                <div class="panel-body">

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Parentesco</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">N° Cedula</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer nombre</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo nombre</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer apellido</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo apellido</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Telefono</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Celular</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                      </div>
                    </div>

                </div>
            </div>             

        </div>
    </div>
</div>
@endsection