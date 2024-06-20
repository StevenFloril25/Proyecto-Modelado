<?php include 'header.php'; ?>

<?php 
    require_once "./clases/conexion.php";
    require_once "./clases/crudPaquete.php";
    $crud = new CrudPaquete(); 
    $paquetes = $crud->mostrarPaquetes();
?>
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
            color: #f39c10;
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
            padding: 0 20px;
            flex: 1;
        }

        .form-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin-bottom: 10px;
        }

        .form-row > div {
            flex: 1;
            min-width: 200px;
            padding: 5px;
        }

        .form-container {
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
            animation: fadeIn 1s ease-in-out;
        }

        .form-container h2 {
            margin-bottom: 20px;
        }

        .table thead th {
            background-color: #1abc9c;
            color: #ffffff;
        }

        .table-hover tbody tr:hover {
            background-color: #f9f9f9;
        }

        .custom-table {
            border: 2px solid #1abc9c;
        }

        .custom-table th,
        .custom-table td {
            border: 1px solid #1abc9c;
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

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
  <a class="navbar-brand navbar-brand-custom" href="./index.php">Gestión de Eventos <i class="fa-solid fa-handshake"></i></i> </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="./evento.php"><i class="fa-regular fa-calendar-plus"></i> Evento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./cliente.php"><i class="fa-solid fa-user-plus"></i> Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./paquete.php"><i class="fa-solid fa-box-open"></i> Paquete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./proveedor.php"><i class="fa-solid fa-list-alt"></i> Proveedor</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-4">
  <div class="card-body form-container">
    <h2>Gestión de Paquetes</h2>
    <a href="./Paquetes/agregarPaquete.php" class="btn btn-primary mb-3">
      <i class="fa-solid fa-box-open"></i> Registrar nuevo paquete
    </a>
    <hr>
    <table class="table table-sm table-hover table-bordered custom-table">
      <thead class="table-dark">
        <tr>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Eventos Asociados</th>
          <th>Editar</th>
          <th>Borrar</th>
        </tr>
      </thead>
      <tbody>
      <?php if(isset($paquetes) && !empty($paquetes)): ?>
        <?php foreach($paquetes as $paquete): ?>
          <tr>
            <td><?php echo $paquete['nombre']; ?></td>
            <td><?php echo $paquete['descripcion']; ?></td>
            <td><?php echo $paquete['precio']; ?></td>
            <td>
              <ul>
                <?php foreach($paquete['eventos_asociados'] as $evento): ?>
                  <li><?php echo $evento['nombre_evento']; ?></li>
                <?php endforeach; ?>
              </ul>
            </td>
            <td class="text-center">
              <form action="./Paquetes/editarPaquete.php" method="post">
                <input type="text" hidden name="id" value="<?php echo $paquete['_id']; ?>">
                <button class="btn btn-warning btn-sm" type="submit" name="editar">
                  <i class="fa-solid fa-square-pen"></i>
                </button>
              </form>
            </td>
            <td class="text-center">
              <form action="./Paquetes/borrarPaquete.php" method="post">
                <input type="text" hidden name="id" value="<?php echo $paquete['_id']; ?>">
                <button class="btn btn-danger btn-sm" type="submit" name="eliminar">
                  <i class="fa-solid fa-eraser"></i>
                </button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      <?php else: ?>
        <tr>
          <td colspan="6" class="text-center">No hay paquetes registrados</td>
        </tr>
      <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>

<footer class="footer mt-auto">
  <div class="container">
    <div class="d-flex justify-content-center mt-1">
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img src="img/twitter.png" alt="Twitter" class="social-icon"></a>
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img src="img/facebook.png" alt="Facebook" class="social-icon"></a>
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social mr-2" href="#"><img src="img/linkedin.png" alt="LinkedIn" class="social-icon"></a>
      <a data-mdb-ripple-init class="btn btn-outline-light btn-social" href="#"><img src="img/instagram.png" alt="Instagram" class="social-icon"></a>
    </div>
    <a class="mt-4">© 2024 Gestión de Eventos. Todos los derechos reservados.</a>
  </div>
</footer>

<?php include 'script.php'; ?>
</body>
</html>
