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
        <meta name="theme-color" content="#6285C4">
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('Logo1.ico') }}">

        <!-- OPEN GRAPH! -->
        <meta property="og:title" content="Clínica Médica">
        <meta property="og:description" content="El consultorio suele contar con equipamiento básico para la evaluación clínica y acceso a tecnologías más avanzadas, como estudios de imagen, laboratorio y tratamientos especializados.">
        <meta property="og:image" content="{{ asset('images/Logo1.jpeg') }}">
        <meta property="og:image/alt" content="Logo Clínica Médica">

        {{-- Llamar a CSS --}}
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">


        {{-- LLamar a SweetAlert --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        
        {{-- Llamar a bootstrap --}}
        @vite('resources/js/app.js')

      {{-- Notas: 
      Acomodar posición del Logos
      Arreglar footer --}}

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="NavBar">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <a href="{{route('rutaInicio')}}"><img src="{{ asset('images/Logo1.jpeg') }}" alt="Logo - Clínica Médica" width="40" height="40"></a>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="#">Ubícanos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Testimonios</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Conócenos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Estudios</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Médicos</a>
                      </li>
                    </ul>
                    <div class="text-end">
                        <form class="container-fluid justify-content-end">
                            <a href="{{route('rutaRegistro')}}" class="btn btn-sm btn-outline-primary">Registrarse</a>
                            <a href="{{route('rutaIniciarSesion')}}" class="btn btn-sm btn-outline-secondary">Iniciar Sesión</a>
                            
                        </form>
                    </div>
                  </div>
                </div>
              </nav>
        </header>

            @yield('contenido')

        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8">
                        <img src="{{asset('images/Logo1.jpeg')}}" alt="Logo Clínica Médica" width="40" height="40">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p>Copyright © 2024 Clínica Médica
                            Todos los derechos reservados.</p>
                    </div>
                    <div class="col-2">
                        <h5>Clínica</h5>
                        <br>
                        <a href=""><h6>Ubícanos</h6></a>
                        <br>
                        <a href=""><h6>Testimonios</h6></a>
                        <br>
                        <a href=""><h6>Conócenos</h6></a>
                        <br>
                        <a href=""><h6>Estudios</h6></a>
                        <br>
                        <a href=""><h6>Médicos</h6></a>
                        <br>
                    </div>
                    <div class="col-2">
                        <h5>Contacto</h5>
                        <br>
                        <a href=""><h6>Facebook</h6></a>
                        <br>
                        <a href=""><h6>Instagram</h6></a>
                        <br>
                        <a href=""><h6>Email</h6></a>
                        <br>
                    </div>
                    
                </div>
            </div>
        </footer>
    </body>
</html>