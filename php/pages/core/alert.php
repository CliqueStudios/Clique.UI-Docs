
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Alert</h1>
					<p class="article-lead" itemprop="about">Defines styles for success, warning and error messages.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>.alert</code> class to a block element.</p>
					<?php
					$text = '<div class="alert">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</div>';
						print_example($text);
					?>
					<hr>
					<h3>Close button</h3>
					<p>To apply a close button, add the <code>.alert-close</code> class to a <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> element inside the alert box. To enable the JavaScript for the close button, just add the <code>data-alert</code> attribute to the alert box. We recommend adding the <code>.close</code> class from the <a href="<?php echo get_url('core/close'); ?>">Close component</a> to give the button a proper styling, though you can also use text or an image.</p>
					<?php
					$text = '<div class="alert" data-alert>
	<a href="#" class="alert-close close"></a>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="color-modifiers"><a href="#color-modifiers" class="link-reset">Color modifiers</a></h2>
					<p>There are several color modifiers available. Just add one of the following classes to apply a different look.</p>
					<?php
					$text = '<div class="alert alert-success" data-alert>
	<a href="#" class="alert-close close"></a>
	<p>To indicate success or a positive message add the <code>.alert-success</code> class.</p>
</div>
<div class="alert alert-warning" data-alert>
	<a href="#" class="alert-close close"></a>
	<p>To indicate a message containing a warning add the <code>.alert-warning</code> class.</p>
</div>
<div class="alert alert-danger" data-alert>
	<a href="#" class="alert-close close"></a>
	<p>To indicate an important message add the <code>.alert-danger</code> class.</p>
</div>';
						print_example($text);
					?>
					<h3 class="docs-article-subtitle">Example</h3>
					<hr>
					<h2 id="size-modifier"><a href="#size-modifier" class="link-reset">Size modifier</a></h2>
					<p>Add the <code>.alert-large</code> class to increase the spacing in an alert box. This can be useful, if you want to use richer typography.</p>
					<?php
					$text = '<div class="alert alert-large" data-alert>
	<a href="#" class="alert-close close"></a>
	<h2>Today\'s headline</h2>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>';
						print_example($text);
					?>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
