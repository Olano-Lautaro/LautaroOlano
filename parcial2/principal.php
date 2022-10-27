<?php
    require ('Cuenta.php');
    require ('Persona.php');
    require ('CuentaJoven.php');

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $edad=$_POST['edad'];
    $dni=$_POST['dni'];
    $monto=$_POST['monto'];


    //Construye Objeto Persona
    $persona= new Persona($nombre,$edad,$dni);
    echo $persona->mostrar();

   


    //toma True o False para calcular si el Titular tiene la edad para tener una Cuenta Joven
    $titularValido=CuentaJoven::esTitularValido($edad);

   

    if ($titularValido===1){
        //var_dump ($titularValido);
        $cuentaJoven=new CuentaJoven($nombre,1000,20);
         $cuentaJoven->ingresar(1);
         $cuentaJoven->retirar(2);
        echo $cuentaJoven->mostrar().'<hr>';
       
    }
    else{
        $cuenta= new Cuenta($nombre, 1000);
        echo $cuenta->mostrar().'<hr>';
    }

   
?>