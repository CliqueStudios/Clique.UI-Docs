
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('get-started'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Project structure</h1>
					<p class="article-lead" itemprop="about">More info coming soon.</p>
					<?php /*
						<h2 id="github"><a href="#github" class="link-reset">GitHub</a></h2>
						<p><?php echo SITENAME; ?> is hosted on <a href="<?php echo REPOSITORY_LINK; ?>" target="_blank">GitHub</a> and licensed under <a href="http://opensource.org/licenses/MIT" target="_blank">MIT license</a>. You're welcome to use it for all your personal and commercial projects. To access all source files, just clone the repository on <a href="<?php echo REPOSITORY_LINK; ?>" target="_blank">GitHub</a> or download the latest version.</p>
						<p><a class="button button-large button-primary" href="<?php echo DOWNLOAD_LINK; ?>">Download source</a></p>
						<hr>
						<h2 id="file-structure"><a href="#file-structure" class="link-reset">File structure</a></h2>
						<p><?php echo SITENAME; ?> is built on <a href="http://lesscss.org" target="_blank">Less</a>, a CSS preprocessor, which adds variables, mixins and much more to CSS. It compiles code written in Less into CSS. The main file structure of <?php echo SITENAME; ?> is as follows.</p>
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
										<td><code>/docs</code></td>
										<td>Contains the very <?php echo SITENAME; ?> Documentation you are looking at right now.</td>
									</tr>
									<tr>
										<td><code>/src</code></td>
										<td>Contains all Less and JavaScript component files.</td>
									</tr>
									<tr>
										<td><code>/tests</code></td>
										<td>Contains test files of all components.</td>
									</tr>
									<tr>
										<td><code>/themes</code></td>
										<td>Contains all additonal theme files organized in sub folders.</td>
									</tr>
									<tr>
										<td><code>/vendor</code></td>
										<td>Contains external libraries, like jQuery and others that are used by <?php echo SITENAME; ?>.</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p>All compiled and minified CSS and JavaScript files, as well as Less and Sass files can be found in the separate <a href="https://github.com/clique/bower-clique">Bower <?php echo SITENAME; ?> repository</a>. Check out the documentation on <a href="<?php echo get_url('get-started/less-sass'); ?>">Less files</a> for more information.</p>
						<hr>
						<h2 id="automate-preprocessing"><a href="#automate-preprocessing" class="link-reset">Automate preprocessing</a></h2>
						<p>To automate the process of compiling Less files into CSS, we use <a href="http://gulpjs.com/">Gulp</a>, a <a href="http://nodejs.org/">Node.js</a> based task runner, that watches the source directory you are working on. Whenever you save changes in the source files, Gulp automatically compiles all files into one single CSS file.</p>
						<p>Firstly, you need to install Node and setup the <code>gulp</code> as a global install. Finally, switch to the <?php echo SITENAME; ?> directory and install the Node dependencies.</p>
						<pre><code>npm install -g gulp

cd clique
npm install</code></pre>
						<p>Now you can run Gulp to build and modify the release. The built version of <?php echo SITENAME; ?> will be put in the <code>/dist</code> directory. Pass a theme name parameter to only build the specified theme.</p>
						<pre><code>gulp [-t themename]</code></pre>
						<p>You can also set Gulp to watch your working directory, so it will preprocess your files automatically everytime you hit save. Pass the theme parameter to watch only a specified theme to speed up the build process.</p>
						<pre><code>gulp watch [-t themename]</code></pre>
						<p>Load new themes and styles into the customizer.</p>
						<pre><code>gulp indexthemes</code></pre>
						<hr>
						<h2 id="tests"><a href="#tests" class="link-reset">Tests</a></h2>
						<p><?php echo SITENAME; ?> provides test files for every component. Each of these pages contains test cases of its component and gives you an overview of all the possibilities that are supported out of the box.</p>
						<p><?php echo SITENAME; ?> uses <a href="http://www.browsersync.io/">BrowserSync</a> to accelerate your workflow. Run <code>gulp watch [-t themename]</code> and you will be able to see changes on-the-fly, not only in your browser but across multiple devices, when working on your own theme or modifying existing ones. You can switch between all components and themes within the tests and even switch to RTL mode.</p>
						<p><a class="button button-large button-primary" href="<?php echo get_url('tests/'); ?>" target="_blank">Go to tests</a></p>
					*/ ?>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
