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
                                <input type="radio" name="tipo_estudiante" id="option2" autocomplete="off"> Antiguo
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="tipo_estudiante" id="option3" autocomplete="off"> 
                                Nuevo
                              </label>
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Repitente</label>
                        <div class="btn-group-justified" data-toggle="buttons">
                          <label class="btn btn-primary btn-xs">
                            <input type="radio" name="repitente" id="option2" autocomplete="off"> Si
                          </label>
                          <label class="btn btn-primary btn-xs">
                            <input type="radio" name="repitente" id="option3" autocomplete="off"> 
                            No
                          </label>
                        </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Tipo Identificación</label>
                          <select class="form-control" name="tipoIdent_estudiante">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">N° Identificación</label>
                          <input type="text" class="form-control" name="numIdent_estudiante" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Dpt de expedición</label>
                          <select class="form-control"  name="dptExp_estudiante">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Mpio de expedición</label>
                          <select class="form-control" name="mpioExp_estudiante">
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
                        <input type="text" class="form-control" name="nom1_estudiante" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo nombre</label>
                        <input type="text" class="form-control" name="nom2_estudiante" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer apellido</label>
                        <input type="text" class="form-control" name="apll1_estudiante" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo apellido</label>
                        <input type="text" class="form-control" name="apll2_estudiante" placeholder="">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Genero</label>
                            <div class="btn-group-justified" data-toggle="buttons">
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="gnro_estudiante" id="option2" autocomplete="off"> Masculino
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="gnro_estudiante" id="option3" autocomplete="off"> 
                                Femenino
                              </label>
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3">
                        <label for"">Fecha de nacimiento</label>
                        <input type="text" class="form-control" name="fchaNaci_estudiante" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Dpt de nacimiento</label>
                          <select class="form-control" name="dptNaci_estudiante">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Mpio de nacimiento</label>
                          <select class="form-control" name="mpioNaci_estudiante">
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
                        <input type="text" class="form-control" name="dirReci_estudiante" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Dpt de recidencia</label>
                          <select class="form-control" name="dptReci_estudiante">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Mpio de recidencia</label>
                          <select class="form-control" name="mpioReci_estudiante">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Brio de recidencia</label>
                          <select class="form-control" name="brioReci_estudiante">
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
                                <input type="radio" name="zna_estudiante" id="option2" autocomplete="off"> Rural
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="zna_estudiante" id="option3" autocomplete="off"> 
                                Urbana
                              </label>
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Nivel sisben</label>
                          <select class="form-control" name="nvel_estudiante">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Nivel estrato</label>
                          <select class="form-control" name="nvelEst_estudiante">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-3">
                        <label for"">Eps afiliado</label>
                        <input type="text" class="form-control" name="eps_estudiante" placeholder="">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-6 col-md-3">
                        <label for"">Telefono/Celular</label>
                        <input type="text" class="form-control" name="tfono_estudiante" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3">
                        <label for"">Factor RH</label>
                        <input type="text" class="form-control" name="ftorRh_estudiante" placeholder="">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                          <label for"">Discapacidad</label>
                          <select class="form-control" name="dcidad_estudiante">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                           </select>
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                          <label for"">Situacion Academica Año Anterior</label>
                          <select class="form-control" name="situAcad_estudiante">
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
                                <input type="radio" name="acud_mama" id="option2" autocomplete="off"> Si
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="acud_mama" id="option3" autocomplete="off"> 
                                No
                              </label>
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">N° Cedula</label>
                        <input type="text" class="form-control" name="cdla_mama" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer nombre</label>
                        <input type="text" class="form-control" name="pmerNom_mama" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo nombre</label>
                        <input type="text" class="form-control" name="sdoNom_mama" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer apellido</label>
                        <input type="text" class="form-control" name="pmerApell_mama" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo apellido</label>
                        <input type="text" class="form-control" name="sdoApell_mama" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Ocupación</label>
                        <input type="text" class="form-control" name="ocup_mama" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Empresa</label>
                        <input type="text" class="form-control" name="empr_mama" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Telefono</label>
                        <input type="text" class="form-control" name="tfono_mama" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Celular</label>
                        <input type="text" class="form-control" name="celu_mama" placeholder="">
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
                                <input type="radio" name="acud_papa" id="option2" autocomplete="off"> Si
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="acud_papa" id="option3" autocomplete="off"> 
                                No
                              </label>
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">N° Cedula</label>
                        <input type="text" class="form-control" name="cedu_papa" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer nombre</label>
                        <input type="text" class="form-control" name="pmerNom_papa" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo nombre</label>
                        <input type="text" class="form-control" name="sdoNom_papa" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer apellido</label>
                        <input type="text" class="form-control" name="pmerApell_papa" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo apellido</label>
                        <input type="text" class="form-control" name="sdoApell_papa" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Ocupación</label>
                        <input type="text" class="form-control" name="ocup_papa" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Empresa</label>
                        <input type="text" class="form-control" name="empr_papa" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Telefono</label>
                        <input type="text" class="form-control" name="tfono_papa" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Celular</label>
                        <input type="text" class="form-control" name="celu_papa" placeholder="">
                      </div>
                    </div>

                </div>
            </div>            



