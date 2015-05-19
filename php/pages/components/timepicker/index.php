
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Timepicker</h1>
					<p class="article-lead" itemprop="about">Create a timepicker which can easily be used by selecting a time value from a pre filled dropdown.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply the timepicker, just add the <code>data-timepicker</code> attribute to an <code>&lt;input&gt;</code> element. The timepicker will automatically display a pre filled dropdown on focus, which can be navigated by pressing the up or down button on the keyboard or by scrolling with the mouse.</p>
					<h3 class="docs-article-subtitle">Dependencies</h3>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Component</th>
									<th>Files</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><a href="<?php echo get_url('core/'); ?>">Core</a></td>
									<td><code>js/core/core.js</code></td>
									<td>The core file is necessary to perform basic utility methods and register the component in the global namespace.</td>
								</tr>
								<tr>
									<td><a href="<?php echo get_url('core/dropdown'); ?>">Dropdown</a></td>
									<td>
										<code>css/core/dropdown.css</code>
										<code>js/core/dropdown.js</code>
									</td>
									<td>Creates the dropdown used by the user the select the time.</td>
								</tr>
								<tr>
									<td><a href="<?php echo get_url('components/autocomplete'); ?>">Autocomplete</a></td>
									<td><code>js/components/autocomplete.js</code></td>
									<td>Allows for basic template rendering for improved performance and scalability.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Default Implementation</h3>
					<form class="form">
						<input type="text" id="form-time" data-timepicker>
					</form>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;input type="text" data-timepicker&gt;</code></pre>
					<hr>
					<h2 id="display-meridian-time"><a href="#display-meridian-time" class="link-reset">Display meridian time</a></h2>
					<p>To display meridian time, just define the <em>format</em> option and set it to <code>12h</code></p>
					<h3 class="docs-article-subtitle">Example</h3>
					<form class="form">
						<input type="text" id="form-time-meridian" data-timepicker="{format:'12h'}">
					</form>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;input type="text" data-timepicker="{format:'12h'}"&gt;</code></pre>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Option</th>
									<th>Possible value</th>
									<th>Default</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>format</code></td>
									<td>'24h' or '12h'</td>
									<td>'24h'</td>
									<td>Defines the preferred time notation</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Component Init:</h3>
						</div>
						<div class="col">
							<ul class="tab" data-switcher="{connect:'.grid-one'}">
								<li class="active"><a href="#">Data Attribute</a></li>
								<li><a href="#">jQuery API</a></li>
								<li><a href="#"><?php echo SITENAME; ?> API</a></li>
							</ul>
						</div>
					</div>
					<ul class="switcher grid-one">
						<li>
							<pre><code class="html">
&lt;input type="text" data-timepicker&gt;

&lt;!-- Display 12 hour format --&gt;
&lt;input type="text" data-timepicker="{format:'12h'}"&gt;</code></pre>
						</li>
						<li>
							<pre><code>$(element).clique('timepicker', {
    format : '12h'
}</code></pre>
						</li>
						<li>
							<pre><code>var timepicker = Clique.timepicker(element, {
    format : '12h'
});</code></pre>
						</li>
					</ul>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
