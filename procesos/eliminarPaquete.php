<?php 

include "../clases/conexion.php";
include "../clases/crudPaquete.php";

$crud = new CrudPaquete();
$id = $_POST['id'];

$respuesta = $crud->eliminarPaquete($id);

if ($respuesta->getDeletedCount() > 0) {
    header("Location: ../paquete.php");
} else {
    print_r($respuesta);
}

?>
