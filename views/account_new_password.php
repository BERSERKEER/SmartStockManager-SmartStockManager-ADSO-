<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../public/css/login_styles.css">
	<!--Ruta de estilo-->
	<title>Creacion de contraseña</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../public/js/new_password_account.js" defer></script>
</head>
<body>
	<main class="login-container">
		<div class="image-container">
			<img src="../public/img/log.png" alt="Logo" />
		</div>
		<form action="procesar_registro.php" name="usuariosdb" method="POST" class="form">
			<div class="input-group">
				<input class="input" type="text" id="correo" name="usuario" required placeholder=" ">
				<label class="placeholder" for="correo">Nueva contraseña</label>
			</div>
			<div class="input-group">
				<input class="input" type="text" id="correo" name="usuario" required placeholder=" ">
				<label class="placeholder" for="correo">Confirmar contraseña</label>
			</div>
			<button type="button" name="registro" onclick="mensaje()">Cambiar</button>
			<div class="link">
				<a href="../views/account_recovery_page.php">Olvidé mi contraseña</a>
			</div>
		</form>
	</main>
</body>
</html>