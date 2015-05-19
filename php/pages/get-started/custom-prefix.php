
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('get-started'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" style="min-height:50vh;">
					<h1 class="article-title" itemprop="headline">Custom prefix</h1>
					<p class="article-lead" itemprop="about">Create a custom prefixed <?php echo SITENAME; ?> builds to avoid issues when using multiple <?php echo SITENAME; ?> versions side by side.</p>
					<p>As we keep releasing newer versions of <?php echo SITENAME; ?>, some components or classes will be altered or dismissed, while more and more themes and extensions are built with <?php echo SITENAME; ?> and loaded on the same page. This might cause conflicts when classes that occur in both versions are working differently.</p>
					<p>That's why you can custom prefix your <?php echo SITENAME; ?> version. Basically this will replace the usual <code></code> with whatever prefix you set.</p>
					<hr>
					<h2>Prefix via Less</h2>
					<p>If you are not familiar with the usage of <code>gulp</code>, check out our doc on <a href="<?php echo get_url('get-started/project-structure'); ?>#automate-preprocessing">automating preprocessing</a> to find out how to create a <?php echo SITENAME; ?> build. To create a custom prefixed <?php echo SITENAME; ?> release just run gulp with your own prefix parameter <code>-p</code> to have all classes and JavaScript files custom prefixed.</p>
					<pre><code>gulp -p myprefix</code></pre>
					<p>After running gulp you'll find your custom prefixed build in the dist folder. e.g.:</p>
					<pre><code>.myprefix-grid { ... } ...</code></pre>
					<hr>
					<h2>JavaScript noConflict mode</h2>
					<p>To prevent conflicts with multiple custom prefixed <?php echo SITENAME; ?> versions, just call the <code>noConflict</code> method <strong>after</strong> including <?php echo SITENAME; ?>:</p>
					<pre><code>var myClique = Clique.noConflict();</code></pre>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
