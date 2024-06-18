<?php include 'header.php'; ?>

<?php 
    require_once "./clases/conexion.php";
    require_once "./clases/crudPaquete.php";
    $crud = new CrudPaquete(); 
    $paquetes = $crud->mostrarPaquetes();
?>

<script src="./index.php"></script>


<div class="container mt-4">
  <div class="card">
    <div class="card-body">
      <h2>Gestión de Paquetes SANA SANA</h2>
      <a href="./Paquetes/agregarPaquete.php" class="btn btn-primary mb-3">
        <i class="fa-solid fa-box-open"></i> Registrar nuevo paquete
      </a>
      <hr>
      <table class="table table-sm table-hover table-bordered">
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
</div>

<?php include 'script.php'; ?>
