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
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3"> 
                <div class="card">
                    <div class="card-body">
                        <form action="" class="form-controll">
                            @foreach($estudiantes as $estudiante)
                                <option value="{{$estudiante->rut}}">{{$estudiante->nombre}}{{$estudiante->apellido}}{{$estudiante->rut}}</option>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>