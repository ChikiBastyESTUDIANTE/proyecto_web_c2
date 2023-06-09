<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;
use Carbon\Carbon;

class ProfesorController extends Controller
{
    // public function iniciar(Request $request){
    //     //return redirect()->route('profesor.menu',$request->id); NO FUNCIONO ESTO TUVE QUE BUSCAR PARA HACER QUE ESTO FUNCIONE
    //     return redirect()->route('profesor.menu',['id'=>$request->id]);
    // }
    // //public function index(Profesor $profesor) ASI ESTABA ANTES 
    // public function index($id){
    //     $profesor = Profesor::where('id_rut',$id)->first();
    //     $propuestas = Propuesta::all();
    //     return view('profesor.index',compact(['profesor','propuestas']));
    // }

    public function menu(){
        $propuestas = Propuesta::all();
        return view('profesor.index',compact('propuestas'));
    }
    public function comentarios(Propuesta $propuesta){
        $profesores = Profesor::all();
        return view('profesor.comentarios',compact(['propuesta','profesores']));
    }
    public function crearComentario(Propuesta $propuesta, Request $request){
        $propuesta->comentarioProfesor()->attach($request->profeComentador,['fecha'=>Carbon::now(),'hora'=>Carbon::now(),'comentario'=>$request->comentario]); //funciono a la primera no me lo puedo creer
        return redirect()->route('profesor.menu');
    }

    public function eliminar(Propuesta $propuesta){
        $profesores = Profesor::all();
        return view('profesor.eliminar',compact(['propuesta','profesores']));
    }

    public function preguntarDatos(Propuesta $propuesta, Request $request){
        $profesor = Profesor::where('id',$request->profesor)->first();
        return view('profesor.confirmar_delete',compact(['propuesta','profesor']));
    }

    public function confirmarEliminar(Propuesta $propuesta,Profesor $profesor){
        $propuesta->comentarioProfesorConPivot()->detach($profesor->id); //moraleja: leer la documentacion 
        return redirect()->route('profesor.menu');
    }
}
