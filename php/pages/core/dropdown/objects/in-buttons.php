<hr>
					<h2 id="dropdown-in-buttons"><a href="#dropdown-in-buttons" class="link-reset">Dropdown in buttons</a></h2>
					<p>A button from the <a href="<?php echo get_url('core/button'); ?>">Button component</a> can be used to trigger a dropdown menu.</p>
				<?php
					$text = '<div class="margin" data-margin>
	<div class="dropdown-button" data-dropdown>
		<button class="button">Hover <i class="icon-chevron-down"></i></button>
		<div class="dropdown dropdown-small">
			<ul class="nav nav-dropdown">
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-header">Header</li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-divider"></li>
				<li><a href="#">Separated item</a></li>
			</ul>
		</div>
	</div>
	<div class="dropdown-button" data-dropdown>
		<button class="button button-primary">Hover <i class="icon-chevron-down"></i></button>
		<div class="dropdown dropdown-small">
			<ul class="nav nav-dropdown">
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-header">Header</li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-divider"></li>
				<li><a href="#">Separated item</a></li>
			</ul>
		</div>
	</div>
	<div class="dropdown-button" data-dropdown>
		<button class="button button-success">Hover <i class="icon-chevron-down"></i></button>
		<div class="dropdown dropdown-small">
			<ul class="nav nav-dropdown">
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-header">Header</li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-divider"></li>
				<li><a href="#">Separated item</a></li>
			</ul>
		</div>
	</div>
	<div class="dropdown-button" data-dropdown>
		<button class="button button-danger">Hover <i class="icon-chevron-down"></i></button>
		<div class="dropdown dropdown-small">
			<ul class="nav nav-dropdown">
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-header">Header</li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-divider"></li>
				<li><a href="#">Separated item</a></li>
			</ul>
		</div>
	</div>
	<div class="dropdown-button" data-dropdown>
		<button class="button" disabled>Hover <i class="icon-chevron-down"></i></button>
		<div class="dropdown dropdown-small">
			<ul class="nav nav-dropdown">
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-header">Header</li>
				<li><a href="#">Item</a></li>
				<li><a href="#">Another item</a></li>
				<li class="nav-divider"></li>
				<li><a href="#">Separated item</a></li>
			</ul>
		</div>
	</div>
</div>';
						print_example($text);
					?>