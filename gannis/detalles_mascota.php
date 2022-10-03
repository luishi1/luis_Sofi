<?php
require_once("config.php");

$a = "SELECT * FROM mascotas WHERE id = ";
$b = $_GET['id'];
$query = $a.$b;
$resultado = mysqli_query($con, $query);
if (!$resultado) {
  echo "Fallo consulta: " . mysqli_error($con);
  exit();
}
$mascotas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

$view = "detalles_mascota";
require_once "views/layout.php";