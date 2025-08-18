<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Inicio - AgroFinanzas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    .navbar {
      background-color: #c1e9ccff !important;
    }
    body {
      background-color: rgb(255, 255, 255);
      padding-top: 80px;
      animation: fadeIn 0.8s ease-in;
    }
    @keyframes fadeIn {
      from {
        opacity: 0;
      }
      to {
        opacity: 1;
      }
    }
    .navbar-brand img {
      width: 50px;
      height: 50px;
      object-fit: contain;
      margin-right: 10px;
    }
    .foto_perfil {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }
    .btn-navegacion {
      background: linear-gradient(135deg, #38ef7d, #11998e);
      color: #fff !important;
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.3s ease-in-out;
      text-decoration: none;
      border: none;
      padding: 8px 14px;
    }
    .btn-navegacion:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
      color: #fff !important;
    }
    /* Imagen principal */
    .imagen-principal {
      position: relative;
      width: 100%;
      height: 450px;
      overflow: hidden;
    }
    .imagen-principal img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    .overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.6));
    }
    /* Texto animado */
    .texto-sobre-imagen {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 3.5rem;
      font-weight: bold;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
      text-align: center;
      white-space: nowrap;
      overflow: hidden;
      border-right: 3px solid white;
      width: 0;
      animation: typing 3s steps(30, end) forwards, blink 0.6s step-end infinite;
    }
    @keyframes typing {
      from {
        width: 0;
      }
      to {
        width: 100%;
      }
    }
    @keyframes blink {
      50% {
        border-color: transparent;
      }
    }
    /* Quitar el cursor al terminar */
    .texto-sobre-imagen.done {
      border-right: none;
    }
    /* Cards Noticias */
    .noticias {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem 3rem;
    }
    .card {
      border-radius: 0.75rem;
      box-shadow: 0 2px 7px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    .card:hover {
      transform: translateY(-5px) scale(1.03);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }
    .card-img-top {
      height: 180px;
      object-fit: cover;
      border-top-left-radius: 0.75rem;
      border-top-right-radius: 0.75rem;
    }
    .card-body {
      flex-grow: 1;
      display: flex;
      flex-direction: column;
    }
    .card-title {
      color: #18d92e;
      font-weight: 700;
    }
    .card-text {
      color: #555;
      flex-grow: 1;
      margin-top: 0.5rem;
      margin-bottom: 1rem;
    }
    .btn-leer-mas {
      background: linear-gradient(135deg, #38ef7d, #11998e);
      border: none;
      color: white;
      font-weight: 600;
      border-radius: 6px;
      padding: 6px 12px;
      align-self: start;
      transition: background 0.3s ease;
      text-decoration: none;
    }
    .btn-leer-mas:hover {
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
      color: white;
      text-decoration: none;
    }
    footer {
      background-color: #1b1a1a;
      color: white;
    }
    .social-icons a {
      font-size: 20px;
      color: white;
      margin-right: 15px;
      transition: color 0.3s ease;
    }
    .social-icons a:hover {
      color: #139422;
    }
    footer p {
      margin-bottom: 5px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img
          src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}"
          alt="Logo"
        />
        <span class="fw-bold fs-4">AgroFinanzas</span>
      </a>

      <div class="d-flex align-items-center gap-2">
        <div class="dropdown">
          <button class="btn-navegacion dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Secciones
          </button>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{ url('/Finanzas') }}">Finanzas</a></li>
            <li><a class="dropdown-item" href="{{ url('/agronomia') }}">Agronomía</a></li>
            <li><a class="dropdown-item" href="{{ url('/comentarios') }}">Comentarios</a></li>
          </ul>
        </div>
        <a href="{{ url('/home') }}" class="btn-navegacion">Cerrar Sesión</a>
        <a href="{{ url('/perfil') }}"
          ><img
            src="{{ asset('img/photo-1545830790-68595959c491.avif') }}"
            alt="Perfil"
            class="foto_perfil"
        /></a>
      </div>
    </div>
  </nav>

  <!-- Contenido -->
  <main class="container-fluid p-0">
    <!-- Imagen principal con texto encima -->
    <div class="imagen-principal mb-5">
      <img src="{{ asset('img/photo-1580570598977-4b2412d01bbc.avif') }}" alt="Imagen Principal" />
      <div class="overlay"></div>
      <div class="texto-sobre-imagen" id="texto-animado">Bienvenido a AgroFinanzas</div>
    </div>

    <!-- Noticias en 3 columnas -->
    <section class="noticias row mx-auto gx-4 gy-4 px-3">
      <!-- Noticia 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="{{ asset('img/photo-1569858241634-5aee6e47091a.avif') }}"
            class="card-img-top"
            alt="Cuidado de Vacas"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Cuidado de tus vacas</h5>
            <p class="card-text">
              Aprende cómo garantizar la salud y productividad de tu ganado con consejos prácticos y fáciles de aplicar en el día a día.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="{{ asset('img/photo-1652016363501-b8b07517de17.avif') }}"
            class="card-img-top"
            alt="Cultivos"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Cómo cuidar tus cultivos</h5>
            <p class="card-text">
              Descubre técnicas modernas y ecológicas para mantener tus cultivos sanos, productivos y resistentes a plagas.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="{{ asset('img/photo-1590283603385-17ffb3a7f29f.avif') }}"
            class="card-img-top"
            alt="Finanzas"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Mejor manejo de tus finanzas</h5>
            <p class="card-text">
              Organiza tus ingresos, controla gastos y toma decisiones financieras inteligentes para impulsar tu emprendimiento rural.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 4 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80"
            class="card-img-top"
            alt="Manejo del suelo"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Manejo sostenible del suelo</h5>
            <p class="card-text">
              Aprende técnicas para conservar y mejorar la salud del suelo, base fundamental para cultivos exitosos.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 5 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=600&q=80"
            class="card-img-top"
            alt="Riego eficiente"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Riego eficiente y ahorro de agua</h5>
            <p class="card-text">
              Descubre métodos para optimizar el uso del agua en tus cultivos y contribuir al cuidado ambiental.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 6 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=600&q=80"
            class="card-img-top"
            alt="Control de plagas"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Control natural de plagas</h5>
            <p class="card-text">
              Métodos ecológicos para proteger tus cultivos sin dañar el medio ambiente ni la salud.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="py-4 mt-5">
    <div class="container">
      <div class="row text-center text-lg-start">
        <div class="col-lg-4 col-md-6 mb-4">
          <h3 class="h5">Números de Contacto</h3>
          <p>+57 311 7091198</p>
          <p>+57 312 7759123</p>
          <p>+57 314 2716135</p>
          <p>+57 316 0993123</p>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <h3 class="h5">Redes Sociales</h3>
          <div class="social-icons mb-2">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
          <p class="small">Términos de usos</p>
        </div>
        <div class="col-lg-4 col-md-12">
          <h3 class="h5">Correos Electrónicos</h3>
          <p>jeanc1778@gmail.com</p>
          <p>forcemenrtartu@gmail.com</p>
          <p>luisestebannarvaez82@gmail.com</p>
          <p>chicanganad9@gmail.com</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Cuando termine la animación de escritura, quitar el cursor
    setTimeout(() => {
      document.getElementById("texto-animado").classList.add("done");
    }, 2000); // Coincide con la duración del typing
  </script>
</body>
</html>
