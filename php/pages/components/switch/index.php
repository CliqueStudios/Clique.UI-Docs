
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article">
					<h1 class="article-title" itemprop="headline">Switch</h1>
					<p class="article-lead" itemprop="about">Replace standard checkboxes with an on/off switch.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply the Switch component, add the <code>data-switch</code> attribute to a checkbox and load the Switch component files on your page. The component JavaScript will create the HTML and bind all events.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#switch-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="switch-tabs" class="switcher margin">
						<li>
							<input type="checkbox" data-switch>
						</li>
						<li>
							<pre><code>&lt;input type="checkbox" data-switch&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="javascript"><a href="#javascript" class="link-reset">JavaScript</a></h2>
					<?php
						require_once __DIR__ . '/js/options.php';
						require_once __DIR__ . '/js/init.php';
						require_once __DIR__ . '/js/events.php';
					?>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
