<hr>
				<h2 id="dropdown-in-subnavs"><a href="#dropdown-in-subnavs" class="link-reset">Dropdown in subnavs</a></h2>
				<p>Dropdowns can also be applied to a subnav from the <a href="sub<?php echo get_url('core/nav'); ?>">Subnav component</a>.</p>
				<?php
					$text = '<ul class="subnav subnav-pill">
	<li class="active"><a href="#">Active</a></li>
	<li><a href="#">Item</a></li>
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