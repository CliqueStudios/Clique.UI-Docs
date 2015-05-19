
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Dropdown</h1>
					<p class="article-lead" itemprop="about">Defines different styles for a toggleable dropdown.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>Any content, like a button, can toggle a dropdown. Just wrap the toggle with a <code>&lt;div&gt;</code> element and add the <code>data-dropdown</code> attribute. Add the <code>.dropdown</code> class to a child <code>&lt;div&gt;</code> element to create the dropdown itself. A dropdown can be enabled by either hovering or clicking the the toggle.</p>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Data attribute</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>data-dropdown</code></td>
									<td>Opens the dropdown on hover and adds a little delay, so the dropdown won't disappear immediately, once you stop hovering the toggle.</td>
								</tr>
								<tr>
									<td><code>data-dropdown="{mode:'click'}"</code></td>
									<td>Opens the dropdown by clicking the toggle. The dropdown closes again on the next click.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p><span class="badge badge-danger">IMPORTANT</span> To apply a dropdown, it is important that a parent element has a relative position to align the dropdown properly. Many components create the position context by default, like the <a href="<?php echo get_url('core/button'); ?>">Button</a>, <a href="<?php echo get_url('core/navbar'); ?>">Navbar</a>, <a href="sub<?php echo get_url('core/nav'); ?>">Subnav</a> and the <a href="<?php echo get_url('core/tab'); ?>">Tab</a> component.</p>
				<?php
					$text = '<div class="margin">
	<div class="button-dropdown" data-dropdown>
		<button>Hover me <i class="icon-chevron-down"></i></button>
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
	<div class="button-dropdown" data-dropdown="{mode:\'click\'}">
		<button>Click me <i class="icon-chevron-down"></i></button>
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
</div>';
						print_example($text);
					?>
					<hr>
					<h3>Delayed dropdowns in hover mode</h3>
					<p>You can set a <code>delay</code> parameter in milliseconds to prevent the immediate appearance of the dropdown.</p>
					<div class="button-dropdown" data-dropdown="{delay: 1000}">
						<button>Hover me <i class="icon-chevron-down"></i></button>
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
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="dropdown" data-dropdown="{delay: 1000}"&gt; ... &lt;/div&gt;</code></pre>
					<hr>
					<h3>Dropdown with navs</h3>
					<p>A dropdown can contain a nav from the <a href="<?php echo get_url('core/nav'); ?>">Nav component</a>. Just add the <code>.nav</code> class and the <code>.nav-dropdown</code> modifier to a <code>&lt;ul&gt;</code> element.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="dropdown"&gt;
    &lt;ul class="nav nav-dropdown"&gt;...&lt;/ul&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="alignment-modifiers"><a href="#alignment-modifiers" class="link-reset">Alignment modifiers</a></h2>
					<p>Add one of the following classes to align the dropdown menu.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.dropdown-flip</code></td>
									<td>Aligns the dropdown menu to the right.</td>
								</tr>
								<tr>
									<td><code>.dropdown-up</code></td>
									<td>Aligns the dropdown menu above the toggle.</td>
								</tr>
								<tr>
									<td><code>.dropdown-center</code></td>
									<td>Centers the dropdown menu.</td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php
					$text = '<div class="button-dropdown" data-dropdown>
	<button>Flip <i class="icon-chevron-down"></i></button>
	<div class="dropdown dropdown-flip">
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
	<button>Up <i class="icon-caret-up"></i></button>
	<div class="dropdown dropdown-up">
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
	<button>Center <i class="icon-chevron-down"></i></button>
	<div class="dropdown dropdown-center">
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
					<hr>
					<h3>Justify dropdown</h3>
					<p>To justify a dropdown, just add the <code>data-dropdown="{justify:'#ID'}"</code> attribute. The parent element, to which the dropdown should be justified, needs to have the target id, so the dropdown will expand to the full width of the targeted element.</p>
				<?php
					$text = '<div id="justify1">
	<div class="button-dropdown" data-dropdown="{justify:\'#justify1\'}">
		<button>Justify <i class="icon-chevron-down"></i></button>
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
</div>';
						print_example($text);
					?>
					<hr>
					<h3>Automatic dropdown flip</h3>
					<p>By default, the dropdown flips automatically when it exceeds the viewport's edge. If you want to flip it according to a container's boundary, just add the <code>data-dropdown="{boundary:'#ID'}"</code> attribute, using a selector for the container.</p>
				<?php
					$text = '<div id="boundary" class="button-dropdown" data-dropdown="{boundary:\'#boundary\'}">
	<button>Boundary <i class="icon-chevron-down"></i></button>
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
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="grid"><a href="#grid" class="link-reset">Grid</a></h2>
					<p>You can even place a grid from the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a> inside a dropdown, which can hold a navigation or any other content. Just wrap the content with a <code>&lt;div&gt;</code> and add the <code>.row</code> class. To optimize the grid for use inside the dropdown, add the <code>.dropdown-grid</code> class. Add one of the <code>.dropdown-col-*</code> classes to the grid's child elements to multiply the dropdown's width by up to 5.</p>
				<?php
					$text = '<div class="button-dropdown" data-dropdown>
	<button>2 Columns <i class="icon-chevron-down"></i></button>
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
<div class="button-dropdown" data-dropdown>
	<button>3 Columns <i class="icon-chevron-down"></i></button>
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
					<h3>Responsive behavior</h3>
					<p>In narrower viewports, like phones, there might not be enough space for the dropdown to expand. In that case the dropdown flips its alignment. Should there still not be enough space, the grid columns take up full width and stack vertically inside the dropdown.</p>
					<hr>
					<h2 id="small-modifier"><a href="#small-modifier" class="link-reset">Small modifier</a></h2>
					<p>By default, the dropdown has a fixed width and the text is wrapping into the next line. If you want your dropdown to be smaller, so that it extends to the width of its content without the text wrapping, add the <code>.dropdown-small</code> class. This is useful for button dropdowns.</p>
				<?php
					$text = '<div class="button-dropdown" data-dropdown>
	<button>Dropdown <i class="icon-chevron-down"></i></button>
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
					<hr>
					<h2 id="scrollable-modifier"><a href="#scrollable-modifier" class="link-reset">Scrollable modifier</a></h2>
					<p>To give the dropdown a fixed height and enable its content to scroll, just add the <code>.dropdown-scrollable</code> class.</p>
				<?php
					$text = '<div class="button-dropdown" data-dropdown>
	<button>Dropdown <i class="icon-chevron-down"></i></button>
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
					<hr>
					<h2 id="navbar-modifier"><a href="#navbar-modifier" class="link-reset">Navbar modifier</a></h2>
					<p>Dropdowns are an essential part of a navbar from the <a href="<?php echo get_url('core/navbar'); ?>">Navbar component</a>. Just add the <code>.dropdown-navbar</code> class to the dropdown, so the dropdown fits perfectly into the navbar.</p>
				<?php
					$text = '<nav class="navbar">
	<ul class="navbar-nav">
		<li class="active"><a href="#">Active</a></li>
		<li><a href="#">Item</a></li>
		<li class="parent" data-dropdown>
			<a href="#">Parent <i class="icon-chevron-down"></i></a>
			<div class="dropdown dropdown-navbar">
				<ul class="nav nav-navbar">
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
	</ul>
