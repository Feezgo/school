@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>DOCUMENTOS MATRICULA</h3>
                </div>

                <div class="panel-body">
                    <form action="{{ url('/descargar_doc') }}" method="post">
                       <div class="row">
                          <div class="col-xs-3"></div>
                          @if($matricula!=null)
                            @foreach($matricula as $matriculas)
                            <div class="col-md-3">
                                    <input type="hidden" name="id_matri" value="{{$matriculas['id']}}">
                                    </input>
                                    <input type="hidden" name="id_estudiante" value="{{$matriculas['id_estudiante']}}">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                    </input>
                                    <button  name="operacion" value="matricula" class="btn btn-success btn-lg">MATRICULA
                                    </button>
                            </div>
                            <div class="col-md-3">
                                    <button  name="operacion" value="contrato" class="btn btn-success btn-lg">CONTRATO
                                    </button>                            
                            </div>
                            @Endforeach                        
                          @else
                          <p class="bg-danger">El número ingresado no tiene datos inscritos, verifique el documento.</p>
                          @endif
                          <div class="col-md-3"></div>
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection