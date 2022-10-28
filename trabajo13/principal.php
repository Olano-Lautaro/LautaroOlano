<?php
include_once 'conexion.php';

//Obtengo los datos del formulario y los guardo en variables.

$id_personaje = $_POST['idPersonaje'];
$nombre = $_POST['nombre'];
$estado = $_POST['estado'];
$especie = $_POST['especie'];
$tipo = $_POST['tipo'];
$genero = $_POST['genero'];
$origen = $_POST['origen'];
$localidad = $_POST['localidad'];
$apariencia = $_POST['apariencia'];


echo ('datos obtenidos <hr>');




//Consulta para obtener si ya se ha cargaado ese personaje (devuelve la fila en la cual el id que se busca sea igual a dicho id en la BD)
$consulta_id = "SELECT * FROM   personajes  WHERE id_personaje=$id_personaje";

//realizo la consulta en la base de datos
$resultado = $conexion->query($consulta_id);



$filasAfectadas= $resultado->num_rows;
//si hay 0 filas afectadas quiere decir que no hay ningun personaje con el id que se busca, y procede a cargarlo en la bd.

if ($filasAfectadas==0){
    

    // procede a guardar todos los datos del personaje en la misma.
    $ingreso_personaje = $conexion->stmt_init();

    if ($ingreso_personaje->prepare("INSERT INTO personajes (id_personaje,nombre,estado,especie,tipo,genero,origen,localidad,apariencia) VALUES (?,?,?,?,?,?,?,?,?)")) {

        $ingreso_personaje->bind_param('issssssss', $id_personaje, $nombre, $estado, $especie, $tipo, $genero, $origen, $localidad, $apariencia);
        $ingreso_personaje->execute();

        echo ('Se cargaron los datos del Personaje');
        $ingreso_personaje->close();
    } else {
      echo ('Error al Cargar Personaje');
    }
}else{
    // hay 1 fila afectada,por ende, existe el personaje que se busca.
    echo ('Personaje ya existente');
}



