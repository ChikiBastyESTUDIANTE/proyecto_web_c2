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
                                <th class="text-white"><h5>Propuesta</h5></th>
                                <th class="text-white"><h5>Estado</h5></th>
                                <th class="text-white"><h5>Comentarios</h5></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($propuestas as $propuesta)
                                    <tr>
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
                                        <td>dolor sit amet</td>
                                    </tr>
                                @endforeach
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
                            <label for=""class="form-label"></label>
                            <input type="file" class="form-label">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection