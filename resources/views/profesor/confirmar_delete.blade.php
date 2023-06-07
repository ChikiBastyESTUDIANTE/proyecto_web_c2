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
                        <h4 class="card-title text-center">Borrar comentario</h4>
                            <form action="{{route('profesor.crear.comentario',$propuesta->id)}}" method="POST">
                            @csrf
                            <div>
                                <div><h5>Rut del estudiante</h5></div>
                                <div>{{$propuesta->estudiante_rut}}</div>
                                <hr>
                                <div><h5>Documento</h5></div>
                                <div>{{$propuesta->documento}}</div>
                                <hr>
                                {{-- Esto se me hace raro pero asi se hace en este caso? XD --}}
                                <div><h5>Profesor</h5></div>
                                <select name="profeComentador" class="form-control">
                                    @foreach($profesores as $profesor)
                                        <option value="{{$profesor->id}}">{{$profesor->nombre}} {{$profesor->apellido}} (id: {{$profesor->id}})</option>
                                    @endforeach
                                </select>
                                <hr>
                                <div>Comentario:</div>
                            </div>
                                <div class="form-group mt-3 mb-3 d-flex">
                                    <textarea name="comentario" class="form-control disabled" rows="5">
                                    @if(count($propuesta->comentarioProfesorConPivot)>0){{$propuesta->comentarioProfesorConPivot->where('pivot.propuesta_id',$propuesta->id)->first()->pivot->comentario}}@else No hay comentarios @endif
                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Borrar comentario</button>
                                <button type="reset" class="btn btn-primary">Volver</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection