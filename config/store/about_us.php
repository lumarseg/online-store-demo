<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Acerca de</title>

	<link rel="stylesheet" href="css/nicepage.css" media="screen">
	<link rel="stylesheet" href="css/about_us.css" media="screen">
	<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">

	<script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
	<script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "Organization",
			"name": "",
			"logo": "images/default-logo.png"
		}
	</script>

	<meta name="theme-color" content="#e8b284">
	<meta property="og:title" content="Acerca de">
	<meta property="og:type" content="website">

</head>

<body data-path-to-root="./" class="u-body u-xl-mode" data-lang="es">

	<!-- Section: PHP Code -->
	<?php
	// Get the application environment parameters from the Parameter Store.
	include('getAppParameters.php');

	// Display the server metadata information if the showServerInfo parameter is true.
	include('serverInfo.php');
	?>

	<!-- Section: Navbar -->
	<header class="u-clearfix u-header u-white u-header" id="sec-3c14">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<a href="index.php" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
				<img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
			</a>
			<nav class="u-menu u-menu-hamburger u-offcanvas u-menu-1" data-responsive-from="XL">
				<div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
					<a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
						<svg class="u-svg-link" viewBox="0 0 24 24">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
						</svg>
						<svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
							<g>
								<rect y="1" width="16" height="2"></rect>
								<rect y="7" width="16" height="2"></rect>
								<rect y="13" width="16" height="2"></rect>
							</g>
						</svg>
					</a>
				</div>
				<div class="u-nav-container">
					<ul class="u-nav u-unstyled u-nav-1">
						<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base" href="index.php" style="padding: 10px 20px;">Inicio</a>
						</li>
						<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base" href="about_us.php" style="padding: 10px 20px;">Acerca de</a>
						</li>
						<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base" href="contact_us.php" style="padding: 10px 20px;">Contáctenos</a>
						</li>
						<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base" href="menu.php" style="padding: 10px 20px;">Menu</a>
						</li>
						<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base" href="orderHistory.php" style="padding: 10px 20px;">Órdenes</a>
						</li>
					</ul>
				</div>
				<div class="u-nav-container-collapse">
					<div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
						<div class="u-inner-container-layout u-sidenav-overflow">
							<div class="u-menu-close"></div>
							<ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
								<li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Inicio</a>
								</li>
								<li class="u-nav-item"><a class="u-button-style u-nav-link" href="about_us.php">Acerca de</a>
								</li>
								<li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact_us.php">Contáctenos</a>
								</li>
								<li class="u-nav-item"><a class="u-button-style u-nav-link" href="menu.php">Menu</a>
								</li>
								<li class="u-nav-item"><a class="u-button-style u-nav-link" href="orderHistory.php">Órdenes</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
				</div>
			</nav>
		</div>
	</header>

	<!-- Section: Encabezado Acerca de Nosotros -->
	<section class="u-align-center u-clearfix u-section-1" id="sec-7d48">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h1 class="u-text u-text-default u-text-1">Acerca de nosotros</h1>
		</div>
	</section>

	<!-- Section: Equipo -->
	<section class="u-clearfix u-container-align-center u-grey-5 u-section-2" id="carousel_3178">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-default u-text-1">Proyecto Final, AWS Re/Start + Elev8 CRSAN5 2023</h2>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-align-left u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-1">
						<div class="u-container-layout u-similar-container u-valign-middle-lg u-container-layout-1">
							<img class="u-border-5 u-border-palette-3-base u-image u-image-circle u-preserve-proportions u-image-1" src="images/Yo.png" alt="" data-image-width="553" data-image-height="583">
							<div class="u-clearfix u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group-elements u-group-elements-1">
								<h6 class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-text u-text-2">
									Luis Diego Maroto Segura</h6>
								<p class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-text u-text-3">
									Project Manager, AWS Cloud Practitioner</p>
							</div>
						</div>
					</div>
					<div class="u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-2">
						<div class="u-container-layout u-similar-container u-valign-middle-lg u-container-layout-2">
							<img class="u-border-5 u-border-palette-3-base u-image u-image-circle u-preserve-proportions u-image-2" src="images/Kari-img.png" alt="" data-image-width="553" data-image-height="583">
							<div class="u-clearfix u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group-elements u-group-elements-2">
								<h6 class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-text u-text-4">
									Karina Corrales Mora</h6>
								<p class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-text u-text-5">
									Backend Leader.</p>
							</div>
						</div>
					</div>
					<div class="u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-3">
						<div class="u-container-layout u-similar-container u-valign-middle-lg u-container-layout-3">
							<img class="u-border-5 u-border-palette-3-base u-image u-image-circle u-preserve-proportions u-image-3" src="images/Vanessa-img.png" alt="" data-image-width="553" data-image-height="583">
							<div class="u-clearfix u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group-elements u-group-elements-3">
								<h6 class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-text u-text-6">
									Vanessa Hernández Muñoz</h6>
								<p class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-text u-text-7">
									AWS Cloud Practitioner</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Visitenos -->
	<section class="u-clearfix u-image u-section-3" id="sec-317a" data-image-width="1920" data-image-height="1200">
		<div class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
			<div class="u-layout">
				<div class="u-layout-row">
					<div class="u-container-align-center u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-22-md u-size-22-sm u-size-22-xs u-size-24-lg u-size-24-xl u-layout-cell-1">
						<div class="u-container-layout u-container-layout-1">
							<h2 class="u-align-center u-text u-text-body-alt-color u-text-1">Visitenos</h2>
							<p class="u-align-center u-text u-text-body-alt-color u-text-2"> Escazú Village Trejos Montealegre, San
								José, SJ.</p>
							<h5 class="u-align-center u-text u-text-default u-text-palette-3-light-2 u-text-3" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">HORARIO</h5>
							<p class="u-align-center u-text u-text-body-alt-color u-text-4"> Lunes – Sabados&nbsp;<br>9am – 7pm<br>
								<br>Domingos<br>10am – 6pm<br>
							</p>
							<h5 class="u-align-center u-text u-text-default u-text-palette-3-light-2 u-text-5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">Phone</h5>
							<p class="u-align-center u-text u-text-body-alt-color u-text-6"> +506&nbsp; 5555-4455<br>
							</p>
						</div>
					</div>
					<div class="u-container-style u-image u-layout-cell u-right-cell u-shape-rectangle u-size-36-lg u-size-36-xl u-size-38-md u-size-38-sm u-size-38-xs u-image-1" data-image-width="1500" data-image-height="1219">
						<div class="u-container-layout u-container-layout-2"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4f71">
		<div class="u-clearfix u-sheet u-sheet-1">
			<p class="u-small-text u-text u-text-variant u-text-1">Proyecto Final | ​AWS Re/Start + ELEV8 CRSAN5 | 2023</p>
		</div>
	</footer>

</body>

</html>