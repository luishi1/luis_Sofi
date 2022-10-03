<?php
include("config.php");
if ($_POST['contrasenaA'] == $_POST['contrasena_ado']) {
    $contrasena_ado = password_hash(trim($_POST['contrasena_ado']), PASSWORD_BCRYPT);
    $barr = $_POST['barr'];

    if ($barr == 0) {
        require_once "config.php";

        $query = "SELECT provincia_id FROM usuarios WHERE id = (SELECT MAX(id) FROM usuarios)";
        $resultado = mysqli_query($con, $query);
        if (!$resultado) {
            echo "Fallo consulta: " . mysqli_error($con);
            exit();
        }
        $prov_ado = mysqli_fetch_assoc($resultado);

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
        $msj = "Elija un barrio valido";
        $view = "registro_adoptante2";
        require_once "views/layout.php";
        exit();
    }

    $query = "UPDATE usuarios SET contrasena = '$contrasena_ado', barrio_id = '$barr', rol_id = 1 WHERE id = (SELECT MAX(id) FROM usuarios);";

    $resultado = mysqli_query($con, $query);

    if (!$resultado) {
        echo "Fallo consulta: " . mysqli_error($con);
        exit();
    }


    $query = "UPDATE usuarios SET contrasena = '$contrasena_ado', barrio_id = '$barr', rol_id = 1 WHERE id = (SELECT MAX(id) FROM usuarios);";

    $resultado = mysqli_query($con, $query);

    if (!$resultado) {
        echo "Fallo consulta: " . mysqli_error($con);
        exit();
    }

    header('location: index.php');
} else {
    require_once "config.php";

    $query = "SELECT provincia_id FROM usuarios WHERE id = (SELECT MAX(id) FROM usuarios)";
    $resultado = mysqli_query($con, $query);
    if (!$resultado) {
        echo "Fallo consulta: " . mysqli_error($con);
        exit();
    }
    $prov_ado = mysqli_fetch_assoc($resultado);

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
    $msj = "Su contraseña no coincide";
    $view = "registro_adoptante2";
    require_once "views/layout.php";
    exit();
}
