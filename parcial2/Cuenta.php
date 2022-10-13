<?php
    class Cuenta{
        public $titular;
        public $catidad;

        public function __construct($titular, float $cantidad)
        {
            $this->titular=$titular;
            $this->cantidad=$cantidad;
        }

        public function setTitular($titular){
            $this->titular=$titular;
        }

        public function setCantidad($cantidad){
            $this->cantidad=$cantidad;
        }

        public function getTitular(){
            $info=$this->titular;
            return $info;
        }

        public function getCantidad(){
            $info=$this->cantidad;
            return $info;
        }

        public function mostrar(){
            $info='<b>Datos de la cuenta</b> <br>
            Titular: '.$this->titular.'<br> Dinero en la cuenta: '.$this->cantidad.'<br>';
            return $info;
        }

        public  function ingresar($cantidad){
            if ($cantidad<0){
                echo 'Ingreso un monto con valores negativos';
            }else{
                $cuenta=$this->cantidad+$cantidad;
                $this->cantidad=$cuenta;
                return $this->cantidad;
            }
        }

        public function retirar($cantidad){
            $cuenta=$this->cantidad-$cantidad;
            $this->cantidad=$cuenta;
            if ($this->cantidad)
            return $this->cantidad;
        }
    }
?>