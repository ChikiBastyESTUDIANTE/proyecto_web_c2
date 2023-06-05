<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;

class EstudianteController extends Controller
{
    public function iniciar(Request $request){
        return redirect()->route('estudiante.menu',['id'=>$request->id]);
    }

    public function index($id){
        $estudiante = Estudiante::where('rut',$id)->first();
        $propuestas = Propuesta::where('estudiante_rut',$id)->get();
        return view('estudiante.index',compact(['estudiante','propuestas']));
    }

    public function subirArchivo(Request $request){
        
    }
}
