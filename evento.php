<?php include 'header.php'; ?>

<?php 
    require_once "./clases/conexion.php";
    require_once "./clases/crud.php";
    $crud = new Crud(); 
    $datos = $crud->mostrarEventos();
?>


<div class="container mt-4">
  <div class="card">
    <div class="card-body">
      <h2>Gestión de Eventos SANA SANA</h2>
      <a href="./Eventos/agregarEvento.php" class="btn btn-primary mb-3">
        <i class="fa-regular fa-calendar-plus"></i> Agregar nuevo evento
      </a>
      <hr>
      <table class="table table-sm table-hover table-bordered">
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
</div>

<?php include 'script.php'; ?>
