
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Components</h1>
					<p class="article-lead" itemprop="about">All kinds of useful, additional components which are not included in <?php echo SITENAME; ?> itself.</p>
					<p><?php echo SITENAME; ?> offers some advanced components that are not included in the <?php echo SITENAME; ?> core framework. Usually you wouldn't use these components in your everyday website. They include stuff like nestables and datepickers, which will come in handy, if you create advanced user interfaces like administration areas.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>After you've <a href="<?php echo DOWNLOAD_LINK; ?>">downloaded <?php echo SITENAME; ?></a>, you can find all additional components in separate <code>/css</code> and <code>/js</code> folders:</p>
					<pre><code>/css
	/components
		&lt;!-- Component CSS and minified version --&gt;
		autocomplete.css
		autocomplete.min.css
		...

/js
	/components
		&lt;!-- JavaScript of the component and minified version --&gt;
		autocomplete.js
		autocomplete.min.js ...</code></pre>
					<p>To use one of these components, all you need to do is to add the CSS and the component's JavaScript to the header of your document.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;

	&lt;head&gt;
		&lt;title&gt;&lt;/title&gt;
		&lt;link rel="stylesheet" href="clique.min.css" /&gt;
		&lt;script src="jquery.js">&lt;/script&gt;
		&lt;script src="clique.min.js">&lt;/script&gt;

		&lt;!-- Autocomplete CSS --&gt;
		&lt;link rel="stylesheet" href="components/autocomplete.css"&gt;

		&lt;!-- Autocomplete Javascript --&gt;
		&lt;script src="components/autocomplete.js"&gt;&lt;/script&gt;
	&lt;/head&gt;

	&lt;body&gt;
	...
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
