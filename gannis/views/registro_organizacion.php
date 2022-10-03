<center>
    <div class="forms">
        <div class="cabecera">
            <i class="fa-solid fa-circle-user"></i>
            <h3>Cuenta nueva</h3>
        </div>
        <?php if(isset($msj)){?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $msj;?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php }?>
        <form action="guardadororg1.php" method="POST" class="formulario" enctype="multipart/form-data">
            <input name="nombre_org" type="text" placeholder="Nombre de la organización" class="form-control" REQUIRED>
            <input name="correo_org" type="email" placeholder="Mail de la organización" class="form-control" REQUIRED>
            <input name="celular_org" type="text" placeholder="Número de telefono de la organización" class="form-control" REQUIRED>
            <select class="form-select" name="prov_org" REQUIRED>
                <!--Seleccion de la provincia-->
                <option value='0'>Seleccione su provincia</option>
                <?php foreach ($provincias as $prov) { ?>
                    <option value='<?php echo $prov['id']; ?>'><?php echo $prov['provincia']; ?></option>
                <?php } ?>
                <input class="btn btn-secondary bo" type="submit" value="Siguiente">
            </select>
        </form>
    </div>
</center>