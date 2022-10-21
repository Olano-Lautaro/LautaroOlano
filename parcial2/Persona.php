<?php
    Class Persona{
        public $nombre;
        public $edad;
        public $dni;

        public function __construct($nombre,$edad,$dni){
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->dni=$dni;
        }

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function setEdad($edad){
            $this->edad=$edad;
        }
        
        public function setDNI($dni){
            $this->dni=$dni;
        }

        public function getNombre(){
            $info=$this->nombre;
            return $info;
        }

        public function getEdad(){
            $info=$this->edad;
            return $info;
        }

        public function getDNI(){
            $info=$this->dni;
            return $info;
        }

        public function mostrar(){
            $info='<b>Datos de la persona</b> <br>
            Nombre: '.$this->nombre.'<br>
            Edad: '.$this->edad.'<br>
            DNI: '.$this->dni.'<hr>';

            return $info;
        }

        public function esMayorDeEdad($edad){
            if ($this->edad=$edad>=18){
                return true;
            }
        }

            
        
    }
?>