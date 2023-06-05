<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;

class ProfesorController extends Controller
{
    public function iniciar(Request $request){
        $profesores = Profesor::with('id_rut')->$request->id;
        return $profesores->id;
        // return redirect()->route('profesor.menu',$profesores->id);
    }

    public function index(Profesor $profesor){
        return $profesor->id;
        // $propuestas = Propuesta::all();
        // return view('profesor.index',compact(['profesor','propuestas']));
    }
}
