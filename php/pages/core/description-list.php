
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Description list</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking description lists, which come in different styles.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>There is no component class necessary to create a description list, but <?php echo SITENAME; ?> provides a couple of modifier classes to display the list in a different style. The modifiers of the Description list component are <em>not</em> combinable with each other.</p>
					<h3>Description list horizontal</h3>
					<p>Add the <code>.dl-horizontal</code> class to display terms and descriptions side by side.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#dl-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="dl-tabs" class="switcher margin">
						<li>
							<dl class="dl-horizontal">
								<dt>Description lists</dt>
								<dd>A description list defines terms and their corresponding descriptions.</dd>
								<dt>Lorem ipsum</dt>
								<dd>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
								<dt>A long term is truncated</dt>
								<dd>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</dd>
							</dl>
						</li>
						<li>
							<pre><code>&lt;dl class="dl-horizontal"&gt;
    &lt;dt&gt;...&lt;/dt&gt;
    &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Responsive behavior</h3>
					<p>In narrower viewports, like phones, the style will change back to the default stacked description list.</p>
					<hr>
					<h3>Description list line</h3>
					<p>Add the <code>.dl-line</code> class to separate the description list items with lines.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#dl1-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="dl1-tabs" class="switcher margin">
						<li>
							<dl class="dl-line">
								<dt>Description lists</dt>
								<dd>A description list defines terms and their corresponding descriptions.</dd>
								<dt>Lorem ipsum</dt>
								<dd>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
								<dt>Ut enim</dt>
								<dd>Ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
							</dl>
						</li>
						<li>
							<pre><code>&lt;dl class="dl-line"&gt;
    &lt;dt&gt;...&lt;/dt&gt;
    &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
						</li>
					</ul>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
