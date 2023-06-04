<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function iniciar(Request $request){ //No es lo mas optimo pero es para que funcione en este caso
        return redirect()->route('admin.index');
    }
    public function index(){
        return view('administrador.index');
    }
}