<!-- Datos de otro acudietne -->
            <div class="panel panel-default">
                <div class="panel-heading">Acudiente (Si es diferente a los padres)</div>

                <div class="panel-body">

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Parentesco</label>
                        <input type="text" class="form-control" name="ptesco_acudi" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">N° Cedula</label>
                        <input type="text" class="form-control" name="cedu_acudi" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer nombre</label>
                        <input type="text" class="form-control" name="pmerNom_acudi" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo nombre</label>
                        <input type="text" class="form-control" name="sdoNom_acudi" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Primer apellido</label>
                        <input type="text" class="form-control" name="pmerApell_acudi" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Segundo apellido</label>
                        <input type="text" class="form-control" name="sdoApell_acudi" placeholder="">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Telefono</label>
                        <input type="text" class="form-control" name="tfono_acudi" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Celular</label>
                        <input type="text" class="form-control" name="celu_acudi" placeholder="">
                      </div>
                    </div>

                </div>
            </div>  





<!-- Datos de la papá -->
            <div class="panel panel-default">
                <div class="panel-heading">Procedencia académica</div>

                <div class="panel-body">

                    <div class="row">
                      <div class="col-xs-6 col-md-2 form-group">
                        <label for"">Año</label>
                        <input type="text" class="form-control" name="ano_pre" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                        <label for"">Grado</label>
                        <input type="text" class="form-control" value="PRE" name="grado_pre" placeholder="" disabled>
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Institucion</label>
                        <input type="text" class="form-control" name="institucion_pre" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                        <label for"">Tipo</label>
                            <div class="btn-group-justified" data-toggle="buttons">
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="tipo_pre" id="option2" autocomplete="off"> Publico
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="tipo_pre" id="option3" autocomplete="off"> 
                                Privado
                              </label>
                            </div>
                      </div>
                    </div>

                    <?php for($i=1; $i<=11; $i++) { ?>
                    <div class="row">
                      <div class="col-xs-6 col-md-2 form-group">
                        <input type="text" class="form-control" name="ano[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                        <input type="text" class="form-control" value="<?php echo $i?>" name="grado[]" placeholder="" disabled>
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <input type="text" class="form-control" name="institucion[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                            <div class="btn-group-justified" data-toggle="buttons">
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="tipo[]" id="option2" autocomplete="off"> Publico
                              </label>
                              <label class="btn btn-primary btn-xs">
                                <input type="radio" name="tipo[]" id="option3" autocomplete="off"> 
                                Privado
                              </label>
                            </div>
                      </div>
                    </div>
                    <?php } ?>

                </div>
            </div>  


            <div class="row">
                <div class="col-md-12"><hr></div>
                <div class="col-xs-12">
                    <div class="alert alert-Success" role="alert">
                      <strong>Success!</strong> MEnsaje que falta.
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="button" class="btn btn-success btn-block">Registrar información</button>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12"><hr></div>
            </div>



        </div>
    </div>
</div>
@endsection