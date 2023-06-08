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
                            <form action="">
                            @csrf
                            <div>
                                <div><h5>Documento</h5></div>
                                <div>{{$propuesta->documento}}</div>
                                <hr>
                                <div><h5>Estado</h5></div>
                                <hr>
                            </div>
                                <div class="form-group mt-3 mb-3 d-flex">
                                    <textarea name="comentario" class="form-control" rows="1"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Confirmar</button>
                                <a href='#' class="btn btn-primary">Volver</a>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection