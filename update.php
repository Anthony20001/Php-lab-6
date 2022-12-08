<?php 
     require_once "vendor/autoload.php";
     require_once "utils.php";

     $collection = MyMongoDB::conexion()->comentario;
     
     /*$id = $_GET['id'];
     $resultados = $collection->updateOne(["_id" => new MongoDB\BSON\ObjectId($id)], 
     [
        '$set' => [
            "correo" => $_GET['c'],
            "mensaje" => $_GET['m']
        ]
     ]); 

     echo "Cantidad de registros actualizados: ".$resultados->getModifiedCount();*/

     $id = isset($_GET['id']) ? $_GET['id'] : "";
     $resultados = $collection->updateOne(["correo" => "ledezma@gmail.com"], 
     [
        '$set' => [
            "correo" => $_GET['c'], 
        ]
     ]); 

     echo "Cantidad de registros actualizados: ".$resultados->getModifiedCount();
     

?>