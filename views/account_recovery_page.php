<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperacion de cuenta</title>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="../public/js/index.js" defer></script>
	<link rel="stylesheet" href="../public/css/login_styles.css">
</head>
<body>
	<main class="login-container">
		<div class="image-container">
			<img src="../public/img/log.png" alt="Logo" />
		</div>
		<form class="form" action="procesar_registro.php" name="usuariosdb" method="POST">
			<div class="input-group">
                <input type="text" class="input" id="identificador" name="id_usuario" required placeholder=" ">
                <label class="placeholder" for="identificador" require>Correo electrónico</label>
			</div>
			<button type="button" name="registro" onclick="mensaje()">Enviar</button>
			<div class="link">
				<a href="../views/account_recovery_page.php">Olvidé mi contraseña</a>
			</div>
		</form>
	</main>
</body>
</html>