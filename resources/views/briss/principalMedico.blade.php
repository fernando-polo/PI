@extends('layouts.templateMedico')

@section('titulo', 'OncoCheck - Historial de citas')

@push('styles')

    <!-- Estilos específicos para esta vista -->
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
            background-color: #6a1b9a; /* Cambiado a morado */
            padding: 15px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: white; /* Cambiado a blanco para contrastar con fondo morado */
            margin-right: 30px;
        }
        .nav-links {
            display: flex;
            gap: 20px;
        }
        .nav-link {
            color: white; /* Cambiado a blanco */
            text-decoration: none;
            font-weight: bold;
            padding: 5px 0;
            position: relative;
        }
        .nav-link:hover {
            color: #f3e5f5; /* Color morado claro para hover */
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
            background-color: white; /* Línea blanca para active */
        }
        .main-content {
            padding: 20px;
            flex: 1;
        }
        h1, h2, h3 {
            margin-top: 0;
        }
        .header-bar {
            background-color:  #f3e5f5;
            padding: 15px 20px;
            border-radius: 8px 8px 0 0;
            margin: -20px -20px 20px -20px; /* Para que coincida con el padding del card */
        }
        .header-bar h1 {
            color:  #6a1b9a; /* Texto negro como solicitado */
            font-size: 24px;
            margin-bottom: 0;
        }
        h2 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #6a1b9a;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .calendar-day {
            font-weight: bold;
        }
        .available-slot {
            font-weight: bold;
            color: #2ecc71;
        }
        .service-item {
            margin-bottom: 15px;
            padding-left: 25px;
            position: relative;
        }
        .service-item input[type="checkbox"] {
            position: absolute;
            left: 0;
            top: 0;
        }
        .star-rating {
            color: #f39c12;
            font-size: 18px;
            margin: 5px 0;
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
            display: block;
            padding: 8px 15px;
            background-color: #6a1b9a;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            margin: 10px auto 0;
            text-align: center;
            width: fit-content;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #5a148a;
        }
        .btn-edit {
            background-color: #95a5a6;
        }
        .btn-edit:hover {
            background-color: #7f8c8d;
        }
        .btn-small {
            padding: 5px 10px;
            font-size: 14px;
            margin: 10px 0 0 0;
        }
        .card {
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
            background-color: white;
            position: relative;
        }
        .purple-card {
            background-color: #f3e5f5;
        }
        .doctor-card {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .doctor-info {
            flex: 1;
        }
        .doctor-avatar {
            width: 80px;
            height: 80px;
            background-color: #eee;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #999;
        }
        .section-title {
            font-size: 18px;
            color: #3498db;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 1px solid #eee;
        }
        .main-container {
            display: flex;
            gap: 20px;
        }
        .left-column {
            flex: 1.5; /* Reducido de 2 a 1.5 para hacerlo más estrecho */
        }
        .right-column {
            flex: 2; /* Aumentado de 1 a 2 para hacerlo más ancho */
        }
        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
/* Estilos base para todos los modales */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: white;
    border-radius: 8px;
    width: 600px;
    max-width: 90%;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

.modal-header {
    background-color: #a44ddb;
    color: white;
    padding: 15px 20px;
    font-size: 15px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.close-btn {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    padding: 0;
    margin: 0;
    line-height: 1;
    transition: transform 0.2s;
}

.close-btn:hover {
    transform: scale(1.1);
}

.modal-body {
    padding: 20px;
}

.divider-line {
    height: 1px;
    background-color: #eee;
    margin: 15px 0;
}

/* Estilos específicos para el modal de información */
.info-section {
    margin-bottom: 20px;
}

.info-section h3 {
    color: #6a1b9a;
    margin-bottom: 15px;
    font-size: 16px;
}

.form-row {
    display: flex;
    align-items: center;
    padding: 10px 0;
}

.form-label {
    width: 45%;
    font-weight: bold;
    font-size: 14px;
    color: #555;
}

.form-input {
    width: 55%;
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
    box-shadow: 0 0 0 2px rgba(164, 77, 219, 0.2);
}

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
}

.save-btn:hover {
    background-color: #5a148a;
}

/* Estilos para el modal de subida de imagen (secundario) */
.secondary-modal {
    z-index: 1100;
    background-color: rgba(0, 0, 0, 0.7);
}

.small-modal {
    width: 400px;
}

.upload-body {
    text-align: center;
    padding: 25px;
}

.upload-info {
    color: #777;
    font-size: 14px;
    margin-bottom: 20px;
}

.upload-area {
    border: 2px dashed #ddd;
    border-radius: 8px;
    padding: 30px;
    margin-bottom: 20px;
    cursor: pointer;
    transition: all 0.3s;
}

.upload-area:hover {
    border-color: #6a1b9a;
    background-color: #f9f9f9;
}

.upload-icon {
    font-size: 48px;
    color: #a44ddb;
    margin-bottom: 15px;
}

.upload-actions {
    display: flex;
    justify-content: center;
    gap: 15px;
    margin-top: 20px;
}

.btn-cancel, .btn-upload {
    padding: 8px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    font-weight: bold;
    transition: background-color 0.3s;
    border: none;
}

.btn-cancel {
    background-color: #95a5a6;
    color: white;
}

.btn-cancel:hover {
    background-color: #7f8c8d;
}

.btn-upload {
    background-color: #6a1b9a;
    color: white;
}

.btn-upload:hover:not(:disabled) {
    background-color: #5a148a;
}

.btn-upload:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

/* Estilos para el modal de experiencia */
#experienceModal textarea {
    width: 100%;
    min-height: 150px;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-family: Arial, sans-serif;
    font-size: 14px;
    line-height: 1.5;
    resize: vertical;
    margin-bottom: 15px;
    transition: border-color 0.3s;
}

