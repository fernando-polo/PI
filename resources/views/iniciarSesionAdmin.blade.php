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
        <title>Iniciar sesión: Administrador</title>

        <!-- Descripción del sitio web, GENERALMENTE aparece en google al igual que el título  -->
        <meta name="description" content="Clínica Médica _ Proyecto UPQ">

        <!-- Color de la página web -->
        <meta name="theme-color" content="#ff5733">

        <!-- Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        
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

        {{-- Llamar a tailwind--}}
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

        
        {{-- Llamar a bootstrap --}}
        @vite('resources/js/app.js')

    </head>
    <body>
        <br>
            <!-- component -->
    <div class="min-h-screen bg-violet-600 flex items-center justify-center p-4">
    <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
        <center>
        <a href="{{route('rutaInicio')}}"><img src="{{ asset('images/logosinBordes.jpg') }}" alt="Logo - Clínica Médica" width="130" height="130"></a>
        </center>
        <br>
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Bienvenido</h2>
        
        <form class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Correo electronico</label>
            <input 
            type="email" 
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
            placeholder="your@email.com"
            />
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Contrasena</label>
            <input 
            type="password" 
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
            placeholder="••••••••"
            />
        </div>

        <div class="flex items-center justify-between">
            <label class="flex items-center">
            <input type="checkbox" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"/>
            <span class="ml-2 text-sm text-gray-600">Recordar</span>
            </label>
            <a href="#" class="text-sm text-indigo-600 hover:text-indigo-500">Olvide mi contrasena?</a>
        </div>

        <div class="d-grid">
            <a href="{{route('rutavistasAdmin')}}" class="btn btn-sm btn-outline-secondary" style="box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.3);">Iniciar Sesión</a> 
        </div>
        </form>
    </div>
    </div>
    </body>
</html>