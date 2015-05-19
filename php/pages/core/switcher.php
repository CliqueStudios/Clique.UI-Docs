
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Switcher</h1>
					<p class="article-lead" itemprop="about">Dynamically transition through different content panes.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The switcher component consists of a number of toggles and their related content items. Add the <code>data-switcher="{connect:'#ID'}"</code> attribute to the element which contains the toggles, targetting the same id as is used on the element containing the content items. Add the <code>.switcher</code> class to the same element. Typically the switcher is combined with other components, some of which will be shown here.</p>
					<?php
					$text = '<ul class="subnav subnav-pill" data-switcher="{connect:\'#subnav-pill-content-1\'}">
	<li class="active"><a href="#">Item</a></li>
	<li><a href="#">Item</a></li>
	<li><a href="#">Item</a></li>
</ul>
<ul id="subnav-pill-content-1" class="switcher">
	<li class="active">Hello!</li>
	<li>Hello again!</li>
	<li>Bazinga!</li>
</ul>';
						print_example($text);
					?>
					<hr>
					<h3 id="switcher-content-switch"><a href="#switcher-content-switch" class="link-reset">Switch items from within content</a></h3>
					<p>In some cases you want to switch to another content section from within the active content. This is possible using the <code>data-switcher-item</code> attribute. To target the items, you need to set the data attribute to the number of the respective content item.</p>
					<?php
					$text = '<div class="row" data-row-margin>
	<div class="col-3-12-medium">
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switch-from-content\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
	</div>
	<div class="col-9-12-medium">
		<ul id="switch-from-content" class="switcher">
			<li class="active">Hello! <a href="#" data-switcher-item="next">Switch to the next content section</a></li>
			<li>Hello again! <a href="#" data-switcher-item="2">Switch to third content section 3</a></li>
			<li>Bazinga! <a href="#" data-switcher-item="previous">Switch to the previous content section</a></li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>
					<p>Setting the attribute to <code>next</code> and <code>previous</code> will switch to the adjacent items.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;li&gt; ... &lt;a href="#" data-switcher-item="next"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;li&gt; ... &lt;a href="#" data-switcher-item="previous"&gt;...&lt;/a&gt;&lt;/li&gt;</code></pre>
					<hr>
					<h3 id="switcher-multiple"><a href="#switcher-multiple" class="link-reset">Connect multiple items</a></h3>
					<p>It is also possible to connect multiple content containers. Just extend the <code>connect</code> parameter with the ID of the additional container.</p>
					<?php
					$text = '<div class="row" data-row-margin>
	<div class="col-3-12-medium">
		<ul class="nav nav-side" data-switcher="{connect:\'#switch-multiple-1, #switch-multiple-2\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
	</div>
	<div class="col-9-12-medium">
		<div class="row row-2-cols-medium" data-margin>
			<div>
				<h4>Container 1</h4>
				<ul id="switch-multiple-1" class="switcher">
					<li class="active">Hello from container 1!</li>
					<li>Hello again from container 1!</li>
					<li>Bazinga from container 1!</li>
				</ul>
			</div>
			<div>
				<h4>Container 2</h4>
				<ul id="switch-multiple-2" class="switcher">
					<li class="active">Hello from container 2!</li>
					<li>Hello again from container 2!</li>
					<li>Bazinga from container 2!</li>
				</ul>
			</div>
		</div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="switcher-animations"><a href="#switcher-animations" class="link-reset">Animations</a></h2>
					<p>The Switcher component allows you to add different animations to items when toggling between them. All you need to do is add the <code>animation</code> parameter to the data-attribute and define the animation that you want to apply. Check the table below for an overview of the animations provided.</p>
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
									<td><code>fade</code></td>
									<td>The element fades in.</td>
								</tr>
								<tr>
									<td><code>scale</code></td>
									<td>The items scale up.</td>
								</tr>
								<tr>
									<td><code>slide-top</code></td>
									<td>The items slide in from the top.</td>
								</tr>
								<tr>
									<td><code>slide-bottom</code></td>
									<td>The items slide in from the bottom.</td>
								</tr>
								<tr>
									<td><code>slide-left</code></td>
									<td>The items slide in from the left.</td>
								</tr>
								<tr>
									<td><code>slide-right</code></td>
									<td>The items slide in from the right.</td>
								</tr>
								<tr>
									<td><code>slide-horizontal</code></td>
									<td>The items slide horizontally, the direction depending on the adjacency of the item.</td>
								</tr>
								<tr>
									<td><code>slide-vertical</code></td>
									<td>The items slide vertically, the direction depending on the adjacency of the item.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<?php
					$text = '<div class="row row-4-cols-medium margin" data-row-margin>
	<div>
		<h5 class="h4">Fade</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-fade\', animation: \'fade\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-fade" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Scale</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-scale\', animation: \'scale\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-scale" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide top</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-top\', animation: \'slide-top\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-top" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide bottom</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-bottom\', animation: \'slide-bottom\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-bottom" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide left</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-left\', animation: \'slide-left\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-left" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide right</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-right\', animation: \'slide-right\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-right" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide horizontal</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-horizontal\', animation: \'slide-horizontal\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-horizontal" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
	<div>
		<h5 class="h4">Slide vertical</h5>
		<ul class="subnav subnav-pill" data-switcher="{connect:\'#switcher-content-a-slide-vertical\', animation: \'slide-vertical\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
		<ul id="switcher-content-a-slide-vertical" class="switcher margin">
			<li>Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h3 id="switcher-custom-animations"><a href="#switcher-custom-animations" class="link-reset">Custom animations</a></h3>
					<p>You can also apply multiple animations by using the <code>animation-*</code> classes from the <a href="<?php echo get_url('core/animation'); ?>">Animation component</a>. That way you can even create your own custom class to apply a different transition to the switcher.</p>
					<?php
					$text = '<ul class="subnav subnav-pill" data-switcher="{connect:\'#tab-content-a-anim-custom\', animation: \'animation-fade, animation-slide-left\'}">
	<li class="active"><a href="#">Tab</a></li>
	<li><a href="#">Tab</a></li>
	<li><a href="#">Tab</a></li>
