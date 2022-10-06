<?php
    require_once ("Edad.php");

    Class Persona{
        use Edad;
        public $strApellido;
        public $strNombre;
        public $intDNI;
        public $fech_nac;
        

        public function __construct( string $strApellido, string $strNombre, int $intDNI, $fech_nac ){
            $this->apellido=$strApellido;
            $this->nombre=$strNombre;
            $this->DNI=$intDNI;
            $this->fecha_nacimiento=$fech_nac;
        }


        public function setNombre($strNombre){
            $this->nombre=$strNombre;
        }

        public function setApellido($strApellido){
            $this->apellido=$strApellido;
        }

        public function setDNI($intDNI){
            $this->DNI=$intDNI;
        }

        public function setFechNac($fech_nac){
            $this->fecha_nacimiento=$fech_nac;
        }


        public function getNombre(){
            $info=$this->nombre;
            return $info;
        }

        public function getCumpleaños( Datetime $fecha){

            $fechaHoy= new DateTime();


            if ($fecha==$fechaHoy->format('Y-m-d')){
                return 'Cumple';
            }
            else{
                return 'No Cumple';
            }
        }
    }

?>