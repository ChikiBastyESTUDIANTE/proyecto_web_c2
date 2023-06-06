<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioSesionController;
use App\Http\Controllers\ProfesorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EstudianteController;
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

//PROFE SI VE ESTO, SI ESTO NOS PASA POR NO LEER BIEN EL PDF Y QUERER HACER EL INICIO DE SESION 
Route::get('/',[InicioSesionController::class,'index'])->name('inicio.index');
// Route::get('/inicio-sesion-admin',[InicioSesionController::class,'ingresarAdmin'])->name('inicio.admin');
// Route::get('/inicio-sesion-estudiante',[InicioSesionController::class,'ingresarEstudiante'])->name('inicio.estudiante');
// Route::get('/inicio-sesion-profesor',[InicioSesionController::class,'ingresarProfesor'])->name('inicio.profesor');
//rutas relacionados a profesor
//Route::post('/profesor/iniciar',[ProfesorController::class,'iniciar'])->name('profesor.iniciar');
Route::get('/profesor/menu',[ProfesorController::class,'index'])->name('profesor.menu');
Route::get('/profesor/comentarios',[ProfesorController::class,'prueba'])->name('profesor.comentarios');
//rutas relacionados a estudiante
//Route::post('/estudiante/iniciar',[EstudianteController::class,'iniciar'])->name('estudiante.iniciar');
Route::get('/estudiante/menu',[EstudianteController::class,'index'])->name('estudiante.menu');
//rutas relaciondas a administrador
//Route::post('/admin/iniciar',[AdminController::class,'iniciar'])->name('admin.iniciar'); //No es lo mas optimo pero es para que funcione en este caso
Route::get('/admin/menu',[AdminController::class,'index'])->name('admin.menu');