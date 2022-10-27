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

    echo ('datos obtenidos <hr>');

   
    
    

   $consulta_id="SELECT id_personaje FROM   personajes";
   $comparaID= $conexion->query($consulta_id);
   var_dump($comparaID);

   //if (){
       //echo ('Error al Comparar id del personaje de la base de datos con el personaje a buscar'); 
    //}else{
    
        $ingreso_personaje= $conexion->stmt_init();
    if ($ingreso_personaje->prepare("INSERT INTO personajes (id_personaje,nombre,estado,especie,tipo,genero,origen,localidad,apariencia) VALUES (?,?,?,?,?,?,?,?,?)")){
        
        $ingreso_personaje->bind_param('issssssss',$id_personaje,$nombre,$estado,$especie,$tipo,$genero,$origen,$localidad,$apariencia);
        $ingreso_personaje->execute();

        echo ('Se cargaron los datos del Personaje');
        $ingreso_personaje->close();

    }else{
        echo ('Error al Cargar Personaje');
    }







?>