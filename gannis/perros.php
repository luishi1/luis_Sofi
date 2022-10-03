<?php
require_once "config.php";

$sql = "SELECT * FROM mascotas WHERE animal = 'Perro'";
$result = mysqli_query($con, $sql);
if(!$result){
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
}
// Fetch all
$perros = mysqli_fetch_all($result, MYSQLI_ASSOC);

$view = "perros";
require_once "views/layout.php";