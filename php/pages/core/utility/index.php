
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Utility</h1>
					<p class="article-lead" itemprop="about">A collection of useful utility classes to style your content.</p>
					<?php /*
.margin
.margin-top
.margin-bottom
.margin-left
.margin-right
.margin-large
.margin-large-top
.margin-large-bottom
.margin-large-left
.margin-large-right
.margin-small
.margin-small-top
.margin-small-bottom
.margin-small-left
.margin-small-right
.margin-remove
.margin-remove-top
.margin-remove-bottom
.border-circle
.border-rounded
.heading-large
.link
.link-reset
.link-muted
.scrollable-text
.scrollable-box
.scrollable-box
.overflow-container
.position-top
.position-top-left
.position-top-right
.position-bottom
.position-bottom-left
.position-bottom-right
.position-cover
.position-absolute
.position-relative
.display-block
.display-inline
.display-inline-block
.visible-small
.visible-medium
.visible-large
.hidden-small
.hidden-medium
.hidden-large
.hidden
.invisible
.visible-hover
.visible-hover-inline
.hidden-notouch
*/ ?>


					<?php
						require_once __DIR__ . '/objects/container.php';
						require_once __DIR__ . '/objects/clear-float.php';
						require_once __DIR__ . '/objects/alignment.php';
						require_once __DIR__ . '/objects/vertical-alignment.php';
						require_once __DIR__ . '/objects/height.php';
						require_once __DIR__ . '/objects/responsive.php';
						require_once __DIR__ . '/objects/margin.php';
						require_once __DIR__ . '/objects/border-radius.php';
						require_once __DIR__ . '/objects/link.php';
						require_once __DIR__ . '/objects/scrollable.php';
						require_once __DIR__ . '/objects/overflow.php';
						require_once __DIR__ . '/objects/position.php';
						require_once __DIR__ . '/objects/display.php';
						require_once __DIR__ . '/objects/visibility.php';
						require_once __DIR__ . '/objects/responsive1.php';
						get_microdata('author');
					?>
				</article>
			</div>
		</div>
	</div>
</div>
