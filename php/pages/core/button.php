
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Button</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking buttons, which come in different styles.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>.button</code> class to an <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
					<p>Add the <code>disabled</code> attribute to a <code>&lt;button&gt;</code> or the <code>.disabled</code> class to an <code>&lt;a&gt;</code> element to disable the button.</p>
					<?php
					$text = '<a class="button" href="#">Link</a>
<button>Button</button>
<button disabled>Disabled</button>';
						print_example($text);
					?>
					<hr>
					<h2 id="color-modifiers"><a href="#color-modifiers" class="link-reset">Color modifiers</a></h2>
					<p>There are several color modifiers available. Just add one of the following classes to apply a different look.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Example</th>
									<th>Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><button class="button-primary">Primary</button></td>
									<td><code>.button-primary</code></td>
									<td>Emphasizes to identify the primary action in a set of buttons.</td>
								</tr>
								<tr>
									<td><button class="button-success">Success</button></td>
									<td><code>.button-success</code></td>
									<td>Indicates a successful or positive action.</td>
								</tr>
								<tr>
									<td><button class="button-danger">Danger</button></td>
									<td><code>.button-danger</code></td>
									<td>Indicates a dangerous or negative action.</td>
								</tr>
								<tr>
									<td><a class="button button-link" href="#">Link</a></td>
									<td><code>.button-link</code></td>
									<td>Deemphasizes to look like a link while maintaining button behavior.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h2 id="size-modifiers"><a href="#size-modifiers" class="link-reset">Size modifiers</a></h2>
					<p>Use the size modifier classes to alter the size of a button while maintaining consistent theme style.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Example</th>
									<th>Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><button class="button-mini">Mini button</button></td>
									<td><code>.button-mini</code></td>
									<td>11px Font Size; 6px Horizontal Padding</td>
								</tr>
								<tr>
									<td><button class="button-small">Small button</button></td>
									<td><code>.button-small</code></td>
									<td>12px Font Size; 10px Horizontal Padding</td>
								</tr>
								<tr>
									<td><button class="button-large">Large button</button></td>
									<td><code>.button-large</code></td>
									<td>16px Font Size; 15px Horizontal Padding</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h3>Full width button</h3>
					<p>Add the <code>.button-block</code> class to allow the button to take up full width.</p>
					<?php
					$text = '<button class="button-large button-block">Button</button>';
						print_example($text);
					?>
					<hr>
					<h2 id="button-group"><a href="#button-group" class="link-reset">Button group</a></h2>
					<p>To create a button group, add the <code>.button-group</code> class to a <code>&lt;div&gt;</code> element around the buttons. That's it! No further markup needed.</p>
					<?php
					$text = '<div class="margin">
	<div class="button-group">
		<a class="button" href="#">Link</a>
		<button>Button</button>
		<button>Button</button>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="javascript"><a href="#javascript" class="link-reset">JavaScript</a></h2>
					<p>You can toggle button states via JavaScript. Just add the data attibute <code>data-button</code>.</p>
					<?php
					$text = '<button class="button-primary" data-button>Button</button>';
						print_example($text);
					?>
					<hr>
					<h3>Checkbox buttons</h3>
					<p>Toggle between a group of buttons like a checkbox by wrapping a <code>&lt;div&gt;</code> element with the data attribute <code>data-button-checkbox</code> around them. This can also be applied to a button group.</p>
					<?php
					$text = '<div class="margin">
	<div data-button-checkbox>
		<button>Button</button>
		<button>Button</button>
		<button>Button</button>
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
		<button>Button</button>
		<button>Button</button>
		<button>Button</button>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="button-with-dropdowns"><a href="#button-with-dropdowns" class="link-reset">Button with dropdowns</a></h2>
					<p>A button can be used to trigger a dropdown menu from the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a>. Just add the <code>.button-dropdown</code> class and the <code>data-dropdown</code> attribute to a <code>&lt;div&gt;</code> element that contains the button and the dropdown itself.</p>
					<?php
					$text = '<div class="margin" data-margin>
	<div class="button-dropdown" data-dropdown>
		<button>Hover <i class="icon-chevron-down"></i>
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
	<div class="button-dropdown" data-dropdown>
		<button disabled>Disabled <i class="icon-chevron-down"></i></button>
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
		<button>Click</button>
		<div data-dropdown="{mode:\'click\'}">
			<button><i class="icon-chevron-down"></i></button>
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
		<button disabled>Disabled</button>
		<div data-dropdown="{mode:\'click\'}">
			<button disabled><i class="icon-chevron-down"></i></button>
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
