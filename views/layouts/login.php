<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inicio sesión</title>
	<link rel="stylesheet" href="../public/css/login_styles.css">
</head>
<body>
	<main class="login-container">
		<div class="image-container">
			<img src="../public/img/log.png" alt="Logo" />
		</div>

		<!-- Formulario para inicio de sesión -->
		<form class="form" action="../config/validate.php" method="POST">
			<!-- Mostrar mensaje de error si existe -->
			<?php
            session_start();
            if (isset($_SESSION['error_message'])) {
                echo "<div class='error-message'>";
                echo $_SESSION['error_message'];
                echo "</div>";
                // Limpiar mensaje de error después de mostrarlo
                unset($_SESSION['error_message']);
            }
            ?>
				<div class="input-group">
					<input class="input" type="text" id="correo" name="usuario" required placeholder=" ">
					<label class="placeholder" for="correo">Inicio</label>
				</div>
				<div class="input-group">
					<input type="password" class="input" id="password" name="contraseña" required placeholder=" ">
					<label class="placeholder" for="password">Contraseña</label>
				</div>
				<button type="submit">Ingresar</button>

				<!-- Ruta correcta para la página de recuperación -->
				<div class="link">
					<a href="../views/account_recovery_page.php">Olvidé mi contraseña</a>
				</div>
		</form>
	</main>
</body>
</html>