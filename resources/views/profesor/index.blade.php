@extends('templates.template_nav')
@section('links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection
@section('codigo-principal')
    <div class="container min-vh-100 mt-5">
                <div class="row">
                    <div class="col">
                        <div class="card">
                        <div class="card-header bg-secondary">
                            <h3 class="text-white pt-2">Propuestas</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered border-dark bg-white">
                            <thead class="bg-primary">
                            <tr>
                                <th class="text-white"><h5 class="mt-2">Email del alumno</h5></th>
                                <th class="text-white"><h5 class="mt-2">Propuesta</h5></th>
                                <th class="text-white"><h5 class="mt-2">Estado</h5></th>
                                <th class="text-white"><h5 class="mt-2">Comentario</h5></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($propuestas as $propuesta)
                                    <tr>
                                        <th>{{$estudiantes->where('rut',$propuesta->estudiante_rut)->first()->email}}</th>
                                        <td><a href="">{{$propuesta->documento}}</a></td>
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
                                            <a class="btn btn-sm btn-success pt-2 text-white" href="{{route('profesor.comentarios',$propuesta->id)}}">
                                                <span class="material-symbols-outlined">add</span>
                                            </a>
                                            <a class="btn btn-sm btn-danger pt-2 text-white" href="{{route('profesor.eliminar',$propuesta->id)}}">
                                                <span class="material-symbols-outlined"> delete </span>
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
@endsection