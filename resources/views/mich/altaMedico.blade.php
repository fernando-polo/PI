<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div container>
    <center>
    <div class="max-w-lg mx-auto  bg-white dark:bg-gray-800 rounded-lg shadow-md px-8 py-10 flex flex-col items-center">
        <h1 class="text-xl font-bold text-center text-gray-700 dark:text-gray-200 mb-8">Registro de Medicos</h1>
        <form action="#" class="w-full flex flex-col gap-4">
            @csrf
        <div class="flex items-start flex-col justify-start">
            <label for="cprofesional" class="text-sm text-gray-700 dark:text-gray-200 mr-2">Cedula profesional:</label>
            <input type="text" id="cprofesional" name="cprofesional" class="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <div class="flex items-start flex-col justify-start">
            <label for="cespacialidad" class="text-sm text-gray-700 dark:text-gray-200 mr-2">Cedula Especialidad:</label>
            <input type="text" id="cespacialidad" name="cespacialidad" class="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <div class="flex items-start flex-col justify-start">
            <label for="nombre" class="text-sm text-gray-700 dark:text-gray-200 mr-2">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <div class="flex items-start flex-col justify-start">
            <label for="apaterno" class="text-sm text-gray-700 dark:text-gray-200 mr-2">Apellido Paterno:</label>
            <input type="text" id="apaterno" name="apaterno" class="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <div class="flex items-start flex-col justify-start">
            <label for="amaterno" class="text-sm text-gray-700 dark:text-gray-200 mr-2">Apellido Materno:</label>
            <input type="text" id="amaterno" name="amaterno" class="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <div class="flex items-start flex-col justify-start">
            <label for="correo" class="text-sm text-gray-700 dark:text-gray-200 mr-2">Correo:</label>
            <input type="email" id="correo" name="correo" class="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <div class="flex items-start flex-col justify-start">
            <label for="contrasena" class="text-sm text-gray-700 dark:text-gray-200 mr-2">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" class="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <div class="flex items-start flex-col justify-start">
            <label for="telefono" class="text-sm text-gray-700 dark:text-gray-200 mr-2">Telefono:</label>
            <input type="text" id="telefono" name="telefono" class="w-full px-3 dark:text-gray-200 dark:bg-gray-900 py-2 rounded-md border border-gray-300 dark:border-gray-700 focus:outline-none focus:ring-1 focus:ring-blue-500">
        </div>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-md shadow-sm">Registrar</button>
        </form>

        </form>
    </div>
</center>

</div> <!--Cierra contenerdor-->
</body>
</html>

