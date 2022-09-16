<?php
    Class Docente extends Persona{
        Public $docente;
        Public static $arancel=1000;

        Public function __construct(Persona $docente){
            $this->docente=$docente;
        } 
    }
?>