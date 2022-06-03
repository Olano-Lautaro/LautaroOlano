<?php
  
  $apellido=$_POST['apellido'];
  $nombre=$_POST['nombre'];
  $dni=$_POST['DNI'];
  $nacimiento=$_POST['fecha_nac'];
  $sexo=$_POST['sexo'];
  
  echo 'Apellido: '.$apellido.'<br>';
  echo  'Nombre: '.$nombre.'<br>';
  echo 'DNI: '.$dni.'<br>';
  echo 'Nacimiento: '.$nacimiento.'<br>';
  echo 'Sexo: '.$sexo.'<br>';

  echo 'Colores: ';  
  if(isset($_POST['colores'])){
    $color=$_POST['colores'];
    for($i=0; $i<count($color); ++$i){
      print_r(' '.$color[$i].'  ');
    };
  }else{
    echo '(No seleccionó nignún color)';
  };
  
  
    
?>