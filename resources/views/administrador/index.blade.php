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
                            <h4 class="text-white">Profesores</h4>
                        </div>
                        <div class="card-body">
                            <a href="" class="btn btn-primary mb-3">Añadir profesor</a>
                            <table class="table table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white"><h5>Nombre</h5></th>
                                        <th class="text-white"><h5>Email</h5></th>
                                        <th class="text-white"><h5>Modificar</h5></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($profesores as $profesor)
                                    <tr>
                                        <td>{{$profesor->nombre}} {{$profesor->apellido}}</td>
                                        <td>{{$profesor->email}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-warning pt-2 text-white" href="">
                                            <span class="material-symbols-outlined">edit</span>
                                            </a>
                                            <a class="btn btn-sm btn-danger pt-2 text-white" href="">
                                            <span class="material-symbols-outlined">delete</span>
                                            </a>
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
                        <div class="card-header bg-secondary">
                            <h4 class="text-white">Alumnos</h4>
                        </div>
                        <div class="card-body">
                            <a href="" class="btn btn-primary mb-3">Añadir alumno</a>
                            <table class="table table-bordered">
                                <thead class="bg-primary">
                                    <tr>
                                        <th class="text-white"><h5>Nombre</h5></th>
                                        <th class="text-white"><h5>Rut</h5></th>
                                        <th class="text-white"><h5>Modificar</h5></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($estudiantes as $estudiante)
                                    <tr>
                                        <td>{{$estudiante->nombre}} {{$estudiante->apellido}}</td>
                                        <td>{{$estudiante->rut}}</td>
                                        <td>
                                            <a class="btn btn-sm btn-warning pt-2 text-white" href="">
                                            <span class="material-symbols-outlined">edit</span>
                                            </a>
                                            <a class="btn btn-sm btn-danger pt-2 text-white" href="">
                                            <span class="material-symbols-outlined">delete</span>
                                            </a>
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