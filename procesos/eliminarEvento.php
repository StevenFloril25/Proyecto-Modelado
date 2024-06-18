<?php 

    include "../clases/conexion.php";
    include "../clases/crud.php";

    $crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $crud->eliminarEvento($id);

    if ($respuesta->getDeletedCount() > 0) {
        header("Location: ../evento.php");
    } else {
        print_r($respuesta);
    }


?>