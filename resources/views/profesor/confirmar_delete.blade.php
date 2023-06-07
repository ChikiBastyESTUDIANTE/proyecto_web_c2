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
                        <h4 class="card-title text-center">Eliminar comentario</h4>
                            <form action="{{route('profesor.crear.comentario',$propuesta->id)}}" method="POST">
                            @csrf
                            <div>
                                <div class="row">
                                    <div class="col-4">
                                        <div><h5>Rut del estudiante</h5></div>
                                        <div>{{$propuesta->estudiante_rut}}</div>
                                    </div>

                                    <div class="col-4">
                                        <div><h5>Documento</h5></div>
                                        <div>{{$propuesta->documento}}</div>
                                    </div>

                                    <div class="col-4">
                                        <div><h5>Profesor</h5></div>
                                        <div>{{$profesor->nombre}} {{$profesor->apellido}} (id: {{$profesor->id}})</div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                                <button type="submit" class="btn btn-primary">Eliminar</button>
                                <a href='{{route('profesor.menu')}}' class="btn btn-primary">Volver</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection