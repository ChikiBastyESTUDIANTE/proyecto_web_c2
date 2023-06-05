<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;

class ProfesorController extends Controller
{
    public function iniciar(Request $request){
        //return $request->id;
        return redirect()->route('profesor.menu',$request->id);
    }

    public function index(Profesor $profesor){
        return $profesor->nombre;
        // $propuestas = Propuesta::all();
        // return view('profesor.index',compact(['profesor','propuestas']));
    }
}
