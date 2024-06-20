<?php 

class CrudCliente extends Conexion {

    public function mostrarClientes() {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->clientes;
            $datos = $coleccion->find();
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function obtenerCliente($id) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->clientes;
            $datos = $coleccion->findOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)]
            );
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function buscarClientes($searchTerm) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->clientes;
            $datos = $coleccion->find([
                '$or' => [
                    ['nombre' => new MongoDB\BSON\Regex($searchTerm, 'i')],
                    ['email' => new MongoDB\BSON\Regex($searchTerm, 'i')],
                    ['telefono' => new MongoDB\BSON\Regex($searchTerm, 'i')]
                ]
            ]);
            return $datos;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function insertarCliente($datos) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->clientes;
            $respuesta = $coleccion->insertOne($datos);
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function eliminarCliente($id) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->clientes;
            $respuesta = $coleccion->deleteOne(
                ['_id' => new MongoDB\BSON\ObjectId($id)]
            );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function actualizarCliente($id, $datos) {
        try {
            $conexion = parent::conectar();
            $coleccion = $conexion->clientes;
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
