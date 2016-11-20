@extends('layouts.app')

@section('content')
<div class="content" id="form_consolidado" class="row" data-url="pagos"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>CONSOLIDADO DE PAGOS</h3>
                </div>

                <div class="panel-body">
                    <form id="consolidado_form">
                        <div class="row">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                            <div class="col-xs-6 col-md-6 form-group">
                                <label for"">Fecha inicial</label>
                                <input type="text" id="datepicker" class="form-control" name="numIdent_estudiante" placeholder="" >
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <label for"">Fecha final</label>
                                <input type="text" id="datepicker2" class="form-control" name="numIdent_estudiante" placeholder="" >
                            </div>

                        <div class="row">
                            <div class="col-xs-12 col-md-12 form-group">
                                <button type="submit" class="btn btn-primary btn-block">Generar Consolidado</button>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado pagos:</div>

                <div class="panel-body">
                  <div id="contenido_consolidado"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
  @parent
  <script src="{{ elixir('js/pagos/consolidado.js') }}"></script>
@stop