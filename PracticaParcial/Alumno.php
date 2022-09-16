<?php
    class Alumno extends Persona{
        Public $alumno;
        Public static $arancel=500;

        public function __construct( Persona $alumno){
            $this->alumno=$alumno;
        }
    }
    
?>