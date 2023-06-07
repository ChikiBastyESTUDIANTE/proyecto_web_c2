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
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Rut</th>
                                        <th scope="col">Propuesta</th>
                                        <th scope="col">Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Mark</td>
                                        <td>22.222.222-2</td>
                                        <td>text.pdf</td>
                                        <td>
                                            Aceptado
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
@endsection