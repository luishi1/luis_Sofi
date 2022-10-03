<?php
if ($_POST['mail'] == "" || $_POST['contrasena'] == "") {
    header("Location: index.php");
}
require_once "config.php";

$sql = "SELECT * FROM usuarios WHERE mail = '" . $_POST['mail'] . "'";
$usuario = mysqli_fetch_assoc(mysqli_query($con, $sql));

if (!$usuario) {
    header("Location: index.php");
    exit();
}

$pass = $usuario['contrasena'];

if (password_verify($_POST['contrasena'], $pass)) {
    session_start();
    $_SESSION['usuario'] = $usuario;
    header('Location: index.php');
}
$view = "home";
$msj = "Contraseña incorrecta";
require_once "views/layout.php";
