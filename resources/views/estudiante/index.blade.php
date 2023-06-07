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
                                        <td>{{$propuesta->comentarioProfesorConPivot->comentario->all()}}</td>
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
                        <form action="" enctype="multipart/form-data">
                            <input type="file" name="archivo" id="archivo" class="form-label">
                            <label for="enviar" class="form-label"></label>
                            <div><button type="submit" class="btn btn-secondary">Subir propuesta</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection