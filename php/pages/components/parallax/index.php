
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-grid-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
				<h1 class="article-title" itemprop="headline">Parallax</h1>
					<p class="article-lead" itemprop="about">Animate CSS properties depending on the scroll position of the document.</p>
					<hr>
						<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>data-parallax</code> attribute to a container element. Add an option with the desired animation target value for each CSS property you want to animate. Clique provides a number of options that you can add to the <code>data-parallax</code> attribute:</p>
					<div class="overflow-container">
						<table class="table text-nowrap">
							<thead>
								<tr>
									<th>Option</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>x</code></td>
									<td>animate translateX in pixels</td>
								</tr>
								<tr>
									<td><code>xp</code></td>
									<td>animate translateX in percent</td>
								</tr>
								<tr>
									<td><code>y</code></td>
									<td>animate translateY in pixels</td>
								</tr>
								<tr>
									<td><code>yp</code></td>
									<td>animate translateY in percent</td>
								</tr>
								<tr>
									<td><code>rotate</code></td>
									<td>animate rotation clockwise in degree</td>
								</tr>
								<tr>
									<td><code>scale</code></td>
									<td>animate scaling</td>
								</tr>
								<tr>
									<td><code>color</code></td>
									<td>animate color (needs start and stop value)</td>
								</tr>
								<tr>
									<td><code>background-color</code></td>
									<td>animate background-color (needs start and stop value)</td>
								</tr>
								<tr>
									<td><code>border-color</code></td>
									<td>animate border color (needs start and stop value)</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="panel panel-box panel-box-primary" data-parallax="{y: -200, opacity: 0}">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
<pre><code>&lt;div data-parallax=&quot;{y: -200, opacity: 0}&quot;&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="start-stop-value"><a href="#start-stop-value" class="link-reset">Start and stop values</a></h2>
					<p>Properties are always animated from the current value to the target value which you set in the option. However, you can also define a start value yourself. This is done by passing a string to the option which contains two values separated by comma.</p>
					<p><span class="badge">NOTE</span> Some properties, like colors, require a start and a stop value!</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="panel panel-box panel-box-primary" data-parallax="{x: '-100,0', color: '#2D7091,#D85030', 'background-color': '#EBF7FD,#FFF1F0', 'border-color': '#2D7091,#D85030'}">
						Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
<pre><code>&lt;div data-parallax=&quot;{x: '-100,100', 'background-color': '#EBF7FD,#FFF1F0'}&quot;&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="background-image"><a href="#background-image" class="link-reset">Background image</a></h2>
					<p>You can also animate a background image. Just add the <code>bg</code> option with a (start and) stop value to the <code>data-parallax</code> attribute. If you use the <code>bgp</code> option, the given values will be interpreted as percent.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="margin text-contrast text-center flex flex-center flex-middle" data-parallax="{bg: '50,-50'}" style="height: 350px; background-image: url(<?php echo get_image('placeholder_800x400_2.jpg'); ?>);"></div>
					<h3 class="docs-article-subtitle">Markup</h3>
<pre><code>&lt;div data-parallax=&quot;{bg: '50,-50'}&quot;&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="nested-animation"><a href="#nested-animation" class="link-reset">Nested animation</a></h2>
					<p>Using different animations for nested elements is a simple task. Just create another container within the first parallax container and add your options to a new <code>data-parallax</code> attribute.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div id="target-example" class="margin text-contrast text-center flex flex-center flex-middle" data-parallax="{bg: '50,-50'}" style="height: 350px; background-image: url(<?php echo get_image('placeholder_800x400_2.jpg'); ?>);">
						<div class="width-medium-1-2" data-parallax="{target: '#target-example', scale: 0}">
							<h1 class="text-contrast">Title</h1>
							<p class="text-large">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
<pre><code>&lt;div data-parallax=&quot;{bg: '50,-50'}&quot;&gt;
    &lt;div data-parallax=&quot;{scale: 0}&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="target-option"><a href="#target-option" class="link-reset">Target Option</a></h2>
					<p>Usually, the animation lasts as long as the element itself is in the viewport. To start and stop the animation based on the viewport visibility of another element, use the <code>target</code> option. This can be helpful when using nested animations.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="panel panel-box panel-box-primary" data-parallax="{x: '-100,0', target: '#target-option'}">
						This box is animated as long as the headline &quot;Target Option&quot; is in the viewport.
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
<pre><code>&lt;!-- Using any target --&gt;
&lt;div data-parallax=&quot;{target: '#target-id', y: -50}&quot;&gt;...&lt;/div&gt;

&lt;!-- Nested animation --&gt;
&lt;div id=&quot;target-id&quot; data-parallax=&quot;{bg: '-50'}&quot;&gt;
    &lt;div data-parallax=&quot;{target: '#target-id', y: -50}&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="velocity"><a href="#velocity" class="link-reset">Velocity</a></h2>
					<p>To adjust the easing of the animation, add the <code>velocity</code> option.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div id="test-velocity" class="margin text-contrast text-center flex flex-center flex-middle" style="height: 350px; background-image: url(<?php echo get_image('placeholder_800x400_2.jpg'); ?>); background-size: cover;">
						<div class="row flex flex-center flex-middle">
							<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:0.04, viewport: 0.9}">0.04</div></div>
							<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:0.2, viewport: 0.9}">0.2</div></div>
							<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:0.6, viewport: 0.9}">0.6</div></div>
							<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:1, viewport: 0.9}">1</div></div>
							<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:2, viewport: 0.9}">2</div></div>
							<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:3, viewport: 0.9}">3</div></div>
							<div><div class="panel panel-box" data-parallax="{target:'#test-velocity', y:150, velocity:4, viewport: 0.9}">4</div></div>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
<pre><code>&lt;div data-parallax=&quot;{velocity: 0.5}&quot;&gt;
    ...
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="viewport"><a href="#viewport" class="link-reset">Viewport</a></h2>
					<p>Using the <code>viewport</code> option, the animation duration can be adjusted. With the value <code>1</code> or <code>false</code> the animation lasts as long as the element is in the viewport. Setting it to <code>0.5</code>, for example, animates the property only in the first half of the viewport.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="panel panel-box panel-box-primary" data-parallax="{x: '-100,0', viewport: 0.5}">
						This animation is finished when the element reaches the middle of the viewport.
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
<pre><code>&lt;div data-parallax=&quot;{viewport: 0.5}&quot;&gt;...&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="javascript-options"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<div class="overflow-container">
						<table class="table table-striped text-nowrap">
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
									<td><code>velocity</code></td>
									<td>float</td>
									<td>0.5</td>
									<td>Animation velocity during scrolling</td>
								</tr>
								<tr>
									<td><code>target</code></td>
									<td>mixed</td>
									<td>false</td>
									<td>Element dimension reference for animation duration.</td>
								</tr>
								<tr>
									<td><code>viewport</code></td>
									<td>float (0 to 1)</td>
									<td>false</td>
									<td>Animation range depending on the viewport.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Init element manually</h3>
					<pre><code>var parallax = Clique.parallax(element, { /* options */ });</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
