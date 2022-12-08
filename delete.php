<?php 
     require_once "vendor/autoload.php";
     require_once "utils.php";

     $collection = MyMongoDB::conexion()->comentario;
     $id = isset($_GET['id']) ? $_GET['id'] : "";
     $resultados = $collection->deleteOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
     echo "Registros eliminados: ".$resultados->getDeletedCount();
?>