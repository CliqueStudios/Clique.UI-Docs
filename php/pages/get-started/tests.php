
<div class="docs-middle">
		<div class="container container-center">
			<div class="row" data-row-margin>

				<?php get_sidebar('get-started'); ?>

				<div class="docs-main col-9-12-medium">
					<article class="article" itemscope itemtype="http://schema.org/Article">
						<h1 class="article-title" itemprop="headline">Tests</h1>
						<p class="article-lead">Insight into our testing practices, both manual and automated.</p>
						<hr>
						<h2 id="tests"><a href="#tests" class="link-reset">Automated Testing</a></h2>
						<p><?php echo SITENAME; ?> provides test files for every component. Each of these pages contains test cases of its component and gives you an overview of all the possibilities that are supported out of the box.</p>
						<p>In the ZIP file you will find all <?php echo SITENAME; ?> CSS, JavaScript and font files ready to use for your project. The core framework of <?php echo SITENAME; ?> has almost no styling in order to keep it slim. Therefore we provide two addidional distributions with a gradient and an almost flat style. Each style comes as a single CSS file as well as a minified version. Some <a href="components.html">components</a> are also included, which are not part of the core framework and can be added separately to your project.</p>
						<p><a class="button button-large button-primary" href="<?php echo get_url('tests/'); ?>">Go to tests</a></p>
						<hr>
						<h2 id="tests"><a href="#tests" class="link-reset">Manual Test Cases</a></h2>
						<p><?php echo SITENAME; ?> provides test files for every component. Each of these pages contains test cases of its component and gives you an overview of all the possibilities that are supported out of the box.</p>
						<p>In the ZIP file you will find all <?php echo SITENAME; ?> CSS, JavaScript and font files ready to use for your project. The core framework of <?php echo SITENAME; ?> has almost no styling in order to keep it slim. Therefore we provide two addidional distributions with a gradient and an almost flat style. Each style comes as a single CSS file as well as a minified version. Some <a href="components.html">components</a> are also included, which are not part of the core framework and can be added separately to your project.</p>
						<p><a class="button button-large button-primary" href="<?php echo get_url('tests/'); ?>">Go to tests</a></p>
						<?php /*
						<p class="article-lead" itemprop="about">A separate Bower <?php echo SITENAME; ?> repository contains all distribution files including Less and Sass.</p>
						<p>The great thing about <?php echo SITENAME; ?> is that you can easily integrate its source files in your project to keep your custom project workflow for building assets and stay with your preferred CSS preprocessor.</p>
						<p><?php echo SITENAME; ?> uses the package manager <a href="http://bower.io/">Bower</a> to load assets. Therefore <?php echo SITENAME; ?> automatically generates the distributions into a separate <a href="https://github.com/clique/bower-clique">Bower <?php echo SITENAME; ?> repository</a>. It contains all CSS, Less, SCSS and JavaScript files from <?php echo SITENAME; ?> and its components.</p>
						<h3>Get the latest <?php echo SITENAME; ?> distribution</h3>
						<ol>
							<li>Install with <a href="http://bower.io/">Bower</a><code>bower install clique</code></li>
							<li>Or get the Package from <a href="https://github.com/clique/bower-clique/">Github</a></li>
						</ol>
						<p>You'll find both, Less files and Sass files side by side seperated in their own folders: </p>
						<pre><code>/clique
    less/
        clique.less
        ...
</code></pre>
						<h2>Embedding Less in your project</h2>
						<p>Using Less is pretty straightforward. Just include <?php echo SITENAME; ?> and additional components at the top of your main Less file and start customizing by utilizing <?php echo SITENAME . '\'s'; ?> hooks and override its variables.</p>
						<h3 class="docs-article-subtitle">Example</h3>
						<pre><code>@import "clique/less/clique.less";
@import "clique/less/components/autocomplete.less";

// your custom code goes here, e.g. mixins, variables</code></pre>
						*/ ?>
						<?php get_microdata('author'); ?>
					</article>
				</div>
			</div>
		</div>
	</div>
