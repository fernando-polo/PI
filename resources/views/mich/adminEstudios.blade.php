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
    <input type="text" class="form-control me-2" style="width: 200px; border-color: #6b46c1; color: #6b46c1;" placeholder="Buscar Estudio...">
    <button type="button" class="btn" style="background-color: #e9d8fd; color: #6b46c1;">Buscar</button>
</div>

<!-- Botón para abrir el modal de registro -->
<button type="button" class="btn text-white mb-3" style="background-color: #6b46c1;" data-bs-toggle="modal" data-bs-target="#registrarMedicoModal">
    <i class="bi bi-plus-circle"></i> Registrar Nuevo Estudio
</button>

<!-- Modal de Registro -->
<div class="modal fade" id="registrarMedicoModal" tabindex="-1" aria-labelledby="registrarMedicoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: #6b46c1;">
                <h5 class="modal-title" id="registrarMedicoModalLabel">Registro Estudio</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <!-- Primera fila -->
                    <div class="col-md-6">
                        <label for="nombreEstudio" class="form-label">Nombre Estudio:</label>
                        <input type="text" class="form-control" id="nombreEstudio" placeholder="Ingrese nombre del estudio">
                    </div>
                    <div class="col-md-6">
                        <label for="clinica" class="form-label">Clinica:</label>
                        <input type="text" class="form-control" id="clinica" placeholder="Ingrese nombre clinica">
                    </div>
                    
                    <!-- Segunda fila -->
                    <div class="col-md-6">
                        <label for="direccion_clinica" class="form-label">Direccion Clinica:</label>
                        <input type="text" class="form-control" id="direccion_clinica" placeholder="Ingrese direccion clinica">
                    </div>
                    <div class="col-md-6">
                        <label for="costo" class="form-label">Costo:</label>
                        <input type="text" class="form-control" id="costo" placeholder="Ingrese apellido materno">
                    </div>
                    
                    <div class="col-md-6">
                        <label for="indicaciones" class="form-label">Indicaciones:</label>
                        <input type="text" class="form-control" id="costo" placeholder="Ingrese indicaciones para el estudio">
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

<!-- Tabla de médicos registrados -->
<div class="card shadow-sm">
    <div class="card-header text-white" style="background-color: #6b46c1;">
        <h5 class="mb-0">Estudios Registrados</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr style="background-color: #e9d8fd;">
                        <th>Nombre Estudio</th>
                        <th>Clinica</th>
                        <th>Costo</th>
                        <th>Indicaciones</th>
                        <th>Estatus</th>>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Radiografia Zona pelvica</td>
                        <td>Chopo</td>
                        <td>$1500.00</td>
                        <td>Ayuno de 12 horas</td>
                        <td><span class="badge" style="background-color: #38a169; color: white;">ACTIVO</span></td>
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