<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "/proyectomodelado/vendor/autoload.php";
    
    class Conexion{
        public static function conectar(){
           try {
            $servidor = "127.0.0.1";
            $usuario = "gestor";
            $password = "datos";
            $baseDatos = "ProyectoU1";
            $puerto = 27017;

            $cadenaConexion = "mongodb://" .
                                $usuario . ":" .
                                $password . "@" .
                                $servidor . ":" .
                                $puerto . "/" .
                                $baseDatos;

            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($baseDatos);
           } catch (\Throwable $th) {
                return $th->getMessage();

           }
        }
    }
?>
