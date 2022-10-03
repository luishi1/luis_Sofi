<br>
<br>
<br>
<br>
<center>
    <form action="guardadormas1.php" method="POST" class="formulario" enctype="multipart/form-data">
        <!--metodo POST-->

        <div class="formu">
            <input type="text" name="nombre_mas" placeholder="Nombre de la mascota" REQUIRED>
            <label for="nombre_mas"></label>
            <input type="file" name="imagen_mas" REQUIRED>
            <label for="imagen_mas"></label>
        </div>

        <br>

        <div class="formu">
            <input type="text" name="edad_mas" placeholder="Edad de la mascota" REQUIRED>
            <label for="edad_mas"></label>
            <input type="text" name="tamano_mas" placeholder="Tamaño" REQUIRED>
            <label for="tamano_mas"></label>
        </div>

        <br>

        <div class="formu">
            <input type="text" name="niv_act_mas" placeholder="Nivel de actividad" REQUIRED>
            <label for="niv_act_mas"></label>
            <input type="text" name="nece_mas" placeholder="Necesidades" REQUIRED>
            <label for="nece_mas"></label>
        </div>

        <br>

        <div class="formu">
            <input type="text" name="espe_mas" placeholder="Especificaciones" REQUIRED>
            <label for="espe_mas"></label>
            <input type="text" name="hist_mas" placeholder="Historia" REQUIRED>
            <label for="hist_mas"></label>
        </div>

        <br>

        <div class="formu">
            <input type="number" name="peso_mas" placeholder="Peso" min="0" step="0.01" REQUIRED>
            <label for="peso_mas"></label>
            <input type="text" name="requ_mas" placeholder="Requerimientos" REQUIRED>
            <label for="requ_mas"></label>
        </div>

        <br>

        <div class="boton">
            <input type="submit" value="Continuar">
            <!--boton para continuar-->
        </div>
    </form>
</center>