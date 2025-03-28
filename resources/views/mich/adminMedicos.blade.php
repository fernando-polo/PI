@extends('layouts.templateVAdmin')

@section('contenidoRegistros')

@section('btn1')
    <a href="{{route('rutaadminMedicos')}}" id="btnIconoCalendario" class="btn btn-outline-primary">
        <i class="bi bi-calendar"></i>        
        Médicos
    </a>
@endsection

@section('btn2')
    <a href="{{route('rutaadminUsuarios')}}" id="btnIconoCitasProximas" class="btn btn-outline-primary">
        <i class="bi bi-calendar-plus"></i>
        Usuarios 
    </a>
@endsection

@section('btn3')
    <a href="{{route('rutaadminEstudios')}}" id="btnIconoCitasRealizadas" class="btn btn-outline-primary">
        <i class="bi bi-calendar-check"></i>        
        Estudios
    </a>
@endsection

<!-- Barra de búsqueda y botón -->
<div class="d-flex justify-content-end mt-3">
    <input type="text" class="form-control me-2" style="width: 200px; border-color: #6b46c1; color: #6b46c1;" placeholder="Buscar médico...">
    <button type="button" class="btn" style="background-color: #e9d8fd; color: #6b46c1;">Buscar</button>
</div>

<!-- Botón para abrir el modal de registro -->
<button type="button" class="btn text-white mb-3" style="background-color: #6b46c1;" data-bs-toggle="modal" data-bs-target="#registrarMedicoModal">
    <i class="bi bi-plus-circle"></i> Registrar Nuevo Médico
</button>

<!-- Modal de Registro -->
<div class="modal fade" id="registrarMedicoModal" tabindex="-1" aria-labelledby="registrarMedicoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: #6b46c1;">
                <h5 class="modal-title" id="registrarMedicoModalLabel">Registro Médicos</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <!-- Primera fila -->
                    <div class="col-md-6">
                        <label for="cedula" class="form-label">Cédula Profesional:</label>
                        <input type="text" class="form-control" id="cedula" placeholder="Ingrese cédula profesional">
                    </div>
                    <div class="col-md-6">
                        <label for="nombres" class="form-label">Nombres:</label>
                        <input type="text" class="form-control" id="nombres" placeholder="Ingrese nombres">
                    </div>
                    
                    <!-- Segunda fila -->
                    <div class="col-md-6">
                        <label for="apellido_paterno" class="form-label">Apellido Paterno:</label>
                        <input type="text" class="form-control" id="apellido_paterno" placeholder="Ingrese apellido paterno">
                    </div>
                    <div class="col-md-6">
                        <label for="apellido_materno" class="form-label">Apellido Materno:</label>
                        <input type="text" class="form-control" id="apellido_materno" placeholder="Ingrese apellido materno">
                    </div>
                    
                    <!-- Tercera fila -->
                    <div class="col-md-6">
                        <label for="especialidad" class="form-label">Especialidad:</label>
                        <select class="form-select" id="especialidad">
                            <option value="" selected disabled>Seleccione especialidad</option>
                            <option value="Oncología">Oncología</option>
                            <option value="Pediatría">Pediatría</option>
                            <option value="Cardiología">Cardiología</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="universidad" class="form-label">Universidad:</label>
                        <input type="text" class="form-control" id="universidad" placeholder="Universidad de egreso">
                    </div>
                    
                    <!-- Cuarta fila -->
                    <div class="col-md-6">
                        <label for="otros_estudios" class="form-label">Otros estudios:</label>
                        <textarea class="form-control" id="otros_estudios" rows="2" placeholder="Especializaciones, diplomados, etc."></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="experiencia" class="form-label">Experiencia:</label>
                        <textarea class="form-control" id="experiencia" rows="2" placeholder="Años de experiencia, lugares de trabajo"></textarea>
                    </div>
                    
                    <!-- Quinta fila -->
                    <div class="col-md-6">
                        <label for="email" class="form-label">Correo electrónico:</label>
                        <input type="email" class="form-control" id="email" placeholder="correo@ejemplo.com">
                    </div>
                    <div class="col-md-6">
                        <label for="telefono" class="form-label">Número telefónico:</label>
                        <input type="tel" class="form-control" id="telefono" placeholder="+52 123 456 7890">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" style="border: 1px solid #6b46c1; color: #6b46c1;">
                    <i class="bi bi-eraser"></i> Limpiar
                </button>
                <button type="button" class="btn text-white" style="background-color: #6b46c1;">
                    <i class="bi bi-person-plus"></i> Registrar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Edición -->
