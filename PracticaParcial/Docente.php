<?php

use LDAP\Result;

    Class Docente extends Persona{
      
      public $arancel=1000;
      public $edad_descuento=40;
      
       
      public function descuentoArancel_Edad($edad){
        
        if ($edad>=$this->edad_descuento){
          $descuento= ($this->arancel*10)/100;
          $total=$this->arancel-$descuento;
          
          
          echo 'obtiene un 10% de decuento por su edad <br>';
          return $total;
        }
        else{
          return $this->arancel;
        }

      } 

      public function arancelCumpleaños($cumpleaños,$arancel){
        $total=0;
        if ($cumpleaños=='Cumple'){
          $total= $arancel*2;
          
          echo 'al ser su Cumpleaños su arancel a pagar se multiplica x2 :( <br>';
          return $total;
        }else{
          return $arancel;
        }
        
      }

    };
?>