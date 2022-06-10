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
        echo('Conexión establecida <br><br>');

        $consulta=  "SELECT*   FROM Personas";

        $resultado= mysqli_query($conexion, $consulta);
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
        $fila= mysqli_fetch_row($resultado);
        echo(
            "<table>
                <tr>
                    <td>"$resultado['id'];"<td/>
                    <td>"$resultado['apellido'];"<td/>
                    <td>"$resultado['nombre'];"<td/>
                    <td>"$resultado['dni'];"<td/>
                    <td>"$resultado['email'];"<td/>
                <tr/>
            <table/>"
        );
       }
          
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