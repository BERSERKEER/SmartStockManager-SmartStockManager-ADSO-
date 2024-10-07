<?php
// Incluir el controlador necesario
require_once 'controllers/HomeController.php';

// Verificar el controlador a cargar, por defecto es 'home'
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';

// Redirigir al controlador y su acción
if ($controller == 'home') {
    $controller = new HomeController();
    $controller->index(); // Llamamos al método que carga la vista
} else {
    echo "Controlador no encontrado.";
}
?>
