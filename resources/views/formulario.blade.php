@extends('layouts.app')

@section('content')
<div class="content" id="form_inscripcion" class="row" data-url="alumno">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <h2>Formulario de inscripción</h2>

            <div class="col-xs-12">
                    <div class="alert alert-Success" role="alert">
                      El<strong> Colegio Finlandes Juan Pablo II</strong> le da la bienvenidad y le agradece por vinvular al estudiante al plantel educativo y lo invita a ingresar la información completa en los formularios que aparecen en la parte inferior, recuerde que es muy importante para nosotros esta información. 
                    </div>
            </div>

            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#menu1"> 1. Datos del estudiante</a></li>
              <li><a data-toggle="tab" href="#menu2"> 2. Datos del acudiente</a></li>
              <li><a data-toggle="tab" href="#menu3"> 3. Datos del académicos</a></li>
              <li><a data-toggle="tab" href="#menu4"> 4. Documentos generales</a></li>
            </ul>

            <div class="tab-content">
              

            <div id="menu1" class="tab-pane fade in active">
            <form id="form_menu1">
<!-- Datos del estudiante -->
            <div class="panel panel-default">
                <div class="panel-heading">Datos generales del estudiante</div>
                <div class="panel-body">

                  <div class="row">
                      
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                      <input type="hidden" name="_alumno" value="0"></input>

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
                      <div class="col-xs-6 col-md-3 form-group">
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
                      
                      <div class="col-xs-6 col-md-3 form-group">
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
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Eps afiliado</label>
                        <input type="text" class="form-control" name="eps_estudiante" placeholder="">
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for"">Telefono/Celular</label>
                        <input type="text" class="form-control" name="tfono_estudiante" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
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
                          <select class="form-control " name="situAcad_estudiante">
                              <option></option>
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

            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-Success" role="alert">
                      <strong>Atención!</strong> Registre los datos del estudiantes dando click en el siguiente boton y siga con el formulario 2 datos del acudiente. 
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-block">Registrar datos de estudiante</button>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12"><hr></div>
            </div>

          </form>
          </div>


        
        
          <div id="menu2" class="tab-pane fade">
          <form id="form_menu2">
<!-- Datos de la mamá -->
            <div class="panel panel-default">
                <div class="panel-heading">Datos Generales de la mamá</div>

                <div class="panel-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                    <input type="hidden" name="_acudiente" value="0"></input>
                    <div class="row">
                      <div class="col-xs-6 col-md-6 form-group">
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
                      <div class="col-xs-6 col-md-6 form-group">
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
                <div class="panel-heading">Acudiente</div>

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

            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-Success" role="alert">
                      <strong>Atención!</strong> Registre los datos del acudiente dando click en el siguiente boton y siga con el formulario 3 datos académicos. 
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success btn-block">Registrar datos del acudiente</button>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12"><hr></div>
            </div>

          </form>
          </div>



          <div id="menu3" class="tab-pane fade">
          <form id="form_menu3">
<!-- Datos de la académicos -->
            <div class="panel panel-default">
                <div class="panel-heading">Procedencia académica</div>

                <div class="panel-body">

                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                    <input type="hidden" name="_academica" value="0"></input>
                    <div class="row">
                      <div class="col-xs-6 col-md-2 form-group">
                        <label for"">Año</label>
                        <input type="text" class="form-control" name="ano[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                        <label for"">Grado</label>
                        <input type="text" class="form-control" value="pre" name="grado[]" placeholder="" readonly="readonly">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <label for"">Institucion</label>
                        <input type="text" class="form-control" name="institucion[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                          <label for"">Tipo</label>
                          <div class="form-group">
                              <select class="form-control" id="sel1" name="caracter[]">
                                <option value="P">Publico</option>
                                <option value="D">Privado</option>
                              </select>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-2 form-group">
                        
                        <input type="text" class="form-control" name="ano[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                        

                        <input type="text" class="form-control" value="pre" name="grado[]" placeholder="" readonly="readonly">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        
                        <input type="text" class="form-control" name="institucion[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                         <div class="form-group">
                            <select class="form-control" id="sel1" name="caracter[]">
                              <option value="P">Publico</option>
                              <option value="D">Privado</option>
                            </select>
                          </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-md-2 form-group">
                        
                        <input type="text" class="form-control" name="ano[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                        

                        <input type="text" class="form-control" value="pre" name="grado[]" placeholder="" readonly="readonly">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        
                        <input type="text" class="form-control" name="institucion[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                         <div class="form-group">
                            <select class="form-control" id="sel1" name="caracter[]">
                              <option value="P">Publico</option>
                              <option value="D">Privado</option>
                            </select>
                          </div>
                      </div>
                    </div>

                    <?php for($i=1; $i<=11; $i++) { ?>
                    <div class="row">
                      <div class="col-xs-6 col-md-2 form-group">
                        <input type="text" class="form-control" name="ano[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                        <input type="text" class="form-control" value="<?php echo $i ?>" name="grado[]" placeholder="" readonly="readonly">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        <input type="text" class="form-control" name="institucion[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                         <div class="form-group">
                            <select class="form-control"  name="caracter[]">
                              <option value="P">Publico</option>
                              <option value="D">Privado</option>
                            </select>
                          </div>
                      </div>
                    </div>
                    <?php } ?>

                </div>
            </div> 


            <div class="row">
                <div class="col-xs-12">
                    <div class="alert alert-Success" role="alert">
                      <strong>Atención!</strong> Registre los datos académicos dando click en el siguiente boton y siga con el formulario 4. documentos generales.
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-warning btn-block">Registrar datos del acudiente</button>
                </div>
                <div class="col-md-12"><hr></div>
                <div class="col-md-12"><hr></div>
            </div>
          </form>
          </div>




          <div id="menu4" class="tab-pane fade">
          <form id="form_menu4">
              <!-- Datos del estudiante -->
            <div class="panel panel-default">
                <div class="panel-heading">Documentos generales</div>
                <div class="panel-body">
                    <div class="row">
                      <div class="col-xs-6 col-md-2 form-group">
                        
                        <input type="text" class="form-control" name="ano[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                        

                        <input type="text" class="form-control" value="pre" name="grado[]" placeholder="" readonly="readonly">
                      </div>
                      <div class="col-xs-6 col-md-6 form-group">
                        
                        <input type="text" class="form-control" name="institucion[]" placeholder="">
                      </div>
                      <div class="col-xs-6 col-md-2 form-group">
                         <div class="form-group">
                            <select class="form-control" id="sel1" name="caracter[]">
                              <option value="P">Publico</option>
                              <option value="D">Privado</option>
                            </select>
                          </div>
                      </div>
                    </div>
                </div>
            </div>

          </form>
          </div>


            





        </div>
    </div>
</div>





<div class="modal fade bs-example-modal-lg" id="incripcion_creada" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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