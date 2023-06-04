<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('paleta-colores/paleta.css')}}">
    <title>Universidad Lorem Ipsum</title>
</head>
<body>
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center bg-light">
        <div class="row">
            <div class="col-4 offset-1 d-flex flex-column bg-primary rounded">
                <div class="mb-2 ml-3">
                    <h4 class="text-white mt-3">Inicio de Sesión @if(Route::current()->getName()=='inicio.profesor') como profesor 
                                        @elseif(Route::current()->getName()=='inicio.admin') como admin
                                        @elseif(Route::current()->getName()=='inicio.estudiante') como estudiante
                                        @endif</h4>
                    <h5 class="text-white mt-2">Ingrese sus datos</h5>
                    <div class="card mb-3">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="correo" class="form-label">Usuario</label>
                                    <select name="correo" id="correo" class="form-control">
                                        <option value="{{$profesor->id}}">
                                            @if(Route::current()->getName()=='inicio.profesor')
                                                @foreach($profesores as $profesor)
                                                    {{$profesor->email}}
                                                @endforeach
                                            @endif
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="contraseña" class="form-label">Contraseña</label>
                                    <input type="password" id="contraseña" class="form-control">
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <a href="
                                        @if(Route::current()->getName()=='inicio.profesor'){{route('profesor.index',$profesor->id)}} 
                                        @elseif(Route::current()->getName()=='inicio.admin'){{route('admin.index')}}
                                        @elseif(Route::current()->getName()=='inicio.estudiante'){{route('estudinte.index')}} 
                                        @endif
                                        " class="btn btn-secondary">Iniciar Sesión</a>
                                    </div>
                                    <div class="col-6">
                                        <small><a href="{{route('inicio.index')}}" class="text-secondary d-flex justify-content-end pt-3">Volver</a></small>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5 d-flex flex-column">
                <div class="row">
                    <div class="col offset-1">
                        <div>
                            <h2 class="text-dark text-start">Universidad</h2>
                        </div>
                        <div>
                            <h1 class="text-dark text-start">Lorem Ipsum</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col offset-1">
                        <div class="card mt-4">
                            <div class="card-header bg-secondary">
                                <h5 class="pt-2">Informacion</h5>
                            </div>
                            <div class="card-body">
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                                <li>Lorem Ipsum</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>