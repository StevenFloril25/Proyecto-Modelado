<?php 

class CrudPaquete extends Conexion {

    public function mostrarPaquetes() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->paquetes;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function obtenerPaquete($id) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->paquetes;
            $datos = $coleccion->findOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)]
            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function buscarPaquetes($searchTerm) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->paquetes;
            $datos = $coleccion->find([
                '$or' => [
                    ['nombre' => new MongoDB\BSON\Regex($searchTerm, 'i')],
                    ['descripcion' => new MongoDB\BSON\Regex($searchTerm, 'i')]
                ]
            ]);
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function insertarPaquete($datos) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->paquetes;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function eliminarPaquete($id) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->paquetes;
            $respuesta = $coleccion->deleteOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)]
            );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizarPaquete($id, $datos) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->paquetes;
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
