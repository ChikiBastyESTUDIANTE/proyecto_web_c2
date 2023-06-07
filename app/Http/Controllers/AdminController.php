<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function iniciar(Request $request){ //No es lo mas optimo pero es para que funcione en este caso
    //     return redirect()->route('admin.menu');
    // }
    public function menu(){
        return view('administrador.index');
    }
    public function propuestas(){
        $propuestas = propuesta::orderBy('id')->get();
        return view('administrador.propuestas',compact('propuestas'));
    }
}
