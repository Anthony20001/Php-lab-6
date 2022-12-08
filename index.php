<?php
    require_once "vendor/autoload.php";
    require_once "utils.php";

    $coleccion = MyMongoDB::conexion()->comentario;
    $resultado = $coleccion->find();

    foreach($resultado as $r){
        $apellido = isset($r->apellido) ? $r->apellido : "";
        echo $r->_id." - ".$r->nombre." - ".$apellido." - ". $r->correo." - ".$r->mensaje."<br>";
    }
?>