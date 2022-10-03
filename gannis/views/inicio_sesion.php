<div class="modal fade" id="login" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel2">¡Bienvenido de vuelta!</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<main class="form-signin w-100 m-auto">
					<form action="comprobar_inicio.php" method="POST">
						<div class="form-floating">
							<input name="mail" type="text" class="form-control" id="floatingInput" placeholder="Correo electronico">
							<label for="floatingInput">Mail</label>
						</div>
						<div class="form-floating">
							<input name="contrasena" type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
							<label for="floatingPassword">Contraseña</label>
						</div>
						<?php
						if (isset($msj)) { ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<?php echo $msj; ?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						<?php } ?>
						<div class="checkbox mb-3">
							<label>
								<input type="checkbox" value="remember-me"> Recuerdame
							</label>
						</div>
						<button class="w-100 btn btn-lg btn-success" type="submit">Iniciar Sesion</button>
					</form>
				</main>
			</div>
			<div class="modal-footer">
				¿No tenes cuenta?
				<a data-bs-toggle="modal" href="#registro" role="button" data-bs-dismiss="modal">Registrate</a>
			</div>
		</div>
	</div>
</div>