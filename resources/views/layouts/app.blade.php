<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AgroFinanzas')</title>

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
            background-color: #c1e9ccff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand img {
            width: 80px;
            height: 80px;
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
            display: block;
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
        .nav-link.active {
            font-weight: 600;
            color: #11998e !important;
            border-bottom: 2px solid #11998e;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" alt="logo">
                <span class="fw-bold text-dark">AgroFinanzas</span>
            </a>

            <!-- Botón hamburguesa móvil -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('inicio') ? 'active' : '' }}" href="{{ url('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('Finanzas') ? 'active' : '' }}" href="{{ url('Finanzas') }}">Finanzas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('graficos') ? 'active' : '' }}" href="{{ url('graficos') }}">Agronomia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contacto') ? 'active' : '' }}" href="{{ url('contacto') }}">Recomendaciones</a>
                    </li>
                </ul>

                <!-- Acciones según sesión -->
                <div class="d-flex gap-2">
                    @if(!session()->has('user'))
                        <a href="{{ url('register') }}" class="btn btn-navegacion">Registrarse</a>
                        <a href="{{ url('login') }}" class="btn btn-navegacion">Iniciar Sesión</a>
                    @else
                        <a href="{{ url('perfil') }}" class="btn btn-navegacion">Perfil</a>
                        <form action="{{ url('logout') }}" method="POST" class="d-inline">
                            @csrf
                           <a href="{{ url('logout') }}" class="btn btn-navegacion">Cerrar Sesión</a>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido -->
    <main class="pt-5 mt-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer py-4 mt-4">
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
                    <p>chicanganad9@gmail.com</p>
                    <p>forcemenrtartu@gmail.com</p>
                    <p>luisestebannarvaez82@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
