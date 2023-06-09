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

    public function conseguirDatos(Request $request){
        return redirect()->route('estudiante.menu',$request->estudiante);
    }
    //creo que debe haber una manera de hacer esto en 1 funcion pero no se me ocurre otra manera xd
    public function menu(Request $request){
        $estudiante = Estudiante::where('rut',$request->estudiante)->first();
        $propuestas = Propuesta::where('estudiante_rut',$estudiante->rut)->get();
        return view('estudiante.menu',compact(['estudiante','propuestas']));
    }


    public function subirArchivo($estudiante,Request $request){
        $request->file('archivo')->storeAs('archivos_propuestas','prueba','public');
        $propuesta = new Propuesta();
        $propuesta->documento = $request->file('archivo');
        $propuesta->fecha = Carbon::now();
        $propuesta->estado = 1;
        $propuesta->estudiante_rut = $estudiante;
        $propuesta->save();
        return redirect()->route('estudiante.menu',$request->estudiante);
    }
}
