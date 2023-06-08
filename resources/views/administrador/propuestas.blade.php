@extends('templates.templatenav')
@section('links')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection
@section('codigo-principal')
<div class="container min-vh-100">
    <div class="row">
        <div class="col">
            <div class="row mt-lg-5">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header bg-secondary">
                            <h4 class="text-white">Propuestas</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered border-dark bg-white" align="center">
                            <thead class="bg-primary">
                            <tr>
                                <th class="text-white"><h5 class="mt-2">Rut</h5></th>
                                <th class="text-white"><h5 class="mt-2">Propuesta</h5></th>
                                <th class="text-white"><h5 class="mt-2">Estado</h5></th>
                                <th class="text-white"><h5 class="mt-2">Editar</h5></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($propuestas as $propuesta)
                                    <tr>
                                        <th scope="row">{{$propuesta->estudiante_rut}}</th>
                                        <td>{{$propuesta->documento}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-10">
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
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-2">
                                                <a class="btn btn-sm btn-warning pt-2 text-white" href="{{route('admin.estado')}}">
                                                    <span class="material-symbols-outlined">edit</span>
                                                </a>
                                            </div>
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