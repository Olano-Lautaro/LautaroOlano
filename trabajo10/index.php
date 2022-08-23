<?php
$usuario= 'root';
$pass='';
$server='LocalHost';
$db='base_datos';
$conexion= new mysqli($server,$usuario,$pass,$db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba php</title>
</head>
<body>

<table border="1" >
    <tr>
        <td>ID</td>
        <td>Apellido</td>
        <td>Nombre</td>
        <td>DNI</td>
        <td>Edad</td>
        <td>Email</td>
    </tr>

<?php
if($conexion->connect_errno){
    //Error
    echo('Error de conexión con la Base de datos: '.$db);
}

echo('Conexión establecida <br><br>');

$consulta=  "SELECT*   FROM Personas";

$resultado= $conexion->query($consulta);

while ($fila= mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
?>
    <tr>
        <td><?php echo $fila['id'];?></td>
        <td><?php echo $fila['apellido'];?></td>
        <td><?php echo $fila['nombre'];?></td>
        <td><?php echo $fila['dni'];?></td>
        <td><?php echo $fila['edad'];?></td>
        <td><?php echo $fila['email'];?></td>
    </tr>
    
<?php
}
?>

</table>

</body>
</html>