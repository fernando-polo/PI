<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OncoCheck - Historial de citas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
    </style>
</head>
<body>
    <!-- Barra de navegación principal (ahora morada) -->
    <nav class="navbar">
        <div style="display: flex; align-items: center;">
            <div class="navbar-brand">OncoCheck</div>
            <div class="nav-links">
                <a href="#" class="nav-link">Citas</a>
                <a href="#" class="nav-link">Agenda</a>
                <a href="#" class="nav-link active">Historial de citas</a>
            </div>
        </div>
        <div class="user-icon" onclick="window.location.href='perfil.html'">
            <i class="fas fa-user"></i>
        </div>
    </nav>

    <!-- Contenido principal -->
    <div class="main-content">
        <div class="main-container">
            <!-- Columna izquierda (blanca) - ahora más estrecha -->
            <div class="left-column">
                <div class="card">
                    <!-- Barra morada con texto "Historial de citas" -->
                    <div class="header-bar">
                        <h1>Historial de citas</h1>
                    </div>
                    
                    <h2>Chilea Castillo Lopez</h2>
                    <p>Calle Matamoros 28, Queretaro</p>

                    <!-- Componente de calendario -->
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
                            <tr>
                                <td>20:00</td>
                                <td>-</td>
                                <td class="available-slot">16:30</td>
                                <td class="available-slot">12:00</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>-</td>
                                <td>-</td>
                                <td class="available-slot">17:00</td>
                                <td class="available-slot">12:30</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>

                    <a href="#" class="btn">Ver más</a>
                </div>
            </div>

            <!-- Columna derecha (contenedores morados) - ahora más ancha -->
            <div class="right-column">
                <div class="card purple-card doctor-card">
                    <div class="doctor-avatar">Foto</div>
                    <div class="doctor-info">
                        <h2>Drª Susana Villagomez</h2>
                        <p>Dermatóloga<br>Numero de colegiado 0000000</p>
                        
                        <div class="star-rating">★★★★★</div>
                        <p>180 opiniones</p>
                        <button class="btn btn-small" onclick="window.location.href='reservar.html'">Reservar cita</button>
                        <div style="display: flex; gap: 10px; margin-top: 10px;">
                            <button>Información</button>
                            <button>Servicios</button>
                        </div>
                    </div>
                </div>

                <div class="card purple-card">
                    <div class="section-title">Consultas</div>

                    <div class="service-item">
                        <input type="checkbox" id="consulta1" name="consulta1">
                        <label for="consulta1">
                            <strong>Chilea Castillo Lopez</strong><br>
                            Calle Matamoros 28, Queretaro<br><br>
                            Primera visita clínica (120)<br>
                            Visitas sucesivas<br>
                            Tratamientos + 15 <a href="#">ver más</a>
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

    <!-- Pie de página -->
    <footer class="footer">
        <p>Copyright © 2025 OncoCheck<br>Todos los derechos reservados.</p>
    </footer>
</body>
</html>