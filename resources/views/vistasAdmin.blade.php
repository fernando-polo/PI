@extends('layouts.templateVAdmin')

@section('titulo', 'Vistas administrativas')

@section('btn1')
    <a href="{{route('rutavistasAdmin')}}" id="btnIconoUsuarios" class="btn btn-outline-primary">
        <i class="bi bi-people-fill"></i>
        Usuarios
    </a>
@endsection

@section('btn2')
    <a href="{{route('rutaaltamedico')}}" id="btnIconoMedicos" class="btn btn-outline-primary">
        <i class="bi bi-hospital-fill"></i>
        Médicos
    </a>
@endsection

@section('btn3')
    <a href="#" id="btnIconoEstudios" class="btn btn-outline-primary">
        <i class="bi bi-file-earmark-medical-fill"></i>
        Estudios
    </a>
@endsection

@section('contenidoRegistros')
    @foreach ($ConsultarUsuarios as $usuario)

    {{-- Mensaje de confirmación de usuarioActualizado --}}
    @session('usuarioActualizado')
        <script>
            Swal.fire({
                text: "Se actualizo exitosamente el usuario: {{$value}}",
                icon: "success"
            })
        </script>
    @endsession

    {{-- Mensaje de confirmación de usuarioEliminado --}}
    @session('usuarioEliminado')
        <script>
            Swal.fire({
                text: "Se elimino exitosamente el usuario.",
                icon: "success"
            })
        </script>
    @endsession

    <div class="container mt-4 mb-4" >
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">CURP: {{$usuario -> curp}}</h5>
            <p class="card-text"><strong>Nombre del usuario:</strong> {{$usuario -> nombre}}</p>
            <p class="card-text"><strong>Apellido Paterno del usuario: </strong>{{$usuario -> a_paterno}}</p>
            <p class="card-text"><strong>Apellido Materno del usuario: </strong>{{$usuario -> a_materno}}</p>
            <p class="card-text"><strong>Email del usuario: </strong>{{$usuario -> email}}</p>
            <p class="card-text"><strong>Contraseña del usuario: </strong>{{$usuario -> password}}</p>
            <p class="card-text"><strong>Teléfono del usuario: </strong>{{$usuario -> telefono}}</p>

            <div class="container">
                <div class="row">
                    {{-- Botón editar usuario --}}    
                    <div class="col">           
                        <a href=" {{route('rutausuariosUpdate', ['id' => $usuario->id]) }} " type="submit"class="btn btn-warning" >Editar</a>
                    </div> 

                    {{-- Botón elminar usuario --}}
                    <div class="col text-end">
                        {{-- <form id="eliminarUsuario{{$usuario->id}}" action="{{route('rutaeliminarUsuario', ['id' => $usuario->id] )}}"> --}}
                        <form id="eliminarUsuario{{$usuario->id}}" action="{{route('rutaeliminarUsuario', $usuario->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger" onclick="confirmarUsuario({{ $usuario->id }})">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>

            </div>
        </div>
        <hr>
    </div>

    @endforeach

{{-- Script de la función confirmarUsuario, con un sweetalert pregunta si se desea elimnar al usuario o no --}}
    <script>
        function confirmarUsuario(usuarioid){
        Swal.fire({
            title: "¿Estás seguro de eliminar a este usuario?",
            text: "No podrás revertir esta acción",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Eliminar"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`eliminarUsuario${usuarioid}`).submit();
                    };
                });
        }



    </script>
@endsection 