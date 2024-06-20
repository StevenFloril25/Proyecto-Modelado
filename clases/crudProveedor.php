<?php 

class CrudProveedor extends Conexion {

    public function mostrarProveedores() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->proveedores;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function obtenerProveedor($id) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->proveedores;
            $datos = $coleccion->findOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)]
            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function buscarProveedores($searchTerm) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->proveedores;
            $datos = $coleccion->find([
                '$or' => [
                    ['nombre' => new MongoDB\BSON\Regex($searchTerm, 'i')],
                    ['contacto' => new MongoDB\BSON\Regex($searchTerm, 'i')]
                ]
            ]);
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function insertarProveedor($datos) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->proveedores;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function eliminarProveedor($id) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->proveedores;
            $respuesta = $coleccion->deleteOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)]
            );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizarProveedor($id, $datos) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->proveedores;
            $respuesta = $coleccion->updateOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)], 
                ['$set' => $datos]
            );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
?>
