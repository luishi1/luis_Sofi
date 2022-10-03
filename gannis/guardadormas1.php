<?php
include("config.php");
$nombre_mas = $_POST['nombre_mas'];
$edad_mas = $_POST['edad_mas'];
$tamano_mas = $_POST['tamano_mas'];
$niv_act_mas = $_POST['niv_act_mas'];
$peso = $_POST['peso_mas'];
$nece_mas = $_POST['nece_mas'];
$espe_mas = $_POST['espe_mas'];
$hist_mas = $_POST['hist_mas'];
$requ = $_POST['requ_mas'];

if (isset($_POST['nombre_mas'])) {
  $type = $_FILES['imagen_mas']['type'];
  $error = $_FILES['imagen_mas']['error'];
  $tmp_name = $_FILES['imagen_mas']['tmp_name'];

  $sql = "SELECT id FROM mascotas WHERE id = (SELECT MAX(id) FROM mascotas)";
  $result = mysqli_query($con, $sql);
  $r_assoc = mysqli_fetch_all($result);

  $mascota_id = $r_assoc[0][0];
  $mascota_id = $mascota_id + 1;
    if (((strpos($type, "gif") || strpos($type, "jpeg") || strpos($type, "jpg") || strpos($type, "png")) && ($error == 0))) {
    mkdir('img/mascotas/' . $mascota_id);
    move_uploaded_file($tmp_name, 'img/mascotas/' . $mascota_id . '/principal');
  }
  else{
    echo "nope";
    exit();
  }
  $query = "INSERT INTO mascotas(nombre, edad, tamano, peso, nivel_de_actividad, necesidades, requisitos, historia, especificaciones)
            VALUES('$nombre_mas', '$edad_mas', '$tamano_mas','$peso','$niv_act_mas','$nece_mas','$requ','$hist_mas','$espe_mas');";

  $resultado = $con->query($query);
  if (!$resultado) {
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
  }
}
else{
  echo "nunca subio imagen";
  exit();
}

header("Location: registro_mascota2.php");
exit();
