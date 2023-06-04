<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesorController extends Controller
{
    public function iniciar(Profesor $profesor){
        return view('profesor.menu',asdas);
    }

    public function index(Profesor $profesor){
        return view('profesor.index');
    }
}
