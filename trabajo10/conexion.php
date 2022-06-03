<?php

    //phpinfo();
    $usuario= 'root';
    $pass='';
    $server='LocalHost';
    $db='base_datos';
    $conexion= new mysqli($server,$usuario,$pass,$db);
//Ver Error
    if(mysqli_error($conexion)){
        //ERROR
        echo('Error de conexión con la Base de datos: '.$db);
    }else{
        //NO ERROR
        echo('Conexión establecida <br>');

        $consulta=  "Select *   From Personas";

        $resultado= mysqli_query($conexion, $consulta);

        $fila=  mysqli_fetch_row($resultado);

        var_dump($fila); echo '<br>';

        





    };

    /*
    if($conexion->connect_errno){
        //Error
        echo 'falló';
    }else{
        //No Error
        echo 'Ok';
    };
    */


?>