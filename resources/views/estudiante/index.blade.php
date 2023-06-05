@extends('templates.templatenav')

@section('codigo-principal')
    <div class="container min-vh-100">
        <div class="row mt-lg-5">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h4 class="text-white">Tus propuestas</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered border-dark bg-white">
                            <thead class="bg-primary">
                            <tr>
                                <th scope="col text-white">Propuesta</th>
                                <th scope="col text-white">Estado</th>
                                <th scope="col text-white">Comentario</th>
                            </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>lorem</td>
                                        <td>ipsum</td>
                                        <td>dolor sit amet</td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h4 class="text-white">Crear propuesta</h4>
                    </div>
                    <div class="card-body">
                        <form action="">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection