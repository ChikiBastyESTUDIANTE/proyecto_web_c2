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
            <div class="col-4 offset-2 d-flex flex-column bg-primary rounded">
                <div>
                    <h4 class="text-white">Inicio de Sesión @if(Route::current()->getName()=='inicio.profesor') como profesor 
                                        @elseif(Route::current()->getName()=='inicio.admin') como admin
                                        @elseif(Route::current()->getName()=='inicio.estudiante') como estudiante
                                        @endif</h4>
                    <h5 class="text-white my-2">Ingrese sus datos</h5>
                    <div class="card mb-3">
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Nombre de Usuario</label>
                                    <input type="text" id="username" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" id="password" class="form-control">
                                </div>
                                <div class="row mb-2">
                                    <div class="col-6">
                                        <a href="
                                        @if(Route::current()->getName()=='inicio.profesor'){{route('profesor.index')}} 
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
            <div class="col-5 d-flex rounded">
                <div>
                    <div>
                        <h2 class="text-dark text-center">Universidad Lorem Ipsum</h2>
                    </div>
                    <div class="card mt-5 mb-5">
                            <li>Lorem Ipsum</li>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>