<div class="modal fade" id="editarMedicoModal" tabindex="-1" aria-labelledby="editarMedicoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: #6b46c1;">
                <h5 class="modal-title" id="editarMedicoModalLabel">Editar Médico</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <!-- Primera fila -->
                    <div class="col-md-6">
                        <label for="edit_cedula" class="form-label">Cédula Profesional:</label>
                        <input type="text" class="form-control" id="edit_cedula" value="102125206">
                    </div>
                    <div class="col-md-6">
                        <label for="edit_nombres" class="form-label">Nombres:</label>
                        <input type="text" class="form-control" id="edit_nombres" value="Michelle Wendolyn">
                    </div>
                    
                    <!-- Segunda fila -->
                    <div class="col-md-6">
                        <label for="edit_apellido_paterno" class="form-label">Apellido Paterno:</label>
                        <input type="text" class="form-control" id="edit_apellido_paterno" value="Quintero">
                    </div>
                    <div class="col-md-6">
                        <label for="edit_apellido_materno" class="form-label">Apellido Materno:</label>
                        <input type="text" class="form-control" id="edit_apellido_materno" value="Moreno">
                    </div>
                    
                    <!-- Tercera fila -->
                    <div class="col-md-6">
                        <label for="edit_especialidad" class="form-label">Especialidad:</label>
                        <select class="form-select" id="edit_especialidad">
                            <option value="Oncología" selected>Oncología</option>
                            <option value="Pediatría">Pediatría</option>
                            <option value="Cardiología">Cardiología</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="edit_universidad" class="form-label">Universidad:</label>
                        <input type="text" class="form-control" id="edit_universidad" value="UPQ">
                    </div>
                    
                    <!-- Cuarta fila -->
                    <div class="col-md-6">
                        <label for="edit_otros_estudios" class="form-label">Otros estudios:</label>
                        <textarea class="form-control" id="edit_otros_estudios" rows="2">Diplomado en Oncología Pediátrica</textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="edit_experiencia" class="form-label">Experiencia:</label>
                        <textarea class="form-control" id="edit_experiencia" rows="2">5 años en Hospital Infantil</textarea>
                    </div>
                    
                    <!-- Quinta fila -->
                    <div class="col-md-6">
                        <label for="edit_email" class="form-label">Correo electrónico:</label>
                        <input type="email" class="form-control" id="edit_email" value="mquintero@example.com">
                    </div>
                    <div class="col-md-6">
                        <label for="edit_telefono" class="form-label">Número telefónico:</label>
                        <input type="tel" class="form-control" id="edit_telefono" value="442562583">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" style="border: 1px solid #6b46c1; color: #6b46c1;">
                    <i class="bi bi-eraser"></i> Limpiar
                </button>
                <button type="button" class="btn text-white" style="background-color: #6b46c1;">
                    <i class="bi bi-save"></i> Guardar Cambios
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Tabla de médicos registrados -->
<div class="card shadow-sm">
    <div class="card-header text-white" style="background-color: #6b46c1;">
        <h5 class="mb-0">Médicos Registrados</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr style="background-color: #e9d8fd;">
                        <th>Nombre</th>
                        <th>Cédula</th>
                        <th>Grado</th>
                        <th>Especialidad</th>
                        <th>Estatus</th>
                        <th>Universidad</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Michelle Wendolyn Quintero Moreno</td>
                        <td>102125206</td>
                        <td>Doctorado</td>
                        <td>Oncología pediatrica</td>
                        <td><span class="badge" style="background-color: #38a169; color: white;">ACTIVO</span></td>
                        <td>UPQ</td>
                        <td>442562583</td>
                        <td>
                            <button class="btn btn-sm me-1" style="background-color: #e9d8fd; color: #6b46c1;" data-bs-toggle="modal" data-bs-target="#editarMedicoModal">
                                <i class="bi bi-pencil"></i> 
                            </button>
                            <button class="btn btn-sm" style="background-color: #fed7d7; color: #9b2c2c;">
                                <i class="bi bi-trash"></i> 
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection