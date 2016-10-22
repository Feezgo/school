@extends('layouts.app')

@section('content')
<div class="content" id="manu_alumno" class="row" data-url="formPin">

 <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">REGISTRO DE FORMULARIO DE INSCRIPCIÓN</div>

                  <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form  action="{{ url('/validacionEstudiante') }}" method="post">
                      
                      <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>

                      <div class="row">
                        <div class="col-md-3 form-group"></div>
                        <div class="col-md-6 form-group">
                          <label for"">Numero identidad del alumno</label>
                          <input type="text" class="form-control" name="num_identidad" placeholder="">
                        </div>
                        <div class="col-md-3 form-group"></div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 form-group"></div>
                        <div class="col-md-6 form-group">
                          <label for"">Pin</label>
                          <input type="text" class="form-control" name="pin" placeholder="">
                        </div>
                        <div class="col-md-3 form-group"></div>
                      </div>


                      <div class="row">
                          <div class="col-md-3 form-group"></div>
                          <div class="col-md-6">
                              <button  type="submit" class="btn btn-success btn-block">Ingresar</button>
                          </div>
                          <div class="col-md-12"><hr></div>
                          <div class="col-md-3 form-group"></div>
                      </div>
                    </form>

                      <div class="row">
                          <div class="col-md-3 form-group"></div>
                          <div class="col-md-6">
                              <div class="alert alert-danger" id="datosNoValidos" style="display: none">
                                <strong>Error!</strong> Los datos ingresados no son validos.
                              </div>
                          </div>
                          <div class="col-md-12"><hr></div>
                          <div class="col-md-3 form-group"></div>
                      </div>
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection

@section('scripts')
  @parent
  <script src="{{ elixir('js/loginPin.js') }}"></script>


@stop