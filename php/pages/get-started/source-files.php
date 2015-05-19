
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('get-started'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Source Files</h1>
					<p class="article-lead" itemprop="about">Information about the source files used to create <?php echo SITENAME; ?>.</p>
					<hr>
					<div class="row flex flex-middle">
						<div class="col">
							<img src="<?php echo get_image('less.svg'); ?>" style="height:50px;" alt="<?php echo SITENAME; ?> is built with LESS">
						</div>
						<div class="col">
							<h2 class="docs-article-title">Built with LESS</h2>
						</div>
					</div>
					<p>All CSS files included with <?php echo SITENAME; ?> are built with a CSS pre-processor language, Less. Less allows us to extend the CSS markup for greater consistency and to take advantage of it's many features and benefits.</p>
					<p>To learn more about Less, <a href="http://lesscss.org" target="_blank">visit their website</a>. To learn how to integrate the <?php echo SITENAME; ?> Less files into your project, visit the <a href="<?php echo get_url('get-started/less/'); ?>">Less/CSS</a> page within this documentation.</p>
					<hr>
					<div class="row flex flex-middle">
						<div class="col">
							<img src="<?php echo get_image('coffeescript.svg'); ?>" style="height:50px;" alt="<?php echo SITENAME; ?> is built with CoffeeScript">
						</div>
						<div class="col">
							<h2 class="docs-article-title">Built with CoffeeScript</h2>
						</div>
					</div>
					<p>Just as Less is a CSS pre-processor, CoffeeScript is a JavaScript pre-processor language used to extend the language. <?php echo SITENAME; ?> uses CoffeeScript in the same way that it uses Less &ndash; to take advantage of it's extensibility and allow for consistency and greater linting and hinting during the compiling process.</p>
					<p>To learn more about CoffeeScript, <a href="http://coffeescript.org" target="_blank">visit their website</a>. To learn how to integrate the <?php echo SITENAME; ?> CoffeeScript files into your project, visit the <a href="<?php echo get_url('get-started/coffeescript/'); ?>">CoffeeScript/JavaScript</a> page within this documentation.</p>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
