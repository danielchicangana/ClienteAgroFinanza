<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroFinanzas</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #eaf7e9;
        }
        .navbar {
            background-color: #f8f8f8;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            width: 40px;
            height: 40px;
            object-fit: contain;
            margin-right: 10px;
        }
        .btn-navegacion {
            background: linear-gradient(135deg, #38ef7d, #11998e);
            color: #fff;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
        }
        .btn-navegacion:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #42f5b6, #1dd1a1);
        }
        .imagenH {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }
        .footer {
            background-color: #1b1a1a;
            color: #ffffff;
        }
        .footer a {
            color: #ffffff;
        }
        .footer a:hover {
            color: #139422;
        }
    </style>
</head>
<body>

<!-- Header / Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" 
                 alt="logo" 
                 style="height: 80px; width: 80px;" 
                 class="me-2">
            <span class="fw-bold text-dark">AgroFinanzas</span>
        </a>

        <div class="ms-auto d-flex gap-2">
            <a href="{{ url('/') }}" class="btn btn-navegacion">Inicio</a>
            <a href="{{ url('registrarse') }}" class="btn btn-navegacion">Registrarse</a>
            <a href="{{ url('login') }}" class="btn btn-navegacion">Iniciar Sesión</a>
        </div>
    </div>
</nav>

<!-- Contenido principal -->
<main class="container pt-5 mt-5">
    <div class="mb-4">
        <img class="imagenH" src="https://images.unsplash.com/photo-1677123618781-a713408ebc59?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Imagen granja">
    </div>

    <section class="text-center mb-5">
        <h1 class="mb-3">¿Quiénes somos?</h1>
        <p class="text-justify mx-auto" style="max-width: 800px;">
            AgroFinanzas es una plataforma digital comprometida con el fortalecimiento del sector rural. Nacemos con la misión de apoyar a los agricultores en el manejo eficiente de sus finanzas, el cuidado responsable de sus cultivos y el bienestar de sus animales, brindándoles herramientas prácticas, accesibles y adaptadas a sus realidades.
            <br><br>
            Creemos en el poder del conocimiento y la tecnología para transformar vidas. Por eso, trabajamos para que cada campesino tenga acceso a información clara, recomendaciones útiles y un entorno digital amigable que le permita tomar mejores decisiones, mejorar su productividad y asegurar un futuro más próspero para su familia y su comunidad.
            <br><br>
            FARMFINANC no es solo una app. Es un aliado del campo, una apuesta por la inclusión, y un paso firme hacia un desarrollo rural más justo, sostenible e inteligente.
        </p>
    </section>
</main>

<!-- Footer -->
<footer class="footer py-4">
    <div class="container">
        <div class="row text-center text-md-start">
            <div class="col-md-4 mb-4">
                <h5>Números de Contacto</h5>
                <p>+57 311 7091198</p>
                <p>+57 312 7759123</p>
                <p>+57 314 2716135</p>
                <p>+57 316 0993123</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Redes Sociales</h5>
                <div class="d-flex justify-content-center justify-content-md-start gap-3">
                    <a href="#"><i class="fab fa-facebook-f fs-4"></i></a>
                    <a href="#"><i class="fab fa-instagram fs-4"></i></a>
                    <a href="#"><i class="fab fa-twitter fs-4"></i></a>
                    <a href="#"><i class="fab fa-youtube fs-4"></i></a>
                </div>
                <p class="mt-2">Términos de usos</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Correos Electrónicos</h5>
                <p>jeanc1778@gmail.com</p>
                <p>forcemenrtartu@gmail.com</p>
                <p>luisestebannarvaez82@gmail.com</p>
                <p>chicanganad9@gmail.com</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS (opcional si necesitas interactividad) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
