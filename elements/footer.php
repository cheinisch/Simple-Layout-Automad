<div class="row">
	<div class="large-10 columns large-offset-1">
		<ul class="menu align-right footer">
			<@ newPagelist { type: false, excludeHidden: false } @>
			<@ foreach in pagelist @>
				<@ if @{ checkboxShowInFooter } @>
					<li><a href="@{ url }">@{ title }</a></li>
				<@ end @>
			<@ end @>	
		</ul>
	</div>
</div>
</div>
</div>

	<!-- Javascript -->
    <script src="/packages/@{ theme }/js/vendor/jquery.min.js"></script>
    <script src="/packages/@{ theme }/js/vendor/what-input.min.js"></script>
    <script src="/packages/@{ theme }/js/foundation.min.js"></script>
    <script src="/packages/@{ theme }/js/app.js"></script>	

  </body>
</html>