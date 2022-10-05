<?php
    $usuario='root';
    $pass=' ';
    $server='localhost';
    $db='rickandmorty';

    $conexion= new mysqli($server,$usuario,$pass,$db);

    if  ($conexion->    connect_errno){
        //ERROR
        echo ('Error de conexión con la Base de datos');
?>