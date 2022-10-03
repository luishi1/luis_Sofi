<center>
    <div class="forms">
        <div class="cabecera">
            <i class="fa-solid fa-circle-user"></i>
            <h3>Cuenta nueva</h3>
        </div>
        <?php if(isset($msj)){?><label for="" style="color:red"><?php echo $msj;?></label><?php }?>
        <form action="guardadororg2.php" method="POST" class="formulario" enctype="multipart/form-data">
            <select class="form-select" name="barr" REQUIRED>
                <option value='0'>Seleccione su barrio</option>
                <?php foreach ($barrios as $barrio) { ?>
                <option value='<?php echo $barrio['id']; ?>'><?php echo $barrio['barrio']; ?></option>
                <?php } ?>
            </select>
            <input type="password" name="contrasenaA" placeholder="Contraseña" class="form-control" REQUIRED>
            <input type="password" name="contrasena_org" placeholder="Confimar contraseña" class="form-control" REQUIRED>
            <input class="form-check-input" type="checkbox" name="politica_priv" id="politica_priv" REQUIRED>
            <label class="form-check-label" for="politica_priv">
                He leido y acepto la <a href="politica_privacidad.php" Target="_blank">politica de privacidad</a>
                <!--permite cliquear para mostrar la politica de privacidad-->
            </label>
            <br>
            <input class="btn btn-secondary bo"type="submit" value="¡Listo!">
        </form>
    </div>
</center>