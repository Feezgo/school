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
                                                <td align="right">{!! Carbon::now()->gt($plan_de_pago['fecha_limite']) && $plan_de_pago['estado'] == '0' ? '<span class="label label-danger">$ '.number_format($plan_de_pago->pago['recargo'] + $plan_de_pago->pago['costo'], 0, '', '.').'</span>' : ($plan_de_pago['estado'] == '0' ?  '<span class="label label-default">$ '.number_format($plan_de_pago->pago['costo'], 0, '', '.').'</span>' : '<span class="label label-success">$ '.number_format($plan_de_pago->pagado, 0, '', '.').'</span>') !!}</td>
                                                <td align="center">{!! $plan_de_pago['estado'] == '0' ? '<span class="label label-default">Pendiente</span>' : '<span class="label label-success">Realizado</span>' !!}</td>
                                                <td><input type="checkbox" name="pago[]" value="{{ $plan_de_pago['id'] }}" {{ $plan_de_pago['estado'] == '1' ? 'checked disabled' : '' }}></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Fecha pago</label>
                                <input type="text" name="fecha_pago" class="form-control">
                            </div>
                            <div class="col-md-4 form-group">
                                <label for="">Consignación</label>
                                <input type="text" name="consignacion" class="form-control">
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" name="documento" value="{{ $matricula->estudiante['documento'] }}">
                                <input type="hidden" name="_method" value="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button name="operacion" value="facturar" class="btn btn-success">Pagar</button>
                            </div>
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </form>
                        @endif
                        @if($facturas)
                            <div class="col-md-12">
                                <ul class="list-group">
                                    @foreach($facturas as $factura)
                                        <?php
                                            $total = 0;
                                        ?>
                                        @foreach($factura->planesDePagos as $pago)
                                            <?php
                                                $total += $factura->fecha_pago->gt($pago->fecha_limite) ? $pago->pago['recargo'] + $pago->pago['costo'] : $pago->pago['costo'];
                                            ?>
                                        @endforeach
                                        <li class="list-group-item">
                                            <h4 class="list-group-item-heading">Factura N° {!! str_pad($factura->id, 6, '0', STR_PAD_LEFT).' <small class="'.$factura->estado.'">('.$factura->estado.')</small>' !!}</h4>
                                            <p class="list-group-item-text">
                                                Fecha de pago: {{ $factura->fecha_pago->toDateString() }} <br>
                                                Facturo: {{ $factura->user['name'] }} <br>
                                                Consignacion: {{ $factura->consignacion }} <br>
                                                Total: $ {{ number_format($total, 0, '', '.') }}
                                                <br><br>
                                                <a href="{{ url('/pagos/imprimir/'.$factura['id'])  }}" class="btn btn-default btn-xs">Imprimir</a>
                                                @if($factura->estado == 'efectuada')
                                                    <a href="{{ url('/pagos/anular/'.$matricula->estudiante['documento'].'/factura/'.$factura['id']) }}" class="btn btn-danger btn-xs">Anular</a>                                              
                                                @endif
                                            </p>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
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