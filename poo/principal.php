<?php
include 'Empleado.php';
include 'Comercial.php';
include 'Repartidor.php';

$tipo = $_POST["tipo"];
$apellido = $_POST["apellido"];
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$salario = $_POST["salario"];

$datos = 'Nombre Completo: ' . $apellido . ' ' . $nombre . '<br>
    Edad: ' . $edad . '<br>
    Salario: ' . $salario . '<br>'


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Tipo: </h2>
    <h3>
        <?php
        echo $tipo;
        ?>
    </h3>
    <hr>

    <div name="datos">
        Datos del
        <?php
        echo $tipo;
        ?> : <br><br>
        <?php
        if ($tipo == 'Repartidor') {
            $zona = $_POST['zona'];
            $repartidor = new Repartidor($nombre, $apellido, $edad, $salario, $zona);

            echo ($datos .
                'Zona en la que reparte: ' . $zona . '<br>'
            );

            $repartidor->setPlus($edad, $salario, $zona);
            
        } else {
            $comision = $_POST['comision'];
            $comercial = new Comercial($nombre, $apellido, $edad, $salario, $comision);

            echo ($datos .
                'Comisión que cobra: ' . $comision . '<hr>'
            );

            $comercial->setPlus($edad, $salario, $comision);

        }
        ?>

    </div>

</body>

</html>