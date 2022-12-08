<?php 
    class MyMongoDB{
        public static function conexion(){
            require_once "vendor/autoload.php";
            $cadena = "mongodb+srv://root:12345@cluster0.k0lt2d4.mongodb.net/?retryWrites=true&w=majority";
            $cliente = new MongoDB\Client($cadena);
            $conexion = $cliente->selectDatabase("Cluster0");
            
            return $conexion;
        }
    }
?>