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
                                <input type="text" id="datepicker" class="form-control" name="fecha_inicio" placeholder="" >
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                                <label for"">Fecha final</label>
                                <input type="text" id="datepicker2" class="form-control" name="fecha_fin" placeholder="" >
                            </div>
                        </div>
                        <div class="row">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                            <div class="col-xs-6 col-md-6 form-group">
                                <label for"">Usuario</label>
                                <select class="form-control" name="Usuario">
                                    @foreach($usuarios as $pago)
                                        <option value="{{$pago['id']}}">
                                        {{$pago['name']}}
                                        </option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="col-xs-6 col-md-6 form-group">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-12 form-group">
                                <button type="submit" class="btn btn-primary btn-block">Generar Consolidado</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listado pagos:</div>
                <div class="panel-body">

                        <table id="example" class="display nowrap" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>N° Factura</th>
                                <th>Alumno</th>
                                <th>Fecha Registro</th>
                                <th>Usuario Pago</th>
                                <th>Valor/Concepto Pago</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th><h2>TOTAL</h2></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><br><div id="valorT"></div></th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
        <div class="col-md-1"><br>
        </div>
    </div>

@endsection
@section('scripts')
  @parent
  <script src="{{ elixir('js/pagos/consolidado.js') }}"></script>
@stop