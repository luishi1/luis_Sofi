<?php
include("config.php");
$nombre_org = $_POST['nombre_org'];
$correo_org = $_POST['correo_org'];
$celular_org = $_POST['celular_org'];
$prov_org = $_POST['prov_org'];

if ($prov_org == 0) {
  require_once "config.php";
  $query = "SELECT * FROM provincias";
  $resultado = mysqli_query($con, $query);
  if (!$resultado) {
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
  }
  $msj = "Elija una provincia valida";
  $provincias = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
  $view = "registro_organizacion";
  require_once "views/layout.php";
  exit();
}

// verificar que el correo no se repita en la base de datos
$consult = "SELECT * FROM usuarios WHERE mail = '$correo_org' ";
$verificar_mail = mysqli_query($con, $consult);

if (mysqli_num_rows($verificar_mail) > 0) {
  require_once "config.php";
  $query = "SELECT * FROM provincias";
  $resultado = mysqli_query($con, $query);
  if (!$resultado) {
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
  }
  $msj = "¡Este Email ya esta registrado!";
  $provincias = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
  $view = "registro_organizacion";
  require_once "views/layout.php";
  exit();
}
///////////////////////////////////////////////////////////

$query = "INSERT INTO usuarios(nombre, mail, telefono, provincia_id) VALUES('$nombre_org','$correo_org','$celular_org','" . $prov_org . "')";

$resultado = mysqli_query($con, $query);
if (!$resultado) {
  echo "Fallo consulta: " . mysqli_error($con);
  exit();
}

header("Location: registro_org2.php");
exit();
