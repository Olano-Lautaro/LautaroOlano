<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require "Empleado.php";
        require "Repartidor.php";
        require "Comercial.php";

        $repartidor[]= new Repartidor(
            new Empleado('Lautaro','Olano',20,200),'A'
        );
        $repartidor[]= new Repartidor(
            new Empleado('Marcos','Olano',30,10),'A'
        );
        $repartidor[]= new Repartidor(
            new Empleado('Bianca','Olano',20,400),'A'
        );
        
        foreach ($repartidor as $key => $value) {

            echo $value->getDatos().' | ';
            echo $value->setPlus().'<br>';
    
        }

        echo '<hr>';

        $comercial[]= new Comercial(
            new Empleado('Juana','Viale',30,500), 400
        );
        $comercial[]= new Comercial(
            new Empleado('Anastacia','Roca',50,100), 700
        );
        $comercial[]= new Comercial(
            new Empleado('Lourdes','Sanchez',20,600), 300
        );
        
        foreach ($comercial as $key => $value) {

            echo $value->getDatos().' | ';
            echo $value->setPlus().'<br>';
    
        }
    ?>

    <hr>
    <hr>
    <hr>
    <br>
    <br>

    <form action="index.php" method="post">
        Apellido: <input type="text" name="" id="apellido"><br>
        Nombre: <input type="text" name="" id="nombre"><br>
        Edad: <input type="number" name="" id="edad"><br>
        Salario: <input type="number" name="" id="salario"><br>
        <select name="" id="" >
            <option value="repartidor">Repartidor</option>
            <option value="comerciante">Comerciante</option>
        </select>
    </form>

    <?php
        $apellido=$_POST['apellido'];
            
    ?>

    
</body>
</html>