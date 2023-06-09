@extends('templates.template_nav')
@section('codigo-principal')
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col-6 offset-3"> 
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('estudiante.conseguirDatos')}}" class="form-control" for="estudiante" method="post">
                        @csrf
                            <div>
                                <label for="estudiante" class="form-label">Seleccione su perfil</label>
                                <select name="estudiante" id="estudiante" class="form-control">
                                    @foreach($estudiantes as $estudiante)
                                    <option value="{{$estudiante->rut}}">{{$estudiante->nombre}} {{$estudiante->apellido}} {{$estudiante->rut}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div>
                                <button type="submit" class="btn btn-primary mb-2">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection