@extends('templates.templatenav')
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
                                <th scope="col">Añadir comentario</th>
                                <th scope="col">Eliminar comentario</th>
                            </tr>
                            </thead>
                            <tbody>
                                <!-- Insertar for each-->
                                    <tr>
                                        <th scope="row">11.111.111-1</th>
                                        <td>Nombre Apellido</td>
                                        <td>pppp.pdf</td>
                                        <td>
                                            <button class="btn btn-sm btn-warning" type="submit">
                                                <span class="material-symbols-outlined">add</span>
                                            </button>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-danger" type="submit">
                                                <span class="material-symbols-outlined"> delete </span>
                                            </button>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
@endsection