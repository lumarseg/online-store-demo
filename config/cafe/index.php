<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Pan ARTzanal</title>

	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/nicepage.css" media="screen">
	<link rel="stylesheet" href="css/Inicio.css" media="screen">
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
	<meta property="og:title" content="Inicio">
	<meta property="og:type" content="website">

</head>

<body data-home-page="Inicio.html" data-home-page-title="Inicio" data-path-to-root="./" class="u-body u-xl-mode" data-lang="es">

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
						<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base" href="Acerca-de.html" style="padding: 10px 20px;">Acerca de</a>
						</li>
						<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base" href="Contacto.html" style="padding: 10px 20px;">Contacto</a>
						</li>
						<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base" href="menu.php" style="padding: 10px 20px;">Menu</a>
						</li>
						<li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-hover-palette-3-base" href="orderHistory.php" style="padding: 10px 20px;">Ordenes</a>
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
								<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Acerca-de.html">Acerca de</a>
								</li>
								<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contacto.html">Contacto</a>
								</li>
								<li class="u-nav-item"><a class="u-button-style u-nav-link" href="menu.php">Menu</a>
								</li>
								<li class="u-nav-item"><a class="u-button-style u-nav-link" href="orderHistory.php">Ordenes</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
				</div>
			</nav>
		</div>
	</header>

	<!-- Section: Encabezado Pan ARTezanal -->
	<section class="u-clearfix u-white u-section-1" id="sec-7c69">
		<div class="data-layout-selected u-clearfix u-layout-wrap u-layout-wrap-1">
			<div class="u-layout">
				<div class="u-layout-row">
					<div class="u-container-style u-image u-layout-cell u-right-cell u-shape-rectangle u-size-33-lg u-size-36-xl u-size-60-md u-size-60-sm u-size-60-xs u-image-1" data-image-width="1200" data-image-height="1079">
						<div class="u-container-layout u-container-layout-1"></div>
					</div>
					<div class="u-align-left u-container-style u-layout-cell u-left-cell u-shape-rectangle u-size-24-xl u-size-27-lg u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
						<div class="u-container-layout u-container-layout-2">
							<h1 class="u-align-left u-text u-text-1">Pan ARTEzanal<br>
							</h1>
							<h3 class="u-align-left u-text u-text-2">Tienda Online<br>
							</h3>
							<p class="u-align-left u-text u-text-3">El mejor pan a un clic de los dedos...</p>
							<a href="menu.php" class="u-active-white u-align-left u-border-none u-btn u-btn-round u-button-style u-hover-white u-palette-3-base u-radius-50 u-text-active-palette-3-base u-text-body-alt-color u-text-hover-palette-3-base u-btn-1">ver
								el menu</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Rollitos y cangrejos todos los días -->
	<section class="skrollable skrollable-between u-align-center u-clearfix u-container-align-center u-image u-shading u-section-2" src="" id="sec-8473" data-image-width="1280" data-image-height="640">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-1"> Rollitos y cangrejos todos los días.</h2>
			<p class="u-align-center u-large-text u-text u-text-variant u-text-2"> Cuando se trata de pan y repostería,
				frescura es igual a calidad. Es por eso que horneamos nuestros panes, bagels y dulces todas las mañanas para
				obtener la máxima frescura.</p>
			<div class="data-layout-selected u-clearfix u-expanded-width-xs u-layout-custom-sm u-layout-custom-xs u-layout-wrap u-layout-wrap-1">
				<div class="u-layout">
					<div class="u-layout-row">
						<div class="u-align-right u-container-align-center-xs u-container-style u-layout-cell u-left-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-1">
							<div class="u-container-layout u-valign-top u-container-layout-1">
								<a href="menu.php" class="u-align-center-xs u-border-2 u-border-palette-3-base u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-btn-1">ver
									todo el menu</a>
							</div>
						</div>
						<div class="u-align-left u-container-align-center-xs u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-2">
							<div class="u-container-layout u-container-layout-2">
								<a href="menu.php" class="u-active-white u-align-center-xs u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-50 u-text-active-black u-text-hover-black u-btn-2">ORDENE
									YA!!!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Delicioso horneado -->
	<section class="u-align-center u-clearfix u-container-align-center u-section-3" id="carousel_bdda">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h2 class="u-align-center u-text u-text-1"> Delicioso horneado</h2>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-file-icon u-icon u-icon-1"><img src="images/3014502.png" alt=""></span>
							<div class="u-container-align-left u-container-style u-group u-group-1">
								<div class="u-container-layout u-container-layout-2">
									<h5 class="u-align-left u-text u-text-2"> Recién horneado</h5>
									<p class="u-align-left u-text u-text-3"> Nuestro pan se hornea fresco todos los días, no contiene
										conservantes y es de muy alta calidad. Además es especialmente agradable y suave.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-file-icon u-icon u-icon-2"><img src="images/4241664.png" alt=""></span>
							<div class="u-container-style u-group u-video-cover u-group-2">
								<div class="u-container-layout u-container-layout-4">
									<h5 class="u-align-left u-text u-text-4"> Gran valor</h5>
									<p class="u-align-left u-text u-text-default u-text-5"> Con los precios más competitivos del mercado,
										podemos ofrecer un gran valor sin comprometer el sabor.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-5"><span class="u-file-icon u-icon u-icon-3"><img src="images/8555318.png" alt=""></span>
							<div class="u-container-align-left u-container-style u-group u-video-cover u-group-3">
								<div class="u-container-layout u-container-layout-6">
									<h5 class="u-align-left u-text u-text-6"> Instituciones</h5>
									<p class="u-align-left u-text u-text-default u-text-7"> Atendemos a una amplia gama de instituciones,
										incluidas universidades, aerolíneas, hoteles y escuelas. Ordene diariamente para mañana</p>
								</div>
							</div>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-7"><span class="u-file-icon u-icon u-icon-4"><img src="images/2203124.png" alt=""></span>
							<div class="u-container-align-left u-container-style u-group u-video-cover u-group-4">
								<div class="u-container-layout u-container-layout-8">
									<h5 class="u-align-left u-text u-text-8"> Entrega a tu puerta</h5>
									<p class="u-align-left u-text u-text-default u-text-9">Servicio de entrega inmediata a cualquier parte
										del área metropolitana.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-9"><span class="u-file-icon u-icon u-icon-5"><img src="images/679821.png" alt=""></span>
							<div class="u-container-align-left u-container-style u-group u-video-cover u-group-5">
								<div class="u-container-layout u-container-layout-10">
									<h5 class="u-align-left u-text u-text-10"> Ningún pedido es demasiado grande</h5>
									<p class="u-align-left u-text u-text-default u-text-11">Orden contra pedido las cantidades que
										necesite</p>
								</div>
							</div>
						</div>
					</div>
					<div class="u-container-style u-list-item u-repeater-item">
						<div class="u-container-layout u-similar-container u-container-layout-11"><span class="u-file-icon u-icon u-icon-6"><img src="images/4937753.png" alt=""></span>
							<div class="u-container-align-left u-container-style u-group u-video-cover u-group-6">
								<div class="u-container-layout u-container-layout-12">
									<h5 class="u-align-left u-text u-text-12"> Delicioso horneado</h5>
									<p class="u-align-left u-text u-text-default u-text-13">Deleite el paladar con nuestros esquisitos
										productos</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Section: Dulces y Sabores -->
	<section class="u-clearfix u-container-align-center u-image u-shading u-section-4" id="sec-b2cc" data-image-width="1620" data-image-height="1080">
		<div class="u-clearfix u-sheet u-sheet-1">
			<h2 class="u-align-center u-text u-text-body-alt-color u-text-1"> Dulces y Sabores</h2>
			<div class="u-expanded-width u-list u-list-1">
				<div class="u-repeater u-repeater-1">
					<div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
						<div class="u-container-layout u-similar-container u-container-layout-1">
							<h4 class="u-text u-text-2"> Galletas</h4>
							<ul class="u-custom-list u-text u-text-3">
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div> Biscotti
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Chocolate Chip
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Oatmeal Pecan
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Oat Ginger Bars
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div> Especiales de temporada
								</li>
							</ul>
						</div>
					</div>
					<div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-2">
						<div class="u-container-layout u-similar-container u-container-layout-2">
							<h4 class="u-text u-text-4">Bollos</h4>
							<ul class="u-custom-list u-text u-text-5">
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Bollo de mantequilla clásico
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Bollo dulce con frutas
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Bollo artezanal
								</li>
							</ul>
						</div>
					</div>
					<div class="u-align-left u-container-style u-list-item u-repeater-item u-shape-rectangle u-video-cover u-white u-list-item-3">
						<div class="u-container-layout u-similar-container u-container-layout-3">
							<h4 class="u-text u-text-6">Otros</h4>
							<ul class="u-custom-list u-text u-text-7">
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Galletas de temporada
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Tartas
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Pan de banano
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Pudding
								</li>
								<li>
									<div class="u-list-icon">
										<div>—</div>
									</div>Cranberry Pecan Granola
								</li>
							</ul>
						</div>
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