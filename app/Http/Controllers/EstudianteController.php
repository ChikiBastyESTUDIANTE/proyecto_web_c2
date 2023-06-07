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

    public function login(){
        $estudiantes = Estudiante::all();
        return view('estudiante.login',compact('estudiantes'));
    }

    public function login2(Request $request){
        return redirect()->route('estudiante.menu',$request->estudiante);
    }

    public function menu(Request $request){
        $estudiante = Estudiante::where('rut',$request->estudiante);
        dd($estudiante);
        $propuestas = Propuesta::all();
        return view('estudiante.menu',compact(['estudiante','propuestas']));
    }


    public function subirArchivo(Request $request){
        
    }
}
