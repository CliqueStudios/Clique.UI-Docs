
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Close</h1>
					<p class="article-lead" itemprop="about">Defines styles for a close button that can be combined with different components.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>.close</code> class to an <code>&lt;a&gt;</code> or <code>&lt;button&gt;</code> element.</p>
					<?php
					$text = '<a href="#" class="close"></a>';
						print_example($text);
					?>
					<hr>
					<h2 id="style-modifier"><a href="#style-modifier" class="link-reset">Style modifier</a></h2>
					<p>Add the <code>.close-alt</code> class to apply an alternative styling to the close button.</p>
					<?php
					$text = '<a href="#" class="close close-alt"></a>';
						print_example($text);
					?>
					<hr>
					<h2 id="close-in-alerts"><a href="#close-in-alerts" class="link-reset">Close in alerts</a></h2>
					<p>This is an example of how this component is used with an alert box from the <a href="<?php echo get_url('core/alert'); ?>">Alert component</a>.</p>
					<?php
					$text = '<div class="alert alert-success" data-alert>
	<a href="#" class="alert-close close"></a>
	<p>This is a alert using an a element as close button.</p>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="close-in-modals"><a href="#close-in-modals" class="link-reset">Close in modals</a></h2>
					<p>This is an example of how this component is used with the <a href="<?php echo get_url('core/modal'); ?>">Modal component</a>.</p>
					<?php
					$text = '<p><button data-modal="{target:\'#modal\'}">Button</button></p>
<div id="modal" class="modal">
	<div class="modal-dialog modal-dialog-lightbox">
		<button class="modal-close close close-alt"></button>
		<img src="<?php echo get_image(\'placeholder_600x400.jpg\'); ?>" width="600" height="400" alt="">
	</div>
</div>';
						print_example($text);
					?>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
