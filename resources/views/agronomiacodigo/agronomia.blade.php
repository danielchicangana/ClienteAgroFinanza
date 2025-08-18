<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agronomia</title>
    <style>
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
      }

      a {
        text-decoration: none;
        color: white;
      }

      /* ===== HEADER ===== */
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

      /* Botón verde personalizado */
      .btn-verde {
        display: inline-block;
        min-width: 140px;
        padding: 8px 20px;
        background: linear-gradient(135deg, #38ef7d, #11998e);
        color: #161414 !important;
        font-weight: bold;
        border-radius: 7px;
        border: none;
        cursor: pointer;
        transition: background 0.3s ease;
        text-align: center;
      }

      .btn-verde:hover {
        background: linear-gradient(135deg, #11998e, #38ef7d);
        color: #161414 !important;
      }

      /* Botón desplegable */
      .dropdown {
        position: relative;
      }

      .dropbtn {
        /* aplicamos diseño de btn-verde */
        all: unset;
        cursor: pointer;
        font-weight: bold;
        border-radius: 7px;
        padding: 8px 20px;
        min-width: 140px;
        background: linear-gradient(135deg, #38ef7d, #11998e);
        color: #161414 !important;
        display: inline-block;
        transition: background 0.3s ease;
        text-align: center;
      }

      .dropbtn:hover {
        background: linear-gradient(135deg, #11998e, #38ef7d);
        color: #161414 !important;
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
      }

      .dropdown-content a:hover {
        background-color: #f2f2f2;
      }

      .dropdown:hover .dropdown-content {
        display: block;
      }

      /* Botón salir con estilo btn-verde */
      .salir {
        all: unset;
        cursor: pointer;
        font-weight: bold;
        border-radius: 7px;
        padding: 8px 20px;
        min-width: 140px;
        background: linear-gradient(135deg, #38ef7d, #11998e);
        color: #161414 !important;
        text-align: center;
        display: inline-block;
        transition: background 0.3s ease;
      }

      .salir:hover {
        background: linear-gradient(135deg, #11998e, #38ef7d);
        color: #161414 !important;
      }

      .foto_perfil {
        width: 50px;
        height: 50px;
        border-radius: 50%;
      }

      /* ===== MAIN ===== */
      main.Agronomia {
        flex: 1;
        padding-top: 80px; /* espacio por navbar fijo */
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
      }

      .Agronomia-container {
        font-size: 28px;
        color: #333;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 40px;
      }

      .Agronomia-card {
        width: 300px;
        border-radius: 15px;
        overflow: hidden;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
      }

      .Agronomia-card:hover {
        transform: scale(1.05);
      }

      .img-card {
        width: 100%;
        height: 300px;
        object-fit: cover;
      }

      .textog {
        background-color: #139422;
        padding: 10px;
        text-align: center;
        color: white;
        font-weight: bold;
      }

      /* Para que el enlace envuelva la card sin alterar estilos */
      .Agronomia-card-link {
        text-decoration: none;
        color: inherit;
        display: inline-block;
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
      .inicioa{
          text-decoration: none;
          color: black;
      }
    </style>
</head>
<body>

       <!-- ===== NAVBAR ===== -->
    <header class="navbar">
        <div class="logo-nombre">
            <img src="/img/imagen_2025-07-03_232159777-removebg-preview.png" class="Logo" alt="Logo">
            <h1 class="NombreP"><a href="/inicio" class="inicioa">AgroFinanzas</a></h1>
        </div>
        <div class="nav-buttons">
            <div class="dropdown">
                <button class="dropbtn">Secciones ▼</button>
                <div class="dropdown-content">
                    <a href="/Finanzas">Finanzas</a>
                    <a href="/comentarios">Comentarios</a>
                </div>
            </div>
            <a href="/inicio" class="salir">Cerrar Sesión</a>
            <a href="/perfil">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Foto de perfil" class="foto_perfil">
            </a>
        </div>
    </header>

    <main class="Agronomia">
      <h1 class="titulo-principal">Producción Agropecuaria</h1>

      <div class="Agronomia-container">

        <a href="/gallina" class="Agronomia-card-link">
          <div class="Agronomia-card">
            <img class="img-card" src="https://media.istockphoto.com/id/1217649450/es/foto/pollo-o-gallina-en-un-prado-verde.jpg?s=612x612&w=0&k=20&c=urmVDADDbYr7hJJq61b04gdOFAday49yyfqjsdAQHSE=" alt="Gallina" />
            <div class="textog">Gallina</div>
          </div>
        </a>

        <a href="/GanadoVacuno" class="Agronomia-card-link">
          <div class="Agronomia-card">
            <img class="img-card" src="https://img.freepik.com/foto-gratis/vacas-campo-verde-dia-soleado_181624-42782.jpg" alt="Ganado Vacuno" />
            <div class="textog">Ganado Vacuno</div>
          </div>
        </a>

        <a href="/aguacate" class="Agronomia-card-link">
          <div class="Agronomia-card">
            <img class="img-card" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTlnMnGHBADNnmL2CBaU0bVTsqekJiS8PanuQ&s" alt="Aguacate" />
            <div class="textog">Aguacate</div>
          </div>
        </a>

        <a href="/cafe" class="Agronomia-card-link">
          <div class="Agronomia-card">
            <img class="img-card" src="https://cdn.shopify.com/s/files/1/0611/2057/7587/files/blog-ineffable-coffee-proceso-natural-1.jpg?v=1742546342" alt="Café" />
            <div class="textog">Café</div>
          </div>
        </a>

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
