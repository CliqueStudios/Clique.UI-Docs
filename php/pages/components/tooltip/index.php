
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Tooltip</h1>
					<p class="article-lead" itemprop="about">Easily create a nicely looking tooltip.</p>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>data-tooltip</code> attribute to an element. You also need to add a title attribute, whose value will represent your tooltip's text.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<p>
						<button data-tooltip title="Lorem Ipsum...">Hover me</button>
						<span data-tooltip title="Lorem Ipsum...">Hover me</span>
					</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;button data-tooltip title=""&gt;Lorem Ipsum...&lt;/button&gt;
&lt;span data-tooltip title=""&gt;Lorem Ipsum...&lt;/span&gt;</code></pre>
					<hr>
					<h2 id="alignment"><a href="#alignment" class="link-reset">Alignment</a></h2>
					<p>Add one of the following examples as a <code>data-tooltip</code> attribute to adjust the tooltip's alignment.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Attribute</th>
									<th>Description</th>
									<th>Example</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>data-tooltip="top"</code> or <code>data-tooltip</code></td>
									<td>Aligns the tooltip to the top (Default).</td>
									<td>
										<button data-tooltip="top" title="Tooltip!">Hover me</button>
									</td>
								</tr>
								<tr>
									<td><code>data-tooltip="bottom"</code></td>
									<td>Aligns the tooltip to the bottom.</td>
									<td>
										<button data-tooltip="bottom" title="Tooltip!">Hover me</button>
									</td>
								</tr>
								<tr>
									<td><code>data-tooltip="left"</code></td>
									<td>Aligns the tooltip to the left.</td>
									<td>
										<button data-tooltip="left" title="Tooltip!">Hover me</button>
									</td>
								</tr>
								<tr>
									<td><code>data-tooltip="right"</code></td>
									<td>Aligns the tooltip to the right.</td>
									<td>
										<button data-tooltip="right" title="Tooltip!">Hover me</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code class="html">&lt;button data-tooltip="bottom" title=""&gt;...&lt;/button&gt;</code></pre>
					<h3 class="docs-article-subtitle">Associated Files</h3>
					<pre><code class="markdown">
/css
	/core
		...
    /components
        tooltip.css
        tooltip.min.css
</code></pre>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
