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
<body>
    {{--  navbar --}}

    {{-- codigo --}}
    @yield('codigo-principal')
    @yield('scripts-sobre-bootstrap')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    @yield('scripts-bajo-bootstrap') {{--  No se si usaremos el popper xd --}}
</body>

