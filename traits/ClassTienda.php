<?php
    require_once ("Carrito.php");
    require_once ("Producto.php");

    Class ClassTienda{
        use Carrito,Producto;

        Public $fltTotal=0;

        Public function getCarrito(){
            $this->fltTotal= $this->fltPrecio * $this->intCantidad;;
            $infoCarrito= 
                "<h2> Carrito </h2>
                <hr>
                Producto: {$this->strProducto}<br>
                Cantidad: {$this->intCantidad}<br>
                Precio: {$this->fltPrecio}<br>
                Total <b> {$this->fltTotal}</b>  ";

            return $infoCarrito;
        } 
    }

?>