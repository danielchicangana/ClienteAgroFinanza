<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroFinanzas - Gallinas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        body {
            background-color: #f5f9f6;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #c1e9ccff !important;
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
        .card img {
            border-radius: 10px;
        }
        /* Efecto zoom */
        .img-zoom {
            transition: transform 0.3s ease-in-out;
        }
        .img-zoom:hover {
            transform: scale(1.05);
        }
        /* Footer */
        footer {
            background-color: #212529;
            color: #fff;
            padding: 20px 0;
            font-size: 0.85rem;
        }
        footer h6 {
            border-bottom: 1px solid #6c757d;
            padding-bottom: 5px;
            font-size: 0.9rem;
        }
        footer a {
            color: #fff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light px-4">
  <a class="navbar-brand d-flex align-items-center" href="/inicio">
    <img src="img/imagen_2025-07-03_232159777-removebg-preview.png" alt="Logo" width="50" height="50" class="me-2">
    AgroFinanzas
  </a>
  <div class="ms-auto d-flex align-items-center">
    <!-- Botón con dropdown -->

    <div class="dropdown me-3">
        
      <button class="btn btn-navegacion dropdown-toggle" type="button" id="dropdownSecciones" data-bs-toggle="dropdown" aria-expanded="false">
        Secciones
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownSecciones">
        <li><a class="dropdown-item" href="/Finanzas">Finanzas</a></li>
        <li><a class="dropdown-item" href="/comentarios">Comentarios</a></li>
      </ul>
    </div>
     <!-- Botón Inicio con mismo diseño -->
    <a href="/home  2345" class="btn-navegacion me-3">Cerrar Sesión</a>
    <!-- Imagen de perfil -->
    <a href="{{ url('/perfil') }}">
      <img src="{{ asset('img/photo-1545830790-68595959c491.avif') }}" alt="Foto perfil" class="rounded-circle border border-2 border-success" width="50" height="50" />
    </a>
  </div>
</nav>

<!-- Bootstrap JS para el dropdown -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<!-- ................ -->
<!-- Contenido principal -->
<div class="container mt-4">
    <div class="row g-4">
        <!-- Columna principal -->
        <div class="col-lg-8">
            <div class="d-flex align-items-center mb-3">
                <img src="https://certifiedhumanelatino.org/wp-content/uploads/2021/11/Design-sem-nome-2.png" alt="Gallinas" width="50" height="50" class="me-3 rounded img-zoom">
                <div>
                    <h2 class="mb-0">AgroFinanzas — Gallinas</h2>
                    <p class="text-muted">Información práctica sobre especies de gallinas, su alimentación y manejo básico para pequeños productores.</p>
                </div>
            </div>

            <!-- ¿Por qué criar gallinas? -->
            <div class="card p-3 shadow-sm mb-4">
                <img src="https://bogota.gov.co/sites/default/files/inline-images/gallinas-2_0.jpeg" alt="Gallinas en campo" class="img-fluid mb-3 img-zoom">
                <h5><strong>¿Por qué criar gallinas?</strong></h5>
                <p>Las gallinas son una opción rentable para obtener huevos frescos, fertilizante natural (estiércol) y en algunos casos carne. Son fáciles de integrar en pequeños predios o fincas familiares y ayudan al control de insectos y maleza cuando se manejan en pastoreo rotacional.</p>
            </div>

            <!-- Especies y razas -->
            <div class="card p-3 shadow-sm mb-4">
                <h5><strong>Especies y razas comunes</strong></h5>
                <div class="row g-3">
                    <div class="col-md-6 d-flex">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWZ0juXpioTAQdT_qyj3l74XFcdZoHmEcSWw&s" alt="Rhode Island Red" class="me-3 img-zoom" width="80">
                        <div>
                            <strong>Rhode Island Red</strong>
                            <p class="mb-0">Raza dual (huevos y carne). Resistente y buena productora de huevos marrones.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfW8KUEmpxzqrhjysyYwIJKwRyP1bCy0mzUA&s" alt="Leghorn" class="me-3 img-zoom" width="80">
                        <div>
                            <strong>Leghorn</strong>
                            <p class="mb-0">Excelente ponedora de huevos blancos, ligera y activa.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <img src="https://www.gallinaponedora.com/wp-content/uploads/2018/05/Gallina-orpington.jpg" alt="Orpington" class="me-3 img-zoom" width="80">
                        <div>
                            <strong>Orpington</strong>
                            <p class="mb-0">Tranquila, resistente al frío y de buen temperamento.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e2/Silky_bantam.jpg/1200px-Silky_bantam.jpg" alt="Silkie" class="me-3 img-zoom" width="80">
                        <div>
                            <strong>Silkie</strong>
                            <p class="mb-0">Ornamental, dócil y con plumaje sedoso.</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <img src="https://tugallinaonline.es/planeta-avicola/wp-content/uploads/2022/06/The-Plymouth-Rock-Chicken-All-You-Need-To-Know-min.jpeg" alt="Plymouth Rock" class="me-3 img-zoom" width="80">
                        <div>
                            <strong>Plymouth Rock</strong>
                            <p class="mb-0">Resistente, ideal para principiantes y buena para carne y huevos.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alimentación -->
            <div class="card p-3 shadow-sm mb-4">
                <h5><strong>¿Qué comen las gallinas?</strong></h5>
                <ul>
                    <li><strong>Pienso comercial balanceado:</strong> según la etapa.</li>
                    <li><strong>Granos:</strong> maíz, sorgo, trigo en cantidades controladas.</li>
                    <li><strong>Proteínas:</strong> soja, pescado, insectos o restos cocinados.</li>
                    <li><strong>Verduras y forraje:</strong> hojas verdes y pasto.</li>
                    <li><strong>Grit y concha de ostra:</strong> para el calcio y minerales.</li>
                    <li><strong>Agua limpia:</strong> siempre disponible.</li>
                </ul>
                <p class="text-muted">Evitar alimentos mohosos o salados, y plantas tóxicas.</p>
            </div>

            <!-- Manejo básico -->
            <div class="card p-3 shadow-sm">
                <h5><strong>Manejo básico</strong></h5>
                <ul>
                    <li>Gallinero limpio, seco y ventilado.</li>
                    <li>Rotar áreas de pastoreo.</li>
                    <li>Vacunaciones y controles sanitarios.</li>
                    <li>Registrar producción y consumo de alimento.</li>
                </ul>
            </div>
        </div>

        <!-- Aside -->
        <div class="col-lg-4">
            <div class="card p-3 shadow-sm mb-4">
                <h5>Galería</h5>
                <img src="https://ganadosycarnes.com/wp-content/uploads/2019/02/gallinas-felices.jpg" alt="Gallinas libres" class="img-fluid mb-2 img-zoom">
                <img src="https://ecohabitar.org/wp-content/uploads/2023/03/gallinero1-1.jpg" alt="Gallinero" class="img-fluid mb-2 img-zoom">
                <img src="https://d1lg8auwtggj9x.cloudfront.net/images/Chicken_feed.width-820.jpg" alt="Alimento para gallinas" class="img-fluid mb-2 img-zoom">
                <h6>Datos rápidos</h6>
                <ul>
                    <li><strong>Edad de puesta:</strong> 18-24 semanas.</li>
                    <li><strong>Producción anual:</strong> 150-300 huevos.</li>
                    <li><strong>Espacio recomendado:</strong> 4-5 m² en pastoreo.</li>
                </ul>
            </div>
            <div class="card p-3 shadow-sm">
                <h5>Ventajas económicas</h5>
                <p>Los huevos generan ingresos constantes y el estiércol se usa como abono. Diversificar con aves reduce riesgos y aumenta la resiliencia del sistema productivo.</p>
            </div>
        </div>
    </div>
</div>

<!-- Footer actualizado -->
<footer class="bg-dark text-light py-3 mt-4">
    <div class="container">
        <div class="row text-center text-md-start">
            <div class="col-md-4 mb-3">
                <h6>Números de Contacto</h6>
                <p class="mb-0">+57 311 7091198</p>
                <p class="mb-0">+57 312 7759123</p>
                <p class="mb-0">+57 314 2716135</p>
                <p class="mb-0">+57 316 0993123</p>
            </div>
            <div class="col-md-4 mb-3">
                <h6>Redes Sociales</h6>
                <a href="#" class="text-light me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-light me-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="text-light me-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-light me-2"><i class="fab fa-youtube"></i></a>
                <p class="mt-2 mb-0"><a href="#" class="text-light">Términos de uso</a></p>
            </div>
            <div class="col-md-4 mb-3">
                <h6>Correos Electrónicos</h6>
                <p class="mb-0">jeanc1778@gmail.com</p>
                <p class="mb-0">forcemenrtartu@gmail.com</p>
                <p class="mb-0">luisestebannarvaez82@gmail.com</p>
                <p class="mb-0">chicanganad9@gmail.com</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>