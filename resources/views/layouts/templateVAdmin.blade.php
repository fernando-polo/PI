<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- codifcación -->
        <meta charset="UTF-8">

        <!-- Adaptabilidad en el sitio, el ancho del contenido sea igual al ancho de la pantalla de cada dispositivo -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        {{-- instrucción para Internet Explorer (IE), indicándole que use la última versión de su motor de renderizado (conocido como "edge mode"). --}}
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Le decimos a google que indexe la página y que siga los enlaces -->
        <meta name="robots" content="index, follow">

        <!-- Título del documento, Importante para el SEO, título que aparece en google -->
        <title>@yield('titulo')</title>

        <!-- Descripción del sitio web, GENERALMENTE aparece en google al igual que el título  -->
        <meta name="description" content="Clínica Médica _ Proyecto UPQ">

        <!-- Color de la página web -->
        <meta name="theme-color" content="#ff5733">

        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('OncoCheck.ico') }}">

        <!-- OPEN GRAPH! -->
        <meta property="og:title" content="Clínica Médica">
        <meta property="og:description" content="El consultorio suele contar con equipamiento básico para la evaluación clínica y acceso a tecnologías más avanzadas, como estudios de imagen, laboratorio y tratamientos especializados.">
        <meta property="og:image" content="{{ asset('images/OncoCheck.jpeg') }}">
        <meta property="og:image/alt" content="Logo Clínica Médica">

        {{-- Llamar a CSS --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        {{-- LLamar a SweetAlert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        

        {{-- LLamar a iconos de bootstraps --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        
        {{-- Llamar a bootstrap --}}
        @vite('resources/js/app.js')



    </head>
    <body>
        <header> 
            <nav>            
                <div class="container-fluid">
                    <div class="row mt-2 mb-2">
                        <div class="col text-left">
                            <a href="{{route('rutaInicio')}}"><img src="{{ asset('images/OncoCheck.jpeg') }}" alt="Logo - Clínica Médica" width="40" height="40"></a>
                        </div>
                        <div class="col">
                            <div class="dropdown d-flex justify-content-end">
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #ff5733; color: white;">
                                    <i class="bi bi-person-circle"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                                </ul>
                            </div> 
                        </div>
                    </div>
                </div>
            </nav>  
        </header>
        <div class="container" >
            
            <br>
            <h1 class="text-center">Vista administrativa (Prototipo)</h1>
            <hr class="hr-custom">

            <div class="row">
                <div class="col-2">
                    <div class="container">
                        <br>
                        {{-- boton 1 --}}
                        <div class="row mt-3 mb-3">
                            @yield('btn1')
                        </div>
                        <hr class="hr-custom">

                        {{-- boton 2 --}}
                        <div class="row mt-3 mb-3" >
                            @yield('btn2')
                        </div>
                        <hr class="hr-custom">
                        
                        {{-- boton 3 --}}
                        <div class="row mt-3 mb-3">
                            @yield('btn3')
                        </div>
                        <br>
                    </div>

                </div>
                
                <div class="col">
                    {{-- Aquí se imprimiran los registros que ustedes hagan en sus formularios --}}
                    @yield('contenidoRegistros')
                    @yield('altaMedico')
                </div>
            </div>
        </div>
    </body>
</html>