@extends('templates.template_nav')

@section('codigo-principal')
    <div class="container min-vh-100">
        <div class="row mt-lg-5">
            {{-- VER TUS PROPUESTAS --}}
            <div class="col-12 col-lg-6">
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
                                                {{$comentario->pivot->comentario}}
                                                <br>
                                                @endforeach
                                                {{-- <a href="" class="btn btn-outline-secondary">Ver comentarios</a> --}}
                                            @else
                                                {{-- <a href="" class="btn btn-outline-primary disabled">No hay comentarios</a> --}}
                                                No hay comentarios
                                            @endif
                                        </td>
                                            {{-- @if(count($propuesta->comentarioProfesorConPivot)>0)
                                                <td>{{$propuesta->comentarioProfesorConPivot->where('pivot.propuesta_id',$propuesta->id)->first()->pivot->comentario}}</td>
                                            @else
                                                <td>No hay comentarios</td>
                                            @endif --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- CREAR PROPUESTA --}}
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header bg-secondary-rojo">
                        <h3 class="text-white pt-2">Crear propuesta</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('estudiante.subirArchivo',$estudiante->rut)}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div><input type="file" name="archivo" id="archivo" class="form-control"></div>
                            <div class="mt-3"><button type="submit" class="btn btn-primary-rojo">Subir propuesta</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection