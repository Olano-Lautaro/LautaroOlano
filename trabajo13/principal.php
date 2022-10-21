<?php
    include_once 'conexion.php';

    $id_personaje=$_POST['idPersonaje'];
    $nombre=$_POST['nombre'];
    $estado=$_POST['estado'];
    $especie=$_POST['especie'];
    $tipo=$_POST['tipo'];
    $genero=$_POST['genero'];
    $origen=$_POST['origen'];
    $localidad=$_POST['localidad'];
    $apariencia=$_POST['apariencia'];

    echo $nombre;



    $consulta= "INSERT INTO personajes (id_personaje,nombre,estado,especie,tipo,genero,origen,localidad,apariencia) 
                VALUES (?,?,?,?,?,?,?,?,?)";

  $resultado=$conexion->prepare($consulta);
  


 }





?>