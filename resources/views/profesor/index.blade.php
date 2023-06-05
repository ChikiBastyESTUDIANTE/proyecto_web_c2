@extends('templates.templatenav')
@section('links')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
@endsection
@section('codigo-principal')
    <div class="container min-vh-100 mt-5">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered border-dark bg-white">
                            <thead>
                            <tr>
                                <th scope="col">Rut</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Propuesta</th>
                                <th scope="col">Comentario</th>
                            </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($propuestas as $propuesta) --}}
                                    <tr>
                                        <th scope="row">ddsa</th>
                                        <td>{{$profesor->nombre}}</td>
                                        <td>pppp.pdf</td>
                                        <td>
                                            <button class="btn btn-sm btn-success pt-2 text-white" type="submit">
                                                <span class="material-symbols-outlined">add</span>
                                            </button>
                                            <button class="btn btn-sm btn-danger pt-2 text-white" type="submit">
                                                <span class="material-symbols-outlined"> delete </span>
                                            </button>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection