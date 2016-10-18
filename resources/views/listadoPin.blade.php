@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de pin</div>

                <div class="panel-body">
                  <table id="example" class="display nowrap" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Acudiente</th>
                            <th>Alumno</th>
                            <th>Email</th>
                            <th>Grado</th>
                            <th>Tipo</th>
                            <th>N° Identidad/usuario</th>
                            <th>Pin</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Acudiente</th>
                            <th>Alumno</th>
                            <th>Email</th>
                            <th>Grado</th>
                            <th>Tipo</th>
                            <th>N° Identidad/usuario</th>
                            <th>Pin</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($datos_pin as $datos)
                            <tr>
                                <td>{{ $datos['nombre_acudiente'] }}</td>
                                <td>{{ $datos['nombre_alumno'] }}</td>
                                <td>{{ $datos['email_acudiente'] }}</td>
                                <td>{{ $datos['grado_aspira'] }}</td>
                                <td>{{ $datos['tipo_estudiante'] }}</td>
                                <td>{{ $datos['num_identidad_alumno'] }}</td>
                                <td>{{ $datos['pin'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
  @parent
  <script src="{{ elixir('js/listadoPin.js') }}"></script>
@stop