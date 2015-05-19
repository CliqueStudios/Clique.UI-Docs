
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('get-started'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Compiling &amp; Building <?php echo SITENAME; ?></h1>
					<p class="article-lead" itemprop="about">More info coming soon.</p>
					<p>Because Clique.UI is open-source, we invite any developer interested in contributing to do so. In order to contribute, perform the following steps:</p>
					<hr>
					<ol>
						<li>If necessary, <a href="https://nodejs.org/" target="_blank">install Node.js</a> following the steps on their website.</li>
						<li>Clone the <?php echo SITENAME; ?> repo: `git clone https://github.com/CliqueStudios/Clique.UI.git`</li>
						<li>Install the required Node packages: `sudo npm install`</li>
						<li>Make the changes you'd like in the `.less` or `.coffee` files</li>
						<li>Compile and build the source files: `grunt build`</li>
					</ol>
					<hr>
					<h2 id="commands"><a href="#commands" class="link-reset">Grunt Commands</a></h2>
					<p><?php echo SITENAME; ?> is compiled and built using <a href="http://guntjs.com" target="_blank">Grunt</a>, a task-management tool build on top of Node.js. For the most efficient use of Grunt, we created several custom tasks:</p>
					<div class="overflow-container">
						<table>
							<thead>
								<tr>
									<th>Command</th>
									<th>Sub-Commands</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>build-css</code></td>
									<td><pre><code class="bash">clean:css<br>
less<br>
cleaner_css<br>
cssmin<br>
csscomb<br>
jsbeautifier:css</code></pre></td>
									<td>The <code>build-css</code> command will first clean out the <em>dist</em> directory and compile the <code>.less</code> files, and then will minify, clean, and sort the compiled CSS.</td>
								</tr>
								<tr>
									<td><code>build-js</code></td>
									<td><pre><code class="bash">coffee
concat
uglify
jsbeautifier:js</code></pre></td>
									<td>The <code>build-js</code> command will compile all <code>.coffee</code> files and concatonate, clean, and beautify the resulting JavaScript.</td>
								</tr>
								<tr>
									<td><code>autotest</code></td>
									<td><pre><code class="bash">clean:results
jshint
casperjs</code></pre></td>
									<td><code>autotest</code> runs all the test commands in sequence - beginning by hinting at any JavaScript errors and warning, and then running recurisve functional tests with <a href="http://casperjs.org" target="_blank">CasperJS</a>.</td>
								</tr>
								<tr>
									<td><code>build</code></td>
									<td><pre><code class="bash">build-css
build-js</code></pre></td>
									<td>The <code>build</code> command simply runs the <code>build-css</code> and <code>build-js</code> commands.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
