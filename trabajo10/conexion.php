<?php

    //phpinfo();
    $usuario= 'root';
    $pass='';
    $server='LocalHost';
    $db='base_datos';
    $conexion= new mysqli($server,$usuario,$pass,$db);
//Ver Error
    
   
    /*echo(
         "<table>
            <tr>
                <td>"$fila['id'];"<td/>
                <td>"$resultado['apellido'];"<td/>
                <td>"$resultado['nombre'];"<td/>
                <td>"$resultado['dni'];"<td/>
                <td>"$resultado['email'];"<td/>
                <tr/>
        <table/>"
    );*/
    
    
    if($conexion->connect_errno){
        //Error
        echo('Error de conexión con la Base de datos: '.$db);
    }

        echo('Conexión establecida <br><br>');

        $consulta=  "SELECT*   FROM Personas";

        $resultado= $conexion->query($consulta);
        $num_filas= mysqli_num_rows($resultado);
        echo(
            "<table>
                <tr>
                    <td>ID<td/>
                    <td>Apellido<td/>
                    <td>Nombre<td/>
                    <td>DNI<td/>
                    <td>Email<td/>
                <tr/>
            <table/>"
        );
        //Recorre tabla.
       for ($i=0; $i < $num_filas ; $i++) { 
            $fila= $conexion->$resultado->fetch_array($resultado=MYSQLI_ASSOC);
            printf($fila[$i]);
        };
?>