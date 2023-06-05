<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Profesor</title>
</head>
    <body class="bg-light">
            <div class="container-fluid bg-primary">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark">
                            <div class="container-fluid">
                            <a class="navbar-brand" href="#">Universidad Lorem Ipsum</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                </ul>
                                    <a href="{{route('inicio.index')}}" class="btn btn-secondary d-flex justify-content-end">Cerrar sesion</a>
                                </form>
                            </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="container min-vh-100 mt-5">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered border-dark bg-white">
                            <thead>
                            <tr>
                                <th scope="col">Rut</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Propuesta</th>
                                <th scope="col">Añadir comentario</th>
                            </tr>
                            </thead>
                            <tbody>
                                <!-- Insertar for each-->
                                    <tr>
                                        <th scope="row">11.111.111-1</th>
                                        <td>Nombre Apellido</td>
                                        <td>pppp.pdf</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger" type="submit">
                                                <span class="material-symbols-outlined"> delete </span>
                                            </button>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>