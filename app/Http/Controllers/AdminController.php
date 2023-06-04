<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function iniciar(){
        return redirect()->route('admin.index');
    }
    public function index(){
        return view('administrador.index');
    }
}
