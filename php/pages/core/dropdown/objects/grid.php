<hr>
					<h2 id="grid"><a href="#grid" class="link-reset">Grid</a></h2>
					<p>You can even place a grid from the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a> inside a dropdown, which can hold a navigation or any other content. Just wrap the content with a <code>&lt;div&gt;</code> and add the <code>.row</code> class. To optimize the grid for use inside the dropdown, add the <code>.dropdown-grid</code> class. Add one of the <code>.dropdown-col-*</code> classes to the grid's child elements to multiply the dropdown's width by up to 5.</p>
				<?php
					$text = '<div class="dropdown-button" data-dropdown>
	<button class="button">2 Columns <i class="icon-chevron-down"></i></button>
	<div class="dropdown dropdown-col-2">
		<div class="row dropdown-grid">
			<div class="col-6-12">
				<ul class="nav nav-dropdown panel">
					<li><a href="#">Item</a></li>
					<li><a href="#">Another item</a></li>
					<li class="nav-header">Header</li>
					<li><a href="#">Item</a></li>
					<li><a href="#">Another item</a></li>
					<li class="nav-divider"></li>
					<li><a href="#">Separated item</a></li>
				</ul>
			</div>
			<div class="col-6-12">
				<ul class="nav nav-dropdown panel">
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
</div>
<div class="dropdown-button" data-dropdown>
	<button class="button">3 Columns <i class="icon-chevron-down"></i></button>
	<div class="dropdown dropdown-col-3">
		<div class="row dropdown-grid">
			<div class="col-4-12">
				<ul class="nav nav-dropdown panel">
					<li><a href="#">Item</a></li>
					<li><a href="#">Another item</a></li>
					<li class="nav-header">Header</li>
					<li><a href="#">Item</a></li>
					<li><a href="#">Another item</a></li>
					<li class="nav-divider"></li>
					<li><a href="#">Separated item</a></li>
				</ul>
				<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
			</div>
			<div class="col-4-12">
				<ul class="nav nav-dropdown panel">
					<li><a href="#">Item</a></li>
					<li><a href="#">Another item</a></li>
					<li class="nav-header">Header</li>
					<li><a href="#">Item</a></li>
					<li><a href="#">Another item</a></li>
					<li class="nav-divider"></li>
					<li><a href="#">Separated item</a></li>
				</ul>
				<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
			</div>
			<div class="col-4-12">
				<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
				<div class="panel">Lorem ipsum dolor sit amet, consectetur <a href="#">adipisicing</a> elit, sed do eiusmod tempor incididunt.</div>
			</div>
		</div>
	</div>
</div>';
						print_example($text);
					?>