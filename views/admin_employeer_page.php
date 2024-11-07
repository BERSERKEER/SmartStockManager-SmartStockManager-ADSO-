<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
</head>
<body>
    <header class="dashboard-header">
        <h1>Administrador - Productos</h1>
        <div class="user-actions">
            <h2>[Administrador]</h2>
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
        </div>
        <div class="card">
        <img src="../public/img/log.png" alt="Producto 1">
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
