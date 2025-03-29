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
                    
                    <button class="edit-profile-btn">
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
    @endsection
</body>
</html>