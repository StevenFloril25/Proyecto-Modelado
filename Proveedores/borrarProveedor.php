<?php 
    include "../clases/conexion.php";
    include "../clases/crudProveedor.php";

    $crud = new CrudProveedor();
    $id = $_POST['id'];
    $datos = $crud->obtenerProveedor($id);
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

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card mt-4 fondoDelete">
                <div class="card-body">
                    <a href="../proveedor.php" class="btn btn-outline-info">
                        <i class="fa-solid fa-rotate-left"></i> Regresar
                    </a>
                    <h2>Eliminar Proveedor</h2>
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr> 
                                <th>Nombre</th>
                                <th>Contacto</th>
                                <th>Teléfono</th>
                                <th>Servicios Ofrecidos</th>
                                <th>Eventos Proveídos</th>
                                <th class="text-center">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr> 
                                <td><?php echo htmlspecialchars($datos['nombre']); ?></td>
                                <td><?php echo htmlspecialchars($datos['contacto']); ?></td>
                                <td><?php echo htmlspecialchars($datos['telefono']); ?></td>
                                <td><?php echo htmlspecialchars(implode(', ', (array)$datos['servicios_ofrecidos'])); ?></td>
                                <td>
                                    <ul>
                                        <?php foreach ($datos['eventos_proveidos'] as $evento) { ?>
                                            <li><?php echo htmlspecialchars($evento['nombre_evento']); ?></li>
                                        <?php } ?>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <form action="../procesos/eliminarProveedor.php" method="post">
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
                        ¿Está seguro de eliminar el proveedor?
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../public/bootstrap5/bootstrap.bundle.min.js"></script>
</body>
</html>
