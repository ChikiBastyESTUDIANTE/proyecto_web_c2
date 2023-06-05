<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;

class ProfesorController extends Controller
{
    public function iniciar(Request $request){
        return redirect()->route('profesor.menu',$request->id);
    }

    public function index(Profesor $profesor){
        $propuestas = Propuesta::all();
        return view('profesor.index',compact(['profesor','propuestas']));
    }
}
