<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\ProfesorController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//rutas de inicio de sesion
Route::get('/',[InicioSesionController::class,'index'])->name('inicio.index');
Route::get('/inicio-sesion-admin',[InicioSesionController::class,'ingresarAdmin'])->name('inicio.admin');
Route::get('/inicio-sesion-estudiante',[InicioSesionController::class,'ingresarEstudiante'])->name('inicio.estudiante');
Route::get('/inicio-sesion-profesor',[InicioSesionController::class,'ingresarProfesor'])->name('inicio.profesor');
//rutas relacionados a profesor
Route::get('/index-profesor',[ProfesorController::class,'index'])->name('profesor.index');
//rutas relacionados a estudiante
Route::get('/index-admin',[ProfesorController::class,'index'])->name('admin.index');
//rutas relaciondas a administrador
Route::get('/index-estuidante',[ProfesorController::class,'index'])->name('estudiante.index');