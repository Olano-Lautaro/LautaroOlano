<?php


class Comercial extends Empleado
{
    public $comision;

    public function __construct($nombre, $apellido, $edad, $salario, $comision)
    {

        $this->comision = $comision;
    }

    public function getPlus()
    {
        return $this->comision;
    }

    public function setPlus($edad, $salario, $comision)
    {
        $condicion = 200;
        $total = 0;
        if ($edad >= 30 && $comision == $condicion) {
            echo ("*Recibe el plus* <br>");
            $total = $salario + (Empleado::PLUS);
            echo '<b>Salario Total:</b> ' . $total;
        } else {
            echo ("No recibe el plus");
        }
    }

    public function getDatos()
    {
        $resultado = $this->comercial->getFullName();
        return $resultado;
    }
}
