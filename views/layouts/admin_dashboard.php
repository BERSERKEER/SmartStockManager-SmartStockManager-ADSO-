<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="../public/img/x.svg  " type="image/x-icon">
    <!-- Ruta de librerias-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Ruta de estilos -->
    <link rel="stylesheet" href="../public/css/admin_dashboard.css">
    <link rel="stylesheet" href="../public/css/admin_header.css">
    <!--Rutas de js-->
    <script src="../public/js/admin_functions.js" defer></script>
</head>
<body>
    <!--Cabecera-->
    <?php include '../views/layouts/admin_header.php';?>

    <!--Apartado-->
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

    <!--Principal-->
    <main class="dashboard-main">
        <div class="card card-1">
            <div class="data-user">
                <h2>Welcome John Doe!</h2>
                <h2 id="hora">00:00:00</h2>
            </div>
        </div>
        <div class="card card-2">
            <h2>Orders - 2</h2>
            <h4>Nombre del administrador</h4>
        </div>
        <div class="card card-3">
            <h2>Actualizaciones</h2>
            <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
            <p>2. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
            <p>3. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
        </div>

        <div class="card card-7">
            <h2>Productos agregados</h2>
            <p>1. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
            <p>2. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</p>
        </div>

        <div class="card card-4">
            <h2>Pending - 4</h2>
        </div>
        <div class="card card-5">
            <h2>Revenue - 5</h2>
        </div>
    </main>

    <!--Pie de pagina-->
    <footer class="dashboard-footer">
        <p>Copyright © 2024 SmartStockManager. All rights reserved. Template by SmartStockManager.</p>
    </footer>
</body>
</html>