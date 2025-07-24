<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .fondo {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .navbar {
            background-color: #f8f8f8;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 10;
        }

        .logo-nombre img {
            height: 50px;
            margin-right: 10px;
        }

        .apartado {
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.85);
            padding: 40px 30px;
            border-radius: 10px;
            max-width: 500px;
            width: 100%;
            margin-top: 120px;
        }

        .Logo-r {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 10px;
            display: block;
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

        .form-control {
            margin-bottom: 15px;
        }

        .registro-link {
            font-size: 14px;
            color: #333;
            margin-top: 15px;
        }

        .registro-link a {
            color: #007BFF;
            text-decoration: none;
        }

        .registro-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <img src="{{ asset('img/premium_photo-1666976923529-f0366d02d726.avif') }}" alt="Fondo" class="fondo">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center logo-nombre">
                <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" alt="Logo">
                <h1 class="h5 mb-0 fw-bold">AgroFinanzas</h1>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ url('/home') }}" class="btn-navegacion">Home</a>
                <a href="{{ url('/login') }}" class="btn-navegacion">Iniciar Sesión</a>
            </div>
        </div>
    </nav>

    <!-- Registro Form -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="apartado text-center">
            <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" alt="Logo Registro" class="Logo-r">
            <h1 class="mb-4">Registro</h1>

            <form>
                <div class="text-start">
                    <label for="nombre" class="form-label">Ingrese su nombre</label>
                    <input type="text" id="nombre" class="form-control" placeholder="Ingrese su nombre">

                    <label for="correo" class="form-label">Ingrese su correo</label>
                    <input type="email" id="correo" class="form-control" placeholder="Correo">

                    <label for="password" class="form-label">Ingrese su contraseña</label>
                    <input type="password" id="password" class="form-control" placeholder="Ingrese una contraseña">
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn-navegacion">Registrarse</button>
                </div>
            </form>

            <p class="registro-link mt-3">¿Ya tienes cuenta? <a href="{{ url('/login') }}">Inicia sesión aquí</a></p>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
