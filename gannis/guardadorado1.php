<?php
include("config.php");
$nombre_ado = $_POST['nombre_ado'];
$correo_ado = $_POST['correo_ado'];
$prov_ado = $_POST['prov_ado'];

if ($prov_ado == 0) {
  require_once "config.php";
  $query = "SELECT * FROM provincias";
  $resultado = mysqli_query($con, $query);
  if (!$resultado) {
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
  }
  $msj = "Elija una provincia valida";
  $provincias = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
  $view = "registro_adoptante";
  require_once "views/layout.php";
  exit();
}

// verificar que el correo no se repita en la base de datos
$consult = "SELECT * FROM usuarios WHERE mail = '$correo_ado' ";
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
  $view = "registro_adoptante";
  require_once "views/layout.php";
  exit();
}
///////////////////////////////////////////////////////////

$query = "SELECT id FROM provincias WHERE id = '$prov_ado'";
$resultado = mysqli_query($con, $query);
$provincia = mysqli_fetch_assoc($resultado);

$query = "INSERT INTO usuarios(nombre, mail, provincia_id) VALUES('$nombre_ado', '$correo_ado','" . $provincia['id'] . "')";

$resultado = mysqli_query($con, $query);
if (!$resultado) {
  echo "Fallo consulta: " . mysqli_error($con);
  exit();
}

header("Location: registro_adop2.php");
exit();
