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
Route::get('/',[InicioSesionController::class,'index'])->name('inicio.index');
//rutas relacionados a profesor
Route::get('/profesor/menu',[ProfesorController::class,'menu'])->name('profesor.menu');
Route::get('/profesor/comentarios/generar/{propuesta}',[ProfesorController::class,'comentarios'])->name('profesor.comentarios');
Route::post('/profesor/comentarios/generar/{propuesta}',[ProfesorController::class,'crearComentario'])->name('profesor.crear.comentario');
Route::get('/profesor/comentarios/eliminar/{propuesta}',[ProfesorController::class,'borrar'])->name('profesor.eliminar');
Route::post('/profesor/comentarios/eliminar/confirmar/{propuesta}',[ProfesorController::class,'preguntarDatos'])->name('profesor.preguntar.datos');
Route::delete('/profesor/comentarios/eliminar/{propuesta}',[ProfesorController::class,'confirmarDelete'])->name('profesor.confirmar.eliminar');
//rutas relacionados a estudiante
Route::get('/estudiante/menu/{estudiante}',[EstudianteController::class,'menu'])->name('estudiante.menu');
Route::get('/estudiante/login',[EstudianteController::class,'login'])->name('estudiante.login');
Route::post('/estudiante/login',[EstudianteController::class,'conseguirDatos'])->name('estudiante.conseguir.datos');
//rutas relaciondas a administrador
Route::get('/admin/administrar',[AdminController::class,'menu'])->name('admin.menu');
Route::get('/admin/propuestas',[AdminController::class,'propuestas'])->name('admin.propuestas');
//PROFE SI VE ESTO, SI ESTO NOS PASA POR NO LEER BIEN EL PDF Y QUERER HACER EL INICIO DE SESION 
//RUTAS SIN USAR (TALVEZ SIRVAN EN ALGUN MOMENTO?)
// Route::get('/inicio-sesion-admin',[InicioSesionController::class,'ingresarAdmin'])->name('inicio.admin');
// Route::get('/inicio-sesion-estudiante',[InicioSesionController::class,'ingresarEstudiante'])->name('inicio.estudiante');
// Route::get('/inicio-sesion-profesor',[InicioSesionController::class,'ingresarProfesor'])->name('inicio.profesor');
//Route::post('/profesor/iniciar',[ProfesorController::class,'iniciar'])->name('profesor.iniciar');
//Route::post('/estudiante/iniciar',[EstudianteController::class,'iniciar'])->name('estudiante.iniciar');
//Route::post('/admin/iniciar',[AdminController::class,'iniciar'])->name('admin.iniciar'); //No es lo mas optimo pero es para que funcione en este caso