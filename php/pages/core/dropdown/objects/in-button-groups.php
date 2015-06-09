<hr>
				<h3>Dropdown in button groups</h3>
				<p>Use button groups from the <a href="<?php echo get_url('core/button'); ?>">Button component</a> to split buttons into a standard action and a dropdown toggle.</p>
				<?php
					$text = '<div class="margin" data-margin>
	<div class="button-group">
		<button class="button">Button</button>
		<div data-dropdown="{mode:\'click\'}">
			<button class="button">
				<i class="icon-chevron-down"></i>
			</button>
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
	</div>
	<div class="button-group">
		<button class="button button-primary">Button</button>
		<div data-dropdown="{mode:\'click\'}">
			<a href="#" class="button button-primary">
				<i class="icon-chevron-down"></i>
			</a>
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
	</div>
	<div class="button-group">
		<button class="button button-success">Button</button>
		<div data-dropdown="{mode:\'click\'}">
			<a href="#" class="button button-success">
				<i class="icon-chevron-down"></i>
			</a>
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
	</div>
	<div class="button-group">
		<button class="button button-danger">Button</button>
		<div data-dropdown="{mode:\'click\'}">
			<a href="#" class="button button-danger">
				<i class="icon-chevron-down"></i>
			</a>
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
	</div>
	<div class="button-group">
		<button class="button" disabled>Button</button>
		<div data-dropdown="{mode:\'click\'}">
			<button class="button" disabled><i class="icon-chevron-down"></i></button>
			<div class="dropdown">
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
	</div>
</div>';
						print_example($text);
					?>