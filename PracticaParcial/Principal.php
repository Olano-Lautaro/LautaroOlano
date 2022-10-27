<?php
//Clase Parde
include "Persona.php";

//Clases Hijas
include "Alumno.php";
include "Docente.php";

//Datos obtenidos por formulario metodo POST.
$tipo = $_POST['tipo'];
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$fecha_nacimiento = $_POST['fecha_nac'];

$fechaH = new DateTime();
//variable para poder cacular la edad.
$fecha_obtenida = new DateTime($fecha_nacimiento);
//Variable para mostrar los datos obtenidos.
$datos = '
    Nombre completo: ' . $apellido . ' ' . $nombre . ' <br>
    DNI: ' . $dni . '<br>
    Fecha de Nacimiento: ' . $fecha_obtenida->format('d-m-Y') . '<br>';



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
    <h2>Tipo:</h2>
    <h3><?php echo $tipo; ?></h3>
    <hr>

    <div name="datos">
        <?php

        //SI ES DOCENTE
        if ($tipo == "Docente") {

            //construye docente
            $docente = new Docente($apellido, $nombre, $dni, $fecha_nacimiento);

            //toma edad del docente
            $edad = $docente->getEdad($fecha_obtenida);

            //muestra datos y edad obtenida
            echo $datos . 'Edad: ' . $edad . '<hr>';

            //descuetnto para el docente en el arancel segun su edad
            $arancel = $docente->descuentoArancel_Edad($edad);
            echo 'Arancel a pagar: ' . $arancel . '<hr>';

            //se obtiene si es su cumpleaños
            
            $cumpleaños = $docente->getCumpleaños($fecha_obtenida);


            $totalFinal = $docente->arancelCumpleaños($cumpleaños, $arancel);

            echo '<b>Total Final</b> <br>' . $totalFinal;
        } else {
            //SI ES ALUMNO
            //Construye el alumno
            $alumno = new Alumno($apellido, $nombre, $dni, $fecha_nacimiento);

            //toma edad del alumno
            $edad = $alumno->getEdad($fecha_obtenida);

            //muestra datos y edad obtenida
            echo $datos . 'Edad: ' . $edad . '<hr>';

            //descuento para el alumno en el arancel segun su edad
            $arancel = $alumno->descuentoArancel_Edad($edad);

            

            //se obtiene si es su cumpleaños
            $cumpleaños = $alumno->getCumpleaños($fecha_obtenida);


            $totalFinal = $alumno->arancelCumpleaños($cumpleaños, $arancel);

            echo '<b>Total Final</b> <br>' . $totalFinal;
        }

        ?>
    </div>
</body>

</html>