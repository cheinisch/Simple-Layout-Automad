<?php
     $uri = $_SERVER['REQUEST_URI'];
?>

<!doctype html>
<html class="no-js" lang="de">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="language" content="de">
	<meta name="description" content="Willkommen auf Heinisch-Design.de. Mein Name ist Christian Heinisch und ich bin nebenberuflicher Webdesigner.">
	<meta name="keywords" content="Webdesign, Rheingau, Hessen, Rhein-Main, Frankfurt, Wiesbaden, Geisenheim, Wordpress, Bootstrap, Foundation">
	<meta name="title" content="HeinischDesign">
	<link rel="shortcut icon" href="/HeinischDesign_Favicon.ico">

    <title>HeinischDesign | Welcome</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/foundation.min.css" />
    
	<link rel="stylesheet" href="css/theme.css" />
    
	<!---->
  </head>
  <body>

    <div class="row">
      <div class="large-10 columns large-offset-1">
        <h1>HeinischDesign</h1>
      </div>
    </div>

	<div class="row">
		<div class="large-10 columns large-offset-1">
			<div class="schatten">
                    <!--<?php include_once("header.php") ?>	-->
                    <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
                        <button class="menu-icon" type="button" data-toggle></button>
                        <div class="title-bar-title">Menu</div>
                    </div>
                    <div class="top-bar" id="main-menu">
                        <div class="top-bar-right">
                            <ul class="menu" data-responsive-menu="drilldown medium-dropdown">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="leistungen.php">Leistungen</a></li>
                                <li><a href="about.php">Über mich</a></li>
                                <li><a href="referenzen.php">Referenzen</a></li>
                                <li><a href="kontakt.php">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>	
				<div class="callout large">
					<div class="row">						
						<div class="large-6 columns">
							<h3>Ooops</h3>
							<p>The file you are looking for was not found on the server.</p>
							<p>Please try again or open the main page.<</p>
							<p>Sorry</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <?php include_once("footer.php") ?>
    


	<!-- Javascript -->
    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
	<?php include_once("php/analytics.php") ?>
	<?php include_once("php/cookie.php") ?>
	
	

  </body>
</html>
