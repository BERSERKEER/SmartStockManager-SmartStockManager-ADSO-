<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Ruta de Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Ruta de estilo -->
    <link rel="stylesheet" href="../public/css/admin_home_styles.css">
    <!--Rutas de js-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../public/js/admin_functions.js" defer></script>
</head>
<body>
    <?php
    include('../config/connection_db.php');
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conexion, $sql);
    $numeroCorrelativo = 1;

    while ($mostrar = mysqli_fetch_array($result)) {
    ?>

    <header class="dashboard-header">
        <h1>Dashboard - Bienvenido</h1>
        <div class="user-actions">
            <h2>(Administrador)</h2>
            <h1>Nombre usuario</h1>
            <img src="https://banner2.cleanpng.com/20190227/zox/kisspng-clip-art-computer-icons-openclipart-user-vector-gr-my-svg-png-icon-free-download-14-352-onlinewe-1713904397626.webp"
                class="user-pic" onclick="toggleMenu()">
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="https://banner2.cleanpng.com/20190227/zox/kisspng-clip-art-computer-icons-openclipart-user-vector-gr-my-svg-png-icon-free-download-14-352-onlinewe-1713904397626.webp">
                        <h2>Nombre de usuario</h2>
                    </div>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <img src="https://banner2.cleanpng.com/20190227/zox/kisspng-clip-art-computer-icons-openclipart-user-vector-gr-my-svg-png-icon-free-download-14-352-onlinewe-1713904397626.webp">
                        <p>Edit</p>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <aside class="dashboard-sidebar">
        <div class="logo">
            <!-- Icono para Inicio -->
            <a href="./admin_home_pages.php">
                <i class="bi bi-house"></i>
            </a>
            <!-- Icono para Carrito de Compras -->
            <a href="./admin_products_page.php">
                <i class="bi bi-cart2"></i>
            </a>
            <!-- Icono para Usuarios -->
            <a href="./admin_employeer_page.php">
                <i class="bi bi-people"></i>
            </a>
            <!-- Icono para Perfil -->
            <a href="./admin_clients_page.php">
                <i class="bi bi-person"></i>
            </a>
            <!-- Icono para Configuración -->
            <a href="./admin_reports_page.php">
                <i class="bi bi-file-earmark-spreadsheet"></i>
            </a>
            <!-- Icono para Cerrar Sesión -->
            <a href="../config/log_out.php">
                <i class="bi bi-box-arrow-right"></i>
            </a>    
        </div>
    </aside>

    <main class="dashboard-main">
        <div class="card card-1">
            <div class="data-user">
                <h2>Welcome John Doe!</h2>
                <h2 id="hora">00:00:00</h2>
            </div>
            <img src="https://banner2.cleanpng.com/20190227/zox/kisspng-clip-art-computer-icons-openclipart-user-vector-gr-my-svg-png-icon-free-download-14-352-onlinewe-1713904397626.webp">
        </div>
        <div class="card card-2">
            <h2>Orders - 2</h2>
            <h4>Nombre del administrador</h4>
        </div>
        <div class="card card-3">
            <h2>Actualizaciones</h2>
            <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
            <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
            <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
        </div>
        <div class="card card-4">
            <h2>Pending - 4</h2>
        </div>
        <div class="card card-5">
            <h2>Revenue - 5</h2>
        </div>
        <div class="card card-7">
            <h2>Productos agregados</h2>
            <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
            <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
        </div>
    </main>

    <footer class="dashboard-footer">
        <p>Copyright © 2018 Colorlib. All rights reserved. Template by Colorlib.</p>
    </footer>

    <?php
    }
    ?>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</body>
</html>