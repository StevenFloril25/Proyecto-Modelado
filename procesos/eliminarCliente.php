<?php 

include "../clases/conexion.php";
include "../clases/crudCliente.php";

$crud = new CrudCliente();
$id = $_POST['id'];

$respuesta = $crud->eliminarCliente($id);

if ($respuesta->getDeletedCount() > 0) {
    header("Location: ../cliente.php");
} else {
    print_r($respuesta);
}

?>
