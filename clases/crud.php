<?php 

    class Crud extends Conexion{
        public function mostrarEventos(){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->eventos;
                $datos = $coleccion->find();
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }

        }
        public function buscarEventos($searchTerm) {
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->eventos;
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

        public function obtenerDocumento($id){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->eventos;
                $datos = $coleccion->findOne(
                                      array('_id' => new MongoDB\BSON\ObjectId($id))   
                );
                return $datos;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function insertarEvento($datos){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->eventos;
                $respuesta = $coleccion->insertOne($datos);
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function eliminarEvento($id){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->eventos;
                $respuesta = $coleccion->deleteOne(
                    array('_id' => new MongoDB\BSON\ObjectId($id))
                );
                return $respuesta;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function actualizarEvento($id, $datos){
            try {
                $conexion = parent::conectar();
                $coleccion = $conexion->eventos;
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