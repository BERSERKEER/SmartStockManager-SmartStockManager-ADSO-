<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incio sesion</title>
    <link rel="stylesheet" href="./public/css/login.css"> <!--Ruta de estilo-->
</head>
<body>
    <main class="login-container">
        <div class="image-container">
            <img src="http://localhost/SSM/public/images/log.png" alt="Logo" />
        </div>
        
        <!-- Formulario para inicio de sesión -->
        <form action="http://localhost/SSM/controllers/user_controller.php" name="ssm[adso]" method="POST">
            <label for="identificador">Nombre de usuario:</label>
            <input type="email" id="correo" name="correo" required />

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required />

            <!-- Este botón enviará los datos al servidor para ser procesados -->
            <button type="submit" name="button_start">Ingresar</button>

            <!-- Enlace para recuperación de contraseña -->
            <div class="linkpass">
                <a href="http://localhost/SSM/views/admin_home.php">Olvidé mi contraseña</a>
            </div>

            <?php if (isset($_GET['error'])): ?>
            <p style="color:red;"><?php echo $_GET['error']; ?></p>
        <?php endif; ?>

        </form>
    </main>
</body>
</html>