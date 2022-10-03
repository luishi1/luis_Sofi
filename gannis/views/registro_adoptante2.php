<center>
    <div class="forms">
        <div class="cabecera">
            <i class="fa-solid fa-circle-user"></i>
            <h3>Cuenta nueva</h3>
        </div>
        <?php if(isset($msj)){?><label for="" style="color:red"><?php echo $msj;?></label><?php }?>
        <form action="guardadorado2.php" method="POST" class="formulario" enctype="multipart/form-data">
            <select name="barr" class="form-select" REQUIRED>
                <option value='0'>Seleccione su barrio</option>
            <?php
            print_r($barrios);
            foreach ($barrios as $barrio) { ?>
                <option value='<?php echo $barrio['id']; ?>'><?php echo $barrio['barrio']; ?></option>
            <?php } ?>
            </select>
            <input class="form-control" type="password" name="contrasenaA" placeholder="Contraseña" REQUIRED>
            <input class="form-control" type="password" name="contrasena_ado" placeholder="Confimar contraseña" REQUIRED>
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