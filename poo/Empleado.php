<?php

class Empleado
{
  public $nombre;
  public $apellido;
  public $edad;
  public $salario;
  const  PLUS = 300;

  public function __construct($nombre, $apellido, $edad, $salario)
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->edad = $edad;
    $this->salario = $salario;
  }

  public function setApellido($apellido)
  {
    $this->apellido =  $apellido;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function setEdad($edad)
  {
    $this->edad = $edad;
  }

  public function setSalario($salario)
  {
    $this->salario = $salario;
  }

  public function getApellido()
  {
    return $this->apellido;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function getEdad()
  {
    return $this->edad;
  }

  public function getSalario()
  {
    return $this->salario;
  }

  public function getFullName()
  {
    return $this->nombre . " " . $this->apellido;
  }
}
