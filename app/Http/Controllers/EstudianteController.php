<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use Carbon\Carbon;

class EstudianteController extends Controller
{
    // public function iniciar(Request $request){
    //     return redirect()->route('estudiante.menu',['id'=>$request->id]);
    // }

    // public function index($id){
    //     $estudiante = Estudiante::where('rut',$id)->first();
    //     $propuestas = Propuesta::where('estudiante_rut',$id)->get();
    //     return view('estudiante.index',compact(['estudiante','propuestas']));
    // }


    public function menu(){
        $propuestas = Propuesta::all();
        $estudiantes = Estudiante::all();
        return view('estudiante.index',compact(['propuestas','estudiantes']));
    }

    public function subirArchivo(Request $request){
        
    }
}
