<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioSesionConroller extends Controller
{
    public function index(){
        //Acá se elige tipo de login
        return view('inicio.index');
    }
    public function ingresar(){
        //Acá se ponen los datos y se entra
        return view('inicio.ingresar');
    }
}
