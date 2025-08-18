<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Recomendaciones - AgroFinanzas</title>

  <!-- FontAwesome para iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Estilos personalizados -->
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    :root{
      --green-1: #11998e;
      --green-2: #38ef7d;
      --muted: #eaf7e9;
      --card: #ffffff;
      --text: #213123;
      --footer-bg: #111314;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body.Home{
      font-family:'Poppins',system-ui,Arial,sans-serif;
      background: var(--muted);
      color:var(--text);
      -webkit-font-smoothing:antialiased;
    }

    /* NAVBAR */
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
      width: 80px;
      height: 80px;
      object-fit: contain;
      margin-right: 10px;
    }

    /* Aquí quitamos subrayado y dejamos texto negro para el enlace */
    .logo-nombre a {
      text-decoration: none !important;
      color: #161414 !important;
      display: inline-flex;
      align-items: center;
    }

    .NombreP {
      font-size: 24px;
      font-weight: bold;
      margin: 0;
      /* color aquí lo hereda del enlace */
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
      background-color: #ffffff;
      color: #000000;
      padding: 8px 14px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 1rem;
      background: linear-gradient(135deg, #38ef7d, #11998e);
      color: #161414 !important;
      transition: all 0.3s ease-in-out;
    }
    .dropbtn:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
      color: #fff !important;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: #ffffff;
      border: 1px solid #ccc;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      z-index: 1000;
      border-radius: 5px;
      min-width: 160px;
    }

    .dropdown-content a {
      color: #333;
      padding: 12px 16px;
      display: block;
      text-decoration: none;
    }

    .dropdown-content a:hover {
      background-color: #f2f2f2;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    /* Botón salir */
    .salir {
      padding: 8px 14px;
      border-radius: 8px;
      font-weight: 600;
      background: linear-gradient(135deg, #38ef7d, #11998e);
      color: #161414 !important;
      border: none;
      cursor: pointer;
      text-decoration: none;
      font-size: 1rem;
      transition: all 0.3s ease-in-out;
      display: inline-flex;
      align-items: center;
      justify-content: center;
    }
    .salir:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
      color: #fff !important;
    }

    .foto_perfil {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      object-fit: cover;
    }

    /* ====== CONTENIDO PRINCIPAL ====== */
    .recomendaciones-container{
      max-width:1000px;
      margin: calc(72px + 28px) auto 40px;
      padding: 0 20px;
    }

    /* título + volver */
    .titulo-volver{
      display:flex;
      align-items:center;
      gap:18px;
      margin-bottom:18px;
    }
    .titulo-volver .volver{
      color:var(--green-1);
      text-decoration:none;
      font-weight:600;
      display:inline-flex;
      align-items:center;
      gap:8px;
      padding:6px 10px;
      border-radius:8px;
      transition:background .15s ease;
    }
    .titulo-volver .volver:hover{
      background: rgba(17,153,142,0.06);
    }
    .titulo-volver h2{
      font-size:1.15rem;
      letter-spacing:0.6px;
    }

    /* caja de comentar */
    .comentario-box{
      display:flex;
      gap:12px;
      margin-bottom:20px;
      align-items:center;
    }
    .comentario-box input{
      flex:1;
      padding:12px 14px;
      border-radius:10px;
      border:1px solid rgba(0,0,0,0.08);
      background:#fff;
      font-size:0.98rem;
      box-shadow: inset 0 1px 0 rgba(0,0,0,0.02);
    }
    .btn-comentar{
      padding:10px 16px;
      border-radius:10px;
      border:0;
      font-weight:600;
      background: linear-gradient(135deg, var(--green-2), var(--green-1));
      color:#fff;
      cursor:pointer;
      box-shadow: 0 8px 18px rgba(17,153,142,0.12);
      transition: transform 0.2s ease;
    }
    .btn-comentar:hover{ 
      transform: translateY(-2px);
    }

    /* tarjetas de comentario */
    .comentario{
      display:flex;
      gap:14px;
      align-items:flex-start;
      padding:14px;
      background: #fff;
      border-radius:12px;
      box-shadow: 0 6px 18px rgba(10,10,10,0.04);
      margin-bottom:12px;
      border: 1px solid rgba(0,0,0,0.04);
    }
    .comentario img{
      width:52px;
      height:52px;
      border-radius:999px;
      object-fit:cover;
      flex-shrink:0;
      border:2px solid rgba(17,153,142,0.06);
    }
    .comentario-body{ flex:1 }
    .comentario .nombre{
      font-weight:700;
      margin-bottom:6px;
      color:#2b3a2f;
    }
    .comentario .texto{
      color:#47524a;
      line-height:1.45;
      font-size:0.95rem;
    }

    /* tiempo alineado a la derecha */
    .comentario .tiempo{
      margin-left:12px;
      color:#8a8f8a;
      font-size:0.85rem;
      white-space:nowrap;
      align-self:flex-start;
    }

    /* info extra */
    .info-extra{
      margin-top:18px;
      display:grid;
      grid-template-columns: repeat(auto-fit, minmax(220px,1fr));
      gap:16px;
    }
    .info-extra h4{
      margin-bottom:8px;
      color:var(--green-1);
      font-size:1rem;
      font-weight:700;
    }
    .info-extra ul{ list-style: disc; padding-left:18px; color:#2f3b33; }
    .info-extra li{ margin-bottom:6px; font-size:0.95rem; }

    /* ====== FOOTER ====== */
    footer.footer{
      background: var(--footer-bg);
      color:#fff;
      padding:44px 20px;
      display:flex;
      flex-wrap:wrap;
      gap:18px;
      justify-content:space-between;
      border-top:4px solid var(--green-1);
      margin-top:36px;
    }

    /* cada columna del footer */
    .footer-section{
      flex: 1 1 280px;
      min-width:220px;
      padding:8px 12px;
    }
    .footer-section h3{
      font-size:1rem;
      margin-bottom:10px;
      color:#fff;
    }
    .footer-section p{ color:rgba(255,255,255,0.88); margin-bottom:6px; font-size:0.94rem; }

    /* iconos sociales */
    .social-icons{ display:flex; gap:10px; align-items:center; margin:8px 0; }
    .social-icons a{
      display:inline-flex;
      align-items:center;
      justify-content:center;
      width:36px;
      height:36px;
      border-radius:8px;
      background: rgba(255,255,255,0.04);
      color:#fff;
      text-decoration:none;
      transition: transform .15s ease, background .15s;
    }
    .social-icons a:hover{
      background: linear-gradient(135deg,var(--green-2),var(--green-1));
      transform: translateY(-3px);
      color:#06322a;
    }

    /* adaptividad */
    @media (max-width:720px){
      header.navbar{ padding:12px 18px; min-height:64px }
      .NombreP{ font-size:1.05rem }
      .Logo{ width:44px;height:44px }
      .recomendaciones-container{ margin-top: calc(64px + 18px) }
      .comentario img{ width:46px;height:46px }
    }
  </style>
</head>
<body class="Home">

  <!-- HEADER -->
  <header class="navbar">
    <div class="logo-nombre">
      <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" class="Logo" alt="Logo">
      <a href="/inicio">
        <h1 class="NombreP">AgroFinanzas</h1>
      </a>
    </div>
    <div class="nav-buttons">
      <div class="dropdown">
        <button class="dropbtn">Secciones ▼</button>
        <div class="dropdown-content">
          <a href="/Agronomia">Agronomía</a>
          <a href="/Finanzas">Finanzas</a>
        </div>
      </div>
      <a href="/inicio" class="salir btn-verde">Cerrar Sesión</a>
      <a href="/perfil">
        <img src="{{ asset('img/photo-1545830790-68595959c491.avif') }}" alt="Foto de perfil" class="foto_perfil">
      </a>
    </div>
  </header>

  <!-- CONTENIDO PRINCIPAL -->
  <main class="recomendaciones-container">
    <div class="titulo-volver">
   
      <h2>RECOMENDACIONES</h2>
    </div>

    <div class="comentario-box">
      <input type="text" placeholder="Comentar..." aria-label="Comentar">
      <button class="btn-comentar">Comentar</button>
    </div>

    <!-- Comentarios -->
    <div class="comentario">
      <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Marta">
      <div class="comentario-body">
        <p class="nombre">Marta Rodriguez</p>
        <p class="texto">Me gusta mucho la aplicación y me ha sido muy útil.</p>
      </div>
      <div class="tiempo">10 min</div>
    </div>

    <div class="comentario">
      <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Raul">
      <div class="comentario-body">
        <p class="nombre">Raul Escobar</p>
        <p class="texto">Me gusta mucho este sitio web; me ha facilitado mantener mis cultivos en buen estado.</p>
      </div>
      <div class="tiempo">10 min</div>
    </div>

    <div class="comentario">
      <img src="https://randomuser.me/api/portraits/men/46.jpg" alt="Andres">
      <div class="comentario-body">
        <p class="nombre">Andres Lopez</p>
        <p class="texto">Me ha gustado mucho porque tengo un mejor manejo de mis finanzas.</p>
      </div>
      <div class="tiempo">10 min</div>
    </div>

    <div class="comentario">
      <img src="https://randomuser.me/api/portraits/men/47.jpg" alt="Gentil">
      <div class="comentario-body">
        <p class="nombre">Gentil Eduardo</p>
        <p class="texto">Es muy fácil de usar y me ha ayudado mucho.</p>
      </div>
      <div class="tiempo">10 min</div>
    </div>

    <!-- Recomendaciones extra -->
    <section class="info-extra">
      <div>
        <h4>Cultivo</h4>
        <ul>
          <li>El aguacate necesita clima templado, entre 10° y 30°.</li>
          <li>Mucha luz solar, sin calor extremo.</li>
          <li>Regar cuando el suelo lo requiera.</li>
        </ul>
      </div>
      <div>
        <h4>Para el café</h4>
        <ul>
          <li>No consumir más de 400 mg de cafeína al día.</li>
          <li>Evitar el café azucarado.</li>
        </ul>
      </div>
      <div>
        <h4>Ganado vacuno</h4>
        <ul>
          <li>Corrales con espacio suficiente para movimiento.</li>
        </ul>
      </div>
      <div>
        <h4>Gallinas</h4>
        <ul>
          <li>Dieta balanceada: proteínas, verduras y vitaminas.</li>
        </ul>
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

</body>
</html>
