<?php
    

    class Repartidor extends Empleado{

        public $zona;

       

        public function getPlus(){ 
            return $this->zona;
        }   
   
        public function setPlus($edad,$salario){
            $condicion='A';
            
            if ( ($this->edad)<=25 && ($this->zona)===$condicion){
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
