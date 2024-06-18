<?php 
    include "../clases/conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();
    $id = $_POST['id'];
    $datos = $crud->obtenerDocumento($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap5/bootstrap.min.css">
    <link rel="stylesheet" href="../public/fontawesome-free-6.5.2-web/css/all.css">
    <title>Crud Mongo </title>
    <link rel="stylesheet" href="../public/css/style.css">
    
</head>
<body>


<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 fondoDelete">
                <div class="card-body">
                    <a href="../evento.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-rotate-left"></i> Regresar
                    </a>
                    <h2>Eliminar Evento</h2>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr> 
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Fecha</th>
                                <th>Eventos Relacionados</th>
                                <th class="text-center">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td><?php echo htmlspecialchars($datos['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($datos['descripcion']); ?></td>
                                <td><?php echo htmlspecialchars($datos['fecha']); ?></td>
                                <td>
                                    <ul>
                                        <?php foreach ($datos['eventos_relacionados'] as $evento) { ?>
                                            <li><?php echo htmlspecialchars($evento['nombre_evento']); ?></li>
                                        <?php } ?>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <form action="../procesos/eliminarEvento.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                                        <button class="btn btn-danger btn-sm" type="submit" name="eliminar">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="alert alert-danger" role="alert">
                        ¿Está seguro de eliminar el evento?
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../public/bootstrap5/bootstrap.bundle.min.js"></script>
</body>
</html>
