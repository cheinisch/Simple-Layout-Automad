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
      <@ elements/navbar.php @>
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
    

