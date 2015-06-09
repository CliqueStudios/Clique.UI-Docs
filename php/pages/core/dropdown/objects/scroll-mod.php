<hr>
					<h2 id="scrollable-modifier"><a href="#scrollable-modifier" class="link-reset">Scrollable modifier</a></h2>
					<p>To give the dropdown a fixed height and enable its content to scroll, just add the <code>.dropdown-scrollable</code> class.</p>
				<?php
					$text = '<div class="dropdown-button" data-dropdown>
	<button class="button">Dropdown <i class="icon-chevron-down"></i></button>
	<div class="dropdown dropdown-scrollable">
		<ul class="nav nav-dropdown">
			<li><a href="#">Item</a></li>
			<li><a href="#">Another item</a></li>
			<li class="nav-header">Header</li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Another item</a></li>
			<li><a href="#">Yet another item</a></li>
			<li><a href="#">And another item</a></li>
			<li class="nav-divider"></li>
			<li><a href="#">Separated item</a></li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>