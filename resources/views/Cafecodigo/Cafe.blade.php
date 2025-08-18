<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Cafe - AgroFinanzas</title>

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
      padding: 100px 20px 20px; /* 100px por navbar fijo */
    }

    /* ===== ENLACES ===== */
    a {
      text-decoration: none;
      color: black;
    }

    /* ===== HEADER / NAVBAR ===== */
    header.navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 100;

      display: flex;
      justify-content: space-between;
      align-items: center;

      padding: 10px 20px;
      background-color: #c1e9ccff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .logo-nombre {
      display: flex;
      align-items: center;
    }

    .Logo {
      width: 80px;
      height: 80px;
      object-fit: contain;
      margin-right: 10px;
    }

    .NombreP {
      font-size: 24px;
      font-weight: bold;
    }

    .NombreP a {
      color: black;
      text-decoration: none;
    }
    .NombreP a:hover {
      text-decoration: underline;
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

    .dropbtn {
      background-color: #fff;
      color: #000;
      padding: 8px 12px;
      font-weight: bold;
      border: 1px solid #000;
      border-radius: 5px;
      cursor: pointer;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      min-width: 160px;

      background-color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;

      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    .dropdown-content a {
      display: block;
      padding: 12px 16px;
      color: #333;
    }

    .dropdown-content a:hover {
      background-color: #f2f2f2;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Botón salir */
    .salir {
      padding: 7px 12px;
      background-color: #fff;
      border: 1px solid #000;
      border-radius: 5px;
      color: #000;
      font-weight: bold;
    }

    .salir:hover {
      background-color: #c6f6cf;
    }

    .foto_perfil {
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }

    /* Botones con estilo verde y tamaño ajustado */
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

    /* ===== TARJETAS ===== */
    .contenedor-tarjetas {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      padding: 20px;
    }

    .tarjeta {
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .tarjeta:hover {
      transform: scale(1.05);
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2);
    }

    .tarjeta img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .tarjeta h3 {
      font-size: 16px;
      font-weight: bold;
      margin: 15px;
    }

    .tarjeta p {
      font-size: 14px;
      color: #444;
      margin: 0 15px 15px;
    }

    /* ===== FOOTER ===== */
    footer.footer {
      background-color: #1b1a1a;
      color: #fff;

      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      flex-wrap: wrap;
      padding: 30px 20px;
    }

    .footer-section {
      flex: 1 1 300px;
      margin: 10px;
    }

    .footer-section h3 {
      margin-bottom: 10px;
      font-size: 18px;
    }

    .footer-section p {
      margin: 5px 0;
      font-size: 14px;
    }

    .social-icons {
      display: flex;
      gap: 15px;
      margin: 10px 0;
    }

    .social-icons a {
      font-size: 20px;
      color: #fff;
      transition: color 0.3s ease;
    }

    .social-icons a:hover {
      color: #139422;
    }

    .terminos {
      font-size: 14px;
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <!-- ===== NAVBAR ===== -->
  <header class="navbar">
    <div class="logo-nombre">
      <img
        src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}"
        alt="Logo"
        class="Logo"
      />
      <h1 class="NombreP"><a href="/inicio" class="agro">AgroFinanzas</a></h1>
    </div>
    <div class="nav-buttons">
      <div class="dropdown">
        <button class="dropbtn btn-verde">Secciones ▼</button>
        <div class="dropdown-content">
          <a href="/Finanzas">Finanzas</a>
          <a href="#">Agronomía</a>
          <a href="/comentarios">Comentarios</a>
        </div>
      </div>
      <a href="/inicio" class="salir btn-verde">Cerrar Sesión</a>
      <a href="/perfil" class="perfil">
        <img
          src="https://randomuser.me/api/portraits/women/44.jpg"
          alt="Foto de perfil"
          class="foto_perfil"
        />
      </a>
    </div>
  </header>

  <main>
    <section class="contenedor-tarjetas">
      <div class="tarjeta">
        <img
          src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=600&q=80"
          alt="Preparación del terreno"
        />
        <h3>Una buena preparación del terreno asegura el éxito del cafetal desde el inicio.</h3>
        <p>Los agrónomos recomiendan realizar análisis de suelos antes de sembrar...</p>
      </div>

      <div class="tarjeta">
        <img
          src="https://images.unsplash.com/photo-1516822003754-cca485356ecb?auto=format&fit=crop&w=600&q=80"
          alt="Sombra regulada"
        />
        <h3>La sombra regulada mejora la calidad del grano y protege el suelo.</h3>
        <p>Aunque el café es una planta de media sombra, los expertos advierten que demasiada cobertura...</p>
      </div>

      <div class="tarjeta">
        <img
          src="https://images.unsplash.com/photo-1542831371-d531d36971e6?auto=format&fit=crop&w=600&q=80"
          alt="Fertilización oportuna"
        />
        <h3>La fertilización oportuna fortalece las plantas y mejora la producción.</h3>
        <p>Con base en los análisis del suelo, los técnicos recomiendan aplicar fertilizantes ricos en...</p>
      </div>

      <div class="tarjeta">
        <img
          src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80"
          alt="Control de plagas"
        />
        <h3>El control de plagas y enfermedades debe ser preventivo y constante.</h3>
        <p>Enfermedades como la roya o plagas como el broca afectan directamente el rendimiento...</p>
      </div>

      <div class="tarjeta">
        <img
          src="https://proain.com/cdn/shop/articles/la_calidad_del_agua_de_riego_1024x.png?v=1602168741"
          alt="Manejo del agua"
        />
        <h3>El manejo del agua es vital, especialmente en zonas de clima variable.</h3>
        <p>Aunque el café requiere buena humedad, el exceso de agua puede provocar pudrición de raíces...</p>
      </div>

      <div class="tarjeta">
        <img
          src="https://images.unsplash.com/photo-1470337458703-46ad1756a187?auto=format&fit=crop&w=600&q=80"
          alt="Podas de café"
        />
        <h3>Las podas bien hechas rejuvenecen el cafetal y mejoran su producción.</h3>
        <p>La poda de producción, la de formación y la de saneamiento son esenciales...</p>
      </div>

      <div class="tarjeta">
        <img
          src="https://images.unsplash.com/photo-1500534623283-312aade485b7?auto=format&fit=crop&w=600&q=80"
          alt="Cosecha selectiva"
        />
        <h3>La cosecha debe ser selectiva para asegurar un café de calidad.</h3>
        <p>Recolectar solo los granos maduros, de forma manual, garantiza un mejor sabor...</p>
      </div>

      <div class="tarjeta">
        <img
          src="https://images.unsplash.com/photo-1506748686214-e9df14d4d9d0?auto=format&fit=crop&w=600&q=80"
          alt="Beneficio y secado"
        />
        <h3>El beneficio y secado del grano influyen directamente en el valor del producto.</h3>
        <p>Un mal proceso de lavado, fermentación o secado puede reducir la calidad...</p>
      </div>

      <div class="tarjeta">
        <img
          src="https://revista.coffeemedia.com.co/wp-content/uploads/2017/01/fotos-pagina.jpg"
          alt="Almacenamiento de café"
        />
        <h3>El almacenamiento adecuado preserva la calidad del café.</h3>
        <p>Guardar el café en lugares frescos, secos y ventilados evita la pérdida de aroma y sabor...</p>
      </div>

      <div class="tarjeta">
        <img
          src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80"
          alt="Exportación de café"
        />
        <h3>La exportación de café exige cumplir con altos estándares.</h3>
        <p>Desde la selección de granos hasta el empaque, todo debe cumplir con las normas internacionales...</p>
      </div>
    </section>
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
