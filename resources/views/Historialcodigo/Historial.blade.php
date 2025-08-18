<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Historial - AgroFinanzas</title>
  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome para iconos sociales -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  
  <style>
    .navbar {
      background-color: #c1e9ccff !important;
    }
    body {
      background-color: #fff;
      font-family: Arial, sans-serif;
    }

    header.navbar {
      background-color: #139422;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1030;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo-nombre {
      display: flex;
      align-items: center;
    }

    .Logo {
      width: 60px;
      height: 60px;
      margin-right: 10px;
      border-radius: 10px;
    }

    .NombreP a {
      color: rgb(0, 0, 0);
      text-decoration: none;
      font-size: 24px;
      font-weight: bold;
    }

    /* Dropdown */
    .dropdown {
      position: relative;
    }
    .dropbtn.btn-navegacion {
      padding: 8px 12px;
      font-weight: bold;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      /* Los colores y background los toma de btn-navegacion */
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #fff;
      border-radius: 5px;
      min-width: 160px;
      top: 100%;
      left: 0;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      z-index: 1050;
    }
    .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      display: block;
      text-decoration: none;
    }
    .dropdown-content a:hover {
      background-color: #f1f1f1;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }

    main.contenido {
      margin-top: 100px;
      padding: 20px;
    }

    .breadcrumb {
      font-size: 18px;
      margin-bottom: 20px;
    }

    .filtros {
      display: flex;
      gap: 15px;
      margin-bottom: 20px;
    }

    /* Estilos para botones con gradiente y animación */
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

    .buscador input {
      width: 100%;
      padding: 12px;
      border: none;
      background-color: #d3d3d3;
      margin-bottom: 20px;
      border-radius: 6px;
    }

    .lista-movimientos {
      background-color: #d3d3d3;
      padding: 15px;
      border-radius: 10px;
    }

    .dia h2 {
      margin-top: 0;
      text-transform: capitalize;
    }

    .movimiento {
      background-color: #fff;
      border-radius: 8px;
      padding: 10px;
      margin-bottom: 10px;
      display: flex;
      justify-content: space-between;
      transition: background-color 0.3s ease;
    }

    /* Hover para movimiento */
    .movimiento:hover {
      background-color: #e6f7e6;
      cursor: pointer;
    }

    .gasto {
      color: red;
      font-weight: bold;
    }

    .ingreso {
      color: green;
      font-weight: bold;
    }

    footer.footer {
      background-color: #1b1a1a;
      color: white;
      padding: 50px 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      gap: 30px;
    }

    .footer-section h3 {
      margin-bottom: 10px;
    }

    .social-icons {
      display: flex;
      gap: 15px;
    }

    .social-icons a {
      font-size: 20px;
      color: white;
    }

    .social-icons a:hover {
      color: #139422;
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <header class="navbar">
    <div class="logo-nombre">
      <img src="/img/imagen_2025-07-03_232159777-removebg-preview.png" class="Logo" alt="Logo" />
      <h1 class="NombreP"><a href="/inicio" class="agro">AgroFinanzas</a></h1>
    </div>

    <div class="nav-buttons">
      <div class="dropdown">
        <button class="dropbtn btn-navegacion">Secciones ▼</button>
        <div class="dropdown-content">
          <a href="/Finanzas">Finanzas</a>
          <a href="#">Agronomía</a>
          <a href="#">Recomendaciones</a>
        </div>
      </div>
    </div>
  </header>

  <!-- CONTENIDO PRINCIPAL -->
  <main class="contenido container">
    

    <div class="filtros">
      <button class="btn-hoy btn-navegacion">Hoy</button>
      <button class="btn-mas btn-navegacion">Más Movimientos</button>
    </div>

    <div class="buscador">
      <input type="text" placeholder="Buscar" />
    </div>

    <section class="lista-movimientos">
      <div class="dia">
        <h2>lunes</h2>
        <div class="movimiento">
          <span class="descripcion">Servicios públicos</span>
          <span class="gasto">$150.000</span>
        </div>
        <div class="movimiento">
          <span class="descripcion">Venta del café</span>
          <span class="ingreso">$950.000</span>
        </div>
      </div>

      <div class="dia">
        <h2>martes</h2>
        <div class="movimiento">
          <span class="descripcion">Mano de obra</span>
          <span class="gasto">$2.000.000</span>
        </div>
        <div class="movimiento">
          <span class="descripcion">Venta de chontaduro</span>
          <span class="ingreso">$450.000</span>
        </div>
      </div>

      <div class="dia">
        <h2>miércoles</h2>
        <div class="movimiento">
          <span class="descripcion">Mano de obra</span>
          <span class="gasto">$2.000.000</span>
        </div>
        <div class="movimiento">
          <span class="descripcion">Venta de chontaduro</span>
          <span class="ingreso">$450.000</span>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
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

  <!-- Bootstrap 5 JS Bundle (opcional, para dropdowns u otros componentes) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
