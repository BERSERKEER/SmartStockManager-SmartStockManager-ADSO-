<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <!-- Ruta de Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Ruta de estilo -->
    <link rel="stylesheet" href="../public/css/admin_clients_style.css">
</head>
<body>
    <header class="dashboard-header">
        <h1>Administrador - Clientes</h1>
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
        <div class="tools-group">
            <button type="button">Añadir</button>
            <button type="button">Editar</button>
            <button type="button">Eliminar</button>
            <div class="search-bar">
                <input type="text" placeholder="Buscar productos..." />
                <button type="button">Buscar</button>
            </div>
        </div>
    </div>

        <div class="card">
        <div class="filter-container">
        <input type="text" id="nameFilter" placeholder="Filtrar por nombre">
        <input type="text" id="surnameFilter" placeholder="Filtrar por apellido">
        <input type="text" id="phoneFilter" placeholder="Filtrar por teléfono">
        <input type="text" id="emailFilter" placeholder="Filtrar por correo">
    </div>

    <table id="dataTable">
        <thead>
            <tr>
                <th></th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox"></td>
                <td>Juan</td>
                <td>Pérez</td>
                <td>123456789</td>
                <td>juan.perez@example.com</td>
                <td class="action-buttons">
                    <button class="edit-button">Editar</button>
                    <button class="delete-button">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>Ana</td>
                <td>Gómez</td>
                <td>987654321</td>
                <td>ana.gomez@example.com</td>
                <td class="action-buttons">
                    <button class="edit-button">Editar</button>
                    <button class="delete-button">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>Pedro</td>
                <td>Rodríguez</td>
                <td>456123789</td>
                <td>pedro.rodriguez@example.com</td>
                <td class="action-buttons">
                    <button class="edit-button">Editar</button>
                    <button class="delete-button">Eliminar</button>
                </td>
            </tr>
        </tbody>
    </table>
        </div>
    </main>

    <footer class="dashboard-footer">
        <p>Copyright © 2018 Colorlib. All rights reserved. Template by Colorlib.</p>
    </footer>
</body>
</html>
