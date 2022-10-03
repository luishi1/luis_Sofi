<br>
<br>
<br>
<br>
<center>
  <form action="guardadormas2.php" method="POST" class="formulario" enctype="multipart/form-data">
    <!--metodo POST-->

    <br>
    Gato o perro?
    <div class="radio">
      <input type="radio" name="tipo" id="tipo" value="Gato" REQUIRED>
      <label for="tipo"> Gato </label>
      <br>
      <input type="radio" name="tipo" id="tipo" value="Perro" REQUIRED>
      <label for="tipo"> Perro </label>
    </div>

    <br>

    Vacunado?
    <div class="radio">
      <input type="radio" name="vacunado" id="vacunado" value=1 REQUIRED>
      <label for="vacunado"> Si </label>
      <br>
      <input type="radio" name="vacunado" id="vacunado" value=0 REQUIRED>
      <label for="vacunado"> No </label>
    </div>

    <br>

    Sexo
    <div class="radio">
      <input type="radio" name="sexo" id="sexo" value="Macho" REQUIRED>
      <label for="sexo"> Macho </label>
      <br>
      <input type="radio" name="sexo" id="sexo" value="Hembra" REQUIRED>
      <label for="sexo"> Hembra </label>
    </div>

    <br>

    Esteril?
    <div class="radio">
      <input type="radio" name="esteril" id="esteril" value=1 REQUIRED>
      <label for="esteril"> Si </label>
      <br>
      <input type="radio" name="esteril" id="esteril" value=0 REQUIRED>
      <label for="esteril"> No </label>
    </div>

    <br>

    Desparasitado?
    <div class="radio">
      <input type="radio" name="desp" id="desp" value=1 REQUIRED>
      <label for="desp"> Si </label>
      <br>
      <input type="radio" name="desp" id="desp" value=0 REQUIRED>
      <label for="desp"> No </label>
    </div>

    <br>
    <div class="checkbox">
      <input type="checkbox" name="politica_priv" id="politica_priv" REQUIRED>
      <label for="politica_priv">
        He leido y acepto la <a href="politica_privacidad.php" target="_blank">politica de privacidad</a>
        <!--permite cliquear para mostrar la politica de privacidad-->
      </label>
    </div>

    <br>

    <div class="boton">
      <input type="submit" value="Continuar">
      <!--boton para continuar-->
    </div>
    <br>
  </form>
</center>