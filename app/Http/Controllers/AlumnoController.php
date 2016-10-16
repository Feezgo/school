<?php

namespace School\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use School\Http\Requests;
use School\App\Modelos\Pin;


class AlumnoController extends Controller
{
    //

    public function formularioPin()
    {
        return view('form_pin');
    }

    public function formularioInscripcion()
    {
        return view('formulario');
    }

  
    public function registroFormPin(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
               
                'nom_acudiente' => 'required',
                'nom_alumno' => 'required',
                'numIdnt_alumno' => 'required|integer',
                'email_acudiente' => 'required|email',
                'grdo_aspira' => 'required',
                'tipo_estudiante' => 'required',
            ]
        );

            if ($validator->fails())
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));

            if($request->input('_pin') == '0')
              return $this->guardar($request->all());
            else
                return view('ejemplo');
            //$this->modificar($request->all());

    }

    public function guardar($input)
    {
        $model_A = new Pin;
        return $this->crear_pin($model_A, $input);
    }

    public function crear_pin($model, $input)
    {
        $model['nombre_acudiente'] = $input['nom_acudiente'];
        $model['nombre_alumno'] = $input['nom_alumno'];
        $model['num_identidad_alumno'] = $input['numIdnt_alumno'];
        $model['email_acudiente'] = $input['email_acudiente'];
        $model['grado_aspira'] = $input['grdo_aspira'];
        $model['tipo_estudiante'] = $input['tipo_estudiante'];
        $model['pin'] = $this->generarCodigo(6);
        $model->save();

        return $model;
    }

    public function generarCodigo($longitud) {
     $key = '';
     $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
     $max = strlen($pattern)-1;
     for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
     return $key;
    }


    public function listadoPin()
    {
        $model = new Pin;
        $datos = [
            'datos_pin' => $model->all(),
        ];
        return view('listadoPin',$datos);
    }
 
}
