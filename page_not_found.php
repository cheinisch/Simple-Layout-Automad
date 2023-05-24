<?php
     $uri = $_SERVER['REQUEST_URI'];
?>

<@ elements/header.php @>
  <body>

    <div class="row">
      <div class="large-10 columns large-offset-1">
        <h1>@{ sitename }</h1>
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
							<p>Please try again or open the main page.</p>
							<p>Sorry</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <@ elements/footer.php @>
    

