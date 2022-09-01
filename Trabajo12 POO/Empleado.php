<?php

class Empleado{
    public $nombre="";
    public $apellido="";
    public $edad='';
    public $salario= 200;
    public const PLUS= 300; 

    public function __construct($nombre,$apellido,$edad,$salario,$PLUS){
      $this->nombre= $nombre;
      $this->apellido= $apellido;
      $this->edad= $edad;
      $this->salario= $salario;
      $this->PLUS= $PLUS;
    }

    public function setNombre($nombre){ 
      $this->nombre= $nombre;
    }

    public function getFullName(){
      return $this->nombre." ".$this->apellido;
    }
}
//$empleado= new Empleado("Lautaro","Olano","20",200,300);
//echo $empleado->getFullName();
?>