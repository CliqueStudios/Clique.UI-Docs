
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('javascript'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Public Methods</h1>
					<p class="article-lead" itemprop="about">Publically available objects accessed through the global Clique object.</p>
					These objects are used to cache global variables and are readable at any point following the <code>domready.clique.dom</code> event has been fired.
					<hr>
					<div class="docs-panel-list">
						<?php
							$pages = get_api_links();
							$pages = $pages['Methods'];
							foreach($pages as $page) {
								if(!is_object($page)) {
									$page = (object)$page;
								}
								if(!isset($page->description)) {
									$page->description = '';
								}
								if($page->title == 'Overview') {
									continue;
								}
								?>
								<div class="panel panel-box panel-header">
									<h3 class="panel-title clearfix"><a href="<?php echo get_url($page->slug); ?>"><?php echo $page->title; ?></a> <small class="float-right">Since v1.0.0</small></h3>
									<?php echo $page->description; ?>
									<br><a href="<?php echo get_url($page->slug); ?>" class="button">Learn More <i class="icon icon-angle-right"></i></a>
								</div>
								<?php
							}
						?>
					</div>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
