<?php
  include("config.php");
  $tipo = $_POST['tipo'];
  $vacu = $_POST['vacunado'];
  $sexo = $_POST['sexo'];
  $este = $_POST['esteril'];
  $desp = $_POST['desp'];

  $query = "UPDATE mascotas SET animal = '$tipo', vacunado = '$vacu', sexo = '$sexo', esterlizado = $este, desparasitado = '$desp' WHERE id = (SELECT MAX(id) FROM mascotas);";
  
 
  
  $resultado = mysqli_query($con, $query);
  if (!$resultado) {
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
  }
  header('location: index.php');
  
  if(!$resultado){
    echo "no";
  }
?>