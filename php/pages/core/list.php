
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">List</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking lists, which come in different styles.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>.list</code> class to an unordered or ordered list. The list will now display without any spacing or list-style.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list-tabs" class="switcher margin">
						<li>
							<ul class="list-unstyled">
								<li>List item 1</li>
								<li>List item 2</li>
								<li>List item 3</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="list-unstyled"&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="modifiers"><a href="#modifiers" class="link-reset">Modifiers</a></h2>
					<p>To display the list in a different style, just add a modifier class to the the <code>.list</code> class. The modifiers of the List component are <em>not</em> combinable with each other.</p>
					<h3>List line</h3>
					<p>Add the <code>.list-line</code> class to separate list items with lines.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list1-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list1-tabs" class="switcher margin">
						<li>
							<ul class="list-unstyled list-line col-4-12-medium">
								<li>List item 1</li>
								<li>List item 2</li>
								<li>List item 3</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="list-unstyled list-line"&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>List striped</h3>
					<p>Add zebra-striping to a list using the <code>.list-striped</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list2-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list2-tabs" class="switcher margin">
						<li>
							<ul class="list-unstyled list-striped col-4-12-medium">
								<li>List item 1</li>
								<li>List item 2</li>
								<li>List item 3</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="list-unstyled list-striped"&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>List space</h3>
					<p>Add the <code>.list-space</code> class to increase the spacing between list items.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#list3-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="list3-tabs" class="switcher margin">
						<li>
							<ul class="list-unstyled list-space col-4-12-medium">
								<li>This modifier may be useful for for list items with multiple lines of text.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
								<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco.</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="list-unstyled list-space"&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
