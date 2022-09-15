<?php
//include "Empleado.php";

class Comercial extends Empleado{
    public $comision;
    public function __construct(Empleado $comercial, $comision)
    {
       $this->comercial =   $comercial; 
       $this->comision  =   $comision;
    }
    

    public function getPlus(){ 
    return $this->comision;
    }
  
   public function setPlus(){
       $edad= $this->comercial->edad;
        if ($edad>=30 && $comision=200){
           echo("recibe el plus");
       }
   }

   public function getDatos(){
       $resultado= $this->comercial->getFullName();
       return $resultado;
   }

}


?>