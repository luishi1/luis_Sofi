<main>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img\1.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                </div>

            </div>
            <div class="carousel-item">
                <img src="img\2.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img\3.png" class="d-block w-100">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <!-- Carrousel de Gatos-->
    <div class="carousel container">
        <div class="titulocarrusel">
            <h3>Gatos en adopcion</h3>
            <!-- link a la pagina para ver mas perros en adopcion -->
            <a href="gatos.php" class="btn btn-warning">Mas mascotas</a>
        </div>
        <button aria-label="Anterior" class="carousel__anterior">
            <i class="fas fa-chevron-left"></i>
        </button>
        <div class="carousel__lista">
            <?php foreach ($gatos as $mascota) { ?>
                <div class="card card-min" style="width: 16rem;">
                    <img class='card-img-top' height='220px' src="img/mascotas/<?php echo $mascota['id'] ?>/principal">
                    <div class="card-body">
                        <p class="card-text">
                            <i class="fa-solid fa-paw"></i> <?php echo $mascota['nombre']; ?>
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-paw"></i> <?php echo $mascota['sexo'] ?>
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-paw"></i> <?php echo $mascota['edad']; ?> años
                        </p>
                        <div class="btncard">
                            <a href='../gannis/detalles_mascota.php?id=<?php echo $mascota["id"]; ?>&location=index.php' title="Ver detalles" class="btn btn-secondary">Ver mas</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <button aria-label="Siguiente" class="carousel__siguiente">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    <!-- Carrousel de perros-->
    <div class="carousel container">
        <div class="titulocarrusel">
            <h3>Perros en adopcion</h3>
            <!-- link a la pagina para ver mas perros en adopcion -->
            <a href="perros.php" class="btn btn-warning">Mas mascotas</a>
        </div>
        <button aria-label="Anterior" class="carousel__anterior2">
            <i class="fas fa-chevron-left"></i>
        </button>
        <div class="carousel__lista2">
            <?php foreach ($perros as $mascota) { ?>
                <div class="card card-min" style="width: 16rem;">
                    <img class='card-img-top' height='220px' src="img/mascotas/<?php echo $mascota['id'] ?>/principal">
                    <div class="card-body">
                        <p class="card-text">
                            <i class="fa-solid fa-paw"></i> <?php echo $mascota['nombre']; ?>
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-paw"></i> <?php echo $mascota['sexo'] ?>
                        </p>
                        <p class="card-text">
                            <i class="fa-solid fa-paw"></i> <?php echo $mascota['edad']; ?> años
                        </p>
                        <div class="btncard">
                            <a href='../gannis/detalles_mascota.php?id=<?php echo $mascota["id"]; ?>&location=index.php' title="Ver detalles" class="btn btn-secondary">Ver mas</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <button aria-label="Siguiente" class="carousel__siguiente2">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/carrusel.js"></script>