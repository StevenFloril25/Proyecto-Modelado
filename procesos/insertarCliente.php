<?php
include "../clases/conexion.php";
include "../clases/crudCliente.php";

$crud = new CrudCliente();

$eventosContratados = [];
if (isset($_POST['eventos_contratados_id']) && isset($_POST['nombres_eventos_contratados'])) {
    for ($i = 0; $i < count($_POST['eventos_contratados_id']); $i++) {
        $eventosContratados[] = [
            'id_evento' => $_POST['eventos_contratados_id'][$i],
            'nombre_evento' => $_POST['nombres_eventos_contratados'][$i]
        ];
    }
}

$datos = array(
    'nombre' => $_POST['nombre'],
    'email' => $_POST['email'],
    'telefono' => $_POST['telefono'],
    'eventos_contratados' => $eventosContratados
);

$respuesta = $crud->insertarCliente($datos);

if ($respuesta->getInsertedCount() == 1) {
    header("Location: ../cliente.php");
} else {
    print_r($respuesta);
}
?>
