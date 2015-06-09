<hr>
				<h2 id="dropdown-in-tabs"><a href="#dropdown-in-tabs" class="link-reset">Dropdown in tabs</a></h2>
				<p>Dropdowns can be used on a tab from the <a href="<?php echo get_url('core/tab'); ?>">Tab component</a>.</p>
				<?php
					$text = '<ul class="tab col-6-12-medium" data-tab>
	<li class="active"><a href="#">Tab One</a></li>
	<li><a href="#">Tab Two</a></li>
	<li data-dropdown="{mode:\'click\'}"><a href="#">More <i class="icon-chevron-down"></i></a>
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
	</li>
</ul>';
						print_example($text);
					?>