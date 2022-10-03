<?php
require_once("config.php");
//listado mascotas
$query = "SELECT id, nombre, edad, sexo, animal, necesidades, requisitos, historia, especificaciones FROM mascotas";
$resultado = mysqli_query($con, $query);
if (!$resultado) {
  echo "Fallo consulta: " . mysqli_error($con);
  exit();
}
$mascotas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

//listado organizaciones
$query = "SELECT * FROM usuarios WHERE rol_id = 2";
$resultado = mysqli_query($con, $query);
if (!$resultado) {
  echo "Fallo consulta: " . mysqli_error($con);
  exit();
}
$organizaciones = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

//listado adoptantes
$query = "SELECT * FROM usuarios WHERE rol_id = 1";
$resultado = mysqli_query($con, $query);
if (!$resultado) {
  echo "Fallo consulta: " . mysqli_error($con);
  exit();
}
$adoptantes = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

$view = "listados";
require_once "views/layout.php";
