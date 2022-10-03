<?php
require_once "config.php";

$sql = "SELECT * FROM mascotas WHERE animal = 'Gato'";
$result = mysqli_query($con, $sql);
if(!$result){
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
}
// Fetch all
$gatos = mysqli_fetch_all($result, MYSQLI_ASSOC);

$view = "gatos";
require_once "views/layout.php";