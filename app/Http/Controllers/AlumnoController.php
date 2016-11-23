<?php

namespace School\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Validator;
use File;
use School\App\Modelos\Pin;
use School\App\Modelos\Estudiante;
use School\App\Modelos\Familiar;
use School\App\Modelos\HistoriaAcademica;
use School\App\Modelos\departamento;
use School\App\Modelos\Discapacidad;
use School\App\Modelos\Situacion;
use School\App\Modelos\documentos;
use School\App\Modelos\Matricula;
use School\Mail\RegistroPin;
use Illuminate\Support\Facades\Auth;
use PDF;
use Carbon;

class AlumnoController extends Controller
{
    //


    public function descargar_doc(Request $request)
    {

  
        switch ($request->input('operacion')) {
            case 'matricula':
                
                $model_Estu = Estudiante::with('departamento1','municipio1','discapacidad','situacion','familiar','historiasAcademicas')->find($request->input('id_estudiante'));
                $model_Matr = Matricula::with('grado')->find($request->input('id_matri'));
          
                $datos = [
                        'matricula' => $model_Matr,
                        'estudiante' => $model_Estu,
                    ];
                 //dd($datos);
                 //exit();
                $html = view('matricula')->with($datos)->render();
                $pdf = PDF::load($html);

                return $pdf->download();
            break;
            case 'contrato':
                $model_Estu = Estudiante::with('departamento1','municipio1','discapacidad','situacion','familiar','historiasAcademicas')->find($request->input('id_estudiante'));
                $model_Matr = Matricula::with('grado')->find($request->input('id_matri'));
          
                $datos = [
                        'matricula' => $model_Matr,
                        'estudiante' => $model_Estu,
                    ];
                 //dd($datos);
                 //exit();
                $html = view('contrato')->with($datos)->render();
                $pdf = PDF::load($html);

                return $pdf->download();
            break;
        }
    }
     public function buscar_matricula(Request $request)
    {
        
        $model = new Estudiante;
        $identificacion = $request['identificacion'];
        $dat = $model::select('*')->where('documento', '=', $identificacion)->get();
        


        if(count($dat)>0){
            $id_e =  $dat[0]['attributes']['id'];
            $model_A = Matricula::where('id_estudiante',$id_e)->get();
        }
        else{
            $model_A=null;            
        }

        $datos = [
                'matricula' => $model_A,
            ];

        return view('docMatricula',$datos);
    }


   public function buscar_formulario(Request $request){

        $model = new Pin;
        $identificacion = $request['identificacion'];
        $datos = $model::select('*')->where('num_identidad_alumno', '=', $identificacion)->get();
       
        $pin =  $datos[0]['attributes']['pin'];
        $grado =  $datos[0]['attributes']['grado_aspira'];
        $tip_est =  $datos[0]['attributes']['tipo_estudiante'];
        if(empty($pin)){'Identificacion no registrada';exit();}
        else{


      

            $model_E = Estudiante::with('departamento','departamento1','departamento2','municipio','municipio1','municipio2','discapacidad','situacion','familiar','historiasAcademicas')->where('documento',$identificacion)->get();
            

            if(count($model_E)>0){ 
                foreach ($model_E as $model_) 
                { 
                    $_SESSION['Estudiante']=$model_->documento; 
                    session('Estudiante','default'); 
                    session(['Estudiante' => $model_->documento]); 
                } 
            }else{ 
                $_SESSION['Estudiante']=0; 
                    session('Estudiante','default'); 
                    session(['Estudiante' => $identificacion]); 
            } 

            $model = new departamento;
            $model2 = new Discapacidad;
            $model3 = new Situacion;
            $identidad= $identificacion;
            $datos = [
                'estudiante' => $model_E,
                'departamento' => $model->all(),
                'discapacidad_m' => $model2->all(),
                'situacion_m' => $model3->all(),
                'identidad'=>$identidad,
                'acudiente'=>$identidad,
                'administrativo'=>true,
                'grado_aspira'=>$grado,
                'tipo_estudi'=>$tip_est,
            ];
            //dd($datos);
            //exit();
            return view('formulario',$datos);
        

        }

   }

