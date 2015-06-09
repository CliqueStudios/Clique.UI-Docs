<hr>
					<h3 id="switcher-multiple"><a href="#switcher-multiple" class="link-reset">Connect multiple items</a></h3>
					<p>It is also possible to connect multiple content containers. Just extend the <code>connect</code> parameter with the ID of the additional container.</p>
					<?php
					$text = '<div class="row" data-row-margin>
	<div class="col-3-12-medium">
		<ul class="nav nav-side" data-switcher="{connect:\'#switch-multiple-1, #switch-multiple-2\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
	</div>
	<div class="col-9-12-medium">
		<div class="row row-2-cols-medium" data-margin>
			<div>
				<h4>Container 1</h4>
				<ul id="switch-multiple-1" class="switcher">
					<li class="active">Hello from container 1!</li>
					<li>Hello again from container 1!</li>
					<li>Bazinga from container 1!</li>
				</ul>
			</div>
			<div>
				<h4>Container 2</h4>
				<ul id="switch-multiple-2" class="switcher">
					<li class="active">Hello from container 2!</li>
					<li>Hello again from container 2!</li>
					<li>Bazinga from container 2!</li>
				</ul>
			</div>
		</div>
	</div>
</div>';
						print_example($text);
					?>