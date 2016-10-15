<?php

namespace School\Http\Controllers;

use Illuminate\Http\Request;

use School\Http\Requests;

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
    	dd($request);
        return view('ejemplo');
    }

}
