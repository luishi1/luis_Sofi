<?php
require_once "config.php";
$query = "SELECT id, nombre, edad, sexo, animal FROM mascotas";
$resultado = mysqli_query($con, $query);
if (!$resultado) {
  echo "Fallo consulta: " . mysqli_error($con);
  exit();
}
$mascotas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

$view = "mascotas";
require_once "views/layout.php";
