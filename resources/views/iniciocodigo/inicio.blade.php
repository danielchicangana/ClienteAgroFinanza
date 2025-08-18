@extends('layouts.app')

@section('title', 'Inicio - AgroFinanzas')

@section('content')
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

  <!-- Contenido -->
  <main class="container-fluid p-0">
    <!-- Imagen principal con texto encima -->
    <div class="imagen-principal mb-5">
      <img src="{{ asset('img/photo-1580570598977-4b2412d01bbc.avif') }}" alt="Imagen Principal" />
      <div class="overlay"></div>
      <div class="texto-sobre-imagen" id="texto-animado">Bienvenido a AgroFinanzas</div>
    </div>

    <!-- Noticias en 3 columnas -->
    <section class="noticias row mx-auto gx-4 gy-4 px-3">
      <!-- Noticia 1 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="{{ asset('img/photo-1569858241634-5aee6e47091a.avif') }}"
            class="card-img-top"
            alt="Cuidado de Vacas"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Cuidado de tus vacas</h5>
            <p class="card-text">
              Aprende cómo garantizar la salud y productividad de tu ganado con consejos prácticos y fáciles de aplicar en el día a día.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 2 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="{{ asset('img/photo-1652016363501-b8b07517de17.avif') }}"
            class="card-img-top"
            alt="Cultivos"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Cómo cuidar tus cultivos</h5>
            <p class="card-text">
              Descubre técnicas modernas y ecológicas para mantener tus cultivos sanos, productivos y resistentes a plagas.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 3 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="{{ asset('img/photo-1590283603385-17ffb3a7f29f.avif') }}"
            class="card-img-top"
            alt="Finanzas"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Mejor manejo de tus finanzas</h5>
            <p class="card-text">
              Organiza tus ingresos, controla gastos y toma decisiones financieras inteligentes para impulsar tu emprendimiento rural.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 4 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80"
            class="card-img-top"
            alt="Manejo del suelo"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Manejo sostenible del suelo</h5>
            <p class="card-text">
              Aprende técnicas para conservar y mejorar la salud del suelo, base fundamental para cultivos exitosos.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 5 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="https://images.unsplash.com/photo-1468071174046-657d9d351a40?auto=format&fit=crop&w=600&q=80"
            class="card-img-top"
            alt="Riego eficiente"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Riego eficiente y ahorro de agua</h5>
            <p class="card-text">
              Descubre métodos para optimizar el uso del agua en tus cultivos y contribuir al cuidado ambiental.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
      <!-- Noticia 6 -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card h-100">
          <img
            src="https://images.unsplash.com/photo-1494526585095-c41746248156?auto=format&fit=crop&w=600&q=80"
            class="card-img-top"
            alt="Control de plagas"
          />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Control natural de plagas</h5>
            <p class="card-text">
              Métodos ecológicos para proteger tus cultivos sin dañar el medio ambiente ni la salud.
            </p>
            <a href="#" class="btn-leer-mas mt-auto">Leer más</a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection

@push('scripts')
<script>
  // Cuando termine la animación de escritura, quitar el cursor
  setTimeout(() => {
    document.getElementById("texto-animado").classList.add("done");
  }, 2000); // Coincide con la duración del typing
</script>
@endpush
