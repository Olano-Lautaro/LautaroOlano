<?php
    include "Persona.php";
    include "Alumno.php";
    include "Docente.php";
    

    $tipo= $_POST['tipo'];

    echo $tipo.'<br>';

    if ($tipo == "Docente"){
        $docente= New Docente(
            New Persona ($_POST['apellido'],$_POST['nombre'], $_POST['dni'], $_POST['fecha_nac'])
        );

        echo $docente->getNombreCompleto();
    }else{
        $alumno= New Alumno(
            New Persona ($_POST['apellido'], $_POST['nombre'], $_POST['dni'], $_POST['fecha_nac'])
        );
    }
?>