    public function formularioPin()
    {
        return view('form_pin');
    }

    public function loginPin()
    {
        return view('login_pin');
    }

    public function validacionPin(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'num_identidad'    => 'required',
                'pin' => 'required',
            ]);
        if ($validator->fails()){
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
        }
        else{
            $model = new Pin;
            $datos = $model::where('num_identidad_alumno', '=', $request['num_identidad'])->where('pin', '=', $request['pin'])->get();

            if(count($datos)>0){
                return response()->json($datos);
            }
            else{
                return response()->json(array('status' => 'invalido', 'invalido' => $validator->errors()));
            }
        }
        
    }

    public function formularioInscripcion()
    {
       // $model_E = new Estudiante;
        $model = new departamento;
        $model2 = new Discapacidad;
        $model3 = new Situacion;
        $datos = [
        //    'estudiante' => $model_E->where('documento',$request->input('identidad'))->get(),
            'departamento' => $model->all(),
            'discapacidad' => $model2->all(),
            'situacion' => $model3->all(),
        ];
        return view('formulario',$datos);
    }

    public function validacionEstudiante(Request $request)
    {


        $this->validate($request, [
                'num_identidad' => 'required', 'El numero de identidad es requerido',
                'pin' => 'required','El pin es requerido',
            ]);

        $model = new Pin;
        $datos = $model::where('num_identidad_alumno', '=', $request['num_identidad'])->where('pin', '=', $request['pin'])->get();

        if(count($datos)>0)
        {    

            $model_E = Estudiante::with('departamento','departamento1','departamento2','municipio','municipio1','municipio2','discapacidad','situacion','familiar','historiasAcademicas')->where('documento',$request->num_identidad)->get();
            

              if(count($model_E)>0){ 
                foreach ($model_E as $model_) 
                { 
                    $_SESSION['Estudiante']=$model_->documento; 
                    session('Estudiante','default'); 
                    session(['Estudiante' => $model_->documento]); 
                } 
            }else{ 
                $_SESSION['Estudiante']=0; 
                    session('Estudiante','default'); 
                    session(['Estudiante' => $request->num_identidad]); 
            } 

            $model = new departamento;
            $model2 = new Discapacidad;
            $model3 = new Situacion;
            $identidad= $request['num_identidad'];
            $datos = [
                'estudiante' => $model_E,
                'departamento' => $model->all(),
                'discapacidad_m' => $model2->all(),
                'situacion_m' => $model3->all(),
                'identidad'=>$identidad,
                'acudiente'=>$identidad,
                'administrativo'=>false,
                'grado_aspira'=>'',
                'tipo_estudi'=>'',
            ];
            //dd($datos);
            //exit();
            return view('formulario',$datos);
        }else{
            return view('datoserroneos');
        }
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
                return $this->modificar_estudiante($request->all());

    }


     public function registro_matricula(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
               
                'matri_num_alumn' => 'required',
                'matri_folio' => 'required|integer',
                'matri_grdo' => 'required',
                'matri_ano' => 'required',
                'matri_tipo_estudiante' => 'required',
            ]
        );

            if ($validator->fails())
            return response()->json(array('status' => 'error', 'errors' => $validator->errors()));

            if($request->input('matri_num_alumn') != '0')
             return $this->guardar_matricula($request->all());
            else
             return response()->json(array('status' => 'error', 'errors' => $validator->errors()));

    }

    public function guardar_matricula($input)
    {
        

        $model_E = Estudiante::where('documento',$input['matri_num_alumn'])->get();
            
            if(count($model_E)>0){ 
                foreach ($model_E as $model_) 
                    { 
                        $id_e=$model_->id; 
                    }
            } 
        $model_M = Matricula::where('id_estudiante',$id_e)->where('ano',$input['matri_ano'])->get();

            if(count($model_M)>0){ 
                foreach( $model_M as $model_mm ) {
                    $idEst= $model_mm->id;
                }
                $model_A = Matricula::find($idEst);
                return $this->crear_matricula($model_A, $input,1);
            }else{
                $model_A = new Matricula;
                return $this->crear_matricula($model_A, $input,2);
            }
    }

    public function crear_matricula($model, $input , $var)
    {

         $model_E = Estudiante::where('documento',$input['matri_num_alumn'])->get();
            
            if(count($model_E)>0){ 
                foreach ($model_E as $model_) 
                    { 
                        $id_e=$model_->id; 
                    }
            } 
            $grad=0;

         
            if(strcmp ($input['matri_grdo'],"Pre-kinder")==0){$grad=1;}
            if(strcmp ($input['matri_grdo'],"kinder")==0){$grad=2;}
            if(strcmp ($input['matri_grdo'],"Transición")==0){$grad=3;}
            if(strcmp ($input['matri_grdo'],"1")==0){$grad=4;}
            if(strcmp ($input['matri_grdo'],"2")==0){$grad=5;}
            if(strcmp ($input['matri_grdo'],"3")==0){$grad=6;}
            if(strcmp ($input['matri_grdo'],"4")==0){$grad=7;}
            if(strcmp ($input['matri_grdo'],"5")==0){$grad=8;}
            if(strcmp ($input['matri_grdo'],"6")==0){$grad=9;}
            if(strcmp ($input['matri_grdo'],"7")==0){$grad=10;}
            if(strcmp ($input['matri_grdo'],"8")==0){$grad=11;}
            if(strcmp ($input['matri_grdo'],"9")==0){$grad=12;}
            if(strcmp ($input['matri_grdo'],"10")==0){$grad=13;}
            if(strcmp ($input['matri_grdo'],"11")==0){$grad=14;}


        $model['id_estudiante'] = $id_e;
        $model['folio'] = $input['matri_folio'];
        $model['fecha_matricula'] = date("Y-m-d");
        $model['numero_matricula'] = $id_e;
        $model['foto'] = '';
        $model['motivo_retiro'] = '';    
        $model['sede'] = $input['matri_sede'];
        $model['jornada'] = $input['matri_jornada'];
        $model['tipo'] = $input['matri_tipo_estudiante'];
        $model['grado'] = $grad;
        $model['repitente'] = $input['matri_repitente'];
        $model['ano'] = $input['matri_ano'];

        if($var==2){
            $model->save();
        }
        else{
            $model->save();
            $model=1;
        }

        return $model;
    }


    public function guardar_estudiante($input)
    {
        $model_A = new Estudiante;
        return $this->crear_estudiante($model_A, $input);
    }
    public function modificar_estudiante($input)
    {

        $model_A = Estudiante::find($input["_alumno"]);
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
                return $this->guardar_acudiente($request->all());
            else
                return $this->modificar_acudiente($request->all());

    }


    public function guardar_acudiente($input)
    {
        
        $model_A = new Familiar;
        $model_B = new Familiar;
        $model_C = new Familiar;
        return $this->crear_acudiente($model_A,$model_B,$model_C,$input);
    }

    public function modificar_acudiente($input)
    {
        $model_A = new Familiar;
        $model_A =$model_A->find($input["id_mam"]);
        $model_B = new Familiar;
        $model_B =$model_B->find($input["id_pap"]);
        $model_C = new Familiar;
        $model_C =$model_C->find($input["id_acu"]);
        return $this->crear_acudiente($model_A,$model_B,$model_C,$input);
    }

 

    public function crear_acudiente($model_A,$model_B,$model_C,$input)
    {
        
        $model = Estudiante::where('documento',$input['numIdent_estudiante'])->get();
        foreach ($model as $user)
            {
                $id_est=$user->id;
            }
        if(count($model_A)>0){
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
            $model_A['acudiente'] = "No";
            $model_A['id_estudiante'] = $id_est;
            $model_A->save();
        }

        if(count($model_B)>0){
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
            $model_B['acudiente'] = "No";
            $model_B['id_estudiante'] = $id_est;
            $model_B->save();
        }

              
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
            $model_C['acudiente'] = "Si";
            $model_C['id_estudiante'] = $id_est;

            $model_C->save();
        


         //'repitente' => 'required'
        return $model_C;
    }




     public function registro_academico(Request $request)
    {

        if($request->input('_academica') == '0')
                return $this->crear_academico($request->all());
        else
                return $this->modificar_academico($request->all());

    }

    public function crear_academico($input){

        $ano = $input['ano'];
        $caracter = $input['caracter'];
        $institucion = $input['institucion'];
        $model = Estudiante::where('documento',$input['numIdent_estudiante'])->get();
        foreach ($model as $user)
            {
                $id_est=$user->id;
            }
        $i=0;
       // dd($id_est);
       // exit();
        foreach($input['grado'] as $key => $value)
        {
            $modelHistoriaAcademica = new HistoriaAcademica;
            $modelHistoriaAcademica['id_estudiante'] = $id_est;
            $modelHistoriaAcademica['ano'] = $ano[$i];
            $modelHistoriaAcademica['institucion'] = $institucion[$i];
            $modelHistoriaAcademica['grado'] = $value;
            $modelHistoriaAcademica['caracter'] = $caracter[$i];
            $modelHistoriaAcademica->save();
            $i++;
        }
        return $modelHistoriaAcademica;
    }

    public function modificar_academico($input){

        $id_mol = $input['id'];
        $ano = $input['ano'];
        $caracter = $input['caracter'];
        $institucion = $input['institucion'];
        $model = Estudiante::where('documento',$input['numIdent_estudiante'])->get();
        foreach ($model as $user)
            {
                $id_est=$user->id;
            }
        $i=0;
       // dd($id_est);
        $_modicar_val = $input['_modicar_val']-13;
       // exit();
        foreach($input['grado'] as $key => $value)
        {
            $modelHistoriaAcademica = new HistoriaAcademica;
            $modelHistoriaAcademica=$modelHistoriaAcademica->find($id_mol[$i]);
            if(count($modelHistoriaAcademica)>0){
                $modelHistoriaAcademica['id_estudiante'] = $id_est;
                $modelHistoriaAcademica['ano'] = $ano[$i];
                $modelHistoriaAcademica['institucion'] = $institucion[$i];
                $modelHistoriaAcademica['grado'] = $value;
                $modelHistoriaAcademica['caracter'] = $caracter[$i];
                $modelHistoriaAcademica->save();
            }
            else{
                $modelHistoriaAcademica = new HistoriaAcademica;
                $modelHistoriaAcademica=$modelHistoriaAcademica->find($_modicar_val);
                if(count($modelHistoriaAcademica)>0){
                    $modelHistoriaAcademica['id_estudiante'] = $id_est;
                    $modelHistoriaAcademica['ano'] = $ano[$i];
                    $modelHistoriaAcademica['institucion'] = $institucion[$i];
                    $modelHistoriaAcademica['grado'] = $value;
                    $modelHistoriaAcademica['caracter'] = $caracter[$i];
                    $modelHistoriaAcademica->save();
                    $_modicar_val++;
                }
                
            }
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
                'num_identidad_alumno' => [
                                        'required',
                                        'integer',
                                        Rule::unique('pin')->where(function ($query) use ($request){
                                            $query->whereRaw('YEAR(created_at) = "'.date('Y').'"');
                                        })
                                    ],
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
        $model['num_identidad_alumno'] = $input['num_identidad_alumno'];
        $model['email_acudiente'] = $input['email_acudiente'];
        $model['telefono_acudiente'] = $input['numTelef_acudiente'];
        $model['grado_aspira'] = $input['grdo_aspira'];
        $model['tipo_estudiante'] = $input['tipo_estudiante'];
        $model['pin'] = $this->generarCodigo(6);
        $model->save();

        Mail::to($model['email_acudiente'])->send(new RegistroPin($model['num_identidad_alumno'], $model['pin']));

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
    

        public function delete_file(Request $request)
    {
        
        if (!File::exists($request->url)){
            return response()->json(array('status' => 'error', 'errors' =>'El fichero no existe.'));
        }else{            
               $id_estudiante=$request->session()->get('Estudiante');
                if(Documentos::where('id_estudiante',$id_estudiante)->count('id')>=1){
                    $consulta=Documentos::where('id_estudiante',$id_estudiante)->get();
                    $i=0;
                    $a = (array) json_decode($consulta[0]['documentos']);
                    foreach ($a as $b => $value) {
                        $i++;
                        if($request->num == $i){$a[$b]='';}
                    }
                    Documentos::where('id_estudiante',$id_estudiante)->update(['documentos' => json_encode($a)]);
                    File::delete($request->url);
                    return response()->json(array('status' => 'borrado'));
                }

        }
    }

    public function traer_ficheros_estudiante(Request $request){

                $id_estudiante=$request->session()->get('Estudiante');
                if(Documentos::where('id_estudiante',$id_estudiante)->count('id')>=1){
                    $consulta=Documentos::where('id_estudiante',$id_estudiante)->get();
                   
                    $a = (array) json_decode($consulta[0]['documentos']);
                    $documentos = array(
                    'registroCivilT'  => $a['registroCivilT'], 
                    'certificadomedico'=>  $a['certificadomedico'],
                    'certificacioneps'=>  $a['certificacioneps'],
                    'cedulapadre'=>  $a['cedulapadre'],
                    'referencialaboral'=>  $a['referencialaboral'],
                    'carnetvacunas'=>  $a['carnetvacunas'],
                    'pazysalvo'=>  $a['pazysalvo'],
                    'boletinfinal'=>  $a['boletinfinal'],
                    'retirosimat'=> $a['retirosimat'] 
                    );             
                }else{
                    $documentos = array(
                    'registroCivilT'  => '', 
                    'certificadomedico'=> '',
                    'certificacioneps'=> '',
                    'cedulapadre'=> '',
                    'referencialaboral'=> '',
                    'carnetvacunas'=> '',
                    'pazysalvo'=> '',
                    'boletinfinal'=> '',
                    'retirosimat'=>'' 
                    );             
                }
                return response()->json($documentos);
    }


    public function registro_file(Request $request)
    {           
               $id_estudiante=$request->session()->get('Estudiante');
                if(Documentos::where('id_estudiante',$id_estudiante)->count('id')>=1){
                    $consulta=Documentos::where('id_estudiante',$id_estudiante)->get();
                   
                    $a = (array) json_decode($consulta[0]['documentos']);
                    $documentos = array(
                    'registroCivilT'  =>  $a['registroCivilT'], 
                    'certificadomedico'=>  $a['certificadomedico'],
                    'certificacioneps'=>  $a['certificacioneps'],
                    'cedulapadre'=>  $a['cedulapadre'],
                    'referencialaboral'=>  $a['referencialaboral'],
                    'carnetvacunas'=>  $a['carnetvacunas'],
                    'pazysalvo'=>  $a['pazysalvo'],
                    'boletinfinal'=>  $a['boletinfinal'],
                    'retirosimat'=> $a['retirosimat'] 
                    );             
                }else{
                    $documentos = array(
                    'registroCivilT'  => '', 
                    'certificadomedico'=> '',
                    'certificacioneps'=> '',
                    'cedulapadre'=> '',
                    'referencialaboral'=> '',
                    'carnetvacunas'=> '',
                    'pazysalvo'=> '',
                    'boletinfinal'=> '',
                    'retirosimat'=>'' 
                    );             
                }
                
                if(!is_null($request->file('registroCivilT'))){ $validator = Validator::make($request->all(),['registroCivilT' => 'required|mimes:jpeg,jpg,png,bmp,pdf']); $file=$request->file('registroCivilT');}
                if(!is_null($request->file('certificadomedico'))){ $validator = Validator::make($request->all(),['certificadomedico' => 'required|mimes:jpeg,jpg,png,bmp,pdf']); $file=$request->file('certificadomedico');}
                if(!is_null($request->file('certificacioneps'))){ $validator = Validator::make($request->all(),['certificacioneps' => 'required|mimes:jpeg,jpg,png,bmp,pdf']); $file=$request->file('certificacioneps');}
                if(!is_null($request->file('cedulapadre'))){ $validator = Validator::make($request->all(),['cedulapadre' => 'required|mimes:jpeg,jpg,png,bmp,pdf']); $file=$request->file('cedulapadre');}
                if(!is_null($request->file('referencialaboral'))){  $validator = Validator::make($request->all(),['referencialaboral' => 'required|mimes:jpeg,jpg,png,bmp,pdf']); $file=$request->file('referencialaboral');}
                if(!is_null($request->file('carnetvacunas'))){  $validator = Validator::make($request->all(),['carnetvacunas' => 'required|mimes:jpeg,jpg,png,bmp,pdf']); $file=$request->file('carnetvacunas');}
                if(!is_null($request->file('pazysalvo'))){  $validator = Validator::make($request->all(),['pazysalvo' => 'required|mimes:jpeg,jpg,png,bmp,pdf']); $file=$request->file('pazysalvo');}
                if(!is_null($request->file('boletinfinal'))){  $validator = Validator::make($request->all(),['boletinfinal' => 'required|mimes:jpeg,jpg,png,bmp,pdf']); $file=$request->file('boletinfinal');}
                if(!is_null($request->file('retirosimat'))){  $validator = Validator::make($request->all(),['retirosimat' => 'required|mimes:jpeg,jpg,png,bmp,pdf']) ; $file=$request->file('retirosimat');}
               
                $randName = md5(rand() * time());
                if ($validator->fails()){
                    return response()->json(array('status' => 'error', 'errors' => $validator->errors()));
                }else{        
                $extension3=$file->getClientOriginalExtension();
                $Nom_imagen3 = $randName."-doc.".$extension3;
                $file->move(public_path().'/Documentos/', $Nom_imagen3);
                $ruta="Documentos/".$Nom_imagen3;
                        
                if(!is_null($request->file('registroCivilT'))){ $documentos['registroCivilT']= $ruta; }
                if(!is_null($request->file('certificadomedico'))){ $documentos['certificadomedico']= $ruta; }
                if(!is_null($request->file('certificacioneps'))){ $documentos['certificacioneps']= $ruta; }
                if(!is_null($request->file('cedulapadre'))){ $documentos['cedulapadre']= $ruta; }
                if(!is_null($request->file('referencialaboral'))){  $documentos['referencialaboral']= $ruta; }
                if(!is_null($request->file('carnetvacunas'))){  $documentos['carnetvacunas']= $ruta; }
                if(!is_null($request->file('pazysalvo'))){  $documentos['pazysalvo']= $ruta; }
                if(!is_null($request->file('boletinfinal'))){  $documentos['boletinfinal']= $ruta; }
                if(!is_null($request->file('retirosimat'))){  $documentos['retirosimat']= $ruta; }
                if(Documentos::where('id_estudiante',$id_estudiante)->count('id')>=1){
                Documentos::where('id_estudiante',$id_estudiante)->update(['documentos' => json_encode($documentos)]);
                }else{
                Documentos::insert(['id_estudiante' => $id_estudiante, 'documentos' => json_encode($documentos) ]);
                }
                return response()->json(array('status' => $ruta));
                }
    }


    public function getMunicipio(Request $request, $id)
    {
        $model = new departamento;
        $datos = $model::with('municipios')->where('id', '=', $id)->get();
        
        return $datos;
    }
}
