<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function iniciar(Request $request){
        return redirect()->route('estudiante.menu',$request->id);
    }

    public function index(){
        return view('estudiante.index');
    }
}
