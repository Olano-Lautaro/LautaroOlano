<?php
  //$contenido=array(
  $apellido=$_POST['apellido'];
  $nombre=$_POST['nombre'];
  $dni=$_POST['DNI'];
  $nacimiento=$_POST['fecha_nac'];
  $sexo=$_POST['sexo'];
  $colores=array();
  //);
  echo 'Apellido: '.$apellido.'<br>';
  echo  'Nombre: '.$nombre.'<br>';
  echo 'DNI: '.$dni.'<br>';
  echo 'Nacimiento: '.$nacimiento.'<br>';
  echo 'Sexo: '.$sexo.'<br>';
  
  (isset($_POST['verde'])){
    array_push($colores, $_POST['verde'])};
  
    
?>