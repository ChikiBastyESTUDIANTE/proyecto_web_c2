@extends('templates.template_nav')

@section('codigo-principal')
    <div class="container min-vh-100">
        <div class="row mt-lg-5">
            {{-- VER TUS PROPUESTAS --}}
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="text-white pt-2">Tus propuestas</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered border-dark bg-white">
                            <thead class="bg-primary">
                            <tr>
                                <th class="text-white"><h5 class="mt-2">Propuesta</h5></th>
                                <th class="text-white"><h5 class="mt-2">Estado</h5></th>
                                <th class="text-white"><h5 class="mt-2">Comentarios</h5></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($propuestas as $propuesta)
                                    <tr>
                                        <td><a href="{{route('estudiante.descargarArchivo',$propuesta->id)}}">{{$propuesta->documento}}</a></td>
                                        <td>
                                            @if($propuesta->estado === 1)
                                                Esperando revision
                                            @elseif($propuesta->estado === 2)
                                                Se sugiere modificar la propuesta
                                            @elseif($propuesta->estado === 3)
                                                Rechazado
                                            @elseif($propuesta->estado === 4)
                                                Aceptado
                                            @else
                                                Ingreso mal el formato por favor!!!
                                            @endif
                                        </td>
                                        <td>
                                            @if(count($propuesta->comentarioProfesorConPivot->where('pivot.propuesta_id',$propuesta->id))>0)
                                                @foreach($propuesta->comentarioProfesorConPivot->where('pivot.propuesta_id',$propuesta->id) as $comentario)
                                                Profesor {{$profesores->where('id',$comentario->pivot->profesor_id)->first()->nombre}}
                                                {{$profesores->where('id',$comentario->pivot->profesor_id)->first()->apellido}}: {{$comentario->pivot->comentario}}
                                                <br>
                                                <br>
                                                @endforeach
                                            @else
                                                No hay comentarios
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- CREAR PROPUESTA --}}
            <div class="col-12 col-lg-4">
                <div class="card">
                    <div class="card-header bg-secondary-rojo">
                        <h3 class="text-white pt-2">Crear propuesta</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <div><input type="file" name="archivo" id="archivo" class="form-control"></div>
                            <div class="mt-3"><button type="submit" class="btn btn-secondary-rojo">Subir propuesta</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection