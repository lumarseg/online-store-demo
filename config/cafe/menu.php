<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Menu</title>

	
	<link rel="stylesheet" href="css/nicepage.css" media="screen">
	<link rel="stylesheet" href="css/menu2.css" media="screen">
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

<body data-path-to-root="./" class="u-body u-xl-mode" data-lang="es">

	<!-- Section: PHP Code -->
	<div>
		<?php
		// Get the application environment parameters from the Parameter Store.
		include('getAppParameters.php');

		// Display the server metadata information if the showServerInfo parameter is true.
		include('serverInfo.php');
		?>
	</div>

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

	<!-- Section: Menu -->
	<section class="u-align-center u-clearfix u-section-1" id="sec-6bc1">
		<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
			<h1 class="u-text u-text-default u-text-1">Menu</h1>
		</div>
	</section>

	<!-- Section: PHP Code -->
	<section class="u-align-center u-clearfix u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-palette-3-base u-section-2" id="sec-456c">

		<?php

		// Create a connection to the database.
		$conn = new mysqli($db_url, $db_user, $db_password, $db_name);

		// Check the connection.
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Get all rows from the product table.
		$sql = "SELECT a.id, a.product_name, a.description, a.price, b.product_group_number, b.product_group_name, a.image_url
	    FROM product a, product_group b
	    WHERE b.product_group_number = a.product_group
	    ORDER BY b.product_group_number, a.id";

		$result = $conn->query($sql);

		$numOfItems = $result->num_rows;

		if ($numOfItems > 0) {

			// Display each returned item in a form.
			echo '<form id="orderForm" action="processOrder.php" method="post" onsubmit="return validateOrder()">';

			$previousProductGroupNumber = 0;

			// output data of each row
			while ($row = $result->fetch_assoc()) {

				if ($row["product_group_number"] != $previousProductGroupNumber) {

					echo '<hr>';
					echo '<h2 class="u-align-center u-text u-text-1">';
					echo '<p>' . $row["product_group_name"] . '</p>';
                    echo '</h2>';

					$previousProductGroupNumber = $row["product_group_number"];
				}

				$price = number_format($row["price"], 2);

				echo '<div class="u-list u-list-1">';
				//echo '<div class="u-repeater u-repeater-1">';

				echo ' <div class="u-align-center u-container-align-center u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">';
				echo '  <div class="u-container-layout u-similar-container u-container-layout-1">';
				echo '    <img alt="" class="u-align-center u-expanded-width u-image u-image-default u-image-1" data-image-width="2449" data-image-height="1632" src="' . $row["image_url"] . '">';
				echo '	    <div>';
				echo '        <h4 class="u-align-center u-text u-text-3">' . $row["product_name"] . '</h4>';
				echo '        <p class="u-align-center u-text u-text-4">' . $row["description"] . '</p>';
				echo '        <h5 class="u-align-center u-custom-font u-text u-text-font u-text-palette-3-base u-text-5">' . $currency . $price . '</h5>';
				
				echo '        <input type="hidden" name="productId[]" value="' . $row["id"] . '">';
				echo '        <input type="hidden" name="productName[]" value="' . $row["product_name"] . '">';
				echo '        <input type="hidden" name="price[]" value=' . $price . '>';

				echo '        <div class="center">';
				echo '          Cantidad: <input name="quantity[]" type="number" min="0" max="15" value="0" maxlength="2" onchange="updateTotal(' . $row["id"] . ', this.value, ' . $price . ')">';
				echo '        </div>';
				echo '      <br>';
				echo '      </div>';
				echo '	</div>';
				echo ' </div>';

				//echo ' </div>';
				echo ' </div>';
			}

			echo '<div class="u-align-center u-clearfix u-section-5" id="sec-63fd">';
			echo '	<div class="u-clearfix u-sheet u-valign-middle u-sheet-1">';
			echo '	<h4 class="u-text u-text-default u-text-1">	Total de su pedido: ' . $currency . '<span id="orderTotal"></span></h4>';
			echo '	</div>';
			echo '</div>';

			echo '<div style="text-align: center;">';
			echo '<input type="Submit" value="Ingresar su orden" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">';
			echo '<input type="Reset" value="Limpiar pantalla" class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-btn-1" onclick="resetForm()">';
			echo '</div>';
			echo '<br>';
			echo '</form>';
		} else {
			echo '<br><p class="center">No hay artículos en el menu.</p>';
		}

		// Close the connection.

		$conn->close();
		?>


	</section>

	<!-- Footer -->
	<footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4f71">
		<div class="u-clearfix u-sheet u-sheet-1">
			<p class="u-small-text u-text u-text-variant u-text-1">Proyecto Final | ​AWS Re/Start + ELEV8 CRSAN5 | 2023</p>
		</div>
	</footer>

	<!-- Script -->
	<script>
		/* Initialize order total. */

		document.getElementById("orderTotal").innerHTML = "0.00";
		<?php
		echo 'var itemTotals = new Array(' . $numOfItems . ');'
		?>

		var i;
		for (i = 0; i < itemTotals.length; i++) {
			itemTotals[i] = 0.00;
		}

		/* Function to calculate order total */

		function calculateOrderTotal() {

			var orderTotal = 0.00;

			var i;
			for (i = 0; i < itemTotals.length; i++) {
				orderTotal += itemTotals[i];
			}
			return orderTotal;
		}

		/* Function to reset form */

		function resetForm() {

			document.getElementById("orderForm").reset();
			document.getElementById("orderTotal").innerHTML = "0.00";
			var i;
			for (i = 0; i < itemTotals.length; i++) {
				itemTotals[i] = 0.00;
			}
		}

		/* Function to update order total when quantities change */

		function updateTotal(itemNo, quantity, price) {

			var amount = quantity * price;
			itemTotals[itemNo] = amount;

			var totalAmount = calculateOrderTotal().toFixed(2);
			document.getElementById("orderTotal").innerHTML = totalAmount;

		}

		/* Function to validate the order amount */

		function validateOrder() {

			if (calculateOrderTotal() <= 0.0) {
				alert('Por favor seleccione al menos un artículo para comprar.');
				return false;
			}
		}
	</script>

</body>

</html>