
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Radios &amp; Checkboxes</h1>
					<p class="article-lead" itemprop="about">Apply a custom style to radio and checkbox inputs.</p>
					<p><?php echo SITENAME; ?> styles radios and checkboxes through a combined use of the CSS property <em>appearance</em> and custom markup applied by the <a href="<?php echo get_url('core/form'); ?>">Form Component</a>. By using JavaScript to help create the Radio and Checkbox components, <?php echo SITENAME; ?> is able to fire custom events when a user interacts with your form elements.</p>
					<p>If you don't include the <a href="<?php echo get_url('core/form'); ?>">Form Component</a> in your build of <?php echo SITENAME; ?> radios and checkboxes will fall back to the native browser style.</p>
					<?php

						require_once __DIR__ . '/objects/usage.php';
						require_once __DIR__ . '/objects/js.php';
						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