</nav>';
						print_example($text);
					?>
					<hr>
					<h2 id="dropdown-in-buttons"><a href="#dropdown-in-buttons" class="link-reset">Dropdown in buttons</a></h2>
					<p>A button from the <a href="<?php echo get_url('core/button'); ?>">Button component</a> can be used to trigger a dropdown menu.</p>
				<?php
					$text = '<div class="margin" data-margin>
	<div class="button-dropdown" data-dropdown>
		<button>Hover <i class="icon-chevron-down"></i></button>
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
		<button class="button-primary">Hover <i class="icon-chevron-down"></i></button>
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
		<button class="button-success">Hover <i class="icon-chevron-down"></i></button>
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
		<button class="button-danger">Hover <i class="icon-chevron-down"></i></button>
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
		<button disabled>Hover <i class="icon-chevron-down"></i></button>
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
				<h3>Dropdown in button groups</h3>
				<p>Use button groups from the <a href="<?php echo get_url('core/button'); ?>">Button component</a> to split buttons into a standard action and a dropdown toggle.</p>
				<?php
					$text = '<div class="margin" data-margin>
	<div class="button-group">
		<button>Button</button>
		<div data-dropdown="{mode:\'click\'}">
			<button>
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
		<button class="button-primary">Button</button>
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
		<button class="button-success">Button</button>
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
		<button class="button-danger">Button</button>
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
		<button disabled>Button</button>
		<div data-dropdown="{mode:\'click\'}">
			<button disabled><i class="icon-chevron-down"></i></button>
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
				<hr>
				<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
				<p>This is an example of how to set options via attribute:</p>
				<pre><code>data-dropdown=&quot;{mode:'hover'}&quot;</code></pre>
				<div class="overflow-container">
					<table class="table-striped">
						<thead>
							<tr>
								<th>Option</th>
								<th>Possible value</th>
								<th>Default</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>mode</code></td>
								<td>hover, click</td>
								<td>hover</td>
								<td>Dropdown trigger behaviour</td>
							</tr>
							<tr>
								<td><code>remaintime</code></td>
								<td>integer</td>
								<td>800</td>
								<td>Remain time before auto closing dropdown in hover mode</td>
							</tr>
							<tr>
								<td><code>justify</code></td>
								<td>CSS selector</td>
								<td>false</td>
								<td>Stretch dropdown width to a specified element</td>
							</tr>
							<tr>
								<td><code>boundary</code></td>
								<td>window</td>
								<td>CSS selector</td>
								<td>Referenced element to keep dropdowns visibilty</td>
							</tr>
							<tr>
								<td><code>delay</code></td>
								<td>integer</td>
								<td>0</td>
								<td>Delay time in hover mode before a dropdown is shown in ms</td>
							</tr>
						</tbody>
					</table>
				</div>
				<h3>Events</h3>
				<p>You can bind callbacks to following events for custom functionality:</p>
				<div class="overflow-container">
					<table class="table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Description</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><code>show.clique.dropdown</code></td>
								<td>Triggered on dropdown is shown</td>
							</tr>
							<tr>
								<td><code>stack.clique.dropdown</code></td>
								<td>Triggered when a dropdown stacks to fit into screen</td>
							</tr>
							<tr>
								<td><code>hide.clique.dropdown</code></td>
								<td>Triggered when a dropdown is hidden</td>
							</tr>
						</tbody>
					</table>
				</div>
				<?php
					$text = '<ul class="col-4-12-medium list list-line">
	<li><i class="icon-cog"></i> Uses the <code>.icon-cog</code> class</li>
	<li><i class="icon-user"></i> Uses the <code>.icon-user</code> class</li>
	<li><i class="icon-home"></i> Uses the <code>.icon-home</code> class</li>
	<li><a href="#"><i class="icon-link"></i> An icon in a link</a></li>
</ul>
<a href="#" class="button"><i class="icon-envelop"></i> A button with an icon</a>';
						print_example($text);
					?>
				<h3 class="docs-article-subtitle">Example</h3>
				<pre><code class="javascript">$('[data-dropdown]').on('show.clique.dropdown', function(){
    // Executed after the dropdown is shown
});

$('[data-dropdown]').on('stack.clique.dropdown', function(){
    // Executed when a dropdown restacks
});

$('[data-dropdown]').on('hide.clique.dropdown', function(){
    // Executed after a dropdown is hidden
});</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
