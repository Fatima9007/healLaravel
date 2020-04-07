<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_Controller extends Controller
{
    public function inicio(){
        return view('hola');
    }
    public function perfil(){
        return view('perfil');
    }

    public function Nuevo(){
        return view('Nuevo_Paciente');
    }
    public function Lista(){
        return view('Lista_paciente');
    }


}
