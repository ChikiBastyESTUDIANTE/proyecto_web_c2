@extends('templates.templatenav')
@section('links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection
@section('codigo-principal')
    <div class="container min-vh-100 mt-5">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered border-dark bg-white">
                            <thead class="bg-secondary">
                            <tr>
                                <th class="text-white"><h5 class="mt-2">Rut</h5></th>
                                <th class="text-white"><h5 class="mt-2">Propuesta</h5></th>
                                <th class="text-white"><h5 class="mt-2">Estado</h5></th>
                                <th class="text-white"><h5 class="mt-2">Comentario</h5></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($propuestas as $propuesta)
                                    <tr>
                                        <th scope="row">{{$propuesta->estudiante_rut}}</th>
                                        <td>{{$propuesta->documento}}</td>
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
                                            @if(asdasdas)
                                            <a class="btn btn-sm btn-success pt-2 text-white" href="{{route('profesor.comentarios',$propuesta->id)}}">
                                                <span class="material-symbols-outlined">add</span>
                                            </a>
                                            @elseif(aasddas)
                                            
                                            @endif
                                            <a class="btn btn-sm btn-danger pt-2 text-white" href="">
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
@endsection