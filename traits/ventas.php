<?php
    require_once ("ClassTienda.php");
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

    <?php
        $objProducto= New ClassTienda();

        $objProducto->setProducto("Alfajor", 250, 100);
    ?>
    
    <b>Producto: </b> 
    <?php
        echo $objProducto->strProducto;
    ?>

    <br>

    <b>Precio: </b>
    <?php
        echo $objProducto->fltPrecio;
    ?>
    <br>
    <hr>

    <form action="function.php" method="post">
        Cantidad : <input type="number" name="cantidad" id="cant">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <hr>

    <?php

        $cantidad= $_POST['cantidad'];

        function userCant ($cantidad){
            
        }

    ?>




    <!-- /* echo $objProducto->getProducto();
        echo "<hr>";

        $objProducto->setCarrito("Alfajor", 5);
        $objProducto->setStock(5);

        echo $objProducto->getCarrito();
        echo "<hr>";
        echo $objProducto->getProducto();

        

        HACER UNA PANTALLA DONDE MUESTRE LA DESCRIPCION Y PRECIO

        QUE EL USUARIO ELIJA LA CANTIDAD QUE DESEA COMPRAR DE ESE PRODUCTO 

        SI LA CANTIDAD EXEDE EL STOCK NOTIFICAR QUE NO SE PUEDE COMPRAR ESA CANTIDAD */ -->

        

</body>

    
</html>