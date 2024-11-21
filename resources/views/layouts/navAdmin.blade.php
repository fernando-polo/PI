<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Administrativos</title>
</head>
<body>
    {{--Inicia barra de navegacion--}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="{{asset('*')}}" alt="Bootstrap" width="60" height="60">
        <a class="navbar-brand" href="{{route('')}}">El rinco de lectura</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="{{route('')}}">Inicio</a>
            <a class="nav-link" href="{{route('rutaregistro')}}">Registro Libros</a>
        </div>
        </div>
    </div>
</nav> {{--Termina barra de navegacion--}}
@yield('contenido1')
</body>
</html>