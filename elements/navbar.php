<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

		<div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
                <button class="menu-icon" type="button" data-toggle></button>
                <div class="title-bar-title">Menu</div>
            </div>
            <div class="top-bar" id="main-menu">
                <div class="top-bar-right">
                    <ul class="menu" data-responsive-menu="drilldown medium-dropdown">
					<@ newPagelist { type: false, excludeHidden: false } @>
						<@ foreach in pagelist @>
							<@ if @{ checkboxShowInNavbar } @>
								<@ if @{ :current } @>
									<li class="active"><a href="@{ url }">@{ title }</a></li>
								<@ else @>
									<li><a href="@{ url }">@{ title }</a></li>
								<@ end @>
							<@ end @>
						<@ end @>
                    </ul>
                </div>
            </div>	
