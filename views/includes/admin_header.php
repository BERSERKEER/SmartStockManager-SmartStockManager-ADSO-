<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/admin_home_styles.css">
</head>
<body>
<?php
    include('../config/connection_db.php');
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conexion, $sql);
    $numeroCorrelativo = 1;

    if ($result && mysqli_num_rows($result) > 0) {
        $mostrar = mysqli_fetch_array($result);
        $nombre = $mostrar['nombre'];
        $inicial = strtoupper($nombre[0]); // Convertimos la inicial a mayúscula
    } else {
        $inicial = 'U'; // 'U' por 'Usuario' como valor por defecto
    }
    ?>
<header class="dashboard-header">
        <h1>Donde estamos: Home / Productos</h1>
        <div class="user-actions">
             <!-- Iconos -->
              <div class="header-icons">
                <a href="#"><img src="../public/img/bell-fill.svg" alt="Mensajes" class="header-icon"></a>
                <a href="#"><img src="../public/img/plus-circle-fill.svg" alt="Notificaciones" class="header-icon"></a> 
                <a href="#"><img src="../public/img/database-fill-down.svg" alt="Home" class="header-icon"></a> 
             </div>
            <h1><?php echo htmlspecialchars($nombre); ?></h1>

            <div class="profile-container">
                <div class="profile-circle" onclick="toggleMenu()"><?php echo $inicial; ?></div>
            </div>      

            <!--Drop-down btn-->
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="../public/img/person-circle.svg" alt="">
                        <h2><?php echo htmlspecialchars($nombre); ?></h2>
                    </div>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <img src="../public/img/person-fill.svg" alt="">
                        <p>Perfil</p>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="../public/img/gear-fill.svg" alt="">
                        <p>Configuraciones</p>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="../public/img/x.svg" alt="">
                        <p>Cerrar sesion</p>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>