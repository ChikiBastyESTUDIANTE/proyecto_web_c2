<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
use App\Models\Propuesta;

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
}
