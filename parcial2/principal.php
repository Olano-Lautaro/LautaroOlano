<?php
    require ('Cuenta.php');
    require ('Persona.php');
    require ('CuentaJoven.php');

    //Construye Objeto Persona
    $persona= new Persona('Lautaro','21',43828075);
    echo $persona->mostrar();

    $nombre= $persona->nombre;
    $edad= $persona->edad;


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