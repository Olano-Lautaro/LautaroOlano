<?php
    Class Persona{
        Public $strApellido;
        Public $strNombre;
        Public $intDNI;
        Public $fech_nac;

        Public function __construct( string $strApellido, string $strNombre, int $intDNI, $fech_nac ){
            $this->apellido=$strApellido;
            $this->nombre=$strNombre;
            $this->DNI=$intDNI;
            $this->$fech_nac;
        }

        public function setNombre($strNombre){
            $this->nombre=$strNombre;
        }


        Public function getNombreCompleto(){
            $info= $this->apellido." ".$this->nombre;
            return $info;
        }
    }
?>