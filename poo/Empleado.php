<?php

class Empleado{
    public $nombre;
    public $apellido;
    public $edad;
    public $salario;
    public static $PLUS=300; 

    public function __construct($nombre,$apellido,$edad,$salario){
      $this->nombre= $nombre;
      $this->apellido= $apellido;
      $this->edad= $edad;
      $this->salario= $salario;
     
    }

    public function setApellido($apellido){
      $this->apellido=  $apellido; 
    }

    public function setNombre($nombre){ 
      $this->nombre= $nombre;
    }

    public function setEdad($edad){
      $this->edad= $edad;
    }

    public function setSalario($salario){
      $this->salario= $salario;
    }

    public function getApellido(){
      return $this->apellido;
    }

    public function getNombre(){
      return $this->nombre;
    }

    public function getEdad(){
      return $this->edad;
    }

    public function getSalario(){
      return $this->salario;
    }

    public function getFullName(){
      return $this->nombre." ".$this->apellido;
    }

    public function setPlus($edad, $salario){
      $condicion='';
      $total=0;
      if ($this->edad && $condicion ){  
          echo("Recibe el plus <br>");
          $total= $this->salario+$this->PLUS;
          echo 'Total: '.$total;
      }else{
           echo ("No recibe plus");
           
      }
    }  
  
}
//$empleado= new Empleado("Lautaro","Olano","20",200,300);
//echo $empleado->getFullName();
?>