#experienceModal textarea:focus {
    outline: none;
    border-color: #a44ddb;
    box-shadow: 0 0 0 2px rgba(164, 77, 219, 0.2);
}

/* Estilos adicionales para el modal de experiencia */
#experienceModal .modal-content {
    width: 600px;
    max-width: 90%;
}

#experienceModal .modal-header {
    background-color: #a44ddb;
    color: white;
    padding: 15px 20px;
    font-size: 15px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#experienceModal .close-btn {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
    padding: 0;
    margin: 0;
    line-height: 1;
}

#experienceModal textarea {
    width: 100%;
    min-height: 150px;
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-family: Arial, sans-serif;
    font-size: 14px;
    line-height: 1.5;
    resize: vertical;
    margin-bottom: 15px;
}

#experienceModal textarea:focus {
    outline: none;
    border-color: #a44ddb;
    box-shadow: 0 0 0 2px rgba(164, 77, 219, 0.2);
}

#experienceModal .save-btn {
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
}

#experienceModal .save-btn:hover {
    background-color: #5a148a;
}

#experienceModal .divider-line {
    height: 1px;
    background-color: #eee;
    margin: 15px 0;
}

/* Estilos para las filas del formulario */
.form-row {
    display: flex;
    align-items: center;
    padding: 10px 0;
}

.form-label {
    width: 45%;
    font-weight: bold;
    font-size: 14px;
    color: #555;
}

.form-input {
    width: 55%;
}

.small-input {
    width: 100%;
    padding: 6px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

/* Líneas divisorias */
.divider-line {
    height: 1px;
    background-color: #e0e0e0;
    margin: 15px 0;
}

.divider-line-light {
    height: 1px;
    background-color: #f0f0f0;
    margin: 5px 0;
}

/* Resto de estilos se mantienen igual que antes */

/* Estilos para la sección de foto del doctor */
.doctor-profile-section {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 15px;
}
.doctor-photo-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
}
.doctor-photo {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #f3e5f5;
}
.change-photo-btn {
    background-color: #6a1b9a;
    color: white;
    border: none;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 12px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.change-photo-btn:hover {
    background-color: #5a148a;
}
.doctor-basic-info {
    flex: 1;
}
.doctor-basic-info h2 {
    font-size: 18px;
    color: #333;
    margin: 0 0 8px 0;
}
.doctor-basic-info small {
    font-size: 12px;
    color: #777;
    display: block;
    margin-bottom: 3px;
}

        /* Estilos para la sección de foto del doctor */
.doctor-profile-section {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 25px;
    padding-bottom: 20px;
    border-bottom: 1px solid #eee;
}

.doctor-photo-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
}

