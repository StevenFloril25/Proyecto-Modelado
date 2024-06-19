<?php include 'header.php'; ?>

<?php 
    require_once "./clases/conexion.php";
    require_once "./clases/crudProveedor.php";
    $crud = new CrudProveedor(); 
    $proveedores = $crud->mostrarProveedores();
?>



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