</ul>
<ul id="tab-content-a-anim-custom" class="switcher margin">
	<li>Hello!</li>
	<li>Hello again!</li>
	<li>Bazinga!</li>
</ul>';
						print_example($text);
					?>
					<hr>
					<h2 id="switcher-with-subnav"><a href="#switcher-with-subnav" class="link-reset">Switcher with subnav</a></h2>
					<p>The switcher is easily applied to the <a href="sub<?php echo get_url('core/nav'); ?>">Subnav component</a>.</p>
					<?php
					$text = '<ul class="subnav subnav-pill" data-switcher="{connect:\'#subnav-pill-content-2\'}">
	<li class="active">
		<a href="#">Item</a></li>
	<li><a href="#">Item</a></li>
	<li><a href="#">Item</a></li>
</ul>
<ul id="subnav-pill-content-2" class="switcher">
	<li class="active">Hello!</li>
	<li>Hello again!</li>
	<li>Bazinga!</li>
</ul>';
						print_example($text);
					?>
					<hr>
					<h2 id="switcher-with-tabs"><a href="#switcher-with-tabs" class="link-reset">Switcher with tabs</a></h2>
					<p>As an exception to the rule, add the <code>data-tab="{connect:'#ID'}"</code> attribute, using the parameter "tab" instead of "switcher", to the tabbed navigation to combine the switcher with the <a href="<?php echo get_url('core/tab'); ?>">Tab component</a>.</p>
					<?php
					$text = '<div class="margin grid" data-row-margin>
	<div class="col-6-12-medium">
		<ul class="tab" data-tab="{connect:\'#tab-content\'}">
			<li class="active"><a href="#">Tab</a></li>
			<li><a href="#">Tab</a></li>
			<li><a href="#">Tab</a></li>
		</ul>
		<ul id="tab-content" class="switcher margin">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
	<div class="col-6-12-medium">
		<ul id="tab-bottom-content" class="switcher margin">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
		<ul class="tab tab-bottom" data-tab="{connect:\'#tab-bottom-content\'}">
			<li class="active"><a href="#">Tab</a></li>
			<li><a href="#">Tab</a></li>
			<li><a href="#">Tab</a></li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>
					<p><span class="badge">NOTE</span> When using the tab bottom modifier, navigation and content need to be arranged in reversed order, so that the content appears above the tabs.</p>
					<hr>
					<h3>Vertical tab</h3>
					<p>Use the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a> to display content correctly with a vertical tabbed navigation.</p>
					<?php
					$text = '<div class="row" data-row-margin>
	<div class="col-6-12-medium">
		<div class="row">
			<div class="col-6-12-medium">
				<ul class="tab tab-left" data-tab="{connect:\'#tab-left-content\'}">
					<li class="active"><a href="#">Tab</a></li>
					<li><a href="#">Tab</a></li>
					<li><a href="#">Tab</a></li>
				</ul>
			</div>
			<div class="col-6-12-medium">
				<ul id="tab-left-content" class="switcher">
					<li class="active">Hello!</li>
					<li>Hello again!</li>
					<li>Bazinga!</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-6-12-medium">
		<div class="row" data-row-margin>
			<div class="col-6-12-medium push-6-12">
				<ul class="tab tab-right" data-tab="{connect:\'#tab-right-content\'}">
					<li class="active"><a href="#">Tab</a></li>
					<li><a href="#">Tab</a></li>
					<li><a href="#">Tab</a></li>
				</ul>
			</div>
			<div class="col-6-12-medium pull-6-12">
				<ul id="tab-right-content" class="switcher">
					<li class="active">Hello!</li>
					<li>Hello again!</li>
					<li>Bazinga!</li>
				</ul>
			</div>
		</div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="switcher-with-buttons"><a href="#switcher-with-buttons" class="link-reset">Switcher with buttons</a></h2>
					<p>The switcher can also be applied to buttons or button groups from the <a href="<?php echo get_url('core/button'); ?>">Button component</a>. Just add the switcher data attribute to a <code>&lt;div&gt;</code> element around a group of buttons or to the element with the <code>.button-group</code> class.</p>
					<?php
					$text = '<div class="margin grid" data-row-margin>
	<div class="col-6-12-medium">
		<div data-switcher="{connect:\'#button-content\'}">
			<a class="button" href="#">Link</a>
			<button>Button</button>
			<button>Button</button>
		</div>
		<ul id="button-content" class="switcher margin">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
	<div class="col-6-12-medium">
		<div class="button-group" data-switcher="{connect:\'#button-group-content\'}">
			<a class="button" href="#">Link</a>
			<button>Button</button>
			<button>Button</button>
		</div>
		<ul id="button-group-content" class="switcher margin">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="switcher-with-navs"><a href="#switcher-with-navs" class="link-reset">Switcher with navs</a></h2>
					<p>To apply the switcher to the <a href="<?php echo get_url('core/nav'); ?>">Nav component</a>, add the data attribute to the nav <code>&lt;ul&gt;</code>. Use the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a> to arrange nav and content in a grid layout.</p>
					<?php
					$text = '<div class="row" data-row-margin>
	<div class="col-3-12-medium">
		<ul class="nav nav-side" data-switcher="{connect:\'#nav-content\'}">
			<li class="active"><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
			<li><a href="#">Item</a></li>
		</ul>
	</div>
	<div class="col-9-12-medium">
		<ul id="nav-content" class="switcher">
			<li class="active">Hello!</li>
			<li>Hello again!</li>
			<li>Bazinga!</li>
		</ul>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<p>This is an example of how to set options via attribute:</p>
					<pre><code>data-switcher=&quot;{active:1}&quot;</code></pre>
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
									<td><code>connect</code></td>
									<td>CSS selector</td>
									<td>false</td>
									<td>Related items container</td>
								</tr>
								<tr>
									<td><code>toggle</code></td>
									<td>CSS selector</td>
									<td>'&gt; *'</td>
									<td>Toggle css selector, triggering content switching on click</td>
								</tr>
								<tr>
									<td><code>active</code></td>
									<td>integer</td>
									<td>0</td>
									<td>Active index on init</td>
								</tr>
								<tr>
									<td><code>animation</code></td>
									<td>mixed</td>
									<td>false</td>
									<td>Predefined animation name or any animation class name.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3>Events</h3>
					<p>You can bind callbacks to following events for custom functionality:</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Name</th>
									<th>Parameter</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>show.clique.switcher</code></td>
									<td>event, active item</td>
									<td>On switcher item show/change</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>$('[data-switcher]').on('show.clique.switcher', function(event, area){
    console.log("Switcher switched to ", area);
});</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
