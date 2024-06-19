<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/proyecto-modelado/vendor/autoload.php";

class Conexion {
    public static function conectar() {
        try {
            $servidor = "127.0.0.1";
            $usuario = "gestor";
            $password = "datos";
            $baseDatos = "ProyectoU1";
            $puerto = 27018;

            $cadenaConexion = "mongodb://" . $usuario . ":" . $password . "@" . $servidor . ":" . $puerto . "/?authSource=admin";

            $cliente = new MongoDB\Client($cadenaConexion);
            return $cliente->selectDatabase($baseDatos);
        } catch (MongoDB\Driver\Exception\Exception $e) {
            error_log("MongoDB Connection Error: " . $e->getMessage());
            return "MongoDB Connection Error: " . $e->getMessage();
        } catch (Exception $e) {
            error_log("General Error: " . $e->getMessage());
            return "General Error: " . $e->getMessage();
        }
    }
}

?>
