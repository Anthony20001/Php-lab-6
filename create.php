<?php
    require_once "vendor/autoload.php";
    require_once "utils.php";

    $coleccion = MyMongoDB::conexion()->comentario;
    $resultado = $coleccion->insertOne([
        "nombre" => $_GET['n'],
        "correo" => $_GET['c'],
        "mensaje" => $_GET['m']
    ]);

    echo "Se inserto el registro con id ".$resultado->getInsertedId();
?>