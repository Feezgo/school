@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>GENERAR DOCUMENTOS MATRICULA</h3>
                </div>

                <div class="panel-body">
                    <form action="buscar_matricula">
                        <center>
                        <label>Digite Identificacion del estudiante</label>
                        <input type="text" name="identificacion" id="identificacion">
                        <input type="submit" value="Buscar">
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
