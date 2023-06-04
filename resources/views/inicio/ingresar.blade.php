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
            <div class="col-5 offset-1">
                <div class="bg-primary p-5">
                    <h4 class="text-white">Inicio de Sesión</h4>
                    <h5 class="text-white my-2">Ingrese sus datos</h5>
                    <div class="card">
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
                                <div class="mb-3 text-left">
                                    <a href="index.html" class="btn btn-secondary">Iniciar Sesión</a>
                                </div>
                                <div>
                                    <small><a href="index.html" class="text-secondary">Volver</a></small>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="bg-primary p-5">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>