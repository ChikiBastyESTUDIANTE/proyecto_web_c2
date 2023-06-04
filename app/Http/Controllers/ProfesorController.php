<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function iniciar(Request $request, Profesor $profesor){
        return route('profesor.menu',$request->correo);
    }

    public function index(Profesor $profesor){
        return view('profesor.index');
    }
}
