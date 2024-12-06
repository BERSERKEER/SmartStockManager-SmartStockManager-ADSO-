<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Estilos -->
    <link rel="stylesheet" href="./public/css/landing.css">
    <!-- Js -->
    <script src="./public/js/navbar_header_smooth.js"></script>
</head>
<body>
    <!-- Header -->
    <div class="container">
        <div class="row">
            <nav class="navbar">
                <h1>SSM Repuestos</h1>
                <ul>
                    <li><a href="#about-us">Quiénes Somos</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#location">Dónde Estamos</a></li>
                    <li><a href="#products">Productos</a></li>
                    <li><a href="#contact-form">Contáctenos</a></li>
                    <li><a href="./views/layouts/login.php">Ingresar</a></li>
                </ul>
            </nav>
            <div class="content-center">
                <h1>Bienvenido a SSM Repuestos</h1>
                <p>El lugar donde encuentras todas las piezas que tu vehículo necesita, con la mejor calidad y al mejor precio.</p>
                <a href="#products">Ver Productos</a>
            </div>
        </div>
    </div>

     <!-- Sección: Quienes somos -->
     <div id="services" class="services">
        <h2>Quiénes Somos</h2>
        <p>En SSM Repuestos somos una empresa dedicada a ofrecer los mejores productos y servicios para el mantenimiento y reparación de vehículos. Desde hace más de 10 años, nos hemos consolidado como uno de los principales proveedores de repuestos en la región, siempre comprometidos con la calidad y satisfacción del cliente.</p>
        <p>Contamos con un equipo altamente capacitado y apasionado por la industria automotriz, que está siempre listo para brindar asesoramiento especializado y soluciones a medida para cada cliente.</p>
    </div>

    <!-- Sección: Servicios-->
    <div id="about-us" class="about-us">
        <h2>Nuestros Servicios</h2>
        <p>En SSM Repuestos, ofrecemos más que solo repuestos. Nos especializamos en brindar asesoría experta para el mantenimiento y reparación de vehículos. Ya sea que busques mejorar el rendimiento de tu automóvil o mantenerlo en óptimas condiciones, nuestros técnicos capacitados están aquí para ayudarte.</p>
        <p>Contamos con un amplio catálogo de piezas y componentes para automóviles de diferentes marcas y modelos, tanto nacionales como importados. Además, ofrecemos servicios de instalación y revisión mecánica para garantizar que tu vehículo esté siempre en las mejores manos.</p>

        <!-- Imágenes y títulos -->
        <div class="image-gallery">
            <div class="image-item">
                <img src="./public/img/gear-solid.svg" alt="Imagen 1" class="icon-gear">
                <h3>Título 1</h3>
            </div>
            <div class="image-item">
                <img src="./public/img/gear-solid.svg" alt="Imagen 2" class="icon-gear" >
                <h3>Título 2</h3>
            </div>
            <div class="image-item">
                <img src="./public/img/gear-solid.svg" alt="Imagen 3" class="icon-gear">
                <h3>Título 3</h3>
            </div>
            <div class="image-item">
                <img src="./public/img/gear-solid.svg" alt="Imagen 3" class="icon-gear">
                <h3>Título 3</h3>
            </div>
        </div>
    </div>

 <!-- Sección: Productos -->
<div id="products" class="products">
    <h2>Productos</h2>
    <p>En SSM Repuestos, ofrecemos una amplia gama de productos para satisfacer las necesidades de mantenimiento y reparación de vehículos. A continuación, algunos de nuestros productos más destacados:</p>

    <div class="product-gallery">
        <div class="product-item">
            <img src="./public/img/x.svg" alt="Filtro de Aire">
            <h3>Filtro de Aire</h3>
            <p>Un filtro de aire de alta calidad para garantizar un rendimiento óptimo del motor.</p>
        </div>
        <div class="product-item">
            <img src="./public/img/x.svg" alt="Batería Automotriz">
            <h3>Batería Automotriz</h3>
            <p>Batería de larga duración con tecnología avanzada para arranques más seguros.</p>
        </div>
        <div class="product-item">
            <img src="./public/img/x.svg" alt="Pastillas de Freno">
            <h3>Pastillas de Freno</h3>
            <p>Pastillas de freno que proporcionan una excelente capacidad de frenado y seguridad.</p>
        </div>
    </div>
</div>



     <!-- Sección: Dónde Estamos -->
     <div id="location" class="location">
        <h2>Dónde Estamos</h2>
        <p>Visítanos en nuestras oficinas ubicadas en la Ciudad de México, o contáctanos a través de nuestras plataformas digitales.</p>
    </div>


    <!-- Sección: Formulario de Contacto -->
    <div id="contact-form" class="contact-form">
        <h2>Contáctanos</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mensaje:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Nuestra Empresa. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
