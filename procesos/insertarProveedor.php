<?php
include "../clases/conexion.php";
include "../clases/crudProveedor.php";

$crud = new CrudProveedor();

$eventosProveidos = [];
if (isset($_POST['eventos_proveidos_id']) && isset($_POST['nombres_eventos_proveidos'])) {
    for ($i = 0; $i < count($_POST['eventos_proveidos_id']); $i++) {
        $eventosProveidos[] = [
            'id_evento' => $_POST['eventos_proveidos_id'][$i],
            'nombre_evento' => $_POST['nombres_eventos_proveidos'][$i]
        ];
    }
}

$datos = array(
    'nombre' => $_POST['nombre'],
    'contacto' => $_POST['contacto'],
    'telefono' => $_POST['telefono'],
    'servicios_ofrecidos' => explode(',', $_POST['servicios_ofrecidos']),
    'eventos_proveidos' => $eventosProveidos
);

$respuesta = $crud->insertarProveedor($datos);

if ($respuesta->getInsertedCount() == 1) {
    header("Location: ../proveedor.php");
} else {
    print_r($respuesta);
}
?>