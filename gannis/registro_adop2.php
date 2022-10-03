<?php
require_once "config.php";

$query = "SELECT provincia_id FROM usuarios WHERE id = (SELECT MAX(id) FROM usuarios)";
$resultado = mysqli_query($con, $query);
if (!$resultado) {
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
}
$prov_ado= mysqli_fetch_assoc($resultado);

$query = "SELECT * FROM provincias WHERE id = " . $prov_ado['provincia_id'];
$resultado = mysqli_query($con, $query);
$prov_ado = mysqli_fetch_assoc($resultado);

print_r($prov_ado);

$query = "SELECT * FROM provincias INNER JOIN barrios ON barrios.provincia_id=provincias.id WHERE provincias.id = " . $prov_ado['id'];
$resultado = mysqli_query($con, $query);
if (!$resultado) {
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
}
$barrios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
$view = "registro_adoptante2";
require_once "views/layout.php";