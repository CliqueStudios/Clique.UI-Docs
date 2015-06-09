<h3>Responsive behavior</h3>
					<p>In narrower viewports, like phones, there might not be enough space for the dropdown to expand. In that case the dropdown flips its alignment. Should there still not be enough space, the grid columns take up full width and stack vertically inside the dropdown.</p>
					<hr>
					<h2 id="small-modifier"><a href="#small-modifier" class="link-reset">Small modifier</a></h2>
					<p>By default, the dropdown has a fixed width and the text is wrapping into the next line. If you want your dropdown to be smaller, so that it extends to the width of its content without the text wrapping, add the <code>.dropdown-small</code> class. This is useful for button dropdowns.</p>
				<?php
					$text = '<div class="dropdown-button" data-dropdown>
	<button class="button">Dropdown <i class="icon-chevron-down"></i></button>
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
</div>';
						print_example($text);
					?>