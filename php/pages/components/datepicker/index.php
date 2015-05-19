
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Datepicker</h1>
					<p class="article-lead" itemprop="about">Create a toggleable dropdown with an datepicker.</p>
					<hr>
						<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To create a datepicker, just add the <code>data-datepicker</code> attribute to an <code>&lt;input&gt;</code> element. You also have the possibility of customizing the date format. Just add the <em>format</em> option to the <code>data-datepicker</code> attribute.</p>
					<p>The datepicker detects whether the JavaScript from the <a href="<?php echo get_url('components/form-select'); ?>">Form select component</a> is being loaded. This allows you to quickly toggle between years and months through a select form inside the datepicker.</p>
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
							<form class="form">
								<input type="text" data-datepicker="{format:'MM/DD/YYYY'}"> <span><span class="badge">NOTE</span> Focus on the input to display the datepicker</span>
							</form>
						</li>
						<li>
							<pre><code>&lt;form class="form"&gt;
	&lt;input type="" data-datepicker="{format:'MM/DD/YYYY'}"&gt;
&lt;/form&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript</a></h2>
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
