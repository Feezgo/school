@extends('layouts.app')

@section('content')
<div class="container" id="main" data-url="">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Pagos</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" name="documento" value="{{ $matricula ? $matricula->estudiante['documento'] : old('documento') }}" placeholder="Documento estudiante">
                                <span class="input-group-btn">
                                    <input type="hidden" name="_method" value="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <a class="btn btn-default" href="{{ url('/pagos/buscar/') }}" id="buscar">Buscar</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @if ($status == 'success')
                            <div class="col-md-12">
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Los datos han sido actualizados satisfactoriamente.
                                </div>
                            </div>
                        @endif
                        @if (!$matricula)
                            <div class="col-md-12">
                                <p class="text-muted">Busque un estudiante para obtener el historial de pagos.</p>
                            </div>
                        @else
                        <form action="{{ url('/pagos/gestionarPagos') }}" method="post">
                            <div class="col-md-12">
                                <strong>Estudiante</strong><br>
                                Nombre: {{ $matricula->estudiante['pmer_nombre'].' '.$matricula->estudiante['pmer_apellido'] }}<br>
                                Documento: {{ $matricula->estudiante['documento'] }}
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-stripped">
                                    <thead>
                                        <tr>
                                            <th align="center">Pago</th>
                                            <th align="center">Fecha creacion</th>
                                            <th align="center">Fecha Limite</th>
                                            <th align="center">Costo</th>
                                            <th align="center">Estado</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($matricula->planesDePagos as $plan_de_pago)
                                            <tr>
                                                <td>{{ $plan_de_pago->pago['descipcion'] }}</td>
                                                <td align="center">{{ $plan_de_pago['fecha_pago']->toDateString() }}</td>
                                                <td align="center">{{ $plan_de_pago['fecha_limite']->toDateString() }}</td>
                                                <td align="right">{{ Carbon::now()->gt($plan_de_pago['fecha_limite']) && $plan_de_pago['estado'] == '0' ? $plan_de_pago->pago['recargo'] + $plan_de_pago->pago['costo'] : $plan_de_pago->pago['costo'] }}</td>
                                                <td align="center">{!! $plan_de_pago['estado'] == '0' ? '<span class="label label-default">Pendiente</span>' : '<span class="label label-success">Realizado</span>' !!}</td>
                                                <td><input type="checkbox" name="pago[]" value="{{ $plan_de_pago['id'] }}"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="documento" value="{{ $matricula->estudiante['documento'] }}">
                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button name="operacion" value="pagar" class="btn btn-success">Pagar</button>
                                <button name="operacion" value="imprimir" class="btn btn-default">Imprimir</button>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
  @parent
  <script src="{{ elixir('js/pagos/buscador.js') }}"></script>
@stop