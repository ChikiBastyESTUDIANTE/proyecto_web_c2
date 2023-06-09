@extends('templates.template_nav')
@section('links')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection
@section('codigo-principal')
<div class="container min-vh-100">
    <div class="row">
        <div class="col">
            <div class="row mt-lg-5">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-secondary">
                            <h3 class="text-white pt-2">Profesores</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{route('admin.datosProfesor')}}" class="btn btn-primary mb-3">Añadir profesor</a>
                            <table class="table table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white"><h5 class="mt-2">Nombre</h5></th>
                                        <th class="text-white"><h5 class="mt-2">Email</h5></th>
                                        <th class="text-white"><h5 class="mt-2">Eliminar</h5></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($profesores as $profesor)
                                    <tr>
                                        <td>{{$profesor->nombre}} {{$profesor->apellido}}</td>
                                        <td>{{$profesor->email}}</td>
                                        <td class="text-center">
                                            <form action="{{route('admin.eliminarProfesor',$profesor->id)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                                <button class="btn btn-sm btn-secondary pt-2 text-white" type="submit">
                                                    <span class="material-symbols-outlined">delete</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-secondary-rojo">
                            <h3 class="text-white pt-2">Alumnos</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{route('admin.datosEstudiante')}}" class="btn btn-primary-rojo mb-3">Añadir alumno</a>
                            <table class="table table-bordered">
                                <thead class="bg-primary-rojo">
                                    <tr>
                                        <th class="text-white"><h5 class="mt-2">Nombre</h5></th>
                                        <th class="text-white"><h5 class="mt-2">Rut</h5></th>
                                        <th class="text-white"><h5 class="mt-2">Email</h5></th>
                                        <th class="text-white"><h5 class="mt-2">Eliminar</h5></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($estudiantes as $estudiante)
                                    <tr>
                                        <td>{{$estudiante->nombre}} {{$estudiante->apellido}}</td>
                                        <td>{{$estudiante->rut}}</td>
                                        <td>{{$estudiante->email}}</td>
                                        <td class="text-center">
                                            <form action="{{route('admin.eliminarEstudiante',$estudiante->rut)}}" method="POST">
                                            @method('delete')
                                            @csrf
                                                <button class="btn btn-sm btn-secondary-rojo pt-2 text-white" type="submit">
                                                    <span class="material-symbols-outlined">delete</span>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                

    </div>
</div>

@endsection