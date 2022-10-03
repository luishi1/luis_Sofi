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
        <form action="guardadorado1.php" method="POST" class="formulario" enctype="multipart/form-data">
            <input name="nombre_ado" type="text" class="form-control" placeholder="Nombre y apellido del adoptante" REQUIRED>
            <input name="correo_ado" type="email" class="form-control" placeholder="Email" REQUIRED>
            <select class="form-select" name="prov_ado" REQUIRED>
                <!--Seleccion de la provincia-->                
                <option value='0'>Seleccione su provincia</option>
                <?php foreach ($provincias as $prov) { ?>
                <option value='<?php echo $prov['id']; ?>'><?php echo $prov['provincia']; ?></option>
                <?php } ?>
            </select>
            <input class="btn btn-secondary bo" type="submit" value="Siguiente">
        </form>
    </div>
</center>
