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
                        <h5 class="card-title text-center">Añadir comentario</h5>
                            <div class="row">
                                <div class="col-12">
                                    Nombre
                                </div>
                                <div class="col">
                                    propuesta.pdf
                                </div>
                            </div>
                            <form action="" method="POST">
                            @csrf
                                <div class="form-group mt-3 mb-3 d-flex">
                                    <textarea class="form-control" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Enviar comentario</button>
                                <a href="{{route('profesor.iniciar')}}" class="btn btn-primary" type="submit">Volver</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection