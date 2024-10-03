<?php
// controllers/HomeController.php

class HomeController {
    public function index() {
        // Cargar la vista 'home'
        require_once 'views/landing.php';
    }
}
?>
