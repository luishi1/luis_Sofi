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

$sql = "SELECT * FROM mascotas WHERE animal = 'Gato'";
$result = mysqli_query($con, $sql);
if(!$result){
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
}
// Fetch all
$gatos = mysqli_fetch_all($result, MYSQLI_ASSOC);

$view = "home";
require_once "views/layout.php";
