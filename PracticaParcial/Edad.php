<?php
trait Edad
{

    public function getEdad($fechaNac)
    {

        $fechaHoy = new DateTime();
        $interval = $fechaNac->diff($fechaHoy);
        $info = $interval->format('%y');
        return $info;
    }
}
?>

<!-- FECHAS 
            $fecha_hoy= new DateTime();
            echo'<hr>';
            echo $fecha_hoy->format('d-m-Y');

            echo '<hr>';
            $fecha1=new DateTime();
            
            --Darle fecha--
            $fecha1->setDate(1980,07,22);
            echo $fecha1->format('d-m-Y');
            echo '<hr>';

            --Diferencia entre un año y otro.--

            $interval= $fecha1->diff($fecha_hoy);
            echo $interval->format('%y'); 
        
        
        $fech_nacimiento= new DateTime ($_POST['fecha_nac']);
           echo  $info1=$fech_nacimiento->format('d-m-Y').'<hr>';

           $interval2= $fech_nacimiento->diff($fecha_hoy);
           echo $interval2->format('%y');-->