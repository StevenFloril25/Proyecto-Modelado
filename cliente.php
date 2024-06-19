<?php include 'header.php'; ?>

<?php 
    require_once "./clases/conexion.php";
    require_once "./clases/crudCliente.php";
    $crud = new CrudCliente(); 
    $clientes = $crud->mostrarClientes();
?>


<div class="container mt-4">
  <div class="card">
    <div class="card-body">
      <h2>Gestión de Clientes SANA SANA</h2>
      <a href="./Clientes/agregarCliente.php" class="btn btn-primary mb-3">
        <i class="fa-solid fa-user-plus"></i> Registrar nuevo cliente
      </a>
      <hr>
      <table class="table table-sm table-hover table-bordered">
        <thead class="table-dark">
          <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Eventos Contratados</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>
        </thead>
        <tbody>
        <?php if(isset($clientes) && !empty($clientes)): ?>
          <?php foreach($clientes as $cliente): ?>
            <tr>
              <td><?php echo $cliente['nombre']; ?></td>
              <td><?php echo $cliente['email']; ?></td>
              <td><?php echo $cliente['telefono']; ?></td>
              <td>
                <ul>
                  <?php foreach($cliente['eventos_contratados'] as $evento): ?>
                    <li><?php echo $evento['nombre_evento']; ?></li>
                  <?php endforeach; ?>
                </ul>
              </td>
              <td class="text-center">
                <form action="./Clientes/editarCliente.php" method="post">
                  <input type="text" hidden name="id" value="<?php echo $cliente['_id']; ?>">
                  <button class="btn btn-warning btn-sm" type="submit" name="editar">
                    <i class="fa-solid fa-square-pen"></i>
                  </button>
                </form>
              </td>
              <td class="text-center">
                <form action="./Clientes/borrarCliente.php" method="post">
                  <input type="text" hidden name="id" value="<?php echo $cliente['_id']; ?>">
                  <button class="btn btn-danger btn-sm" type="submit" name="eliminar">
                    <i class="fa-solid fa-eraser"></i>
                  </button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else: ?>
          <tr>
            <td colspan="6" class="text-center">No hay clientes registrados</td>
          </tr>
        <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include 'script.php'; ?>
