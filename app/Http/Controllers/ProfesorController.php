<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function iniciar(Request $request){
        return redirect()->route('profesor.menu',$request->id);
    }

    public function index(Profesor $profesor){
        return view('profesor.index');
    }
}
