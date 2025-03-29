<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="index, follow">
        <title>@yield('titulo')</title>
        <meta name="description" content="Clínica Médica _ Proyecto UPQ">
        <meta name="theme-color" content="8F7ada">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('OncoCheck.ico') }}">

        <!-- OPEN GRAPH -->
        <meta property="og:title" content="Clínica Médica">
        <meta property="og:description" content="El consultorio suele contar con equipamiento básico para la evaluación clínica y acceso a tecnologías más avanzadas, como estudios de imagen, laboratorio y tratamientos especializados.">
        <meta property="og:image" content="{{ asset('images/OncoCheck.jpeg') }}">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @vite('resources/js/app.js')

        <!-- Estilos específicos para vistas médicas -->
        @stack('styles')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="NavBar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('rutaInicio')}}">
                        <img src="{{ asset('images/OncoCheck.jpeg') }}" alt="Logo - Clínica Médica" width="40" height="40">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2 ms-2"> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rutaInicio') }}#NuestrosEstudios">Citas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('rutaInicio') }}#MedicosDePrimera">Disponibilidad</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('historial-citas') }}">Historial de citas</a>
                            </li>
                        </ul>
                        <div class="user-icon" onclick="window.location.href='perfil.html'">
                            <i class="fas fa-user"></i>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="py-4">
            @yield('contenido')
        </main>

        <footer class="mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <img src="{{asset('images/OncoCheck.jpeg')}}" alt="Logo Clínica Médica" width="40" height="40">
                        <p class="mt-3">Copyright © 2025 OncoCheck<br>Todos los derechos reservados.</p>
                    </div>
                    <div class="col-2">
                        <h5>Clínica</h5>
                        <a class="nav-link" href="{{ route('rutaInicio') }}#NuestrosEstudios"><h6>Estudios</h6></a>
                        <a class="nav-link" href="{{ route('rutaInicio') }}#MedicosDePrimera"><h6>Médicos</h6></a>
                    </div>
                    <div class="col-2">
                        <h5>Contacto</h5>
                        <a href="#"><h6>Facebook</h6></a>
                        <a href="#"><h6>Instagram</h6></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts específicos para vistas -->
        @stack('scripts')
    </body>
</html>