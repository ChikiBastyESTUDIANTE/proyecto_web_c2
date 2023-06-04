<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Universidad Lorem Ipsum</title>
</head>
<body>
    <div class="container">
        <div class="col">
            <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-white">
                    <!-- isotipo -->
                    <div class="col-12 col-lg-4 bg-primary text-white d-flex flex-column justify-content-center align-items-center" style="height: 25rem;">
                        <div class="bg-white p-2 mb-3 rounded">
                            <img src="{{ asset('images/isotipo_usm_color.jpg') }}" style="width: 7rem;">
                        </div>
                        <h5>Sistema de Campeonato de Fútbol</h5>
                        <h6>EIN133_A Diseño y Programación Orientada a la Web</h6>
                    </div>

                    <!-- formulario -->
                    <div class="col-12 col-lg-8 py-4">
                        <h4>Inicio de Sesión</h4>
                        <small>Proporcione sus credenciales para ingresar al sistema</small>
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
                                    <div class="mb-3 text-end">
                                        <a href="index.html" class="btn btn-success">Iniciar Sesión</a>
                                    </div>
                                </form>
                            </div>
                        </div>
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