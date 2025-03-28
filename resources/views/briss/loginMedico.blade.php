<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OncoCheck - Inicio de Sesión</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary-color: #6a3093;
            --primary-light: #b58fd1;
            --primary-dark: #4a1d6b;
            --text-color: #333;
            --light-gray: #f5f5f5;
            --white: #ffffff;
            --footer-gray: #f0f0f0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-image: linear-gradient(135deg, var(--primary-light) 0%, var(--primary-dark) 100%);
            padding: 40px 0 0;
        }
        
        .main-content {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            flex: 1;
        }
        
        .login-container {
            background-color: var(--white);
            border-radius: 16px; /* Todas las esquinas redondeadas */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            min-height: 70vh;
            display: flex;
            overflow: hidden;
        }
        
        .login-image {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ffffff; /* Cambiado de #f9f4fc a #ffffff */
    padding: 40px;
    border-radius: 16px 0 0 16px;
}
        
        .login-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .login-form {
            flex: 1;
            padding: 60px;
            display: flex;
            flex-direction: column;
            max-width: 600px;
            margin-left: auto;
            border-radius: 0 16px 16px 0; /* Esquinas derechas redondeadas */
        }
        
        .full-width-footer {
            width: 100%;
            background-color: var(--footer-gray);
            padding: 25px 0;
            margin-top: auto;
        }
        
        .footer-content {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
            color: #555;
        }
        
        .footer-copyright {
            text-align: left;
        }
        
        .footer-social {
            text-align: right;
            font-weight: 600;
        }
        
        .logo {
            width: 120px;
            margin-bottom: 30px;
            align-self: flex-end;
        }
        
        h1 {
            color: var(--primary-dark);
            margin-bottom: 30px;
            font-weight: 600;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 25px;
            text-align: left;
            position: relative;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--primary-dark);
        }
        
        input {
            width: 100%;
            padding: 14px 16px 14px 40px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s;
        }
        
        input:focus {
            border-color: var(--primary-light);
            outline: none;
            box-shadow: 0 0 0 3px rgba(106, 48, 147, 0.1);
        }
        
        .input-icon {
            position: absolute;
            left: 12px;
            top: 40px;
            color: var(--primary-light);
            font-size: 18px;
        }
        
        .password-toggle {
            position: absolute;
            right: 12px;
            top: 40px;
            color: var(--primary-light);
            font-size: 18px;
            cursor: pointer;
        }
        
        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 25px 0;
            font-size: 14px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
        }
        
        .remember-me input {
            width: auto;
            margin-right: 8px;
            padding: 0;
        }
        
        .forgot-password a {
            color: var(--primary-light);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .forgot-password a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }
        
        .btn-login {
            background-color: var(--primary-color);
            color: white;
            border: none;
            padding: 12px;
            width: 50%;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            margin: 10px auto 0;
            display: block;
        }
        
        .btn-login:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
        }
        
        @media (max-width: 992px) {
            .login-container {
                flex-direction: column;
                min-height: auto;
            }
            .login-image {
                padding: 30px;
                border-radius: 16px 16px 0 0; /* Esquinas superiores redondeadas en móvil */
            }
            .login-form {
                padding: 40px;
                margin-left: 0;
                border-radius: 0 0 16px 16px; /* Esquinas inferiores redondeadas en móvil */
            }
            .btn-login {
                width: 70%;
            }
        }
        
        @media (max-width: 768px) {
            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 15px;
            }
            .footer-copyright,
            .footer-social {
                text-align: center;
            }
            .btn-login {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="main-content">
        <div class="login-container">
            <div class="login-image">
                <img src="{{ asset('images/loginMedico.jpg') }}" alt="Imagen descriptiva">
            </div>
            
            <div class="login-form">
                <img src="{{ asset('images/OncoCheck.jpeg') }}" alt="OncoCheck Logo" class="logo">
                
                <h1>Bienvenido</h1>
                
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <i class="fas fa-envelope input-icon"></i>
                        <input id="email" type="email" name="email" required autofocus>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <i class="fas fa-lock input-icon"></i>
                        <input id="password" type="password" name="password" required>
                    </div>
                    
                    <div class="options">
                        <div class="remember-me">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Recordar credenciales</label>
                        </div>
                        
                        <div class="forgot-password">
                            <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn-login">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
    
    <footer class="full-width-footer">
        <div class="footer-content">
            <div class="footer-copyright">
                Copyright © 2025 OncoCheck<br>
                Todos los derechos reservados.
            </div>
            <div class="footer-social">
                <strong>Nuestras redes</strong>
            </div>
        </div>
    </footer>

    <script>
        // Función para mostrar/ocultar contraseña
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this;
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        });
    </script>
</body>
</html>