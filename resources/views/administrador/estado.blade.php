@extends('templates.templatenav')
@section('links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection
@section('codigo-principal')
    <div class="container min-vh-100">
        <div class="row">
            <div class="col-6 offset-3 d-flex flex-column mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">Editar estado</h4>
                            <form action="{{route('admin.cambiar.estado', $propuesta->id)}}" method="POST">
                            @csrf
                            <div>
                                <div><h5>Rut del estudiante</h5></div>
                                <div>{{$propuesta->estudiante_rut}}</div>
                                <hr>
                                <div><h5>Documento</h5></div>
                                <div>{{$propuesta->documento}}</div>
                                <hr>
                            </div>
                                <div><h5>Estado</h5></div>
                                <div class="form-group mt-3 mb-3 d-flex">
                                <select name="estado" class="form-control">
                                    <option value="1">Esperando revision</option>
                                    <option value="2">Se sugiere modificar</option>
                                    <option value="3">Rechazado</option>
                                    <option value="4">Aceptado</option>
                                </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                                <a href='{{route('admin.propuestas')}}' class="btn btn-primary">Volver</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection