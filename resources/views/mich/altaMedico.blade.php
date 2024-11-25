
    @extends('layouts.templateVAdmin')
    @section('altaMedico')


    @section('titulo', 'MedCLINIC Registro de usuarios')


        <div class="card">
            <div class="card-header fs-5 text-center text-primary">
            <span style="color: #ff5733">¡Registra un nuevo Medico!</span>
            </div>
        
            <div class="card-body text-justify">
            <form action="" method="post" id="formRegistro">
                @csrf    
                <div class="mb-3">
                <label for="cprofesional" class="form-label">Cedula profesional: </label>
                <input type="text" class="form-control" name="cprofesional" value="#">
                <small class="text-danger">{{ $errors->first('cprofesional') }}</small>
                </div>
                <div class="mb-3">
                <label for="cespacialidad" class="form-label">Cedula Especialidad: </label>
                <input type="text" class="form-control" name="cespacialidad" value="#">
                <small class="text-danger">{{ $errors->first('cespacialidad') }}</small>
                </div>
                <div class="mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" class="form-control" name="nombre" value="#">
                <small class="text-danger">{{ $errors->first('nombre') }}</small>
                </div>
                <div class="mb-3">
                <label for="apaterno" class="form-label">Apellido Paterno: </label>
                <input type="text" class="form-control" name="apaterno" value="#">
                <small class="text-danger">{{ $errors->first('apaterno') }}</small>
                </div>
                <div class="mb-3">
                <label for="amaterno" class="form-label">Apellido Materno: </label>
                <input type="text" class="form-control" name="amaterno" value="#">
                <small class="text-danger">{{ $errors->first('amaterno') }}</small>
                </div>
                <div class="mb-3">
                <label for="telefono" class="form-label">Numero Telefonico: </label>
                <input type="text" class="form-control" name="telefono" value="#">
                <small class="text-danger">{{ $errors->first('telefono') }}</small>
                </div>
                <div class="mb-3">
                <label for="correo" class="form-label">Correo: </label>
                <input type="text" class="form-control" name="correo" value="#">
                <small class="text-danger">{{ $errors->first('correo') }}</small>
                </div>
                <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña: </label>
                <input type="text" class="form-control" name="contrasena" value="#">
                <small class="text-danger">{{ $errors->first('contrasena') }}</small>
                </div>
                <div class="card-footer text-muted">
                <div class="row">
                    <div class="col">
                        <div class="d-grid gap-2 mt-2 mb-1">
                            <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('formRegistro').reset();">Limpiar</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2 mt-2 mb-1">
                            <button type="submit" class="btn btn-sm btn-outline-secondary">Guardar datos</button>
                        </div>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>

        </div>
    </section>
    @endsection

