
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('get-started'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Get started</h1>
					<p class="article-lead" itemprop="about">Get familiar with the basic setup and structure of <?php echo SITENAME; ?>.</p>
					<p>Begin by downloading <?php echo SITENAME; ?>, or if you'd rather clone or download directly from the repository you can do so on <a href="<?php echo REPOSITORY_LINK; ?>" target="_blank">GitHub</a>.</p>
					<p><a class="button button-large button-primary" href="<?php echo DOWNLOAD_LINK; ?>">Download <?php echo SITENAME; ?></a></p>
					<hr>
					<h2 id="file-structure"><a href="#file-structure" class="link-reset">Project Structure</a></h2>
					<p>In the ZIP file you will find all CSS, JavaScript and font files ready to use for your project. The core framework of <?php echo SITENAME; ?> has very little aesthetic style applied to it in order to maintain high performance standards and leave you with a simple, clean framework.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Folder</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>/css</code></td>
									<td>Contains all <?php echo SITENAME; ?> CSS files and minified versions.</td>
								</tr>
								<tr>
									<td><code>/fonts</code></td>
									<td>Contains fonts used in <?php echo SITENAME; ?>. For the time being, this only includes <a href="http://icomoon.io" target="_blank">IcoMoon</a>.</td>
								</tr>
								<tr>
									<td><code>/js</code></td>
									<td>Contains all <?php echo SITENAME; ?> JavaScript files and minified versions.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h2 id="html-page-markup"><a href="#html-page-markup" class="link-reset">HTML Page Markup</a></h2>
					<p>To load <?php echo SITENAME; ?> into your project, simply include the files on the desired pages as you would any other CSS or JavaScript files. As noted in the example below, we recommend loading all JavaScript files, including all <?php echo SITENAME; ?> JavaScript files, in the footer of the your document body. Doing so allows for faster page rendering and reduced load times.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;

    &lt;head&gt;
        &lt;title&gt;&lt;/title&gt;
        &lt;link rel="stylesheet" href="clique.min.css" /&gt;
    &lt;/head&gt;

    &lt;body&gt;
        ...
        &lt;script src="jquery.js">&lt;/script&gt;
        &lt;script src="clique.min.js">&lt;/script&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
					<p>Once you have finished implementing <?php echo SITENAME; ?> into your webpage, take a look at the <a href="<?php echo get_url('core/'); ?>"><?php echo SITENAME; ?> components</a> and get an overview of what thee framework has to offer.</p>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
