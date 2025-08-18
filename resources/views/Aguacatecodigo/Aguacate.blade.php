<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Variedades de Aguacate - AgroFinanzas</title>

  <!-- FontAwesome para iconos -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
  />

  <style>
    /* ===== RESET ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* ===== LAYOUT GENERAL ===== */
    html,
    body {
      height: 100%;
    }

    body {
      display: flex;
      flex-direction: column;
      font-family: Arial, sans-serif;
      background-color: #f8f8f8;
    }

    main {
      flex: 1;
      padding: 100px 20px 20px; /* espacio por navbar fijo */
    }

    /* ===== ENLACES ===== */
    a {
      text-decoration: none;
      color: black;
    }

    /* ===== HEADER / NAVBAR ===== */
    header.navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #c1e9ccff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;
    }

    .logo-nombre {
      display: flex;
      align-items: center;
    }

    .Logo {
      width: 50px;
      height: 50px;
      object-fit: contain;
      margin-right: 10px;
    }

    .NombreP {
      font-size: 24px;
      font-weight: bold;
    }

    .nav-buttons {
      display: flex;
      gap: 15px;
      align-items: center;
    }

    /* Dropdown */
    .dropdown {
      position: relative;
    }

    /* Quitamos el estilo dropbtn original para evitar conflicto */
    .dropbtn {
      /* vacío para no interferir */
    }

    /* Botón verde personalizado */
    .btn-verde {
      display: inline-block;
      width: auto;
      min-width: 140px;       /* ancho mínimo */
      padding: 8px 20px;      /* padding ajustado */
      background: linear-gradient(135deg, #38ef7d, #11998e);
      color: #161414 !important;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease-in-out;
      text-decoration: none;
      font-size: 1rem;
      text-align: center;
    }

    .btn-verde:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
      color: #fff !important;
    }

    /* Dropdown content */
    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #ffffff;
      border: 1px solid #ccc;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      border-radius: 5px;
      min-width: 160px;
      z-index: 1000;
    }

    .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #f2f2f2;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Botón salir - limpiamos estilos para evitar conflicto */
    .salir {
      /* vacío */
    }

    .foto_perfil {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    /* ===== CONTENIDO ===== */
    h1 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
      text-transform: capitalize;
    }

    .contenedor-tarjetas {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .tarjeta {
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s ease;
    }

    .tarjeta:hover {
      transform: translateY(-5px);
    }

    .tarjeta img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .tarjeta h2 {
      font-size: 20px;
      margin: 10px;
      color: #139422;
      text-transform: capitalize;
    }

    .tarjeta p {
      font-size: 14px;
      color: #555;
      padding: 0 10px 15px;
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

  <!-- ===== NAVBAR ===== -->
  <header class="navbar">
    <div class="logo-nombre">
      <img src="/img/imagen_2025-07-03_232159777-removebg-preview.png" alt="Logo" class="Logo" />
      <h1 class="NombreP"><a href="/inicio" class="agro">AgroFinanzas</a></h1>
    </div>
    <div class="nav-buttons">
      <div class="dropdown">
        <button class="btn-verde">Secciones ▼</button>
        <div class="dropdown-content">
          <a href="/Finanzas">Finanzas</a>
          <a href="/agronomia">Agronomía</a>
          <a href="/comentarios">Comentarios</a>
        </div>
      </div>
      <a href="/inicio" class="btn-verde">Cerrar Sesión</a>
      <a href="/perfil">
      <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Foto de perfil" class="foto_perfil" />
      </a>
    </div>
  </header>

  <main>
    <h1>Variedades de Aguacate</h1>

    <div class="contenedor-tarjetas">
      <div class="tarjeta">
        <img src="https://www.tierraylibertad.coop/wp-content/uploads/2023/02/aguacate-bacon-3.jpg" alt="Aguacate Beacon" />
        <h2>Beacon</h2>
        <p>El aguacate Beacon es una variedad de aguacate que se produce en California. Tiene piel de verde brillante y pulpa suave, es ideal para preparar guacamole, ensaladas, cremas, sándwiches y otros platos.</p>
      </div>

      <div class="tarjeta">
        <img src="https://m.media-amazon.com/images/I/71trJrVaLaL._UF894,1000_QL80_.jpg" alt="Aguacate Gwen" />
        <h2>Gwen</h2>
        <p>El aguacate Gwen es una variedad de aguacate con piel gruesa y sabor a nuez. Se caracteriza por su textura cremosa, sabor a mantequilla y piel gruesa.</p>
      </div>

      <div class="tarjeta">
        <img src="https://cdn1.totalcommerce.cloud/mercadozapatoca/product-image/es/aguacate-hass-zapatoca-x-500-gr-1.webp" alt="Aguacate Hass" />
        <h2>Hass</h2>
        <p>El aguacate Hass es una variedad de aguacate de piel rugosa y pulpa cremosa. Es el más popular y se consume en todo el mundo.</p>
      </div>

      <div class="tarjeta">
        <img src="https://fertilizantesecoforce.es/wp-content/uploads/2022/06/pixahub200500141.jpg" alt="Aguacate Lamb Hass" />
        <h2>Lamb Hass</h2>
        <p>El aguacate Lamb Hass es una variedad de aguacate tropical híbrida, con piel rugosa y pulpa cremosa. Tiene alta resistencia a enfermedades, vitaminas K y fibra.</p>
      </div>

      <div class="tarjeta">
        <img src="https://img.interempresas.net/FotosArtProductos/P61822.jpg" alt="Aguacate Pinkerton" />
        <h2>Pinkerton</h2>
        <p>El aguacate Pinkerton es un híbrido de origen guatemalteco y mexicano. Tiene forma alargada, piel rugosa y pulpa cremosa.</p>
      </div>

      <div class="tarjeta">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1bZiVabqyoIHhVNhYadsnM7Z_t73_RgVbSQ&s" alt="Aguacate Reed" />
        <h2>Reed</h2>
        <p>El aguacate reed es de origen mexicano, con piel delgada y lisa.</p>
      </div>

      <div class="tarjeta">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRbH_5r_Rpa0kf7QIkMQ-lQzPkNiYV5yn0cw&s" alt="Aguacate Zutano" />
        <h2>Zutano</h2>
        <p>El aguacate Zutano es de origen mexicano, con piel delgada y lisa.</p>
      </div>

      <div class="tarjeta">
        <img src="https://www.frutamare.com/wp-content/uploads/Aguacate-Fuerte.webp" alt="Aguacate Fuerte" />
        <h2>Fuerte</h2>
        <p>El aguacate Fuerte es una variedad de aguacate híbrido con piel suave y verde. Se cultiva principalmente en México y Centroamérica.</p>
      </div>

      <div class="tarjeta">
        <img src="https://cdn1.totalcommerce.cloud/mercadozapatoca/product-image/es/aguacate-lorena-zapatoca-x-500-gr-1.webp" alt="Aguacate Lorena" />
        <h2>Lorena</h2>
        <p>El aguacate Lorena es una variedad cultivada en Colombia, conocida por su gran tamaño, piel lisa y verde brillante. Su pulpa es cremosa y de sabor suave, ideal para ensaladas y guacamole.</p>
      </div>

      <div class="tarjeta">
        <img src="https://www.primolina.com/89-home_default/aguacate-hass.jpg" alt="Aguacate Carlos" />
        <h2>Carlos</h2>
        <p>El aguacate Carlos es originario de los Andes colombianos. Tiene piel rugosa, pulpa amarilla intensa y un sabor ligeramente dulce. Es muy apreciado en preparaciones frescas y en exportación.</p>
      </div>
    </div>
  </main>

  <!-- ===== FOOTER ===== -->
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
</body>
</html>
