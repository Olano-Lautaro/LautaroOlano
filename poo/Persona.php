<?php
//Nombre de case comienza con MAYUSCULA y en SINGULAR.
class Persona
{
        //ATRIBUTO  
        public  $nombre =     'javier';
        public  $apellido =    'Parra';
        public  $fech_nac =  1980 - 07 - 22;
        //METODO CONSTRUCTOR
        public function __construct($nombre, $apellido, $fech_nac)
        {
                $this->nombre   = $nombre;
                $this->apelido  = $apellido;
                $this->fech_nac = $fech_nac;
        }
        //METODO
        public function getNombreCompleto()
        {
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function setNombre($nombre)
        {
                $this->nombre = $nombre;
        }
};


//INSTANCIAR OBJETO
$persona = new Persona('Lautaro', 'Olano', 05 - 03 - 2002);

$persona->nombre = 'Lautaro Martín';



$persona->setNombre('Martín');

echo $persona->getNombre();
