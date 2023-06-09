@extends('templates.template_nav')
@section('links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection
@section('codigo-principal')
    <div class="container min-vh-100">
        <div class="row">
            <div class="col-6 offset-3 d-flex flex-column mt-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Añadir estudiante</h3>
                            <form action="{{route('admin.crearEstudiante')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div><h5>Rut</h5></div>
                                <input type="text" class="form-control" name="rutEstudiante" autocomplete="nope">
                                <hr>
                                <div><h5>Nombre</h5></div>
                                <input type="text" class="form-control" name="nombreEstudiante" autocomplete="nope">
                                <hr>
                                <div><h5>Apellido</h5></div>
                                <input type="text" class="form-control" name="apellidoEstudiante" autocomplete="nope">
                                <hr>
                                <div><h5>Email</h5></div>
                                <input type="email" class="form-control" name="emailEstudiante" autocomplete="nope">
                            </div>
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                                <a href='{{route('admin.menu')}}' class="btn btn-primary">Volver</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection