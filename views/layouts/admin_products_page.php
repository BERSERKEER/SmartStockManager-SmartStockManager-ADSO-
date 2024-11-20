<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="icon" href="../public/img/" type="image/x-icon">
    <!-- Ruta de librerias-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Ruta de estilos -->
    <link rel="stylesheet" href="../public/css/admin_product.css">
    <link rel="stylesheet" href="../public/css/admin_header.css">
    <!--Rutas de js-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="../public/js/admin_functions.js" defer></script>
</head>
<body>
<!--Temporal-->
    <?php 
include '../views/layouts/admin_header.php'; 
?>
    
    <!--Lateral menu-->
    <aside class="dashboard-sidebar">
        <div class="logo">
            <a href="./admin_home_pages.php">
                <i class="bi bi-house"></i>
            </a>
            <a href="./admin_products_page.php">
                <i class="bi bi-cart2"></i>
            </a>
            <a href="./admin_employeer_page.php">
                <i class="bi bi-people"></i>
            </a>
            <a href="./admin_clients_page.php">
                <i class="bi bi-person"></i>
            </a>
            <a href="./admin_reports_page.php">
                <i class="bi bi-file-earmark-spreadsheet"></i>
            </a>
            <a href="../config/log_out.php">
                <i class="bi bi-box-arrow-right"></i>
            </a>    
        </div>
    </aside>

    <main class="dashboard-main">
    <div class="dashboard-title">
        <h2>Productos</h2>
        <div class="tools-group">
    <div class="search-bar">
        <input type="text" placeholder="Buscar productos..." />
        <button type="button">
            Buscar
            <img src="../public/img/search.svg" alt="Buscar">
        </button>
    </div>

    <!-- Nuevos botones con imagen y texto -->
    <button type="button" class="btn-with-icon">
        <img src="../public/img/home-icon.svg" alt="" class="button-icon">
        <span class="button-text">Agregar</span>
    </button>
    <button type="button" class="btn-with-icon">
        <img src="../public/img/trash-fill.svg" alt="" class="button-icon">
        <span class="button-text">Elimnar</span>
    </button>
    <button type="button" class="btn-with-icon">
        <img src="../public/img/user-icon.svg" alt="" class="button-icon">
        <span class="button-text">Editar</span>
    </button>
</div>

    </div>
    </div>
        <div class="card">
        <img src="../public/img/cart3.svg" alt="Producto 1">
            <h3 class="product-title">Producto 1</h3>
            <p class="product-description">Descripción del producto 1.</p>
            <p class="product-price">$10.00</p>
            <input type="checkbox" class="product-checkbox"> Seleccionar
        </div>
        <div class="card">
            <h3>Producto 2</h3>
            <p>Descripción del producto 2</p>
        </div>
        <div class="card">
            <h3>Producto 3</h3>
            <p>Descripción del producto 3</p>
        </div>
        <div class="card">
            <h3>Producto 4</h3>
            <p>Descripción del producto 4</p>
        </div>
        <div class="card">
            <h3>Producto 5</h3>
            <p>Descripción del producto 5</p>
        </div>
        <div class="card">
            <h3>Producto 6</h3>
            <p>Descripción del producto 6</p>
        </div>
        <div class="card">
            <h3>Producto 4</h3>
            <p>Descripción del producto 4</p>
        </div>
        <div class="card">
            <h3>Producto 5</h3>
            <p>Descripción del producto 5</p>
        </div>
        <div class="card">
            <h3>Producto 6</h3>
            <p>Descripción del producto 6</p>
        </div>
        <div class="card">
            <h3>Producto 4</h3>
            <p>Descripción del producto 4</p>
        </div>
        <div class="card">
            <h3>Producto 5</h3>
            <p>Descripción del producto 5</p>
        </div>
        <div class="card">
            <h3>Producto 6</h3>
            <p>Descripción del producto 6</p>
        </div>
        <div class="card">
            <h3>Producto 4</h3>
            <p>Descripción del producto 4</p>
        </div>
        <div class="card">
            <h3>Producto 5</h3>
            <p>Descripción del producto 5</p>
        </div>
        <div class="card">
            <h3>Producto 6</h3>
            <p>Descripción del producto 6</p>
        </div>
    </main>

    <footer class="dashboard-footer">
        <p>Copyright © 2018 Colorlib. All rights reserved. Template by Colorlib.</p>
    </footer>
</body>
</html>
