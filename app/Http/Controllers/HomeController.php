<?php

namespace School\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function validar()
    {
        return view('validar_matricula');
    }

     public function matricula()
    {
        return view('buscadorMatricula');
    }

    public function registrar()
    {
        return view('auth.register');
    }
        
}
