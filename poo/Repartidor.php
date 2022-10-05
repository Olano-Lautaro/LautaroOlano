<?php
    

    class Repartidor extends Empleado{

        public $repartidor;
        public $zona;

        public function __construct(Empleado $repartidor, $zona){
            $this->repartidor   =   $repartidor;
            $this->zona =   $zona;
        }

        public function getPlus(){ 
            return $this->zona;
        }   
   
        public function setPlus(){
            $edad= $this->repartidor->edad;
            if ( $edad<=25 && $zona="A"){
                echo("recibe el plus");
            }   
        }

        public function getDatos(){
            $resultado= $this->repartidor->getFullName();
            return $resultado;
        }
    }

    
    
    //$repartidor= new Repartidor();
?>
