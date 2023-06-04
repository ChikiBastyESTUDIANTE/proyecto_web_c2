<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioSesionController extends Controller
{
    public function index(){
        //Acá se elige tipo de login
        return view('inicio.index');
    }
    public function ingresarAdmin(){
        //Acá se ponen los datos y se entra
        return view('inicio.ingresar');
    }
    public function ingresarEstudiante(){
        //Acá se ponen los datos y se entra
        return view('inicio.ingresar');
    }
    public function ingresarProfesor(){
        //Acá se ponen los datos y se entra
        $profesores = Profesor::all();
        return view('inicio.ingresar');
    }
}
