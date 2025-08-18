<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Editar Perfil - AgroFinanzas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />
  <style>

    .navbar {
      background-color: #c1e9ccff !important;
    }
    /* ===== RESETEO ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
    }

    a {
      text-decoration: none;
      color: white;
    }

    /* ===== HEADER ===== */
    header.navbar {
      background-color: #14a03d;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      padding: 10px 20px;
    }

    .logo-nombre {
      display: flex;
      align-items: center;
    }

    .Logo {
      width: 50px;
      height: 50px;
      object-fit: contain;
    }

    .NombreP {
      font-size: 24px;
      font-weight: bold;
      margin-left: 10px;
    }

    .nav-buttons {
      display: flex;
      gap: 15px;
      align-items: center;
    }

    /* Botones con diseño de degradado y hover (secciones y cerrar sesión) */
    .btn-navegacion {
      background: linear-gradient(135deg, #38ef7d, #11998e);
      color: #fff !important;
      border-radius: 8px;
      font-weight: 500;
      transition: all 0.3s ease-in-out;
      text-decoration: none;
      border: none;
      padding: 7px 14px;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
    }

    .btn-navegacion:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
      color: #fff !important;
      text-decoration: none;
    }

    /* Dropdown custom */
    .dropdown > .btn-navegacion {
      padding-right: 30px; /* espacio para la flecha ▼ */
      position: relative;
    }
    .dropdown > .btn-navegacion::after {
      content: "▼";
      position: absolute;
      right: 10px;
      font-size: 0.7rem;
    }

    .dropdown-menu {
      min-width: 160px;
    }

    .dropdown-menu a {
      color: #333;
      padding: 12px 16px;
      display: block;
      text-decoration: none;
    }
    .dropdown-menu a:hover {
      background-color: #f2f2f2;
    }

    .foto_perfil {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }

    /* ===== CONTENIDO ===== */
    main {
      flex: 1;
      padding-top: 100px; /* espacio para el header fijo */
      padding-bottom: 40px;
      padding-left: 15px;
      padding-right: 15px;
    }

    .perfil-container {
      text-align: center;
      max-width: 650px;  /* más ancho */
      margin: 0 auto;
      padding: 20px;
    }

    /* Botones verdes del contenido */
    .btn-verde {
      display: inline-block;
      width: 100%;
      max-width: 350px;  /* ancho máximo */
      margin: 10px auto;
      padding: 12px 0;
      background: linear-gradient(135deg, #38ef7d, #11998e);
      color: #161414 !important;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease-in-out;
      text-decoration: none;
      font-size: 1.3rem;
    }

    .btn-verde:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
      color: #fff !important;
    }

    .foto-perfil-modal img {
      width: 180px;
      height: 180px;
      border-radius: 50%;
      border: 3px solid #2196F3;
      margin: 15px 0;
      object-fit: cover;
    }

    form {
      margin: 15px auto 30px;
      max-width: 300px;
      text-align: left;
    }
    form label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
      color: #333;
      font-size: 1rem;
    }
    form input {
      width: 100%;
      padding: 8px;
      margin-bottom: 12px;
      border-radius: 6px;
      border: 1px solid #ccc;
      font-size: 1rem;
    }
    form button {
      width: 100%;
      font-size: 1.2rem;
      padding: 10px 0;
      border-radius: 8px;
      background: linear-gradient(135deg, #38ef7d, #11998e);
      color: #fff !important;
      border: none;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
    }
    form button:hover {
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
    }

    /* ===== FOOTER ===== */
    footer.footer {
      background-color: #1b1a1a;
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      padding: 30px 20px;
      flex-wrap: wrap;
      font-family: sans-serif;
      color: white;
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
  </style>
</head>
<body>
  <!-- NAVBAR -->
  <header class="navbar d-flex justify-content-between align-items-center px-3 py-2 shadow-sm fixed-top bg-light">
    <div class="logo-nombre d-flex align-items-center">
      <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" alt="Logo" class="Logo" />
      <h1 class="NombreP ms-2 mb-0">AgroFinanzas</h1>
    </div>

    <div class="nav-buttons d-flex align-items-center gap-3">
      <div class="dropdown">
        <button class="btn-navegacion" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Secciones
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="{{ url('/Finanzas') }}">Finanzas</a></li>
          <li><a class="dropdown-item" href="#">Agronomía</a></li>
          <li><a class="dropdown-item" href="#">Comentarios</a></li>
        </ul>
      </div>
      <a href="{{ url('/home') }}" class="btn-navegacion">Cerrar Sesión</a>
      <img src="{{ asset('img/photo-1545830790-68595959c491.avif') }}" alt="Foto de perfil" class="foto_perfil" />
    </div>
  </header>

  <!-- CONTENIDO -->
  <main class="perfil-container text-center mt-5 pt-5">
    <button class="btn-verde mb-3">SELECCIONAR FOTO</button>
    <div class="foto-perfil-modal mb-4">
      <img src="{{ asset('img/photo-1545830790-68595959c491.avif') }}" alt="Foto de perfil" />
    </div>

    <!-- Cambiar Nombre -->
    <button class="btn-verde mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#formNombre" aria-expanded="false" aria-controls="formNombre">Cambiar Nombre</button>
    <div class="collapse" id="formNombre">
      <form onsubmit="event.preventDefault()">
        <label for="nuevoNombre">Nuevo Nombre:</label>
        <input type="text" id="nuevoNombre" placeholder="Escribe tu nuevo nombre" />
        <button type="submit">Guardar Nombre</button>
      </form>
    </div>

    <!-- Cambiar Correo -->
    <button class="btn-verde mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#formCorreo" aria-expanded="false" aria-controls="formCorreo">Cambiar Correo</button>
    <div class="collapse" id="formCorreo">
      <form onsubmit="event.preventDefault()">
        <label for="nuevoCorreo">Nuevo Correo:</label>
        <input type="email" id="nuevoCorreo" placeholder="Escribe tu nuevo correo" />
        <button type="submit">Guardar Correo</button>
      </form>
    </div>

    <!-- Cambiar Contraseña -->
    <button class="btn-verde mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#formContrasena" aria-expanded="false" aria-controls="formContrasena">Cambiar Contraseña</button>
    <div class="collapse" id="formContrasena">
      <form onsubmit="event.preventDefault()">
        <label for="nuevaContrasena">Nueva Contraseña:</label>
        <input type="password" id="nuevaContrasena" placeholder="Escribe tu nueva contraseña" />
        <label for="confirmarContrasena">Confirmar Contraseña:</label>
        <input type="password" id="confirmarContrasena" placeholder="Confirma tu nueva contraseña" />
        <button type="submit">Guardar Contraseña</button>
      </form>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="footer mt-auto py-4">
    <div class="container d-flex flex-wrap justify-content-around text-white">
      <div class="footer-section mb-3" style="min-width: 250px;">
        <h3>Números de Contacto</h3>
        <p>+57 311 7091198</p>
        <p>+57 312 7759123</p>
        <p>+57 314 2716135</p>
        <p>+57 316 0993123</p>
      </div>
      <div class="footer-section mb-3" style="min-width: 250px;">
        <h3>Redes Sociales</h3>
        <div class="social-icons mb-2">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <p class="terminos">Términos de usos</p>
      </div>
      <div class="footer-section mb-3" style="min-width: 250px;">
        <h3>Correos Electrónicos</h3>
        <p>jeanc1778@gmail.com</p>
        <p>forcemenrtartu@gmail.com</p>
        <p>luisestebannarvaez82@gmail.com</p>
        <p>chicanganad9@gmail.com</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
