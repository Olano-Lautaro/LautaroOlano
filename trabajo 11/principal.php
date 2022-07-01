<?php 
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo 11</title>
</head>
<body>
    <div>
        <input type="text" name="dni" id="dni"> <br><br>
        <input type="button" value="Buscar">
    </div>
    <div id="cartel" class="cartel" ></div>
    <style>
        .cartel{
            width: 200px;
            height: 200px;
            line-height: 12px;
        }    
    </style>
    
    <hr>
    <br>

    <table>
        <tr>
            <td>ID</td>
            <td>Apellido</td>
            <td>Nombre</td>
            <td>DNI</td>
            <td>Facturas</td>
        </tr>

    <?php
    echo('Conexión establecida <br><br>');

    $consulta=  "SELECT*   FROM Socios";
    
    $resultado= $conexion->query($consulta);
    
    while ($fila= mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
    ?>
        <tr>

            <td><?php echo $fila['id'];?></td>
            <td><?php echo $fila['apellido'];?></td>
            <td><?php echo $fila['nombre'];?></td>
            <td><?php echo $fila['dni'];?></td>
            <td><?php echo $fila['facturas'];?></td>
            
        </tr>
        
    <?php
    }
    ?>
    
    </table>
    
    
</body>
</html>