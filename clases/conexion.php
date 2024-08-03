<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/proyecto-modelado/vendor/autoload.php";

class Conexion {
    public static function conectar() {
        try {
            $servidor = "clusterproyecto.cluster-cjii2e86mfbo.us-east-2.docdb.amazonaws.com";
            $usuario = "proyecto";
            $password = "datos123";
            $baseDatos = "GrupoH_ProyectoU2";
            $puerto = 27017;
            $caFile = "C:\\Users\\Steven\\Desktop\\global-bundle.pem";

            // Configura la cadena de conexión con los detalles de DocumentDB
            $cadenaConexion = "mongodb://" . $usuario . ":" . $password . "@" . $servidor . ":" . $puerto . "/?tls=true&replicaSet=rs0&readPreference=secondaryPreferred&retryWrites=false&tlsCAFile=" . urlencode($caFile);

            $cliente = new MongoDB\Client($cadenaConexion);
            $db = $cliente->selectDatabase($baseDatos);

            // Comprobar la conexión con una consulta simple
            $collection = $db->selectCollection('test'); // Usa una colección de prueba
            $result = $collection->findOne();

            if ($result !== null) {
                return "Conexión exitosa y la consulta de prueba funcionó.";
            } else {
                return "Conexión exitosa pero la consulta de prueba no devolvió resultados.";
            }
        } catch (MongoDB\Driver\Exception\Exception $e) {
            error_log("MongoDB Connection Error: " . $e->getMessage());
            return "MongoDB Connection Error: " . $e->getMessage();
        } catch (Exception $e) {
            error_log("General Error: " . $e->getMessage());
            return "General Error: " . $e->getMessage();
        }
    }
}

// Uso de la clase para verificar la conexión
echo Conexion::conectar();
?>
