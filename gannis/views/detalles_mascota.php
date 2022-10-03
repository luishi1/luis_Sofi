<div class="container">
    <?php foreach ($mascotas as $mascotas) { ?>
        <div class="top">
            <p class="drh2"><?php echo $mascotas['nombre'] ?></p>
            <button class="btn btn-secondary">Adoptar</button>
        </div>
        <div class="row align-items-center">
            <div class="col colu">

                <?php echo "<img src='img/mascotas/" . $mascotas['id'] . "/principal'>"; ?>

            </div>
            <div class="col">
                <h2>Mis datos:</h2>
                <ul class="listado">
                    <li>Edad: <?php echo $mascotas['edad'] ?></li>
                    <li>Sexo: <?php echo $mascotas['sexo'] ?></li>
                    <li>Tamaño: <?php echo $mascotas['tamano'] ?></li>
                    <li>Peso: <?php echo $mascotas['peso'] ?></li>
                    <li>Nivel de actividad: <?php echo $mascotas['nivel_de_actividad'] ?></li>
                </ul>
            </div>
            <div class="col">
                <h2>Estado:</h2>
                <ul class="listado">
                    <li>Vacunado: <?php echo $mascotas['vacunado'] ?></li>
                    <li>Esterilizado: <?php echo $mascotas['esterlizado'] ?></li>
                    <li>Desparasitado: <?php echo $mascotas['desparasitado'] ?></li>
                </ul>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col">
                <h2>Necesidades:</h2>
                <p><?php echo $mascotas['necesidades'] ?></p>
            </div>
            <div class="col">
                <h2>Especificaciones:</h2>
                <p><?php echo $mascotas['especificaciones'] ?></p>
            </div>
            <div class="col">
                <h2>Historia:</h2>
                <p><?php echo $mascotas['historia'] ?></p>
            </div>
            <div class="col">
                <h2>Requisitos:</h2>
                <p><?php echo $mascotas['requisitos'] ?></p>
            </div>
        </div>
    <?php } ?>

</div>