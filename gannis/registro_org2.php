<?php
require_once "config.php";

$query = "SELECT provincia_id FROM usuarios WHERE id = (SELECT MAX(id) FROM usuarios)";
$resultado = mysqli_query($con, $query);
if (!$resultado) {
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
}
$prov_org= mysqli_fetch_assoc($resultado);
print_r($prov_org);

$query = "SELECT * FROM provincias INNER JOIN barrios ON barrios.provincia_id=provincias.id WHERE provincias.id =" . $prov_org['provincia_id'];
$resultado = mysqli_query($con, $query);
if (!$resultado) {
    echo "Fallo consulta: " . mysqli_error($con);
    exit();
}
$barrios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
$view = "registro_organizacion2";
require_once "views/layout.php";