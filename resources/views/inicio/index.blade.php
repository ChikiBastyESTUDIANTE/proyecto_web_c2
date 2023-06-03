<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('paleta-colores/paleta.css')}}">
    <title>Document</title>
</head>
<body class="bg-light">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row ">
            <div class="col-lg-4 offset-lg-4 bg-primary py-5 rounded">
                <div class="row">
                    <div class="col-12">
                        <span class="text-white">Universidad lorem ipsum</span>
                        <h3 class="text-white">Elegir inicio de sesion</h3>
                    </div>
                    <div class="col-6">
                        
                    </div>
                    <div class="col-6">
                        <form>
                            <div class="p-2">
                                <a href="{{route('inicio.ingresar')}}" class="btn d-flex justify-content-center btn-secondary mb-2">
                                    <h4> Iniciar como administrador</h4>
                                </a>
                            </div>
                            <div class="text-end p-2">
                                <a href="{{route('inicio.ingresar')}}" class="btn d-flex justify-content-center btn-secondary mb-2">
                                    <h4> Iniciar como estudiante</h4>
                                </a>
                            </div>
                            <div class="text-end p-2">
                                <a href="{{route('inicio.ingresar')}}" class="btn d-flex justify-content-center btn-secondary">
                                    <h4> Iniciar como profesor</h4>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>