<?php 
include "../clases/conexion.php";
include "../clases/crudProveedor.php";

$crud = new CrudProveedor();
$id = $_POST['id'];

$respuesta = $crud->eliminarProveedor($id);

if ($respuesta->getDeletedCount() > 0) {
    header("Location: ../proveedor.php");
} else {
    print_r($respuesta);
}
?>
