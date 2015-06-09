
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Alert</h1>
					<p class="article-lead" itemprop="about">Defines styles for alert messages</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, reiciendis.</p>

					<?php

						require_once __DIR__ . '/objects/usage.php';
						// require_once __DIR__ . '/objects/video.php';
						// require_once __DIR__ . '/objects/iframe.php';
						// require_once __DIR__ . '/objects/responsive.php';
						// require_once __DIR__ . '/objects/video2.php';
						// require_once __DIR__ . '/objects/content.php';
						get_microdata('author');

					?>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, dolor.</p>
					<p><span class="badge badge-info">NOTE</span> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, placeat.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#alert-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="alert-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped">
									<thead>
										<tr>
											<th>Class</th>
											<th>Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.alert</code></td>
											<td>Add this class to a <code>&lt;div&gt;</code> element to define the Alert component.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="col-6-12-medium">
								<div class="alert">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="alert"&gt;
	...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="modifiers"><a href="#modifiers" class="link-reset">Modifiers</a></h2>
					<h3>Alert - Success</h3>
					<p>Add the <code>.alert-success</code> class to create the <em>alert success</em> modifier.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#alert-success-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="alert-success-tabs" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<div class="alert alert-success">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="alert alert-success"&gt;
	...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Alert - Warning</h3>
					<p>Add the <code>.alert-warning</code> class to create the <em>alert warning</em> modifier.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#alert-warning-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="alert-warning-tabs" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<div class="alert alert-warning">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="alert alert-warning"&gt;
	...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Alert - Danger</h3>
					<p>Add the <code>.alert-danger</code> class to create the <em>alert danger</em> modifier.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#alert-danger-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="alert-danger-tabs" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<div class="alert alert-danger">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="alert alert-danger"&gt;
	...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Alert - Large</h3>
					<p>Add the <code>.alert-large</code> class to create the <em>alert large</em> modifier.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#alert-large-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="alert-large-tabs" class="switcher margin">
						<li>
							<div class="col-6-12-medium">
								<div class="alert alert-large">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="alert alert-large"&gt;
	...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>


					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