.doctor-photo {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    border: 3px solid #f3e5f5;
}

.change-photo-btn {
    background-color: #6a1b9a;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 4px;
    font-size: 12px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.change-photo-btn:hover {
    background-color: #5a148a;
}

.doctor-basic-info {
    flex: 1;
}

.doctor-basic-info small {
    font-size: 13px;
    color: #555;
    display: block;
    margin-bottom: 5px;
}
    </style>
       @endpush
</head>
@section('contenido')  
<body>
    
  

    <div class="main-content">
        <div class="main-container">
            <!-- Columna izquierda -->
            <div class="left-column">
                <div class="card">
                    <div class="header-bar">
                        <h1>Historial de citas</h1>
                    </div>
                    
                    <h2>Clinica Castillo Lopez</h2>
                    <p>Calle Matamoros 28, Queretaro</p>
    
                    <table class="calendar">
                        <thead>
                            <tr>
                                <th>Hoy</th>
                                <th>Mañana</th>
                                <th>Mié</th>
                                <th>Jue</th>
                                <th>Vie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="calendar-day">08 Oct</td>
                                <td class="calendar-day">09 Oct</td>
                                <td class="calendar-day">10 Oct</td>
                                <td class="calendar-day">11 Oct</td>
                                <td class="calendar-day">12 Oct</td>
                            </tr>
                            <tr>
                                <td>16:30</td>
                                <td>-</td>
                                <td class="available-slot">16:00</td>
                                <td class="available-slot">11:30</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
    
                    <a href="{{ route('historial-citas') }}" class="btn">Ver más</a>
                </div>
            </div>
    
            <!-- Columna derecha -->
            <div class="right-column">
                <div class="card purple-card doctor-card">
                    <div class="doctor-avatar">Foto</div>
                    <div class="doctor-info">
                        <h2>Drª Susana Villagomez</h2>
                        <p>Dermatóloga<br>Numero de colegiado 0000000</p>
                        <div class="star-rating">★★★★★</div>
                        <p>180 opiniones</p>
                        <button class="btn btn-small">Reservar cita</button>
                        <div style="display: flex; gap: 10px; margin-top: 10px;">
                            <button id="infoBtn">Información</button>
                            <button>Servicios</button>
                        </div>
                    </div>
                </div>
    
                <div class="card purple-card">
                    <div class="section-title">Consultas</div>
                    <div class="service-item">
                        <input type="checkbox" id="consulta1" name="consulta1">
                        <label for="consulta1">
                            <strong>Clinica Castillo Lopez</strong><br>
                            Calle Matamoros 28, Queretaro<br><br>
                            Primera visita clínica (120)<br>
                            Visitas sucesivas<br>
                            Tratamientos + 15 <a href="{{ route('historial-citas') }}">ver más</a>
                        </label>
                    </div>
                </div>
    
                <div class="card purple-card">
                    <div class="section-title">Experencia</div>
                    <div class="service-item">
                        <input type="checkbox" id="experiencia" name="experiencia">
                        <label for="experiencia">
                            Sobre mí<br>
                            Tras años de experiencia acumulada en la practica privada, en 2012 decide emprender mi propio proyecto abriendo una clínica particular...
                        </label>
                    </div>
                    <a href="#" class="btn btn-edit">Editar experiencia</a>
                </div>
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

<!-- Nuevo modal para carga de imagen -->
<div id="imageUploadModal" class="modal secondary-modal">
    <div class="modal-content small-modal">
        <div class="modal-header">
            Carga imagen
            <button class="close-btn" id="closeImageModal">&times;</button>
        </div>
        <div class="modal-body upload-body">
            <p class="upload-info">Solo archivos de 10 MB</p>
            <div class="upload-area" id="dropZone">
                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                <p>Arrastra tu imagen aquí o haz clic para seleccionar</p>
                <input type="file" id="fileInput" accept="image/*" style="display: none;">
                <button class="btn upload-btn">Seleccionar imagen</button>
            </div>
            <div class="upload-actions">
                <button class="btn btn-cancel">Cancelar</button>
                <button class="btn btn-upload" disabled>Subir imagen</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal para editar experiencia -->
<div id="experienceModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            Cambiar información personal
            <button class="close-btn" id="closeExperienceModal">&times;</button>
        </div>
        <div class="modal-body">
            <div class="info-section">
                <textarea style="width: 100%; height: 150px; padding: 10px; border: 1px solid #ddd; border-radius: 4px; resize: vertical; font-family: Arial, sans-serif; font-size: 14px;">
Tras años de experiencia acumulada en la practica privada , en 2012 decido emprender mi propio proyecto abriendo una clínica particular...</textarea>
                
                <div class="divider-line"></div>
                
                <button class="save-btn">Guardar cambios</button>
            </div>
        </div>
    </div>
</div>
@endsection
         
   
    @push('scripts')  <!-- agregado -->
    <script>
        // Obtener elementos del DOM
        const infoBtn = document.getElementById('infoBtn');
        const closeModal = document.getElementById('closeModal');
        const modal = document.getElementById('infoModal');

        // Abrir modal al hacer clic en el botón Información
        infoBtn.addEventListener('click', function() {
            modal.style.display = 'flex';
        });

        // Cerrar modal al hacer clic en la X
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
        });

        // Cerrar modal al hacer clic fuera del contenido
        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });

        // Obtener elementos del DOM
