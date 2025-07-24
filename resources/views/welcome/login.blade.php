<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilo personalizado -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .bg-cover {
            background-image: url('{{ asset('img/photo-1677125671399-65852c6dfb05.avif') }}');
            background-size: cover;
            background-position: center;
            position: absolute;
            height: 100%;
            width: 100%;
            z-index: -1;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.85);
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        .logo {
            width: 80px;
            height: 80px;
            object-fit: contain;
        }

        .toggle-password {
            cursor: pointer;
        }

        .btn-navegacion {
            font-family: 'Poppins', sans-serif;
            padding: 10px 20px;
            font-size: 15px;
            font-weight: 500;
            color: #ffffff;
            background: linear-gradient(135deg, #38ef7d, #11998e);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            text-decoration: none;
        }

        .btn-navegacion:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
            background: linear-gradient(135deg, #42f5b6, #1dd1a1);
        }
    </style>
</head>
<body>

    <div class="bg-cover"></div>

    <!-- NAVBAR AÑADIDO AQUÍ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" alt="Logo" class="logo me-2">
                <span class="fw-bold">AgroFinanzas</span>    {{--  puede ser que lo quitemos en un futuro--}}
            </a>
            <div class="d-flex gap-2">
                <a href="{{ url('home') }}" class="btn-navegacion">Home</a>
                <a href="{{ url('registrarse') }}" class="btn-navegacion">Registrarse</a>
</div>

        </div>
    </nav>
    <!-- FIN NAVBAR -->

    <!-- Login Card -->
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="login-card col-md-6 col-lg-4">

            <div class="text-center mb-3">
                <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" alt="Logo" class="logo rounded-circle mb-2">
                <h3>Inicio de Sesión</h3>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="juanito@gmail.com" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                        <span class="input-group-text toggle-password" onclick="togglePassword()">👁️</span>
                    </div>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="recordar" name="remember">
                    <label class="form-check-label" for="recordar">Recordar</label>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn-navegacion">Iniciar sesión</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted">¿No tienes cuenta? <a href="/registrarse">Regístrate aquí</a></small>
            </div>

        </div>
    </div>

    <!-- Script para mostrar/ocultar contraseña -->
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const icon = document.querySelector('.toggle-password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.textContent = '🙈';
            } else {
                passwordInput.type = 'password';
                icon.textContent = '👁️';
            }
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
