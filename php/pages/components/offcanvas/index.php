
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('components'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Off Canvas</h1>
					<p class="article-lead" itemprop="about">Create a smooth off-canvas sidebar that slides in and out of the page.</p>
					<p>The Off Canvas component is perfect for building a mobile navigation, similar to those which are popular with many native mobile apps, where a single button in the upper left corner toggles an off-canvas sidebar with a menu.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Off Canvas component consists of an overlay and an off-canvas bar.</p>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.offcanvas</code></td>
									<td>Add this class to a <code>&lt;div&gt;</code> element to create the bar container and an overlay, blanking out the page. An id also needs to be added, so the off-canvas sidebar can be toggled.</td>
								</tr>
								<tr>
									<td><code>.offcanvas-bar</code></td>
									<td>Add this class to a child <code>&lt;div&gt;</code> element to create the off-canvas bar.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>You can use any element to toggle an off-canvas sidebar. An <code>&lt;a&gt;</code> element needs to be linked to the id of the off-canvas container. To enable the necessary JavaScript, just add the <code>data-offcanvas</code> attribute. If you are using another element, like a button, just add the <code>data-offcanvas="{target:'#ID'}"</code> attribute to target the id of the off-canvas container.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<button data-offcanvas="{target:'#offcanvas-1'}">Open</button>
					<a href="#offcanvas-1" data-offcanvas>Open</a>
					<div id="offcanvas-1" class="offcanvas">
						<div class="offcanvas-bar">
							<div class="panel">Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
							<div class="panel">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;!-- This is an anchor toggling the off-canvas sidebar --&gt;
&lt;a href="#my-id" data-offcanvas&gt;...&lt;/a&gt;

&lt;!-- This is a button toggling the off-canvas sidebar --&gt;
&lt;button data-offcanvas="{target:'#my-id'}"&gt;...&lt;/button&gt;

&lt;!-- This is the off-canvas sidebar --&gt;
&lt;div id="my-id" class="offcanvas"&gt;
    &lt;div class="offcanvas-bar"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="flip-modifier"><a href="#flip-modifier" class="link-reset">Flip modifier</a></h2>
					<p>Add the <code>.offcanvas-bar-flip</code> class to the off-canvas bar to adjust its alignment, so that it slides in from the right.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<button data-offcanvas="{target:'#offcanvas-2'}">Right</button>
					<div id="offcanvas-2" class="offcanvas">
						<div class="offcanvas-bar offcanvas-bar-flip">
							<div class="panel">Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
							<div class="panel">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div id="my-id" class="offcanvas"&gt;
    &lt;div class="offcanvas-bar offcanvas-bar-flip"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="off-canvas-navs"><a href="#off-canvas-navs" class="link-reset">Off Canvas navs</a></h2>
					<p>An off-canvas sidebar can contain a nav from the <a href="<?php echo get_url('core/nav'); ?>">Nav component</a>. Add the <code>.nav-offcanvas</code> class to style the nav according to the off-canvas context.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="button-group">
						<button data-offcanvas="{target:'#offcanvas-3'}">Left</button>
						<button data-offcanvas="{target:'#offcanvas-4'}">Right</button>
					</div>
					<div id="offcanvas-3" class="offcanvas">
						<div class="offcanvas-bar">
							<ul class="nav nav-offcanvas nav-parent-icon" data-nav>
								<li><a href="#">Item</a></li>
								<li class="active"><a href="#">Active</a></li>
								<li class="parent">
									<a href="#">Parent</a>
									<ul class="nav-sub">
										<li><a href="#">Sub item</a></li>
										<li><a href="#">Sub item</a>
											<ul>
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="parent"><a href="#">Parent</a>
									<ul class="nav-sub">
										<li><a href="#">Sub item</a></li>
										<li><a href="#">Sub item</a></li>
									</ul>
								</li>
								<li><a href="#">Item</a></li>
								<li class="nav-header">Header</li>
								<li class="parent">
									<a href="#"><i class="icon-star"></i> Parent</a>
								</li>
								<li>
									<a href="#"><i class="icon-twitter"></i> Item</a>
								</li>
								<li class="nav-divider"></li>
								<li>
									<a href="#"><i class="icon-rss"></i> Item</a>
								</li>
							</ul>
						</div>
					</div>
					<div id="offcanvas-4" class="offcanvas">
						<div class="offcanvas-bar offcanvas-bar-flip">
							<ul class="nav nav-offcanvas nav-parent-icon" data-nav>
								<li><a href="#">Item</a></li>
								<li class="active"><a href="#">Active</a></li>
								<li class="parent">
									<a href="#">Parent</a>
									<ul class="nav-sub">
										<li><a href="#">Sub item</a></li>
										<li><a href="#">Sub item</a>
											<ul>
												<li><a href="#">Sub item</a></li>
												<li><a href="#">Sub item</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="parent">
									<a href="#">Parent</a>
									<ul class="nav-sub">
										<li><a href="#">Sub item</a></li>
										<li><a href="#">Sub item</a></li>
									</ul>
								</li>
								<li><a href="#">Item</a></li>
								<li class="nav-header">Header</li>
								<li class="parent"><a href="#"><i class="icon-star"></i> Parent</a></li>
								<li><a href="#"><i class="icon-twitter"></i> Item</a></li>
								<li class="nav-divider"></li>
								<li><a href="#"><i class="icon-rss"></i> Item</a></li>
							</ul>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;!-- This is the button toggling the off-canvas sidebar --&gt;
&lt;button data-offcanvas="{target:'#my-id'}"&gt;...&lt;/button&gt;

&lt;!-- This is the off-canvas sidebar --&gt;
&lt;div id="my-id" class="offcanvas"&gt;
    &lt;div class="offcanvas-bar"&gt;
        &lt;ul class="nav nav-offcanvas" data-nav&gt;...&lt;/ul&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="off-canvas-panels"><a href="#off-canvas-panels" class="link-reset">Off Canvas panels</a></h2>
					<p>You can place any custom content inside the off-canvas bar. Just wrap it with a <code>&lt;div&gt;</code> and add the <code>.panel</code> class.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<button data-offcanvas="{target:'#offcanvas-5'}">Open</button>
					<div id="offcanvas-5" class="offcanvas">
						<div class="offcanvas-bar">
							<div class="panel">
								<h3 class="panel-title">Panel title</h3> Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							</div>
							<div class="panel">
								<h3 class="panel-title">Panel title</h3> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</div>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;!-- This is the button toggling the off-canvas sidebar --&gt;
&lt;button data-offcanvas="{target:'#my-id'}"&gt;...&lt;/button&gt;

&lt;!-- This is the off-canvas sidebar --&gt;
&lt;div id="my-id" class="offcanvas"&gt;
    &lt;div class="offcanvas-bar"&gt;
        &lt;div class="panel"&gt;...&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="javascript"><a href="#javascript" class="link-reset">JavaScript</a></h2>
					<p>You can open and close the offcanvas via JavaScript:</p>
					<pre><code class="javascript">// Show an off-canvas matching the passed CSS selector
Clique.offcanvas.show('#my-id');

// Hide any active offcanvas. Set force to true, if you don't want any animation.
Clique.offcanvas.hide([force = false]);</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
