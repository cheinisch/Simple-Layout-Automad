

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
							<h3>@{ title }</h3>
							@{ +LeftBlock }
						</div>
						<div class="large-6 columns">
							<h3>&nbsp;</h3>
							@{ +RightBlock}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  <@ elements/footer.php @>