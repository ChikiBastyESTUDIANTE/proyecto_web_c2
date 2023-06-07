@extends('templates.templatenav')
@section('codigo-principal')
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col-6 offset-3"> 
                <div class="card">
                    <div class="card-body">
                        <form action="" class="for">
                            @foreach($estudiantes as $estudiante)
                                <option value="{{$estudiante->rut}}">{{$estudiante->nombre}}{{$estudiante->apellido}}{{$estudiante->rut}}</option>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection