@extends('layouts.app')

@section('content')

<div class="content" id="form_inscripcion" class="row" data-url="alumno"></div>
       

                                

                            @if(count($estudiante)>0)
                                @foreach($estudiante as $dt_estudiante)
                                  <?php 
                                    $nuevo=$dt_estudiante->id;
                                    $documento=$dt_estudiante->documento;
                                    $tipo_documento=$dt_estudiante->tipo_documento; 
                                    $dpto_expedicion=$dt_estudiante['departamento'][0]->departamento;
                                    $dpto_id_expedicion=$dt_estudiante['departamento'][0]->id;
                                    $mpio_expdicion=$dt_estudiante->mpio_expdicion;
                                    $pmer_nombre=$dt_estudiante->pmer_nombre;
                                    $sndo_nombres=$dt_estudiante->sndo_nombres;
                                    $pmer_apellido=$dt_estudiante->pmer_apellido;
                                    $sndo_apellido=$dt_estudiante->sndo_apellido;
                                    $genero=$dt_estudiante->genero;
                                    $fecha_nacimiento=$dt_estudiante->fecha_nacimiento;
                                    $dpto_nacimiento=$dt_estudiante->dpto_nacimiento;
                                    $mpio_nacimiento=$dt_estudiante->mpio_nacimiento;
                                    $direccion=$dt_estudiante->direccion;
                                    $dpto_recidencia=$dt_estudiante->dpto_recidencia;
                                    $mpio_recidencia=$dt_estudiante->mpio_recidencia;
                                    $brio_recidencia=$dt_estudiante->brio_recidencia;
                                    $zona=$dt_estudiante->zona;
                                    $nivel_sisben=$dt_estudiante->nivel_sisben;
                                    $estrato=$dt_estudiante->estrato;
                                    $eps=$dt_estudiante->eps;
                                    $telefono=$dt_estudiante->telefono;
                                    $rh=$dt_estudiante->rh;
                                    $discapacidad=$dt_estudiante->discapacidad;
                                    $situacion_academica=$dt_estudiante->situacion_academica;
                                  ?>
                                @endforeach
                            @else
                                  <?php 
                                    $nuevo=0;
                                    $documento=$identidad; 
                                    $tipo_documento=''; 
                                    $dpto_expedicion='';
                                    $mpio_expdicion="";
                                    $pmer_nombre='';
                                    $sndo_nombres='';
                                    $pmer_apellido='';
                                    $sndo_apellido='';
                                    $genero="";
                                    $fecha_nacimiento="";
                                    $dpto_nacimiento="";
                                    $mpio_nacimiento="";
                                    $direccion="";
                                    $dpto_recidencia="";
                                    $mpio_recidencia="";
                                    $brio_recidencia="";
                                    $zona="";
                                    $nivel_sisben="";
                                    $estrato="";
                                    $eps="";
                                    $telefono="";
                                    $rh="";
                                    $discapacidad="";
                                    $situacion_academica="";

                                  ?>
                            @endif


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
                <li><a data-toggle="tab" href="#menu3"> 3. Datos académicos</a></li>
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
                        <input type="hidden" name="_alumno" value="{{$nuevo}}"></input>

                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Repitente</label>
                          <select class="form-control" name="repitente">
                                <option>No</option>
                                <option>Si</option>
                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Tipo Identificación</label>
                            <select class="form-control" name="tipoIdent_estudiante">
                                @if($tipo_documento1='')
                                <option>{{$tipo_documento1}}</option>
                                @endif
                                <option>Cédula de Ciudadanía</option>
                                <option>Cédula de Extranjería.</option>
                                <option>Registro civil de nacimiento</option>
                                <option>Tarjeta de identidad</option>
                                <option>NIT</option>
                             </select>
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">N° Identificación</label>
                            <input type="text" class="form-control" name="numIdent_estudiante" placeholder="" value="{{$documento}}" readonly="readonly">
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Dpt de expedición</label>
                            <select class="form-control"  name="dptExp_estudiante" id="dptExp_estudiante">
                                
                                  @if($dpto_expedicion!='')
                                    <option value="{{$dpto_id_expedicion}}">{{$dpto_expedicion}}</option>
                                  @endif
                                  <option value="">seleccionar</option>
                                 @foreach($departamento as $departamentos)
                                  <option value="{{ $departamentos['id'] }}">{{ $departamentos['departamento'] }}</option>
                                @endforeach
                             </select>
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Mpio de expedición</label>
                            <select class="form-control" name="mpioExp_estudiante" id="mpioExp_estudiante">
                                <option value="">seleccionar</option>
                             </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Primer nombre</label>
                          <input type="text" class="form-control" name="nom1_estudiante" placeholder="" value="{{$pmer_nombre}}">
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Segundo nombre</label>
                          <input type="text" class="form-control" name="nom2_estudiante" placeholder=""value="{{$sndo_nombres}}">
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Primer apellido</label>
                          <input type="text" class="form-control" name="apll1_estudiante" placeholder="" value="{{$pmer_apellido}}">
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Segundo apellido</label>
                          <input type="text" class="form-control" name="apll2_estudiante" placeholder="" value="{{$sndo_apellido}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-md-3 form-group">
                              <label for"">Genero</label>
                              <select class="form-control" name="gnro_estudiante">
                                    @if($genero!='')
                                    <option>{{$genero}}</option>
                                    @endif
                                    <option value="">seleccionar</option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                              </select>
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Fecha de nacimiento</label>
                          <input type="text" class="form-control" name="fchaNaci_estudiante" id="datepicker" placeholder="" value="{{$fecha_nacimiento}}">
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Dpt de nacimiento</label>
                            <select class="form-control" name="dptNaci_estudiante" id="dptNaci_estudiante">
                                <option value="">seleccionar</option>
                                @foreach($departamento as $departamentos)
                                  <option value="{{ $departamentos['id'] }}">{{ $departamentos['departamento'] }}</option>
                                @endforeach
                             </select>
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Mpio de nacimiento</label>
                            <select class="form-control" name="mpioNaci_estudiante" id="mpioNaci_estudiante">
                                <option value="">seleccionar</option>
                             </select>
                        </div>
                    </div>


                    <div class="row">
                        
                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Dirección de recidencia</label>
                          <input type="text" class="form-control" name="dirReci_estudiante" placeholder="" value="{{$direccion}}">
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Dpt de recidencia</label>
                            <select class="form-control" name="dptReci_estudiante" id="dptReci_estudiante">
                                <option value="">seleccionar</option>
                                @foreach($departamento as $departamentos)
                                  <option value="{{ $departamentos['id'] }}">{{ $departamentos['departamento'] }}</option>
                                @endforeach
                             </select>
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Mpio de recidencia</label>
                            <select class="form-control" name="mpioReci_estudiante" id="mpioReci_estudiante">
                              <option value="">seleccionar</option>
                            </select>
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Brio de recidencia</label>
                            <input type="text" class="form-control" name="brioReci_estudiante" placeholder=""  value="{{$brio_recidencia}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-md-3 form-group">
                              <label for"">Zona</label>
                               <select class="form-control" name="zna_estudiante">
                                    @if($zona!='')
                                    <option>{{$zona}}</option>
                                    @endif
                                    <option value="">seleccionar</option>
                                    <option>Rural</option>
                                    <option>Urbana</option>
                              </select>
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Nivel sisben</label>
                            <select class="form-control" name="nvel_estudiante">
                                @if($nivel_sisben!='')
                                <option>{{$nivel_sisben}}</option>
                                @endif
                                <option value="">seleccionar</option>
                                <option value="1">Nivel 1</option>
                                <option value="2">Nivel 2</option>
                             </select>
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                            <label for"">Nivel estrato</label>
                            <select class="form-control" name="nvelEst_estudiante">
                                @if($estrato!='')
                                <option>{{$estrato}}</option>
                                @endif
                                <option value="">seleccionar</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                             </select>
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Eps afiliado</label>
                          <input type="text" class="form-control" name="eps_estudiante" placeholder="" value="{{$eps}}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Telefono/Celular</label>
                          <input type="text" class="form-control" name="tfono_estudiante" placeholder="" value="{{$telefono}}">
                        </div>
                        <div class="col-xs-6 col-md-3 form-group">
                          <label for"">Factor RH</label>
                              <select class="form-control" name="ftorRh_estudiante">
                                @if($rh!='')
                                <option>{{$rh}}</option>
                                @endif
                                <option value="">seleccionar</option>
                                <option>O-</option>
                                <option>O+</option>
                                <option>A-</option>
                                <option>A+</option>
                                <option>B-</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>AB-</option>
                             </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                            <label for"">Discapacidad</label>
                            <select class="form-control" name="dcidad_estudiante">
                                <option value="">seleccionar</option>
                                 @foreach($discapacidad_m as $discapacidades)
                                  <option value="{{ $discapacidades['id'] }}">{{ $discapacidades['discapacidad'] }}</option>
                                @endforeach
                             </select>
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                            <label for"">Situacion Academica Año Anterior</label>
                            <select class="form-control " name="situAcad_estudiante">
                                <option value="">seleccionar</option>
                                 @foreach($situacion as $situaciones)
                                  <option value="{{ $situaciones['id'] }}">{{ $situaciones['situacion'] }}</option>
                                @endforeach
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
                          <select class="form-control" name="ptesco_acudi">
                                <option value="">seleccionar</option>
                                <option>padre</option>
                                <option>madre</option>
                                <option>abuelo</option>
                                <option>tio</option>
                                <option>hermano</option>
                                <option>otro</option>
                             </select>
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
                      <button type="submit" class="btn btn-warning btn-block">Registrar datos académicos</button>
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
                  <div class="panel-heading">Documentos obligatorios generales para todos los estudiantes</div>
                  <div class="panel-body">

                      <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>

                      <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                          <div class="form-group">
                            <label for="exampleInputFile">Registro civil / Tarjeta de indentidad</label>
                            <input type="file" id="exampleInputFile" name="registroCivilT">
                            <p class="help-block">Formato permitido pdf.</p>
                            <a id="file1" href="" download style='display:none'>Archivo</a><br>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" id="sub_registroCT" data-id="1">Subir</button>
                              <button type="button" class="btn btn-danger"  id="baj_registroCT" data-id="1" >Eliminar</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                          <div class="form-group">
                            <label for="exampleInputFile">Certificado medico resiente o vigente
                            </label>
                            <input type="file" id="exampleInputFile" name="certificadomedico">
                            <p class="help-block">Formato permitido pdf.</p>
                            <a id="file2" href="" download style='display:none'>Archivo</a><br>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" id="sub_registroCT" data-id="2" >Subir</button>
                              <button type="button" class="btn btn-danger" id="baj_registroCT" data-id="2" >Eliminar</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                          <div class="form-group">
                            <label for="exampleInputFile">Certificación vigente de la EPS o Sisben </label>
                            <input type="file" id="exampleInputFile" name="certificacioneps">
                            <a id="file3" href="" download style='display:none'>Archivo</a><br>
                            <p class="help-block">Formato permitido pdf.</p>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" id="sub_registroCT" data-id="3"  >Subir</button>
                              <button type="button" class="btn btn-danger" id="baj_registroCT" data-id="3" >Eliminar</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                          <div class="form-group">
                            <label for="exampleInputFile">Cedula padre de familia / Acudiente
                            </label>
                            <input type="file" id="exampleInputFile" name="cedulapadre">
                            <p class="help-block">Formato permitido pdf.</p>
                            <a id="file4" href="" download style='display:none'>Archivo</a><br>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" id="sub_registroCT" data-id="4" >Subir</button>
                              <button type="button" class="btn btn-danger" id="baj_registroCT" data-id="4" >Eliminar</button>
                            </div>
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                          <div class="form-group">
                            <label for="exampleInputFile">Referencia laboral del acudiente</label>
                            <input type="file" id="exampleInputFile" name="referencialaboral">
                            <p class="help-block">Formato permitido pdf.</p>
                            <a id="file5" href="" download style='display:none'>Archivo</a><br>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" id="sub_registroCT" data-id="5" >Subir</button>
                              <button type="button" class="btn btn-danger" id="baj_registroCT" data-id="5" >Eliminar</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                          <div class="form-group">
                            <label for="exampleInputFile">Carnet de vacunas</label>
                            <input type="file" id="exampleInputFile" name="carnetvacunas">
                            <p class="help-block">Unicamente para grados de pre-kinder, kinder, transición.</p>
                            <p class="help-block">Formato permitido pdf.</p>
                            <a id="file6" href="" download style='display:none'>Archivo</a><br>
                          </div>
                          <div class="btn-group btn-group-xs" role="group" aria-label="...">
                            <button type="button" class="btn btn-default" id="sub_registroCT" data-id="6" >Subir</button>
                            <button type="button" class="btn btn-danger" id="baj_registroCT" data-id="6" >Eliminar</button>
                          </div>
                        </div>
                      </div>               

                  </div>
              </div>



              <div class="panel panel-default">
                  <div class="panel-heading">Documentos obligatorios adicionales para estudiantes nuevos estudiantes</div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                          <div class="form-group">
                            <label for="exampleInputFile">Paz y salvo de colegio anterior</label>
                            <input type="file" id="exampleInputFile" name="pazysalvo">
                            <p class="help-block">Formato permitido pdf.</p>
                            <a id="file7" href="" download style='display:none'>Archivo</a><br>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" id="sub_registroCT" data-id="7" >Subir</button>
                              <button type="button" class="btn btn-danger" id="baj_registroCT" data-id="7" >Eliminar</button>
                            </div>
                          </div>
                        </div>
                        <div class="col-xs-6 col-md-6 form-group">
                          <div class="form-group">
                            <label for="exampleInputFile">Boletin final con la aprobación del año anterior
                            </label>
                            <input type="file" id="exampleInputFile" name="boletinfinal">
                            <p class="help-block">Formato permitido pdf.</p>
                            <a id="file8" href="" download style='display:none'>Archivo</a><br>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" id="sub_registroCT" data-id="8">Subir</button>
                              <button type="button" class="btn btn-danger" i= data-id="8""baj_registroCT8">Eliminar</button>
                            </div>
                          </div>
                        </div>
                      </div>



                      <div class="row">
                        <div class="col-xs-6 col-md-6 form-group">
                           <div class="form-group">
                            <label for="exampleInputFile">Certificado del retiro del SIMAT (Emitido por el colegio de origen)
                            </label>
                            <input type="file" id="exampleInputFile" name="retirosimat">
                            <p class="help-block">Formato permitido pdf.</p>
                            <a id="file9" href="" download style='display:none'>Archivo</a><br>
                            <div class="btn-group btn-group-xs" role="group" aria-label="...">
                              <button type="button" class="btn btn-default" id="sub_registroCT" data-id="9">Subir</button>
                              <button type="button" class="btn btn-danger" i= data-id="9""baj_registroCT9">Eliminar</button>
                            </div>
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
</div>








 
@endsection
@section('scripts')
  @parent
  <script src="{{ elixir('js/formularioInscripcion.js') }}"></script>
@stop