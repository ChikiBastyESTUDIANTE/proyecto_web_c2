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
        return view('administrador.index');
    }
    public function propuestas(){
        $propuestas = Propuesta::all();
        return view('administrador.propuestas',compact('propuestas'));
    }
}
