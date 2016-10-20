@extends('layouts.app')

@section('content')
<div class="content" id="manu_alumno" class="row" data-url="formPin">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">REGISTRO DE FORMULARIO DE INSCRIPCIÓN</div>

                <div class="panel-body">
                  
                  <form  action="" id="form_login_pin">  
                    
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

                </div>
            </div>
        </div>
    </div>
</div>



<form id="f" action="{{ url('/formulario') }}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
    <input type="hidden"  name="identidad" id="identidad" />
</form>
@endsection

@section('scripts')
  @parent
  <script src="{{ elixir('js/loginPin.js') }}"></script>


@stop