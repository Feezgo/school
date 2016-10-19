<?php

namespace School\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use School\Http\Requests;
use School\App\Modelos\Pin;
use School\App\Modelos\Estudiante;
use School\App\Modelos\Familiar;
use School\App\Modelos\HistoriaAcademica;
use School\App\Modelos\departamento;
use School\App\Modelos\Discapacidad;
use School\App\Modelos\Situacion;


class AlumnoController extends Controller
{
    //

    public function formularioPin()
    {
        return view('form_pin');
    }

    public function formularioInscripcion()
    {
        
        $model = new departamento;
        $model2 = new Discapacidad;
        $model3 = new Situacion;
        $datos = [
            'departamento' => $model->all(),
            'discapacidad' => $model2->all(),
            'situacion' => $model3->all(),
        ];
        return view('formulario',$datos);
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




     public function registro_acudiente(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
               
                'ptesco_acudi' => 'required',
                'cedu_acudi' => 'required|integer',
                'pmerNom_acudi' => 'required',
                'pmerApell_acudi' => 'required',
                'tfono_acudi' => 'required',
                'celu_acudi' => 'required',
            ]
        );

            if ($validator->fails())
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));

            if($request->input('_acudiente') == '0')
              return $this->crear_acudiente($request->all());
            else
                return view('ejemplo');
            //$this->modificar($request->all());

    }

 

    public function crear_acudiente($input)
    {
        $model_A = new Familiar;
        $model_A['pmer_nombre'] = $input['pmerNom_mama'];
        $model_A['sndo_nombres'] = $input['sdoNom_mama'];
        $model_A['pmer_apellido'] = $input['pmerApell_mama'];
        $model_A['sndo_apellido'] = $input['sdoApell_mama'];
        $model_A['identificacion'] = $input['cdla_mama'];
        $model_A['ocupacion'] = $input['ocup_mama'];
        $model_A['empresa'] = $input['empr_mama'];
        $model_A['telefono'] = $input['tfono_mama'];
        $model_A['celular'] = $input['celu_mama'];
        $model_A['parentesco'] = "madre";
        $model_A['parentesco_otro'] = "";
        $model_A->save();

        $model_B = new Familiar;
        $model_B['pmer_nombre'] = $input['pmerNom_papa'];
        $model_B['sndo_nombres'] = $input['sdoNom_papa'];
        $model_B['pmer_apellido'] = $input['pmerApell_papa'];
        $model_B['sndo_apellido'] = $input['sdoApell_papa'];
        $model_B['identificacion'] = $input['cedu_papa'];
        $model_B['ocupacion'] = $input['ocup_papa'];
        $model_B['empresa'] = $input['empr_papa'];
        $model_B['telefono'] = $input['tfono_papa'];
        $model_B['celular'] = $input['celu_papa'];
        $model_B['parentesco'] = "padre";
        $model_B['parentesco_otro'] = "";
        $model_B->save();

        $model_C = new Familiar;
        $model_C['pmer_nombre'] = $input['pmerNom_acudi'];
        $model_C['sndo_nombres'] = $input['sdoNom_acudi'];
        $model_C['pmer_apellido'] = $input['pmerApell_acudi'];
        $model_C['sndo_apellido'] = $input['sdoApell_acudi'];
        $model_C['identificacion'] = $input['cedu_acudi'];
        $model_C['ocupacion'] = "";
        $model_C['empresa'] = "";
        $model_C['telefono'] = $input['tfono_acudi'];
        $model_C['celular'] = $input['celu_acudi'];
        $model_C['parentesco'] = $input['ptesco_acudi'];
        $model_C['parentesco_otro'] = "";
        $model_C->save();


         //'repitente' => 'required'
        return $model_C;
    }


     public function registro_academico(Request $request)
    {


        
        $ano = $request->input('ano');
        $caracter = $request->input('caracter');
        $institucion = $request->input('institucion');
        $i=0;

        foreach($request->get('grado') as $key => $value)
        {
            $modelHistoriaAcademica = new HistoriaAcademica;
            $modelHistoriaAcademica['id_estudiante'] = "1";
            $modelHistoriaAcademica['ano'] = $ano[$i];
            $modelHistoriaAcademica['institucion'] = $institucion[$i];
            $modelHistoriaAcademica['grado'] = $value;
            $modelHistoriaAcademica['caracter'] = $caracter[$i];
            $modelHistoriaAcademica->save();
            $i++;
        }
        return $modelHistoriaAcademica;

        

    }





    public function registroFormPin(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
               
                'nom_acudiente' => 'required',
                'nom_alumno' => 'required',
                'numIdnt_alumno' => 'required|integer',
                'email_acudiente' => 'required|email',
                'numTelef_acudiente' => 'required',
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
        $model['telefono_acudiente'] = $input['numTelef_acudiente'];
        $model['grado_aspira'] = $input['grdo_aspira'];
        $model['tipo_estudiante'] = $input['tipo_estudiante'];
        $model['pin'] = $this->generarCodigo(6);
        $model->save();

        return $model;
    }

    public function generarCodigo($longitud) {
     $key = '';
     $pattern = '123456789abcdefghijklmnopqrstuvwxyz';
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
    



    public function registro_file(Request $request)
    {
    $validator = Validator::make($request->all(),
            [
                'registroCivilT' => 'required|mimes:jpeg,jpg,png,bmp,pdf'
            ]
        );

        $randName = md5(rand() * time());


        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }else{

            if ($request->hasFile('registroCivilT')) {
                $file3=$request->file('registroCivilT');
                $extension3=$file3->getClientOriginalExtension();
                $Nom_imagen3 = $randName."-registroCivilT.".$extension3;
                $file3->move(public_path().'/Documentos/', $Nom_imagen3);
                $ruta="Documentos/".$Nom_imagen3;

            }else{
                $Nom_imagen3="";
            }
            return response()->json(array('status' => $ruta));

        }
    }


    public function getMunicipio(Request $request, $id)
    {
        $model = new departamento;
        $datos = $model::with('municipios')->where('id', '=', $id)->get();;
        
        return $datos;
    }
}
