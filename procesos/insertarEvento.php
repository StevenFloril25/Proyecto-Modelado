<?php
include "../clases/conexion.php";
include "../clases/crud.php";

$crud = new Crud();

$eventosRelacionados = [];
if (isset($_POST['eventos_relacionados_id']) && isset($_POST['nombres_eventos'])) {
    for ($i = 0; $i < count($_POST['eventos_relacionados_id']); $i++) {
        $eventosRelacionados[] = [
            'id_evento' => $_POST['eventos_relacionados_id'][$i],
            'nombre_evento' => $_POST['nombres_eventos'][$i]
        ];
    }
}

$datos = array(
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'fecha' => $_POST['fecha'],
    'eventos_relacionados' => $eventosRelacionados
);

$respuesta = $crud->insertarEvento($datos);

if ($respuesta->getInsertedCount() == 1) {
    header("Location: ../evento.php");
} else {
    print_r($respuesta);
}
?>
