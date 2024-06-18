<?php 
    include "../clases/conexion.php";
    include "../clases/crudPaquete.php";

    $crud = new CrudPaquete();
    $id = $_POST['id'];
    $datos = $crud->obtenerPaquete($id);
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

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 fondoDelete">
                <div class="card-body">
                    <a href="../paquete.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-rotate-left"></i> Regresar
                    </a>
                    <h2>Eliminar Paquete</h2>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr> 
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Eventos Asociados</th>
                                <th class="text-center">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td><?php echo htmlspecialchars($datos['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($datos['descripcion']); ?></td>
                                <td><?php echo htmlspecialchars($datos['precio']); ?></td>
                                <td>
                                    <ul>
                                        <?php foreach ($datos['eventos_asociados'] as $evento) { ?>
                                            <li><?php echo htmlspecialchars($evento['nombre_evento']); ?></li>
                                        <?php } ?>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <form action="../procesos/eliminarPaquete.php" method="post">
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
                        ¿Está seguro de eliminar el paquete?
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../public/bootstrap5/bootstrap.bundle.min.js"></script>
</body>
</html>
