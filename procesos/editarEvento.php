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
$id = $_POST['id'];
$datos = array(
    'nombre' => $_POST['nombre'],
    'descripcion' => $_POST['descripcion'],
    'fecha' => $_POST['fecha'],
    'cliente_id' => $_POST['cliente_id'],
    'paquete_id' => $_POST['paquete_id'],
    'proveedor_id' => $_POST['proveedor_id'],
    'eventos_relacionados' => $eventosRelacionados
);

$respuesta = $crud->actualizarEvento($id, $datos);

if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0){
    header("Location: ../evento.php");
} else {
    print_r($respuesta);
}
?>
