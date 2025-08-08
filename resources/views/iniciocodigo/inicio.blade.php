<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio - AgroFinanzas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body, html {
            margin: 0;
            padding: 0;
        }

        .hero-section {
            background-image: url('https://www.infobae.com/resizer/v2/https%3A%2F%2Fs3.amazonaws.com%2Farc-wordpress-client-uploads%2Finfobae-wp%2Fwp-content%2Fuploads%2F2018%2F11%2F20120646%2Ffinanzas-11.jpg?auth=c14c79a76bd5bd7810580d5ffcca3d3f8c32477a8decba3a2c37e908f14be0fc&smart=true&width=992&height=559&quality=85'); /* Imagen de campo */
            background-size: cover;
            background-position: center;
            height: 100vh;
            position: relative;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 12px;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .btn-hero {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            margin: 10px;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .btn-verde {
            background: linear-gradient(135deg, #38ef7d, #11998e);
            color: white;
        }

        .btn-verde:hover {
            background: linear-gradient(135deg, #42f5b6, #1dd1a1);
            transform: scale(1.05);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
            color: white;
        }

        .btn-outline:hover {
            background: white;
            color: black;
        }

        .cards-section {
            background-color: #f8f9fa;
            padding: 60px 20px;
        }

        .card-custom {
            border-radius: 15px;
            transition: transform 0.3s ease-in-out;
        }

        .card-custom:hover {
            transform: scale(1.03);
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
    </style>
</head>
<body>

    <!-- HERO CON IMAGEN DE FONDO -->
    <div class="hero-section">
        <div class="hero-overlay">
            <h1 class="hero-title">Bienvenido a AgroFinanzas</h1>
            <p class="hero-subtitle">Organiza tus finanzas y actividades agrícolas fácilmente</p>
            <a href="{{ url('/finanzas') }}" class="btn btn-hero btn-verde">Finanzas</a>
            <a  href="{{ url('/home') }}" class="btn btn-hero btn-verde">Home</a>
            <a href="{{ url('/agronomia') }}" class="btn btn-hero btn-verde">Agronomía</a>
            <a href="{{ url('/recomendaciones') }}" class="btn btn-hero btn-verde">Recomendaciones</a>
        </div>
    </div>

    <!-- CARDS DE ABAJO -->
    <section class="cards-section">
        <div class="container">
            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card card-custom shadow-sm">
                        <img src="https://images.unsplash.com/photo-1501004318641-b39e6451bec6?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Agronomía">
                        <div class="card-body">
                            <h5 class="card-title">Agronomía</h5>
                            <p class="card-text">Gestión de cultivos, siembra, riego y cosechas con calendario.</p>
                            <a href="{{ url('/agronomia') }}" class="btn btn-verde">Entrar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-custom shadow-sm">
                        <img src="https://st.depositphotos.com/1912933/2493/i/450/depositphotos_24936093-stock-photo-man-holding-soil-with-dollars.jpg" class="card-img-top" alt="Finanzas">
                        <div class="card-body">
                            <h5 class="card-title">Finanzas</h5>
                            <p class="card-text">Registra ingresos, gastos y analiza la rentabilidad fácilmente.</p>
                            <a href="{{ url('/finanzas') }}" class="btn btn-verde">Entrar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-custom shadow-sm">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Recomendaciones">
                        <div class="card-body">
                            <h5 class="card-title">Recomendaciones</h5>
                            <p class="card-text">Consejos personalizados según clima, temporada y actividad.</p>
                            <a href="{{ url('/recomendaciones') }}" class="btn btn-verde">Entrar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
