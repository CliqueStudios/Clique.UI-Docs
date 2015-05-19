
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('javascript'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">API Reference</h1>
					<p class="article-lead" itemprop="about">A robust collection of JavaScript utilities, plugins, and event listeners.</p>
					<p>In addition to it's core methods and components, <?php echo SITENAME; ?> provides a robust library of of prototype extensions, utility methods, and event listeners for greater control of DOM manipulation and layout rendering, all under the same API and namespace.</p>
					<p>The default build of <?php echo SITENAME; ?> contains all event listeners and utilities, though not all are used by the core <?php echo SITENAME; ?> methods. Get started by downloading <?php echo SITENAME; ?></p>
					<p><a class="button button-large button-primary" href="<?php echo DOWNLOAD_LINK; ?>">Download <?php echo SITENAME; ?></a></p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Requirements</a></h2>
					<p><?php echo SITENAME; ?> is dependent on jQuery, and must be referenced after jQuery is called. It's recommended that at least version 2.1.1 of jQuery is used, as earlier versions may cause <?php echo SITENAME; ?> to break or cause performance issues.</p>
					<p>For increased page-load time and performance, we recommend loading all <?php echo SITENAME; ?> JavaScript files and dependencies from the footer of the document:</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;!DOCTYPE&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Your Awesome Site&lt;/title&gt;
        &lt;link rel="stylesheet" href="css/clique.css"&gt;
    &lt;/head&gt;
    &lt;body&gt;

    ...

    &lt;script src="js/jquery.js"&gt;&lt;/script&gt;
    &lt;script src="js/clique.js"&gt;&lt;/script&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
					<hr>
					<h3 id="grid-gutter"><a href="#grid-gutter" class="link-reset">Loading Components</a>
					</h3>
					<p>If you want to include the additional <?php echo SITENAME; ?> components in your project, load the files after the main <code>clique.js</code> file.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;!DOCTYPE&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Your Awesome Site&lt;/title&gt;
        &lt;link rel="stylesheet" href="css/clique.css"&gt;

        &lt;!-- Component CSS files --&gt;
        &lt;link rel="stylesheet" href="css/clique/switch.css"&gt;
    &lt;/head&gt;
    &lt;body&gt;

    ...

    &lt;script src="js/jquery.js"&gt;&lt;/script&gt;
    &lt;script src="js/clique.js"&gt;&lt;/script&gt;

    &lt;!-- Component JS files --&gt;
	&lt;script src="js/clique/switch.js"&gt;&lt;/script&gt;

    &lt;/body&gt;
&lt;/html&gt;</code></pre>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
