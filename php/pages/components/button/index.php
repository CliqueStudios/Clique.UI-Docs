
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('components'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Button</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking buttons, which come in different styles.</p>

					<h2 id="javascript"><a href="#javascript" class="link-reset">JavaScript</a></h2>
					<p>You can toggle button states via JavaScript. Just add the data attibute <code>data-button</code>.</p>
					<?php
					$text = '<button class="button button-primary" data-button>Button</button>';
						print_example($text);
					?>
					<hr>
					<h3>Checkbox buttons</h3>
					<p>Toggle between a group of buttons like a checkbox by wrapping a <code>&lt;div&gt;</code> element with the data attribute <code>data-button-checkbox</code> around them. This can also be applied to a button group.</p>
					<?php
					$text = '<div class="margin">
	<div data-button-checkbox>
		<button class="button">Button</button>
		<button class="button">Button</button>
		<button class="button">Button</button>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h3>Radio buttons</h3>
					<p>Toggle between a group of buttons, like radio buttons, by wrapping a <code>div</code> element that uses <code>data-button-radio</code> around them. This can also be applied to a button group.</p>
					<?php
						$text = '<div class="margin">
	<div data-button-radio>
		<button class="button">Button</button>
		<button class="button">Button</button>
		<button class="button">Button</button>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="button-with-dropdowns"><a href="#button-with-dropdowns" class="link-reset">Button with dropdowns</a></h2>
					<p>A button can be used to trigger a dropdown menu from the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a>. Just add the <code>.dropdown-button</code> class and the <code>data-dropdown</code> attribute to a <code>&lt;div&gt;</code> element that contains the button and the dropdown itself.</p>
					<?php
					$text = '<div class="margin" data-margin>
	<div class="dropdown-button" data-dropdown>
		<button class="button">Hover <i class="icon-chevron-down"></i>
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
	<div class="dropdown-button" data-dropdown>
		<button class="button" disabled>Disabled <i class="icon-chevron-down"></i></button>
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
					<hr>
					<h3>Button group with dropdowns</h3>
					<p>Use button groups to split buttons into a standard action on the left and a dropdown toggle on the right. Just wrap a <code>&lt;div&gt;</code> element around the button and the dropdown and add the <code>data-dropdown="{mode:'click'}"</code> attribute. Of course, a dropdown can also be applied to a button within a button group.</p>
					<?php
					$text = '<div class="margin" data-margin>
	<div class="button-group">
		<button class="button">Click</button>
		<div data-dropdown="{mode:\'click\'}">
			<button class="button"><i class="icon-chevron-down"></i></button>
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
		<button class="button" disabled>Disabled</button>
		<div data-dropdown="{mode:\'click\'}">
			<button class="button" disabled><i class="icon-chevron-down"></i></button>
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
</div>';
						print_example($text);
					?>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
