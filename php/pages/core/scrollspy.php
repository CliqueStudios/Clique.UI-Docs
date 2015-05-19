
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 id="bottom" class="article-title">Scrollspy</h1>
					<p class="article-lead" itemprop="about">Trigger events and animations while scrolling your page.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The scrollspy component listens to page scrolling and triggers events based on the scroll position. For example, if you scroll down a page and an element appears the first time in the viewport you can trigger a smooth animation to fade in the element. Just add the <code>data-scrollspy</code> attribute and the following options.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Data attribute</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>cls:'MY-CLASS'</code></td>
									<td>Applies the class only the first time the element appears in the viewport.</td>
								</tr>
								<tr>
									<td><code>repeat: true</code></td>
									<td>Applies the class everytime the element appears in the viewport.</td>
								</tr>
								<tr>
									<td><code>delay:600</code></td>
									<td>Adds a delay in milliseconds to the animation.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>Typically, classes from the <a href="<?php echo get_url('core/animation'); ?>">Animation component</a> are used together with the scrollspy.</p>
					<?php
					$text = '<div class="row">
	<div class="col-3-12-medium">
		<div class="panel panel-box" data-scrollspy="{cls:\'animation-fade\', repeat: true}">
			<h3>Fade</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-3-12-medium push-3-12">
		<div class="panel panel-box" data-scrollspy="{cls:\'animation-scale-up\', repeat: true}">
			<h3>Scale up</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-3-12-medium push-6-12">
		<div class="panel panel-box" data-scrollspy="{cls:\'animation-scale-down\', repeat: true}">
			<h3>Scale down</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-3-12-medium push-9-12">
		<div class="panel panel-box" data-scrollspy="{cls:\'animation-slide-top\', repeat: true}">
			<h3>Slide top</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-3-12-medium push-6-12">
		<div class="panel panel-box" data-scrollspy="{cls:\'animation-slide-bottom\', repeat: true}">
			<h3>Slide bottom</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-3-12-medium push-3-12">
		<div class="panel panel-box" data-scrollspy="{cls:\'animation-slide-right\', repeat: true}">
			<h3>Slide right</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-3-12-medium">
		<div class="panel panel-box" data-scrollspy="{cls:\'animation-slide-left\', repeat: true}">
			<h3>Slide left</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</div>';
						print_example($text);
					?>
					<p>This example uses the <code>repeat: true</code> option. Scroll up and down to see the triggered animations.</p>
					<hr>
					<h2 id="groups"><a href="#groups" class="link-reset">Groups</a></h2>
					<p>You can also group scrollspy elements, so you won't have to apply the data attribute to each of them. Just add the <code>data-scollspy"{target:'MY-CLASS'}"</code> attribute to a parent container, targetting the selector of its child items. When using a delay it will be applied cumulatively to the items within the row that scrolls into view. The delay will be resetted for the next row within the group when it scrolls into view.</p>
					<?php
					$text = '<div class="row" data-row-margin data-scrollspy="{cls:\'animation-fade invisible\', target:\'> div > .panel\', delay:300, repeat: true}">
	<div class="col-3-12-medium">
		<div class="panel panel-box invisible">
			<h3 class="panel-title">Item</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
	<div class="col-3-12-medium">
		<div class="panel panel-box invisible">
			<h3 class="panel-title">Item</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
	<div class="col-3-12-medium">
		<div class="panel panel-box invisible">
			<h3 class="panel-title">Item</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
	<div class="col-3-12-medium">
		<div class="panel panel-box invisible">
			<h3 class="panel-title">Item</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
	<div class="col-3-12-medium">
		<div class="panel panel-box invisible">
			<h3 class="panel-title">Item</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
	<div class="col-3-12-medium">
		<div class="panel panel-box invisible">
			<h3 class="panel-title">Item</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
	<div class="col-3-12-medium">
		<div class="panel panel-box invisible">
			<h3 class="panel-title">Item</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
	<div class="col-3-12-medium">
		<div class="panel panel-box invisible">
			<h3 class="panel-title">Item</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<p>This is an example of how to set options via attribute:</p>
					<pre><code>data-scrollspy=&quot;{cls:'animation-fade'}&quot;</code></pre>
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
									<td><code>cls</code></td>
									<td>string</td>
									<td>'scrollspy-inview'</td>
									<td>Class to add when the element is in view.</td>
								</tr>
								<tr>
									<td><code>initcls</code></td>
									<td>string</td>
									<td>'scrollspy-init-inview'</td>
									<td>Class to add when the element is in view for the first time.</td>
								</tr>
								<tr>
									<td><code>topoffset</code></td>
									<td>integer</td>
									<td>0</td>
									<td>Top offset before triggering in view.</td>
								</tr>
								<tr>
									<td><code>leftoffset</code></td>
									<td>integer</td>
									<td>0</td>
									<td>Left offset before triggering in view.</td>
								</tr>
								<tr>
									<td><code>repeat</code></td>
									<td>boolean</td>
									<td>false</td>
									<td>Applies the in view class everytime the element appears in the viewport.</td>
								</tr>
								<tr>
									<td><code>delay</code></td>
									<td>integer</td>
									<td>0</td>
									<td>Delay time in ms.</td>
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
									<td><code>init.clique.scrollspy</code></td>
									<td>Triggered when the element is initially in the viewport.</td>
								</tr>
								<tr>
									<td><code>inview.clique.scrollspy</code></td>
									<td>Triggered when the element is in the viewport.</td>
								</tr>
								<tr>
									<td><code>outview.clique.scrollspy</code></td>
									<td>Triggered when the element leaves the viewport.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code class="javascript">$('[data-scrollspy]').on('inview.clique.scrollspy', function(){
    // custom code...
});</code></pre>
					<hr>
					<h2 id="scrollspy-nav"><a href="#scrollspy-nav" class="link-reset">Scrollspy Nav</a></h2>
					<p>To automatically update the active menu item in a menu depending on the scroll position of your site, just add the data attribute <code>data-scrollspy-nav</code> to any navigation. Each menu item must link to the ID of its corresponding part of the site.</p>
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
									<td><code>data-scrollspy-nav</code></td>
									<td>Triggers the JavaScript necessary for the functionality of the scrollspy nav.</td>
								</tr>
								<tr>
									<td><code>data-scrollspy-nav="{closest:'MY-SELECTOR'}"</code></td>
									<td>Looks for the closest element that matches the selector by testing the element itself and traversing up through its ancestors in the DOM tree.</td>
								</tr>
								<tr>
									<td><code>data-scrollspy-nav="{smoothscroll:true}"</code></td>
									<td>Applies the
										<a href="<?php echo get_url('core/smooth-scroll'); ?>">Smooth scroll component</a> when skipping between different sections of the site.</td>
								</tr>
								<tr>
									<td><code>data-scrollspy-nav="{cls:'MY-CLASS'}"</code></td>
									<td>By default ScrollspyNav toggles the
										<code>active</code> class. Use the
										<code>cls</code> option to use your own class name.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>For an example of the scrollspy nav, just check out our <a href="../tests/core/<?php echo get_url('core/scrollspy'); ?>">Scrollspy test page</a>.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;ul class="nav nav-side" data-scrollspy-nav="{closest:'li', smoothscroll:true}"&gt;
    &lt;li&gt;&lt;a href="#my-id"&gt;...&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#my-id2"&gt;...&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;

&lt;div id="my-id"&gt;...&lt;/div&gt;
&lt;div id="my-id2"&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h3 id="javascript-scrollspy-nav-options"><a href="#javascript-scrollspy-nav-options" class="link-reset">JavaScript options</a></h3>
					<p>This is an example of how to set options via attribute:</p>
					<pre><code>data-scrollspy-nav=&quot;{smoothscroll:true}&quot;</code></pre>
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
									<td>
										<code>cls</code>
									</td>
									<td>string</td>
									<td>'active'</td>
									<td>Class to add to active element</td>
								</tr>
								<tr>
									<td>
										<code>closest</code>
									</td>
									<td>CSS selector</td>
									<td>false</td>
									<td>Element selector to which to apply the active class</td>
								</tr>
								<tr>
									<td>
										<code>topoffset</code>
									</td>
									<td>integer</td>
									<td>0</td>
									<td>Scroll top-offsset</td>
								</tr>
								<tr>
									<td>
										<code>leftoffset</code>
									</td>
									<td>integer</td>
									<td>0</td>
									<td>Scroll left-offsset</td>
								</tr>
								<tr>
									<td>
										<code>smoothscroll</code>
									</td>
									<td>boolean</td>
									<td>false</td>
									<td>Scroll animation</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3>Events</h3>
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
									<td>
										<code>init.clique.scrollspy</code>
									</td>
									<td>event</td>
									<td>On scrollspy first init</td>
								</tr>
								<tr>
									<td>
										<code>inview.clique.scrollspy</code>
									</td>
									<td>event</td>
									<td>Element entered view-port</td>
								</tr>
								<tr>
									<td>
										<code>outview.clique.scrollspy</code>
									</td>
									<td>event</td>
									<td>Element left view-port</td>
								</tr>
							</tbody>
						</table>
					</div>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
