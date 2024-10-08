<?php
include "../clases/conexion.php";
include "../clases/crudPaquete.php";

$crud = new CrudPaquete();

$eventosAsociados = [];
if (isset($_POST['eventos_asociados_id']) && isset($_POST['nombres_eventos_asociados'])) {
    for ($i = 0; $i < count($_POST['eventos_asociados_id']); $i++) {
        $eventosAsociados[] = [
            'id_evento' => $_POST['eventos_asociados_id'][$i],
            'nombre_evento' => $_POST['nombres_eventos_asociados'][$i]
        ];
    }
}
$id = $_POST['id'];
$datos = array(
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'precio' => $_POST['precio'],
    'eventos_asociados' => $eventosAsociados
);

$respuesta = $crud->actualizarPaquete($id, $datos);

if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0){
    header("Location: ../paquete.php");
} else {
    print_r($respuesta);
}
?>
