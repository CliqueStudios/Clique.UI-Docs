
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Badge</h1>
					<p class="article-lead" itemprop="about">Easlily create nicely looking badges to label and highlight your content.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To create a badge, just add the <code>.badge</code> class to a <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code> element.</p>
					<?php
					$text = '<p>
	<span class="badge">Info</span>
	<span class="badge">New</span>
	<span class="badge">Free</span>
</p>';
						print_example($text);
					?>
					<hr>
					<h2 id="modifiers"><a href="#modifiers" class="link-reset">Modifiers</a></h2>
					<p>To display badges in a different style, just add modifier classes to the <code>.badge</code> class. These modifiers can be combined with each other.</p>
					<h3>Notification</h3>
					<p>Add the <code>.badge-notification</code> class to indicate a notification, typically it is used with numbers.</p>
					<?php
					$text = '<p>
	<span class="badge badge-notification">1</span>
	<span class="badge badge-notification">2</span>
	<span class="badge badge-notification">3</span>
	<span class="badge badge-notification">10</span>
	<span class="badge badge-notification">100</span>
</p>';
						print_example($text);
					?>
					<hr>
					<h3>Color Modifier</h3>
					<p>Add the <code>.badge-success</code>, <code>.badge-warning</code> or <code>.badge-danger</code> class for additional colors.</p>
					<?php
					$text = '<p>
	<span class="badge badge-success">Success</span>
	<span class="badge badge-warning">Warning</span>
	<span class="badge badge-danger">Danger</span>
</p>
<p>
	<span class="badge badge-notification badge-success">1</span>
	<span class="badge badge-notification badge-success">10</span>
	<span class="badge badge-notification badge-warning">1</span>
	<span class="badge badge-notification badge-warning">10</span>
	<span class="badge badge-notification badge-danger">1</span>
	<span class="badge badge-notification badge-danger">10</span>
</p>';
						print_example($text);
					?>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
