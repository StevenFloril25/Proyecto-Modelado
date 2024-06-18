<?php 
    include "../clases/conexion.php";
    include "../clases/crudCliente.php";

    $crud = new CrudCliente();
    $id = $_POST['id'];
    $datos = $crud->obtenerCliente($id);
    $idMongo = $datos['_id'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.5.2-web/css/all.css">
    <title>Crud Mongo</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
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
<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <a href="../cliente.php" class="btn btn-outline-info mb-3">
                <i class="fa-solid fa-rotate-left"></i> Regresar
            </a>
            <h2>Editar Cliente</h2>
            <form action="../procesos/editarCliente.php" method="post">
                <input type="text" hidden name="id" value="<?php echo $idMongo; ?>">

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required value="<?php echo $datos['nombre']; ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required value="<?php echo $datos['email']; ?>">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" required value="<?php echo $datos['telefono']; ?>">
                </div>
                <div class="mb-3">
                    <label for="eventos_contratados" class="form-label">Eventos Contratados</label>
                    <div id="eventos_contratados">
                        <?php foreach ($datos['eventos_contratados'] as $index => $evento) { ?>
                            <div class="input-group mb-2">
                                <input type="text" class="form-control" name="eventos_contratados_id[]" placeholder="ID del Evento" required value="<?php echo $evento['id_evento']; ?>">
                                <input type="text" class="form-control" name="nombres_eventos_contratados[]" placeholder="Nombre del Evento" required value="<?php echo $evento['nombre_evento']; ?>">
                                <button type="button" class="btn btn-outline-danger" onclick="removeEvent(this)"><i class="fa-solid fa-minus"></i></button>
                            </div>
                        <?php } ?>
                    </div>
                    <button type="button" class="btn btn-outline-warning" onclick="addEvent()"><i class="fa-solid fa-plus"></i> Agregar Evento Contratado</button>
                </div>
                <button type="submit" class="btn btn-warning"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
            </form> 
            <hr>
        </div>
    </div>
</div>

<script>
    function addEvent() {
        const container = document.getElementById('eventos_contratados');
        const newEvent = document.createElement('div');
        newEvent.className = 'input-group mb-2';
        newEvent.innerHTML = `
            <input type="text" class="form-control" name="eventos_contratados_id[]" placeholder="ID del Evento" required>
            <input type="text" class="form-control" name="nombres_eventos_contratados[]" placeholder="Nombre del Evento" required>
            <button type="button" class="btn btn-outline-danger" onclick="removeEvent(this)"><i class="fa-solid fa-minus"></i></button>
        `;
        container.appendChild(newEvent);
    }

    function removeEvent(button) {
        button.parentElement.remove();
    }
</script>
<script src="../public/bootstrap5/bootstrap.bundle.min.js"></script>
</body>
</html>
