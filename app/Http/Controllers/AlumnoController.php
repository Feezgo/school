<?php

namespace School\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use School\Http\Requests;
use School\App\Modelos\Pin;
use School\App\Modelos\Estudiante;


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


    public function registroEstudiante(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
               
                'repitente' => 'required',
                'tipoIdent_estudiante' => 'required',
                'numIdent_estudiante' => 'required|integer',
                'dptExp_estudiante' => 'required',
                'mpioExp_estudiante' => 'required',
                'nom1_estudiante' => 'required',
                'apll1_estudiante' => 'required',
                'gnro_estudiante' => 'required',
                'fchaNaci_estudiante' => 'required',
                'dptNaci_estudiante' => 'required',
                'mpioNaci_estudiante' => 'required',
                'dirReci_estudiante' => 'required',
                'dptReci_estudiante' => 'required',
                'mpioReci_estudiante' => 'required',
                'brioReci_estudiante' => 'required',
                'zna_estudiante' => 'required',
                'nvel_estudiante' => 'required',
                'nvelEst_estudiante' => 'required',
                'eps_estudiante' => 'required',
                'tfono_estudiante' => 'required',
                'ftorRh_estudiante' => 'required',
                'dcidad_estudiante' => 'required',
                'situAcad_estudiante' => 'required',


            ]
        );

            if ($validator->fails())
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));

            if($request->input('_alumno') == '0')
              return $this->guardar_estudiante($request->all());
            else
                return view('ejemplo');
            //$this->modificar($request->all());

    }


    public function guardar_estudiante($input)
    {
        $model_A = new Estudiante;
        return $this->crear_estudiante($model_A, $input);
    }

    public function crear_estudiante($model, $input)
    {
        
        $model['tipo_documento'] = $input['tipoIdent_estudiante'];
        $model['documento'] = $input['numIdent_estudiante'];
        $model['dpto_expdicion'] = $input['dptExp_estudiante'];
        $model['mpio_expdicion'] = $input['mpioExp_estudiante'];
        $model['pmer_nombre'] = $input['nom1_estudiante'];
        $model['sndo_nombres'] = $input['nom2_estudiante'];
        $model['pmer_apellido'] = $input['apll1_estudiante'];
        $model['sndo_apellido'] = $input['apll2_estudiante'];
        $model['genero'] = $input['gnro_estudiante'];
        $model['fecha_nacimiento'] = $input['fchaNaci_estudiante'];
        $model['dpto_nacimiento'] = $input['dptNaci_estudiante'];
        $model['mpio_nacimiento'] = $input['mpioNaci_estudiante'];
        $model['direccion'] = $input['dirReci_estudiante'];
        $model['dpto_recidencia'] = $input['dptReci_estudiante'];
        $model['mpio_recidencia'] = $input['mpioReci_estudiante'];
        $model['brio_recidencia'] = $input['brioReci_estudiante'];
        $model['zona'] = $input['zna_estudiante'];
        $model['nivel_sisben'] = $input['nvel_estudiante'];
        $model['estrato'] = $input['nvelEst_estudiante'];
        $model['eps'] = $input['eps_estudiante'];
        $model['telefono'] = $input['tfono_estudiante'];
        $model['rh'] = $input['ftorRh_estudiante'];
        $model['discapacidad'] = $input['dcidad_estudiante'];
        $model['situacion_academica'] = $input['situAcad_estudiante'];
        $model->save();
         //'repitente' => 'required'
        return $model;
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
