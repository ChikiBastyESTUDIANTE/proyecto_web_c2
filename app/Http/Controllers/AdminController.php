<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use App\Models\Profesor;

class AdminController extends Controller
{
    // public function iniciar(Request $request){ //No es lo mas optimo pero es para que funcione en este caso
    //     return redirect()->route('admin.menu');
    // }
    public function menu(){
        $profesores = Profesor::all();
        $estudiantes = Estudiante::all();
        return view('administrador.index',compact(['profesores','estudiantes']));
    }
    public function propuestas(){
        $propuestas = Propuesta::all();
        return view('administrador.propuestas',compact('propuestas'));
    }
    public function estado(Propuesta $propuesta){
        return view('administrador.estado',compact('propuesta'));
    }

    public function cambiarEstado(Propuesta $propuesta, Request $request){
        $propuesta->estado = $request->estado;
        $propuesta->save();
        return redirect()->route('admin.propuestas');
    }
}
