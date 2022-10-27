<?php
class Alumno extends Persona
{

  public $arancel = 500;
  public $edad_descuento = 25;

  public function descuentoArancel_Edad($edad)
  {

    if ($edad <= $this->edad_descuento) {
      $descuento = ($this->arancel * 25) / 100;
      $total = $this->arancel - $descuento;
      return $total;
    } else {
      return $this->arancel;
    }
  }

  public function arancelCumpleaños($cumpleaños, $arancel)
  {
    $total = 0;
    if ($cumpleaños == 'Cumple') {
      $total = 0;

      echo 'al ser su Cumpleaños, este mes no paga Arancel :) <br>';
      return $total;
    } else {
      return $arancel;
    }
  }
}
