<?php include 'header.php'; ?>

<?php 
    require_once "./clases/conexion.php";
    require_once "./clases/crudProveedor.php";
    $crud = new CrudProveedor(); 
    $proveedores = $crud->mostrarProveedores();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">Gestión de Eventos     </a>
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
          <a class="nav-link" href="./proveedor.php"><i class="fa-solid fa-truck"></i> Registrar Proveedor</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <div class="card">
    <div class="card-body">
      <h2>Gestión de Proveedores SANA SANA</h2>
      <a href="./Proveedores/agregarProveedor.php" class="btn btn-primary mb-3">
        <i class="fa-solid fa-truck"></i> Registrar nuevo proveedor
      </a>
      <hr>
      <table class="table table-sm table-hover table-bordered">
        <thead class="table-dark">
          <tr>
            <th>Nombre</th>
            <th>Contacto</th>
            <th>Teléfono</th>
            <th>Servicios Ofrecidos</th>
            <th>Eventos Proveídos</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($proveedores as $proveedor): ?>
          <tr>
            <td><?php echo $proveedor['nombre']; ?></td>
            <td><?php echo $proveedor['contacto']; ?></td>
            <td><?php echo $proveedor['telefono']; ?></td>
            <td><?php echo implode(', ', (array)$proveedor['servicios_ofrecidos']); ?></td>
            <td>
              <ul>
                <?php foreach($proveedor['eventos_proveidos'] as $evento): ?>
                  <li><?php echo $evento['nombre_evento']; ?></li>
                <?php endforeach; ?>
              </ul>
            </td>
            <td class="text-center">
              <form action="./Proveedores/editarProveedor.php" method="post">
                <input type="text" hidden name="id" value="<?php echo $proveedor['_id']; ?>">
                <button class="btn btn-warning btn-sm" type="submit" name="editar">
                  <i class="fa-solid fa-square-pen"></i>
                </button>
              </form>
            </td>
            <td class="text-center">
              <form action="./Proveedores/borrarProveedor.php" method="post">
                <input type="text" hidden name="id" value="<?php echo $proveedor['_id']; ?>">
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
</div>

<?php include 'script.php'; ?>
