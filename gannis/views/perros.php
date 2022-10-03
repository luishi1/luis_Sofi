<div class="container">
    <h1>EN PROCESO</h1>
    <?php foreach ($perros as $mascota) { ?>
        <div class="card mb-3 card-horizontal">
            <div class="face front">
                <div class="col-md-4">
                    <h3><?php echo $mascota['nombre']; ?></h3>
                    <img src="img/mascotas/<?php echo $mascota['id'] ?>/principal" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="contenido">
                        <div class="info">
                            <p class="text">
                                <?php echo $mascota['sexo'] ?>
                            </p>
                            <p class="text">
                                <?php echo $mascota['edad'] ?> años
                            </p>
                            <p class="text">
                                <?php echo $mascota['peso'] ?> kgs
                            </p>
                        </div>
                        <div class="info">
                            <p class="text">
                                <?php echo $mascota['tamano'] ?>
                            </p>
                            <p class="text">
                                <?php echo $mascota['nivel_de_actividad'] ?>
                            </p>
                            <p class="text">
                                <?php echo $mascota['vacunado'] ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="face back">
                <h3>Vacio por ahora pe</h3>
                <div class="abajo">
                        <p><i class="fa-solid fa-share-from-square"></i>Compartir</p>
                        <div class="btncard">
                            <a href='../gannis/detalles_mascota.php?id=<?php echo $mascota["id"]; ?>&location=index.php' title="Ver detalles" class="btn btn-secondary">Ver mas</a>
                        </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>