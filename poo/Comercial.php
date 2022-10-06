<?php
//include "Empleado.php";

class Comercial extends Empleado{
    public $comision;
    
    

    public function getPlus(){ 
    return $this->comision;
    }
  
   public function setPlus($edad, $salario){
       $condicion=200;
       $total=0;
       if (($this->edad)>=30 && ($this->comision)===$condicion){  
           echo("Recibe el plus <br>");
           $total= $this->salario+Empleado::$PLUS;
           echo 'Total: '.$total;
       }else{
            echo ("No recibe plus");
            
       }
       
   }

   public function getDatos(){
       $resultado= $this->comercial->getFullName();
       return $resultado;
   }

}


?>