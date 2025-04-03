@extends('layouts.templateMedico')

@section('titulo', 'OncoCheck - Historialcitas')

@push('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .top-navbar {
            background-color: #6a1b9a;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }
        .main-nav {
            display: flex;
            gap: 25px;
        }
        .main-nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }
        .main-nav a:hover {
            text-decoration: underline;
        }
        .auth-nav {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .auth-nav a {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }
        .auth-nav a:not(:last-child) {
            border-right: 1px solid white;
            padding-right: 15px;
        }
        .user-icon {
            background-color: white;
            color: #6a1b9a;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .user-icon:hover {
            transform: scale(1.1);
        }
        .navbar {
            background-color: #6a1b9a;
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            margin-right: 30px;
        }
        .nav-links {
            display: flex;
            gap: 20px;
        }
        .nav-link {
            color: white;
            text-decoration: none;
            font-weight: bold;
            padding: 5px 0;
            position: relative;
        }
        .nav-link:hover {
            color: #f3e5f5;
        }
        .nav-link.active {
            color: white;
            font-weight: bold;
        }
        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: white;
        }
        .main-content {
            padding: 20px;
            flex: 1;
            display: flex;
            gap: 20px;
        }
        .left-column {
            flex: 1;
            min-width: 350px;
            max-width: 400px;
        }
        .right-column {
            flex: 2;
        }
        h1, h2, h3 {
            margin-top: 0;
        }
        .header-bar {
            background-color: #f3e5f5;
            padding: 15px 20px;
            border-radius: 8px 8px 0 0;
            margin: -20px -20px 20px -20px;
        }
        .header-bar h1 {
            color: #6a1b9a;
            font-size: 24px;
            margin-bottom: 0;
        }
        h2 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #6a1b9a;
        }
        h3 {
            font-size: 18px;
            color: #6a1b9a;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .divider {
            border-top: 1px solid #ddd;
            margin: 20px 0;
        }
        .footer {
            background-color: #e0e0e0;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #7f8c8d;
            border-top: 1px solid #d0d0d0;
        }
        .btn {
            display: inline-block;
            padding: 8px 15px;
            background-color: #6a1b9a;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #5a148a;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            background-color: white;
        }
        .purple-card {
            background-color: #f3e5f5;
        }
        .doctor-card {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .doctor-info {
            flex: 1;
        }
        .appointment-item {
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        .appointment-item:last-child {
            border-bottom: none;
        }
        .prescription-item {
            margin-bottom: 20px;
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .prescription-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .prescription-detail {
            margin-bottom: 5px;
        }
        .no-data {
            color: #999;
            font-style: italic;
        }
        .contact-info {
            margin-top: 15px;
        }
        .contact-info p {
            margin: 5px 0;
        }
        
        /* Estilos para el componente de perfil médico dinámico */
        .doctor-profile-container {
            background-color: #f8f5fc;
            border-radius: 10px;
            padding: 50px;
            box-shadow: 0 2px 10px rgba(106, 27, 154, 0.1);
            margin-bottom: 20px;
            height: fit-content;
        }
        
        .doctor-profile-header {
            text-align: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #6a1b9a;
        }
        
        .doctor-profile-header h2 {
            color: #6a1b9a;
            margin: 0;
            font-size: 1.5rem;
        }
        
        .doctor-avatar {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            border-radius: 50%;
            background-color: #e9d8f7;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .doctor-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .default-avatar {
            color: #6a1b9a;
            font-size: 50px;
        }
        
        .doctor-info-container {
            text-align: center;
        }
        
        .doctor-info-container h3 {
            color: #333;
            margin-bottom: 5px;
            font-size: 1.3rem;
        }
        
        .specialty {
            color: #6a1b9a;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .doctor-details {
            text-align: left;
            margin: 25px 0;
        }
        
        .detail-item {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            font-size: 0.95rem;
        }
        
        .detail-icon {
            color: #6a1b9a;
            margin-right: 10px;
            margin-top: 3px;
            min-width: 20px;
        }
        
        .edit-profile-btn {
            background-color: #6a1b9a;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: background-color 0.3s;
            margin-top: 15px;
        }
        
        .edit-profile-btn:hover {
            background-color: #5a148a;
        }

/* Estilos específicos para el modal de información */
/* Estilos generales del modal */
.modal {
    display: none; /* Oculto por defecto */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro semi-transparente */
}

/* Contenedor del modal */
.modal-content {
    background: white;
    width: 450px; /* Ajusta según necesidad */
    max-width: 90%;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    animation: fadeIn 0.3s ease-in-out;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* Centrado exacto */
    
}

/* Animación de aparición */
@keyframes fadeIn {
    from { opacity: 0; transform: scale(0.9); }
    to { opacity: 1; transform: scale(1); }
}

/* Encabezado del modal */
.modal-header {
    display: flex;
    justify-content: flex-end;
}

/* Botón de cerrar */
.close-btn {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #6a1b9a;
}

.close-btn:hover {
    color: #5a148a;
}

/* Sección de perfil del doctor */
.doctor-profile-section {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 15px;
}

.doctor-photo-container {
    text-align: center;
}

.doctor-photo {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.change-photo-btn {
    display: block;
    margin-top: 5px;
    font-size: 12px;
    background-color: #6a1b9a;
    color: white;
    border: none;
    padding: 5px;
    border-radius: 4px;
    cursor: pointer;
}

.change-photo-btn:hover {
    background-color: #5a148a;
}

/* Estilos de los formularios */
.info-section {
    margin-bottom: 20px;
}

.info-section h3 {
    color: #6a1b9a;
    margin-bottom: 10px;
    font-size: 16px;
}

.form-row {
    display: flex;
    align-items: center;
    padding: 8px 0;
}

.form-label {
    width: 40%;
    font-weight: bold;
    font-size: 14px;
    color: #555;
}

.form-input {
    width: 60%;
}

.small-input {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.small-input:focus {
    border-color: #a44ddb;
    outline: none;
    box-shadow: 0 0 3px rgba(164, 77, 219, 0.5);
}

/* Botón de guardar */
.save-btn {
    background-color: #6a1b9a;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    transition: background-color 0.3s;
    display: block;
    margin: 20px auto 0;
    text-align: center;
}

.save-btn:hover {
    background-color: #5a148a;
}

/* Línea divisora */
.divider-line {
    border-top: 1px solid #ccc;
    margin: 15px 0;
}

.divider-line-light {
    border-top: 1px solid #e0e0e0;
    margin: 10px 0;
}
    </style>
       @endpush
</head>
@section('contenido')  
<body>
    <!-- Contenido principal -->
    <div class="main-content">
        <!-- Columna izquierda - Perfil médico dinámico -->
        <div class="left-column">
            <div class="doctor-profile-container">
                <div class="doctor-profile-header">
                    <h2>Información Profesional</h2>
                </div>
                
                <div class="doctor-avatar">
                    <i class="fas fa-user-md default-avatar"></i>
                </div>
                
                <div class="doctor-info-container">
                    <h3>Dra. Susana Villagomez</h3>
                    <p class="specialty">Medicina Interna</p>
                    
                    <div class="doctor-details">
                        <div class="detail-item">
                            <i class="fas fa-briefcase detail-icon"></i>
                            <span>Años de experiencia: <strong>15 años</strong></span>
                        </div>
                        
                        <div class="detail-item">
                            <i class="fas fa-phone detail-icon"></i>
                            <span>Teléfono: <strong>(555) 123-4567</strong></span>
                        </div>
                        
                        <div class="detail-item">
                            <i class="fas fa-envelope detail-icon"></i>
                            <span>Email: <strong>dra.susanavillagomez@clinicamedica.com</strong></span>
                        </div>
                        
                        <div class="detail-item">
                            <i class="fas fa-map-marker-alt detail-icon"></i>
                            <span>Dirección: <strong>Av. Salud No. 123, Ciudad Bienestar, CP 45678</strong></span>
                        </div>
                        
                        <div class="detail-item">
                            <i class="fas fa-clock detail-icon"></i>
                            <span>Horario: <strong>Lunes a Viernes de 9:00 a.m. a 5:00 p.m.</strong></span>
                        </div>
                        
                        <div class="detail-item">
                            <i class="fas fa-language detail-icon"></i>
                            <span>Idiomas: <strong>Español, Inglés</strong></span>
                        </div>
                        
                        <div class="detail-item">
                            <i class="fas fa-id-card detail-icon"></i>
                            <span>Número de licencia: <strong>MED-123456</strong></span>
                        </div>
                    </div>
                    
                    <button class="edit-profile-btn" id="editarBtn">
                        <i class="fas fa-edit"></i> Editar información
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Columna derecha - Historial de citas -->
        <div class="right-column">
            <div class="card">
                <!-- Barra morada con texto "Historial de citas" -->
                <div class="header-bar">
                    <h1>Historial de citas</h1>
                </div>
                
                <h2>Hoy</h2>
                <div class="appointment-item">
                    <p>Cita de 9:00 a.m. - 10:00 a.m.</p>
                </div>
                
                <div class="divider"></div>
                
                <h2>Martes</h2>
                <p class="no-data">Sin cita agendada</p>
                
                <h3>Receta</h3>
                <div class="prescription-item">
                    <div class="prescription-title">Resumen de la cita.</div>
                    <div class="prescription-detail">03 / 06 / 24 - 13:00 p.m.</div>
                    <div class="prescription-detail"><strong>Estudio:</strong> Densitometría ósea de cuerpo completo</div>
                    <div class="prescription-detail"><strong>Paciente:</strong> Víctor F.</div>
                    <div class="prescription-detail"><strong>ID Paciente:</strong> #343434</div>
                </div>
                
                <h3>Receta</h3>
                <div class="prescription-item">
                    <div class="prescription-title">Resumen de la cita.</div>
                    <div class="prescription-detail">01 / 06 / 24 - 14:30 p.m.</div>
                    <div class="prescription-detail"><strong>Estudio:</strong> Densitometría ósea de columna</div>
                    <div class="prescription-detail"><strong>Paciente:</strong> Fernando G.</div>
                    <div class="prescription-detail"><strong>ID Paciente:</strong> #010101</div>
                </div>
                
                <h3>Historias clínicas</h3>
                <div class="prescription-item">
                    <div class="prescription-detail">Historial clínico general</div>
                </div>
                
                <div class="divider"></div>
                
                <h2>Análisis</h2>
                <p class="no-data">Sin resultados</p>
            </div>
        </div>
    </div>



    
    <!-- Modal de información -->
<div id="infoModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <button class="close-btn" id="closeModal">&times;</button>
        </div>
        <div class="modal-body">
            <!-- Nueva sección de foto y datos básicos -->
            <div class="doctor-profile-section">
                <div class="doctor-photo-container">
                    <img src="https://via.placeholder.com/100" alt="Foto del doctor" class="doctor-photo">
                    <button class="change-photo-btn">Cambiar foto</button>
                </div>
                <div class="doctor-basic-info">
                    <h2>Dra Susana Villagomez</h2>
                    <p><small>Correo: susanavillagomez020@gmail.com</small></p>
                    <p><small>Tel: 4424082293</small></p>
                </div>
            </div>

            <div class="divider-line"></div>

            <div class="info-section">
                <h3>Cambiar información personal</h3>
                
                <div class="form-row">
                    <div class="form-label">Número de teléfono:</div>
                    <div class="form-input">
                        <input type="tel" placeholder="4424082293" class="small-input">
                    </div>
                </div>
                
                <div class="divider-line-light"></div>
                
                <div class="form-row">
                    <div class="form-label">Años de experiencia:</div>
                    <div class="form-input">
                        <input type="text" placeholder="" class="small-input">
                    </div>
                </div>
                
                <div class="divider-line-light"></div>
                
                <div class="form-row">
                    <div class="form-label">Idiomas:</div>
                    <div class="form-input">
                        <input type="text" placeholder="" class="small-input">
                    </div>
                </div>
                
                
            </div>
            
            <div class="divider-line"></div>

            <div class="info-section">
                <h3>Cambiar correo</h3>
                
                <div class="form-row">
                    <div class="form-label">Nuevo correo:</div>
                    <div class="form-input">
                        <input type="email" placeholder="@gmail.com" class="small-input">
                    </div>
                </div>
                
                <button class="save-btn">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Obtener los elementos
        const editarBtn = document.getElementById("editarBtn");
        const modal = document.getElementById("infoModal");
        const closeModal = document.getElementById("closeModal");

        // Abrir modal
        editarBtn.addEventListener("click", function() {
            modal.style.display = "block"; // O "flex" si es necesario
        });

        // Cerrar modal
        closeModal.addEventListener("click", function() {
            modal.style.display = "none";
        });

        // Cerrar modal si se hace clic fuera de la ventana
        window.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        });
    });
</script>
@endpush

</body>
</html>