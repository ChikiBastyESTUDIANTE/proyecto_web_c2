<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propuesta;
use App\Models\Profesor;

class AdminController extends Controller
{
    // public function iniciar(Request $request){ //No es lo mas optimo pero es para que funcione en este caso
    //     return redirect()->route('admin.menu');
    // }
    public function menu(){
        $profesores = Profesor::all();
        $estudiantes = Estudiante::all();
        return view('administrador.index',compact(['profesores','estudiantes']));
    }
    public function propuestas(){
        $propuestas = Propuesta::all();
        return view('administrador.propuestas',compact('propuestas'));
    }
    public function estado(Propuesta $propuesta){
        return view('administrador.estado',compact('propuesta'));
    }

    public function cambiarEstado(Propuesta $propuesta, Request $request){
        $propuesta->estado = $request->estado;
        $propuesta->save();
        return redirect()->route('admin.propuestas');
    }

    public function datosEstudiante(){
        return view('administrador.añadir_estudiante');
    }

    public function crearEstudiante(Request $request){
        $estudiante = new Estudiante();
        $estudiante->rut = $request->rutEstudiante;
        $estudiante->nombre = $request->nombreEstudiante;
        $estudiante->apellido = $request->apellidoEstudiante;
        $estudiante->email = $request->emailEstudiante;
        $estudiante->save();
        return redirect()->route('admin.menu');
    }

    public function datosProfesor(){
        return view('administrador.añadir_profesor');
    }

    public function crearProfesor(Request $request){
        $profesor = new Profesor();
        $profesor->nombre = $request->nombreProfesor;
        $profesor->apellido = $request->apellidoProfesor;
        $profesor->email = $request->emailProfesor;
        $profesor->save();
        return redirect()->route('admin.menu');
    }

    public function eliminarProfesor($profesor){
        dd($profesor);
    }
}
