<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Finanzas - AgroFinanzas</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      margin: 0;
      padding-top: 80px; /* para el navbar fijo */
      position: relative;
      background-color: #f9f9f9;
      display: flex;
      flex-direction: column;
    }

    /* Imagen de fondo */
    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: url('{{ asset("img/finanzas.avif") }}') no-repeat center center/cover;
      opacity: 0.70; /* un poco más visible */
      z-index: -1;
      pointer-events: none;
    }

    /* Navbar */
    .navbar {
      background-color: #c1e9ccff !important;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1030;
      display: flex;
      align-items: center;
      padding: 10px 20px;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      color: #2c3e50;
      font-weight: 700;
      font-size: 1.3rem;
      text-decoration: none;
    }

    .navbar-brand img {
      width: 50px;
      height: 50px;
      object-fit: contain;
    }

    /* Contenedor a la derecha: Secciones + Perfil */
    .nav-right {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    /* Botón Secciones */
    .btn-navegacion {
      background: linear-gradient(135deg, #38ef7d, #11998e);
      color: #fff !important;
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.3s ease-in-out;
      text-decoration: none;
      border: none;
      padding: 8px 14px;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
    }

    .btn-navegacion:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
      color: #fff !important;
      text-decoration: none;
    }

    /* Dropdown contenido */
    .dropdown-menu {
      min-width: 160px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .dropdown-item {
      color: #333;
      padding: 10px 16px;
      cursor: pointer;
    }

    .dropdown-item:hover {
      background-color: #f2f2f2;
      color: #11998e;
      text-decoration: none;
    }

    /* Imagen perfil arriba derecha */
    .perfil-clic {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 2px solid #11998e;
      object-fit: cover;
      cursor: pointer;
      transition: transform 0.3s ease;
    }

    .perfil-clic:hover {
      transform: scale(1.1);
      border-color: #38ef7d;
    }

    /* MAIN */
    main.FinanzasF {
      flex: 1;
      padding: 30px 15px 50px;
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 30px;
    }

    .titulo-principal {
      font-size: 2rem;
      color: #2c3e50;
      font-weight: 700;
    }

    .finanzas-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      width: 100%;
    }

    .finanza-card {
      width: 300px;
      border-radius: 15px;
      overflow: hidden;
      background-color: rgba(255 255 255 / 0.9);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
      cursor: pointer;
      text-align: center;
    }

    .finanza-card:hover {
      transform: scale(1.05);
    }

    .img-card {
      width: 100%;
      height: 300px;
      object-fit: cover;
      display: block;
    }

    .textog {
      background-color: #139422;
      padding: 10px;
      color: white;
      font-weight: bold;
    }

    /* FOOTER */
    footer.footer {
      background-color: #1b1a1a;
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      padding: 30px 20px;
      flex-wrap: wrap;
      font-family: sans-serif;
      color: #fff;
    }

    .footer-section {
      flex: 1 1 300px;
      margin: 10px;
    }

    .footer-section h3 {
      margin-bottom: 10px;
      font-size: 18px;
      color: #ffffff;
    }

    .footer-section p {
      margin: 5px 0;
      color: #ffffff;
      font-size: 14px;
    }

    .social-icons {
      display: flex;
      gap: 15px;
      margin: 10px 0;
    }

    .social-icons a {
      font-size: 20px;
      color: #ffffff;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #139422;
    }

    .terminos {
      font-size: 14px;
      color: #ffffff;
      margin-top: 5px;
    }
    h1 {
     font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <a href="{{ url('/inicio') }}" class="navbar-brand">
        <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" alt="Logo" />
        <h1>AgroFinanzas</h1>
      </a>

      <div class="nav-right">
        <div class="dropdown">
          <button class="btn-navegacion dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Secciones
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ url('/agronomia') }}">Agronomía</a></li>
            <li><a class="dropdown-item" href="{{ url('/comentarios') }}">Comentarios</a></li>
          </ul>
        </div>

        <a href="{{ url('/perfil') }}">
          <img src="{{ asset('img/photo-1545830790-68595959c491.avif') }}" alt="Foto Perfil" class="perfil-clic" />
        </a>
      </div>
    </div>
  </nav>

  <!-- Main -->
  <main class="FinanzasF">
    <h1 class="titulo-principal">Finanzas</h1>

    <div class="finanzas-container">
  <div class="finanza-card">
    <a href="{{ url('/Gastos') }}">
      <img src="{{ asset('img/gastos2.avif') }}" alt="Gastos Mensuales" class="img-card" />
      <div class="textog">Gastos Mensuales</div>
    </a>
  </div>

  <div class="finanza-card">
    <a href="{{ url('/Ingresos') }}">
      <img src="{{ asset('img/ingresos.avif') }}" alt="Ingresos Mensuales" class="img-card" />
      <div class="textog">Ingresos Mensuales</div>
    </a>
  </div>

  <div class="finanza-card">
    <a href="{{ url('/Historial') }}">
      <img src="https://cdn-icons-png.flaticon.com/512/1999/1999255.png" alt="Historial" class="img-card" />
      <div class="textog">Historial</div>
    </a>
  </div>

  <!-- Nueva card para Gráficos -->
  <div class="finanza-card">
    <a href="{{ url('/graficos') }}">
      <img src="https://imgproxy.domestika.org/unsafe/w:1200/rs:fill/plain/src://blog-post-open-graph-covers/000/013/052/13052-original.jpg?1712830811" alt="Gráficos" class="img-card" />
      <div class="textog">Gráficos</div>
    </a>
  </div>
</div>

  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="footer-section">
      <h3>Números de Contacto</h3>
      <p>+57 311 7091198</p>
      <p>+57 312 7759123</p>
      <p>+57 314 2716135</p>
      <p>+57 316 0993123</p>
    </div>
    <div class="footer-section">
      <h3>Redes Sociales</h3>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
      <p class="terminos">Términos de usos</p>
    </div>
    <div class="footer-section">
      <h3>Correos Electrónicos</h3>
      <p>jeanc1778@gmail.com</p>
      <p>forcemenrtartu@gmail.com</p>
      <p>luisestebannarvaez82@gmail.com</p>
      <p>chicanganad9@gmail.com</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
