<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<title>Historial de Órdenes</title>

	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/nicepage.css" media="screen">
	<link rel="stylesheet" href="css/orderHistory.css" media="screen">
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

    <!-- Section: Historia de Órdenes -->
    <section class="u-align-center u-clearfix u-section-1" id="sec-978b">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <h1 class="u-text u-text-default u-text-1">Historial de Órdenes</h1>
        </div>
    </section>

    <!-- Section: PHP Code -->
    <div class="bodyStyle" style="margin-bottom: 70px;">

        <!-- Section: PHP Code -->
        <?php

        // Create a connection to the database.
        $conn = new mysqli($db_url, $db_user, $db_password, $db_name);

        // Check the connection.
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve all orders in the database.
        $sql = "SELECT a.order_number, a.order_date_time, a.amount as order_total,
               b.order_item_number, b.product_id, b.quantity, b.amount as item_amount,
               c.product_name, c.price
        FROM `order` a, order_item b, product c
        WHERE a.order_number = b.order_number
          AND c.id = b.product_id
        ORDER BY a.order_number DESC, b.order_item_number ASC";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            // Display information for each order.

            $previousOrderNumber = 0;
            $firstTime = true;

            while ($row = $result->fetch_assoc()) {

                if ($row["order_number"] != $previousOrderNumber) {

                    if (!$firstTime) {
                        echo '</table>';
                        echo '</div>';
                        echo '<hr>';
                    }

                    echo '<div>';
                    echo '<p>';
                    echo '<b>Orden No.: ' . $row["order_number"]
                        . '&nbsp; | Monto Total: ' . $currency . number_format($row["order_total"], 2)
                        . '&nbsp; | Fecha y hora: ' . substr($row["order_date_time"], 0, 10) . ' ' . substr($row["order_date_time"], 11, 8)
                        . '</b>';
                    echo '</p>';

                    echo '<table style="width: 80%">';
                    echo '<tr>';
                    echo '<th>Artículo</th>';
                    echo '<th>Precio</th>';
                    echo '<th>Cantidad</th>';
                    echo '<th>Monto</th>';
                    echo '</tr>';

                    $previousOrderNumber = $row["order_number"];
                    $firstTime = false;
                }
                echo '<tr>';
                echo '<td align="center">' . $row["product_name"] . '</td>';
                echo '<td align="center">' . $currency . $row["price"] . '</td>';
                echo '<td align="center">' . $row["quantity"] . '</td>';
                echo '<td align="center">' . $currency . number_format($row["item_amount"], 2) . '</td>';
                echo '</tr>';
            }
        } else {

            echo '<p class="center">No tienes pedidos en este momento.</p>';
        }

        // Close the last table division.
        echo '</table>';
        echo '</div>';
        echo '<hr>';

        // Close the connection.
        $conn->close();
        ?>

    </div>

    <!-- Section: Rollitos y cangrejos todos los días -->
    <section class="skrollable skrollable-between u-align-center u-clearfix u-container-align-center u-image u-shading u-section-3" src="" id="sec-e492" data-image-width="1280" data-image-height="640">
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
                                <a href="https://nicepage.com/static-site-generator" class="u-align-center-xs u-border-2 u-border-palette-3-base u-btn u-btn-round u-button-style u-palette-3-base u-radius-50 u-btn-1">ver
                                    todo el menu</a>
                            </div>
                        </div>
                        <div class="u-align-left u-container-align-center-xs u-container-style u-layout-cell u-right-cell u-size-30-lg u-size-30-md u-size-30-sm u-size-30-xl u-size-60-xs u-layout-cell-2">
                            <div class="u-container-layout u-container-layout-2">
                                <a href="https://nicepage.com/c/art-design-website-templates" class="u-active-white u-align-center-xs u-border-2 u-border-active-white u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-white u-none u-radius-50 u-text-active-black u-text-hover-black u-btn-2">ORDENE
                                    YA!!!</a>
                            </div>
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