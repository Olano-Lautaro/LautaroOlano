<?php

    trait Carrito 
    {
        Public $strProducto;
        Public $intCantidad;

        Public function setCarrito( string $producto, int $cantidad){
            $this->strProducto= $producto;
            $this->intCantidad= $cantidad;
        } 
        
    }

?>