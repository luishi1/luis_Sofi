<?php
include("config.php");
if ($_POST['contrasenaA'] == $_POST['contrasena_org']) {
    $contrasena_org = password_hash(trim($_POST['contrasena_org']), PASSWORD_BCRYPT);
    $barr_org = $_POST['barr'];

    if ($barr_org == 0) {
        require_once "config.php";

        $query = "SELECT provincia_id FROM usuarios WHERE id = (SELECT MAX(id) FROM usuarios)";
        $resultado = mysqli_query($con, $query);
        if (!$resultado) {
            echo "Fallo consulta: " . mysqli_error($con);
            exit();
        }
        $prov_org = mysqli_fetch_assoc($resultado);

        $query = "SELECT * FROM provincias WHERE id = " . $prov_org['provincia_id'];
        $resultado = mysqli_query($con, $query);
        $prov_org = mysqli_fetch_assoc($resultado);

        print_r($prov_org);

        $query = "SELECT * FROM provincias INNER JOIN barrios ON barrios.provincia_id=provincias.id WHERE provincias.id = " . $prov_org['id'];
        $resultado = mysqli_query($con, $query);
        if (!$resultado) {
            echo "Fallo consulta: " . mysqli_error($con);
            exit();
        }
        $barrios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        $msj = "Elija un barrio valido";
        $view = "registro_organizacion2";
        require_once "views/layout.php";
        exit();
    }

    $query = "UPDATE usuarios SET contrasena = '$contrasena_org', barrio_id = '$barr_org', rol_id = 2 WHERE id = (SELECT MAX(id) FROM usuarios);";
    $resultado = mysqli_query($con, $query);
    if (!$resultado) {
        echo "Fallo consulta: " . mysqli_error($con);
        exit();
    }

    header('location: index.php');

    if (!$resultado) {
        echo "no";
    }
} else {
    require_once "config.php";

    $query = "SELECT provincia_id FROM usuarios WHERE id = (SELECT MAX(id) FROM usuarios)";
    $resultado = mysqli_query($con, $query);
    if (!$resultado) {
        echo "Fallo consulta: " . mysqli_error($con);
        exit();
    }
    $prov_org = mysqli_fetch_assoc($resultado);

    $query = "SELECT * FROM provincias WHERE id = " . $prov_org['provincia_id'];
    $resultado = mysqli_query($con, $query);
    $prov_org = mysqli_fetch_assoc($resultado);

    print_r($prov_org);

    $query = "SELECT * FROM provincias INNER JOIN barrios ON barrios.provincia_id=provincias.id WHERE provincias.id = " . $prov_org['id'];
    $resultado = mysqli_query($con, $query);
    if (!$resultado) {
        echo "Fallo consulta: " . mysqli_error($con);
        exit();
    }
    $barrios = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
    $msj = "Su contraseña no coincide";
    $view = "registro_organizacion2";
    require_once "views/layout.php";
    exit();
}
