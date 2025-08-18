<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestión de Gastos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        .navbar {
      background-color: #c1e9ccff !important;
    }
        .btn-light.fw-bold {
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

    .btn-light.fw-bold:hover {
      transform: scale(1.05);
      background: linear-gradient(135deg, #42f5b6, #1dd1a1);
      color: #fff !important;
      text-decoration: none;
    }
        body {
            background-color: #d9f2d9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1;
        }
        footer {
            margin-top: auto;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #139422;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/inicio">
            <img src="img/imagen_2025-07-03_232159777-removebg-preview.png" alt="Logo" class="me-2 rounded" style="width:60px;height:60px;object-fit:contain;" />
            <span class="fw-bold">AgroFinanzas</span>
        </a>
        <div class="d-flex align-items-center gap-2">
            <div class="dropdown">
                <button class="btn btn-light fw-bold" type="button" data-bs-toggle="dropdown">
                    Secciones
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="/Finanzas">Finanzas</a></li>
                    <li><a class="dropdown-item" href="/agronomia">Agronomía</a></li>
                    <li><a class="dropdown-item" href="/comentarios">Comentarios</a></li>
                </ul>
            </div>
            <a href="/home" class="btn btn-light fw-bold">Cerrar Sesión</a>
           
            <a href="{{ url('/perfil') }}">
          <img src="{{ asset('img/photo-1545830790-68595959c491.avif') }}" alt="Foto Perfil" class="rounded-circle" style="width:50px;height:50px;" />
        </a>
        </div>
    </div>
</nav>

<main class="container py-4">

    <h2 class="mb-4">Registro de Gastos</h2>

    <!-- Formulario para añadir gasto -->
    <div class="card p-3 mb-4">
        <div class="row g-2">
            <div class="col-md-4">
                <input type="text" id="descripcion" class="form-control" placeholder="Descripción" />
            </div>
            <div class="col-md-3">
                <input type="number" id="monto" class="form-control" placeholder="Monto" step="0.01" />
            </div>
            <div class="col-md-3">
                <input type="date" id="fecha" class="form-control" />
            </div>
            <div class="col-md-2">
                <button class="btn btn-success w-100" onclick="agregarGasto()">Añadir</button>
            </div>
        </div>
    </div>

    <!-- Filtro -->
    <div class="mb-3">
        <select id="filtro" class="form-select w-auto" onchange="filtrarGastos()">
            <option value="todos">Todos</option>
            <option value="diario">Diario</option>
            <option value="mensual">Mensual</option>
            <option value="anual">Anual</option>
        </select>
    </div>

    <!-- Tabla de gastos -->
    <table class="table table-bordered table-hover">
        <thead class="table-success">
            <tr>
                <th>Descripción</th>
                <th>Monto</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody id="tablaGastos"></tbody>
    </table>

    <!-- Total -->
    <h4>Total: $<span id="total">0.00</span></h4>
</main>

<!-- FOOTER -->
<footer class="bg-dark text-white py-4 mt-5">
    <div class="container d-flex flex-wrap justify-content-between">
        <div>
            <h6>Números de Contacto</h6>
            <p class="mb-1">+57 311 7091198</p>
            <p class="mb-1">+57 312 7759123</p>
            <p class="mb-1">+57 314 2716135</p>
            <p class="mb-0">+57 316 0993123</p>
        </div>
        <div>
            <h6>Redes Sociales</h6>
            <p class="mb-1">Facebook · Instagram · Twitter · YouTube</p>
            <p class="mb-0">Términos de uso</p>
        </div>
        <div>
            <h6>Correos Electrónicos</h6>
            <p class="mb-1">jeanc1778@gmail.com</p>
            <p class="mb-1">forcemenrtartu@gmail.com</p>
            <p class="mb-1">luisestebannarvaez82@gmail.com</p>
            <p class="mb-0">chicanganad9@gmail.com</p>
        </div>
    </div>
</footer>

<!-- Modal Editar Gasto -->
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarLabel">Editar Gasto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <input type="text" id="editarDescripcion" class="form-control mb-2" placeholder="Descripción" />
        <input type="number" id="editarMonto" class="form-control mb-2" placeholder="Monto" step="0.01" />
        <input type="date" id="editarFecha" class="form-control" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" onclick="guardarEdicion()">Guardar</button>
      </div>
    </div>
  </div>
</div>

<script>
    let gastos = [];

    // Función para formatear números con puntos como miles y decimales
    function formatearNumero(num) {
        let partes = num.toFixed(2).split('.');
        partes[0] = partes[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        return partes.join('.');
    }

    function agregarGasto() {
        let descripcion = document.getElementById("descripcion").value;
        let monto = parseFloat(document.getElementById("monto").value);
        let fecha = document.getElementById("fecha").value;

        if (!descripcion || isNaN(monto) || !fecha) return;

        gastos.push({ descripcion, monto, fecha });
        mostrarGastos(gastos);
        limpiarCampos();
    }

    function limpiarCampos() {
        document.getElementById("descripcion").value = "";
        document.getElementById("monto").value = "";
        document.getElementById("fecha").value = "";
    }

    function mostrarGastos(lista) {
        let tabla = document.getElementById("tablaGastos");
        tabla.innerHTML = "";
        let total = 0;

        lista.forEach((gasto, index) => {
            total += gasto.monto;

            let fila = `
                <tr>
                    <td>${gasto.descripcion}</td>
                    <td>$${formatearNumero(gasto.monto)}</td>
                    <td>${gasto.fecha}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" onclick="editarGasto(${index})">Editar</button>
                        <button class="btn btn-danger btn-sm" onclick="eliminarGasto(${index})">Eliminar</button>
                    </td>
                </tr>
            `;
            tabla.innerHTML += fila;
        });

        document.getElementById("total").textContent = formatearNumero(total);
    }

    function eliminarGasto(index) {
        gastos.splice(index, 1);
        mostrarGastos(gastos);
    }

    let indiceEditar = null;
    let modalEditar = null;

    function editarGasto(index) {
        if (!modalEditar) {
            modalEditar = new bootstrap.Modal(document.getElementById('modalEditar'));
        }
        indiceEditar = index;
        let gasto = gastos[index];
        document.getElementById("editarDescripcion").value = gasto.descripcion;
        document.getElementById("editarMonto").value = gasto.monto;
        document.getElementById("editarFecha").value = gasto.fecha;
        modalEditar.show();
    }

    function guardarEdicion() {
        let nuevaDescripcion = document.getElementById("editarDescripcion").value;
        let nuevoMonto = parseFloat(document.getElementById("editarMonto").value);
        let nuevaFecha = document.getElementById("editarFecha").value;

        if (!nuevaDescripcion || isNaN(nuevoMonto) || !nuevaFecha) {
            alert("Por favor, rellena todos los campos correctamente.");
            return;
        }

        gastos[indiceEditar] = {
            descripcion: nuevaDescripcion,
            monto: nuevoMonto,
            fecha: nuevaFecha
        };

        modalEditar.hide();
        mostrarGastos(gastos);
    }

    function filtrarGastos() {
        let filtro = document.getElementById("filtro").value;
        let hoy = new Date();

        let filtrados = gastos.filter(gasto => {
            let fechaGasto = gasto.fecha; // fecha en formato 'YYYY-MM-DD'

            if (filtro === "diario") {
                // Fecha hoy en 'YYYY-MM-DD'
                const hoyStr = hoy.toISOString().slice(0, 10);
                return fechaGasto === hoyStr;
            }
            if (filtro === "mensual") {
                let fechaObj = new Date(fechaGasto);
                return fechaObj.getMonth() === hoy.getMonth() && fechaObj.getFullYear() === hoy.getFullYear();
            }
            if (filtro === "anual") {
                let fechaObj = new Date(fechaGasto);
                return fechaObj.getFullYear() === hoy.getFullYear();
            }
            return true;
        });

        mostrarGastos(filtrados);
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
