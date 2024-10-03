<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/images/logo.png" type="image/gif" sizes="20x20" />
    <link rel="stylesheet" href="./public/css/landing.css"> <!--Ruta de estilo-->
    <title>SSM</title>
</head>
<body>
	<!-- Navbar -->
	<nav class="navbar">
		<div class="container">
			<h1 class="logo">Inicio</h1>
			<ul class="nav-links">
				<li><a href="#Services">Servicios</a></li>
				<li><a href="#Product">Productos</a></li>
				<li><a href="#Location">Ubicacion</a></li>
				<li><a href="#Contact">Contacto</a></li>
				<li><a href="http://localhost/SSM/views/signup.php" class="log">Inciar sesion</a></li>
			</ul>
		</div>
	</nav>

	<!-- Header -->
	<section id="hero" class="hero">
		<div class="container">
			<h2>Bienvenido a Mi Negocio</h2>
			<p>Tu mejor opción para repuestos de automóviles.</p>
			<a href="#about" class="btn">Saber Más</a>
		</div>
	</section>

	<!-- Services -->
	<section id="Services" class="services">
		<div class="container">
			<h2>Nuestros Servicios</h2>
			<div class="service-card">
				<img src="../assets/img/logo.png" alt="Repuestos" />
				<h3>Repuestos</h3>
				<p>
					Ofrecemos una amplia variedad de repuestos para diferentes modelos de automóviles.
				</p>
			</div>
			<div class="service-card">
				<img src="../assets/img/logo.png" alt="Instalación" />
				<h3>Instalación</h3>
				<p>
					Contamos con técnicos especializados para la instalación de tus repuestos.
				</p>
			</div>
			<div class="service-card">
				<img src="../assets/img/logo.png" alt="Asesoría" />
				<h3>Asesoría</h3>
				<p>
					Te brindamos asesoría para que encuentres el repuesto adecuado para tu vehículo.
				</p>
			</div>
		</div>
	</section>

	<!-- Product -->
	<section id="Product" class="services">
		<div class="container">
			<h2>Nuestros Servicios</h2>
			<div class="service-card">
				<img src="../assets/img/logo.png" alt="Repuestos" />
				<h3>Repuestos</h3>
				<p>
					Ofrecemos una amplia variedad de repuestos para diferentes modelos de automóviles.
				</p>
			</div>
			<div class="service-card">
				<img src="../assets/img/logo.png" alt="Instalación" />
				<h3>Instalación</h3>
				<p>
					Contamos con técnicos especializados para la instalación de tus repuestos.
				</p>
			</div>
			<div class="service-card">
				<img src="../assets/img/logo.png" alt="Asesoría" />
				<h3>Asesoría</h3>
				<p>
					Te brindamos asesoría para que encuentres el repuesto adecuado para tu vehículo.
				</p>
			</div>
		</div>
	</section>

	<!-- location -->
	<section id="Location" class="location">
		<div class="container">
			<h2>Ubicación</h2>
			<p>
				Nos encontramos en una ubicación central para tu conveniencia. Visítanos en la siguiente dirección:
			</p>
			<div class="map-container">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0862333745865!2d-122.41941538468192!3d37.77492927975937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809c1d07a9e7%3A0x0!2zMzfCsDQ2JzI5LjgiTiAxMjLCsDI1JzA3LjciVw!5e0!3m2!1ses-419!2s!4v1591197243987!5m2!1ses-419!2s" width="600" height="450" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section id="Contact" class="contact">
		<div class="container">
			<h2>Contacto</h2>
			<p>Comunícate con nosotros para más información.</p>
			<form>
				<input type="text" placeholder="Nombre" />
				<input type="email" placeholder="Email" />
				<textarea placeholder="Mensaje"></textarea>
				<button type="submit">Enviar</button>
			</form>
		</div>
	</section>

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="footer-row">
				<div class="footer-links">
					<h4>Compañia</h4>
					<ul>
						<li><a href="#">Nosotros</a></li>
						<li><a href="#">Nuestros servicios</a></li>
						<li><a href="#">Politica de privacidad</a></li>
					</ul>
				</div>
				<div class="footer-links">
					<h4>Soporte</h4>
					<ul>
						<li><a href="#">Nosotros</a></li>
						<li><a href="#">Nuestros servicios</a></li>
					</ul>
				</div>
				<div class="footer-links">
					<h4>Soporte</h4>
					<ul>
						<li><a href="#">Correo electronico</a></li>
					</ul>
				</div>
				<div class="footer-links">
					<h4>siganos en:</h4>
					<div class="social-link">
						<a href=""><i class="bi bi-facebook"></i></a>
						<a href=""><i class="bi bi-whatsapp"></i></a>
						<a href=""><i class="bi bi-envelope-at"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>