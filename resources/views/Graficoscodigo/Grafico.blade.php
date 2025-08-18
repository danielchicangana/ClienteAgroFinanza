<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gráficos - AgroFinanzas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        /* ===== RESET ===== */

         .navbar {
      background-color: #c1e9ccff !important;
    }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        html, body { min-height: 100vh; }
        body {
            display: flex; flex-direction: column;
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        main { flex: 1; }
        a { text-decoration: none; color: black; }

        /* ===== HEADER ===== */
        header.navbar {
            position: fixed; top: 0; left: 0; width: 100%; z-index: 100;
            display: flex; justify-content: space-between; align-items: center;
            padding: 10px 20px; background-color: #f8f8f8;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .logo-nombre { display: flex; align-items: center; }
        .Logo { width: 50px; height: 50px; object-fit: contain; margin-right: 10px; }
        .NombreP { font-size: 24px; font-weight: bold; }
        .nav-buttons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        /* Estilo botón verde para navegación */
        .btn-verde {
            display: inline-block;
            width: auto;
            min-width: 140px;
            padding: 8px 20px;
            background: linear-gradient(135deg, #38ef7d, #11998e);
            color: #161414 !important;
            font-weight: bold;
            border-radius: 25px;
            border: none;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            text-align: center;
            user-select: none;
        }
        .btn-verde:hover {
            transform: translateY(-2px);
            box-shadow: 0px 4px 15px rgba(56, 239, 125, 0.5);
        }

        /* ===== DROPDOWN ===== */
        .dropdown { position: relative; }
        .dropdown-content {
            display: none; position: absolute; right: 0; min-width: 160px;
            background-color: #fff; border: 1px solid #ccc; border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1); z-index: 1000;
        }
        .dropdown-content a {
            color: #333; padding: 12px 16px; display: block;
        }
        .dropdown-content a:hover { background-color: #f2f2f2; }
        .dropdown:hover .dropdown-content { display: block; }

        /* Foto perfil */
        .foto_perfil { width: 50px; height: 50px; border-radius: 50%; }

        /* ===== MAIN ===== */
        .graficos-container {
            display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;
            padding: 120px 20px 20px;
        }
        .grafico-card {
            background-size: cover;
            background-position: center;
            border-radius: 12px; padding: 15px; width: 350px;
            text-align: center; box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            color: white;
            position: relative;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .grafico-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.25);
        }
        .grafico-card::before {
            content: "";
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0,0,0,0.4);
            border-radius: 12px;
        }
        .grafico-titulo, .botones-descarga, .selector-periodo {
            position: relative;
            z-index: 1;
        }
        .grafico-titulo { margin: 10px 0; font-weight: bold; font-size: 1.2rem; }
        .botones-descarga {
            display: flex; justify-content: space-around; margin-top: 10px;
            gap: 8px;
        }

        /* Estilo base para los links-botón (sin color) */
        .botones-descarga a {
            display: inline-block;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            transition: transform 0.18s ease, box-shadow 0.18s ease, opacity 0.18s ease;
            border: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        /* CLASES ESPECÍFICAS (mayor especificidad) */
        .botones-descarga a.descargar-btn1 {
            background-color: #007bff; /* Azul */
            color: #fff;
        }
        .botones-descarga a.descargar-btn1:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 24px rgba(0,123,255,0.28);
            opacity: 0.95;
        }

        .botones-descarga a.descargar-btn2 {
            background-color: #dc3545; /* Rojo */
            color: #fff;
        }
        .botones-descarga a.descargar-btn2:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 24px rgba(220,53,69,0.28);
            opacity: 0.95;
        }

        .botones-descarga a.descargar-btn3 {
            background-color: #28a745; /* Verde */
            color: #fff;
        }
        .botones-descarga a.descargar-btn3:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 24px rgba(40,167,69,0.28);
            opacity: 0.95;
        }

        .selector-periodo {
            margin-top: 12px; padding: 6px 10px; border-radius: 6px;
            border: 1px solid #ccc; font-size: 14px; cursor: pointer;
            background-color: #fff;
            color: #000;
        }

        /* ===== FOOTER ===== */
        footer.footer {
            background-color: #1b1a1a; display: flex; flex-wrap: wrap;
            justify-content: space-around; align-items: flex-start;
            padding: 30px 20px;
        }
        .footer-section { flex: 1 1 300px; margin: 10px; }
        .footer-section h3 {
            margin-bottom: 10px; font-size: 18px; color: #fff;
        }
        .footer-section p {
            margin: 5px 0; font-size: 14px; color: #fff;
        }
        .social-icons { display: flex; gap: 15px; margin: 10px 0; }
        .social-icons a {
            font-size: 20px; color: #fff; transition: color 0.3s ease;
        }
        .social-icons a:hover { color: #139422; }
        .terminos { font-size: 14px; color: #fff; margin-top: 5px; }
    </style>
</head>
<body>
    <!-- ===== NAVBAR ===== -->
    <header class="navbar">
        <div class="logo-nombre">
            <img src="{{ asset('img/imagen_2025-07-03_232159777-removebg-preview.png') }}" class="Logo" alt="Logo" />
            <h1 class="NombreP"><a href="/inicio" class="inicioa">AgroFinanzas</a></h1>
        </div>
        <div class="nav-buttons">
            <div class="dropdown">
                <button class="dropbtn btn-verde">Secciones ▼</button>
                <div class="dropdown-content">
                    <a href="/agronomia">Agronomía</a>
                    <a href="/comentarios">Comentarios</a>
                    <a href="/Finanzas">Finanzas</a>
                </div>
            </div>
            <a href="/inicio" class="btn-verde salir">Cerrar Sesión</a>
            <a href="/perfil">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Foto de perfil" class="foto_perfil " />
            </a>
        </div>
    </header>

    <main class="graficos-container">
        <!-- Tarjeta Gastos -->
        <div class="grafico-card" style="background-image: url('https://i.blogs.es/dfbf71/apps-control-gastos/1366_2000.jpg');">
            <p class="grafico-titulo">Gráficos de gastos</p>
            <div class="botones-descarga">
                <a class="descargar-btn1" href="#">Descargar</a>
                <a class="descargar-btn2" href="#">Descargar</a>
                <a class="descargar-btn3" href="#">Descargar</a>
            </div>
            <select class="selector-periodo">
                <option>Diario</option>
                <option>Mensual</option>
                <option>Anual</option>
            </select>
        </div>

        <!-- Tarjeta Ingresos -->
        <div class="grafico-card" style="background-image: url('https://static.vecteezy.com/system/resources/previews/005/529/588/non_2x/growth-analysis-increasing-revenue-icon-in-flat-style-money-increase-cartoon-illustration-vector.jpg');">
            <p class="grafico-titulo">Gráficos de ingresos</p>
            <div class="botones-descarga">
                <a class="descargar-btn1" href="#">Descargar</a>
                <a class="descargar-btn2" href="#">Descargar</a>
                <a class="descargar-btn3" href="#">Descargar</a>
            </div>
            <select class="selector-periodo">
                <option>Diario</option>
                <option>Mensual</option>
                <option>Anual</option>
            </select>
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
