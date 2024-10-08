<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.5.2-web/css/all.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Crud Mongo</title>
    <style>
        body {
            background-color: #ffffff;
            color: #2c3e50;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .navbar-custom {
            background-color: #1abc9c;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
        }

        .navbar-brand-custom {
            color: #ffffff;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .navbar-brand-custom:hover {
            color: #ecf0f1;
        }

        .navbar-nav .nav-link {
            color: #ecf0f1;
            margin-right: 15px;
        }

        .navbar-nav .nav-link:hover {
            color: #f39c10;
        }

        .btn-outline-info {
            color: #1abc9c;
            border-color: #1abc9c;
        }

        .btn-outline-info:hover {
            background-color: #1abc9c;
            color: #ffffff;
            border-color: #1abc9c;
        }

        .btn-primary {
            background-color: #1abc9c;
            border-color: #1abc9c;
        }

        .btn-primary:hover {
            background-color: #16a085;
            border-color: #16a085;
        }

        .btn-outline-primary {
            color: #1abc9c;
            border-color: #1abc9c;
        }

        .btn-outline-primary:hover {
            background-color: #1abc9c;
            color: #ffffff;
            border-color: #1abc9c;
        }

        .btn-outline-danger {
            color: #e74c3c;
            border-color: #e74c3c;
        }

        .btn-outline-danger:hover {
            background-color: #e74c3c;
            color: #ffffff;
            border-color: #e74c3c;
        }

        .form-container {
            max-width: 100%;
            padding: 20px;
            flex: 1;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #1abc9c;
            color: white;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .footer {
            background-color: #1abc9c;
            color: #ffffff;
            padding: 20px 0;
            text-align: center;
        }

        .footer a {
            color: #ecf0f1;
            text-decoration: none;
        }

        .footer a:hover {
            color: #f39c10;
        }

        .footer .social-icons a {
            margin: 0 10px;
            font-size: 1.5rem;
            color: #ffffff;
        }

        .footer .social-icons a:hover {
            color: #f39c10;
        }

        .btn-social {
            width: 25px;
            height: 25px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #fff;
            transition: 0.3s;
            padding: 0;
            background-color: transparent;
            border: 1px solid #ffffff;
        }

        .btn-social img.social-icon {
            width: 16px;
            height: 16px;
            filter: invert(1);
        }

        .btn-social:hover {
            background: #f39c10;
            color: #fff;
            border-color: white;
        }

        .error-message {
            color: red;
            font-size: 0.875em;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand navbar-brand-custom" href="../index.php">Gestión de Eventos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="../evento.php"><i class="fa-regular fa-calendar-plus"></i> Evento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../cliente.php"><i class="fa-solid fa-user-plus"></i> Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../paquete.php"><i class="fa-solid fa-box-open"></i> Paquete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../proveedor.php"><i class="fa-solid fa-list-alt"></i> Proveedor</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-4 form-container">
  <a href="../evento.php" class="btn btn-outline-info mb-3">
    <i class="fa-solid fa-rotate-left"></i> Regresar
  </a>
  <h2>Agregar nuevo Evento</h2>
  <form action="../procesos/insertarEvento.php" method="post" class="form-horizontal" onsubmit="return validateForm()">
    <table>
      <tr>
        <th><label for="nombre">Nombre</label></th>
        <td>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
          <div class="error-message" id="nombreError"></div>
        </td>
      </tr>
      <tr>
        <th><label for="descripcion">Descripción</label></th>
        <td><textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea></td>
      </tr>
      <tr>
        <th><label for="fecha">Fecha</label></th>
        <td><input type="date" class="form-control" id="fecha" name="fecha" required></td>
      </tr>
      <tr>
        <th><label for="cliente_id">Cliente ID</label></th>
        <td><input type="text" class="form-control" id="cliente_id" name="cliente_id" required></td>
      </tr>
      <tr>
        <th><label for="paquete_id">Paquete ID</label></th>
        <td><input type="text" class="form-control" id="paquete_id" name="paquete_id" required></td>
      </tr>
      <tr>
        <th><label for="proveedor_id">Proveedor ID</label></th>
        <td><input type="text" class="form-control" id="proveedor_id" name="proveedor_id" required></td>
      </tr>
      <tr>
        <th><label for="eventos_relacionados">Eventos Relacionados</label></th>
        <td id="eventos_relacionados">
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="eventos_relacionados_id[]" placeholder="ID del Evento">
            <input type="text" class="form-control" name="nombres_eventos[]" placeholder="Nombre del Evento">
            <button type="button" class="btn btn-outline-danger" onclick="removeEvent(this)"><i class="fa-solid fa-minus"></i></button>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="button" class="btn btn-outline-primary" onclick="addEvent()"><i class="fa-solid fa-plus"></i> Agregar Evento Relacionado</button>
        </td>
      </tr>
      <tr>
        <td colspan="2" class="text-center">
          <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
        </td>
      </tr>
    </table>
  </form>
</div>

<footer class="footer mt-auto">
  <div class="container">
    <div class="d-flex justify-content-center mt-1">
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img src="../img/twitter.png" alt="Twitter" class="social-icon"></a>
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img src="../img/facebook.png" alt="Facebook" class="social-icon"></a>
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img src="../img/linkedin.png" alt="LinkedIn" class="social-icon"></a>
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social" href="#"><img src="../img/instagram.png" alt="Instagram" class="social-icon"></a>
    </div>
    <a class="mt-4">© 2024 Gestión de Eventos. Todos los derechos reservados.</a>
  </div>
</footer>

<script>
    function addEvent() {
        const container = document.getElementById('eventos_relacionados');
        const newEvent = document.createElement('div');
        newEvent.className = 'input-group mb-2';
        newEvent.innerHTML = `
            <input type="text" class="form-control" name="eventos_relacionados_id[]" placeholder="ID del Evento">
            <input type="text" class="form-control" name="nombres_eventos[]" placeholder="Nombre del Evento">
            <button type="button" class="btn btn-outline-danger" onclick="removeEvent(this)"><i class="fa-solid fa-minus"></i></button>
        `;
        container.appendChild(newEvent);
    }

    function removeEvent(button) {
        button.parentElement.remove();
    }

    function validateForm() {
        const nameInput = document.getElementById('nombre');
        const nameValue = nameInput.value.trim();
        const nameError = document.getElementById('nombreError');

        const namePattern = /^[a-zA-Z\s]+$/;
        if (!namePattern.test(nameValue)) {
            nameError.textContent = 'El nombre solo debe contener letras y espacios.';
            return false;
        } else {
            nameError.textContent = '';
        }

        return true;
    }
</script>
<script src="../public/bootstrap5/bootstrap.bundle.min.js"></script>
</body>
</html>
