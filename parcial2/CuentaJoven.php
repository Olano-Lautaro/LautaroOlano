<?php
 class CuentaJoven extends Cuenta{
    public $bonificacion;

    public function __construct( $titular,$cantidad,$bonificacion)
    {
        $this->titular=$titular;
        $this->cantidad=$cantidad;
        $this->bonificacion=$bonificacion;

    }

    public function setBonificacion($bonificacion){
        $this->bonificacion=$bonificacion;
    }

    public function getBonificacion(){
        $info=$this->bonificacion;
        return $info;
    }

    Public static function esTitularValido($edad){
        if ($edad>=18 && $edad<25){
            return 1;
        }
        else{
            return 2;
        }
    }

    public function mostrar(){
        $info=' <b>Datos Cuenta Joven:</b> <br>
        Nombre: '.$this->titular.'<br>
        Dinero en la cuenta: '.$this->cantidad.'<br>
        Bonificación: '.$this->bonificacion.'%';
        return $info;
    }
 }
?>