
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 id="bottom" class="article-title">Smooth scroll</h1>
					<p class="article-lead" itemprop="about">Enhance your site with a nice effect that slows down the scrolling when jumping to another part of your page.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To gradually descrease the speed when you jump from one section of your page to another, for example with a to-top scroller, just add the <code>data-smooth-scroll</code> attribute to an <code>&lt;a&gt;</code> element, that links to the ID of the section you want to target.</p>
					<?php
					$text = '<a href="#top" class="button" data-smooth-scroll>Go Up!</a>
<a href="#bottom" class="button" data-smooth-scroll>Go Down!</a>';
						print_example($text);
					?>
					<hr>
					<h2 id="offset"><a href="#offset" class="link-reset">Offset</a></h2>
					<p>The offset-option adds a specified distance to the target when calculating the scroll position. The offset is passed via the data-attribute. The value can be positive to stop scrolling before the target or negative to stop scrolling after the target.</p>
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
									<td><code>data-smooth-scroll="{offset: 90}"</code></td>
									<td>Adds an offset, that stops scrolling 90px before the target.</td>
								</tr>
								<tr>
									<td><code>data-smooth-scroll="{offset: -90}"</code></td>
									<td>Adds an offset, that stops scrolling 90px after the target.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<?php
					$text = '<p><a href="#bottom" data-smooth-scroll="{offset: 90}">This link</a> scrolls the site to the headline &quot;Smooth scroll&quot; with an offset of <code>90px</code>.</p>
<p><a href="#bottom" data-smooth-scroll="{offset: -90}">This link</a> scrolls the site to the headline &quot;Smooth scroll&quot; with an offset of <code>-90px</code>.</p>';
						print_example($text);
					?>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
