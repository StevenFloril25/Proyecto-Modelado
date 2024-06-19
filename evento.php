<?php include 'header.php'; ?>

<?php 
    require_once "./clases/conexion.php";
    require_once "./clases/crud.php";
    $crud = new Crud(); 
    $datos = $crud->mostrarEventos();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Gestión de Eventos Zorrito Rayado</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./evento.php"><i class="fa-regular fa-calendar-plus"></i> Agregar Evento</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./cliente.php"><i class="fa-solid fa-user-plus"></i> Registrar Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./paquete.php"><i class="fa-solid fa-box-open"></i> Registrar Paquete</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./proveedor.php"><i class="fa-solid fa-list-alt"></i> Registrar Proveedor</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mt-4">
  <div class="card-body">
    <h2>Gestión de Eventos</h2>
    <a href="./Eventos/agregarEvento.php" class="btn btn-primary mb-3">
      <i class="fa-regular fa-calendar-plus"></i> Agregar nuevo evento
    </a>
    <hr>
    <table class="table table-sm table-hover table-bordered custom-table">
      <thead class="table-dark">
        <tr>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Fecha</th>
          <th>Cliente ID</th>
          <th>Paquete ID</th>
          <th>Proveedor ID</th>
          <th>Eventos Relacionados</th>
          <th>Editar</th>
          <th>Borrar</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($datos as $dato): ?>
        <tr>
          <td><?php echo $dato['nombre']; ?></td>
          <td><?php echo $dato['descripcion']; ?></td>
          <td><?php echo $dato['fecha']; ?></td>
          <td><?php echo $dato['cliente_id']; ?></td>
          <td><?php echo $dato['paquete_id']; ?></td>
          <td><?php echo $dato['proveedor_id']; ?></td>
          <td>
            <ul>
              <?php foreach($dato['eventos_relacionados'] as $evento): ?>
                <li><?php echo $evento['nombre_evento']; ?></li>
              <?php endforeach; ?>
            </ul>
          </td>
          <td class="text-center">
            <form action="./Eventos/editarEventos.php" method="post">
              <input type="text" hidden name="id" value="<?php echo $dato['_id']; ?>">
              <button class="btn btn-warning btn-sm" type="submit" name="editar">
                <i class="fa-solid fa-square-pen"></i>
              </button>
            </form>
          </td>
          <td class="text-center">
            <form action="./Eventos/borrarEvento.php" method="post">
              <input type="text" hidden name="id" value="<?php echo $dato['_id']; ?>">
              <button class="btn btn-danger btn-sm" type="submit" name="eliminar">
                <i class="fa-solid fa-eraser"></i>
              </button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
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
