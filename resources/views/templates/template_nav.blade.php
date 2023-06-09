<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('paleta-colores/paleta.css')}}">
    @yield('links')
    <title>Universidad Lorem Ipsum</title>
</head>
<body class="bg-light">
    {{--  navbar --}}
    <div class="container-fluid bg-primary">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark">
                            <div class="container-fluid">
                            <h3 class="text-white">Universidad Lorem Ipsum</h3>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    {{-- Todo esto es solo para admin --}}
                                    @if(Route::current()->getName()=='admin.menu' or Route::current()->getName()=='admin.propuestas') {{-- No pense que el or iba a funcionar jkasdjksjka --}}
                                        <li class="nav-item">
                                            <a class="nav-link ps-4 @if(Route::current()->getName()=='admin.menu') active @endif" aria-current="page" href="{{route('admin.menu')}}">Administrar usuarios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link ps-4 @if(Route::current()->getName()=='admin.propuestas') active @endif" aria-current="page" href="{{route('admin.propuestas')}}">Propuestas</a>
                                        </li>
                                    @endif
                                    </ul>
                                        <span class="me-2 text-white">
                                            @if(Route::current()->getName()=='admin.menu' or Route::current()->getName()=='admin.propuestas')
                                                Admin
                                            @elseif(Route::current()->getName()=='estudiante.menu')
                                                Estudiante {{$estudiante->nombre}} {{$estudiante->apellido}}
                                            @elseif(Route::current()->getName()=='estudiante.login')
                                                Estudiante
                                            @elseif(Route::current()->getName()=='profesor.menu')
                                                Profesor
                                            @endif
                                        </span>
                                        <a href="{{route('inicio.index')}}" class="btn btn-secondary d-flex justify-content-end">Cerrar sesion</a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
    {{-- codigo --}}
    @yield('codigo-principal')

    {{-- scripts --}}
    @yield('scripts-sobre-bootstrap')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @yield('scripts-bajo-bootstrap') {{--  No se si usaremos el popper xd --}}
</body>

