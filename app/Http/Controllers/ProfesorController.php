<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index(){
        //esto es de pruebas
        return view('profesor.index');
    }
}
