<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil - AgroFinanzas</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .navbar {
      background-color: #c1e9ccff !important;
    }
    body {
      padding-top: 80px;
      background-color: #f8f9fa;
      font-family: 'Poppins', sans-serif;
    }
    .navbar-brand span {
      font-size: 1.3rem;
      color: #2c3e50;
    }
    .card {
      border: none;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }
    .card img {
      object-fit: cover;
    }
    footer h5 {
      font-size: 1.1rem;
      border-bottom: 2px solid #6c757d;
      padding-bottom: 5px;
      margin-bottom: 10px;
    }
    footer p {
      margin: 0;
      font-size: 0.9rem;
    }

    /* 🎨 Estilo degradado para todos los botones */
    button,
    .btn {
      background: linear-gradient(135deg, #38ef7d, #11998e) !important;
      color: #fff !important;
      border-radius: 8px !important;
      font-weight: 500 !important;
      transition: all 0.3s ease-in-out;
      text-decoration: none !important;
      border: none !important;
      padding: 8px 14px !important;
      cursor: pointer;
    }
    button:hover,
    .btn:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #42f5b6, #1dd1a1) !important;
      color: #fff !important;
    }

    /* 📏 Imagen de perfil más redonda y pequeña */
    .perfil-img {
      width: 120px;
      height: 120px;
      border-radius: 50%;
      object-fit: cover;
    }

    /* 📦 Cards de cursos con misma altura */
    #animaluno,
    #animaldos,
    #animaltres {
      height: 100%;
      min-height: 300px;
      display: flex;
      flex-direction: column;
    }
    #animaluno img,
    #animaldos img,
    #animaltres img {
      height: 200px;
      object-fit: cover;
    }
    #animaluno .card-body,
    #animaldos .card-body,
    #animaltres .card-body {
      flex-grow: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }
  </style>

  <!-- Fuente Google -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" alt="Logo" width="50" class="me-2">
      <span class="fw-bold">AgroFinanzas</span>
    </a>

    <div class="d-flex ms-auto align-items-center">
      <div class="dropdown me-3">
        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">
          Secciones
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ url('/Finanzas') }}">Finanzas</a></li>
          <li><a class="dropdown-item" href="{{ url('/agronomia') }}">Agronomía</a></li>
          <li><a class="dropdown-item" href="{{ url('/comentarios') }}">Comentarios</a></li>
        </ul>
      </div>

      <a href="#">
        <img src="{{ asset('img/photo-1545830790-68595959c491.avif') }}" alt="Foto perfil" class="rounded-circle border border-2 border-success" width="50" height="50">
      </a>
    </div>
  </div>
</nav>


    <!-- Aquí se eliminó el botón "Cerrar Sesión" -->

    <a href="#">
      <!-- <img src="{{ asset('img/photo-1545830790-68595959c491.avif') }}" alt="Foto perfil" class="rounded-circle border border-2 border-success" width="50" height="50"> -->
    </a>
  </div>
</nav>

<!-- Contenido -->
<main class="container mt-5 pt-4">

  <!-- Perfil -->
  <div class="card text-center mb-5 p-4">
    <div class="card-body">
      <img src="{{ asset('img/photo-1545830790-68595959c491.avif') }}" class="perfil-img border border-3 border-success mb-3">
      <h3 class="fw-bold">Marta Rodríguez</h3>
      <p class="mb-1 text-muted">45 años - Agricultora</p>
      <div class="mt-3">
        <a href="{{ url('/editar-perfil') }}" class="btn me-2">Editar Perfil</a>
        <a href="{{ url('/home') }}" class="btn">Cerrar Sesión</a>
      </div>
    </div>
  </div>

  <!-- Cursos -->
  <h4 class="mb-3 fw-bold">Cursos Disponibles</h4>
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <div class="col">
      <div id="animaluno" class="card h-100">
        <img src="{{ asset('img/ganado-vacuno.avif') }}" class="card-img-top" alt="Curso 1">
        <div class="card-body">
          <p class="card-text">El Secreto de un Ganado Fuerte y Rentable...</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div id="animaldos" class="card h-100">
        <img src="{{ asset('img/ganado-vacuno2.avif') }}" class="card-img-top" alt="Curso 2">
        <div class="card-body">
          <p class="card-text">Maximiza la Productividad de tu Ganado...</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div id="animaltres" class="card h-100">
        <img src="{{ asset('img/ganado-vacuno3.avif') }}" class="card-img-top" alt="Curso 3">
        <div class="card-body">
          <p class="card-text">Ganado Saludable, Negocio Rentable...</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Buscador -->
  <div class="input-group mb-5 shadow-sm">
    <input type="text" class="form-control" placeholder="Buscar finanzas...">
    <button class="btn" type="button"><i class="fas fa-search"></i></button>
  </div>

  <!-- Finanzas -->
  <h4 class="mb-3 fw-bold">Finanzas</h4>
  <div class="row g-4 mb-5">
    <div class="col-md-6">
      <img src="{{ asset('img/finanzas.avif') }}" class="img-fluid rounded shadow-sm">
    </div>
    <div class="col-md-6">
      <img src="{{ asset('img/finanzas2.avif') }}" class="img-fluid rounded shadow-sm">
    </div>
  </div>
</main>

<!-- Footer -->
<footer class="bg-dark text-light py-4 mt-auto">
  <div class="container">
    <div class="row text-center text-md-start">
      <div class="col-md-4 mb-3">
        <h5>Números de Contacto</h5>
        <p>+57 311 7091198</p>
        <p>+57 312 7759123</p>
        <p>+57 314 2716135</p>
        <p>+57 316 0993123</p>
      </div>
      <div class="col-md-4 mb-3">
        <h5>Redes Sociales</h5>
        <a href="#" class="text-light me-3"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-light me-3"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-light me-3"><i class="fab fa-youtube"></i></a>
        <p class="mt-2"><a href="#" class="text-light text-decoration-none">Términos de uso</a></p>
      </div>
      <div class="col-md-4 mb-3">
        <h5>Correos Electrónicos</h5>
        <p>jeanc1778@gmail.com</p>
        <p>forcemenrtartu@gmail.com</p>
        <p>luisestebannarvaez82@gmail.com</p>
        <p>chicanganad9@gmail.com</p>
      </div>
    </div>
  </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>