const changePhotoBtn = document.querySelector('.change-photo-btn');
const imageUploadModal = document.getElementById('imageUploadModal');
const closeImageModal = document.getElementById('closeImageModal');
const uploadBtn = document.querySelector('.upload-btn');
const fileInput = document.getElementById('fileInput');
const btnUpload = document.querySelector('.btn-upload');
const dropZone = document.getElementById('dropZone');

// Abrir modal de carga de imagen
changePhotoBtn.addEventListener('click', function() {
    imageUploadModal.style.display = 'flex';
});

// Cerrar modal de carga de imagen
closeImageModal.addEventListener('click', function() {
    imageUploadModal.style.display = 'none';
});

// Cerrar al hacer clic fuera del modal
window.addEventListener('click', function(event) {
    if (event.target === imageUploadModal) {
        imageUploadModal.style.display = 'none';
    }
});

// Manejar selección de archivo
uploadBtn.addEventListener('click', function() {
    fileInput.click();
});

fileInput.addEventListener('change', function() {
    if (this.files && this.files[0]) {
        // Validar tamaño del archivo (10MB)
        if (this.files[0].size > 10 * 1024 * 1024) {
            alert('El archivo es demasiado grande. Máximo 10MB permitidos.');
            return;
        }
        btnUpload.disabled = false;
        // Aquí puedes mostrar una previsualización si lo deseas
    }
});

// Manejar arrastrar y soltar
dropZone.addEventListener('dragover', function(e) {
    e.preventDefault();
    this.style.borderColor = '#6a1b9a';
    this.style.backgroundColor = '#f3e5f5';
});

dropZone.addEventListener('dragleave', function(e) {
    e.preventDefault();
    this.style.borderColor = '#ddd';
    this.style.backgroundColor = 'transparent';
});

dropZone.addEventListener('drop', function(e) {
    e.preventDefault();
    this.style.borderColor = '#ddd';
    this.style.backgroundColor = 'transparent';
    
    if (e.dataTransfer.files && e.dataTransfer.files[0]) {
        fileInput.files = e.dataTransfer.files;
        btnUpload.disabled = false;
    }
});

//modal editar experiencia
// Obtener elementos del DOM para el modal de experiencia
const editExperienceBtn = document.querySelector('.btn-edit');
const closeExperienceModal = document.getElementById('closeExperienceModal');
const experienceModal = document.getElementById('experienceModal');

// Abrir modal al hacer clic en el botón Editar experiencia
editExperienceBtn.addEventListener('click', function(e) {
    e.preventDefault();
    experienceModal.style.display = 'flex';
});

// Cerrar modal al hacer clic en la X
closeExperienceModal.addEventListener('click', function() {
    experienceModal.style.display = 'none';
});

// Cerrar modal al hacer clic fuera del contenido
window.addEventListener('click', function(event) {
    if (event.target === experienceModal) {
        experienceModal.style.display = 'none';
    }
});
    </script>
    @endpush
</body>
</html>