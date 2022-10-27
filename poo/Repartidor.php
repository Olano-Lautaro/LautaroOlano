<?php
    

    class Repartidor extends Empleado{

        public $zona;

        public function __construct($nombre,$apellido,$edad,$salario,$zona)
        {
            $this->zona=$zona;
        }

       

        public function getPlus(){ 
            return $this->zona;
        }   
   
        public function setPlus($edad,$salario,$zona){
            $condicion='A';
            
            if ( $edad<=25 && $zona==$condicion){
                echo("*Recibe el plus* <br>");
                $total= $salario+(Empleado::PLUS);
                echo '<b>Salario Total:</b> '.$total;
            }else{
                echo ("No recibe el plus");
            }   
        }

        public function getDatos(){
            $resultado= $this->repartidor->getFullName();
            return $resultado;
        }
    }

    
    
    //$repartidor= new Repartidor();
?>
