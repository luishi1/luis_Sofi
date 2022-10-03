<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://mrwgifs.com/wp-content/uploads/2014/02/Ditto-Dance-Rave-All-Over-The-Place-In-Pokemon-Gif.gif" Target="_blank">
      <img src="img\logo.png" alt="" width="230" height="50" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        if (!isset($_SESSION['usuario'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php"></i><i class="fa-solid fa-house-chimney"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sobrenosotros.php"><i class="fa-solid fa-circle-info"></i> Sobre Nosotros</a>
          </li>
        <?php
        } else {
          if ($_SESSION['usuario']['rol_id'] == 1) {
            echo '<li class="nav-item">
                      <a class="nav-link" href="index.php"><i class="fa-solid fa-house-chimney"></i> Inicio</a>
                    </li>';
            echo '<li class="nav-item">
                      <a class="nav-link" href="sobrenosotros.php">Sobre Nosotros</a>
                    </li>';
          } else if ($_SESSION['usuario']['rol_id'] == 2) {
            echo '<li class="nav-item">
                      <a class="nav-link" href="index.php"><i class="fa-solid fa-house-chimney"></i> Inicio</a>
                    </li>';
            echo '<li class="nav-item">
                      <a class="nav-link" href="mascotas.php"><i class="fa-solid fa-paw"></i> Mascotas</a>
                    </li>';
            echo '<li class="nav-item">
                      <a class="nav-link" href="sobrenosotros.php"><i class="fa-solid fa-circle-info"></i> Sobre Nosotros</a>
                    </li>';
          } else if ($_SESSION['usuario']['rol_id'] == 3) {
            echo '<li class="nav-item">
                      <a class="nav-link" href="index.php"><i class="fa-solid fa-house-chimney"></i> Inicio</a>
                    </li>';
            echo '<li class="nav-item">
                      <a class="nav-link" href="mascotas.php"><i class="fa-solid fa-paw"></i> Mascotas</a>
                    </li>';
            echo '<li class="nav-item">
                      <a class="nav-link" href="sobrenosotros.php"><i class="fa-solid fa-circle-info"></i> Sobre Nosotros</a>
                    </li>';
            echo '<li class="nav-item">
                      <a class="nav-link" href="listados.php"><i class="fa-solid fa-list"></i> Listados</a>
                    </li>';
          }
        }
        ?>
      </ul>

    </div>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <?php
      if (isset($_SESSION['usuario'])) { ?>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end botonav">
          <p> Bienvenido/a <?php echo $_SESSION['usuario']['nombre']; ?> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logout">Cerrar sesion</button></p>
        </div> <?php
              } else { ?>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary me-md-2" data-bs-target="#login" data-bs-toggle="modal" data-bs-dismiss="modal">Iniciar sesion</button>
          <button class="btn btn-primary" data-bs-target="#registro" data-bs-toggle="modal" data-bs-dismiss="modal">Registrarse</button>
        </div>
      <?php } ?>
    </div>
  </div>
</nav>

<?php require_once "inicio_sesion.php"; ?>
<?php require_once "registro.php"; ?>
<?php require_once "logout.php"; ?>