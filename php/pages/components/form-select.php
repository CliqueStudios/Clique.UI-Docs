
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Form Select</h1>
					<p class="article-lead" itemprop="about">Replace the default select form with your own HTML content, like a button or text.</p>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, just add the <code>.form-select</code> class and the <code>data-form-select</code> attribute to a container element around a span and a <code>&lt;select&gt;</code> element. Basically, this will overlay the default select element with a custom <?php echo SITENAME; ?> form.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="margin">
						<div class="form-select" data-form-select>
							<span></span>
							<select>
								<option value="1">Option 01</option>
								<option value="2">Option 02</option>
								<option value="3">Option 03</option>
								<option value="4">Option 04</option>
							</select>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="form-select" data-form-select&gt;
    &lt;span&gt;&lt;/span&gt;
    &lt;select&gt;
        &lt;option value=""&gt;...&lt;/option&gt;
        &lt;option value=""&gt;...&lt;/option&gt;
    &lt;/select&gt;
&lt;/div&gt;</code></pre>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
