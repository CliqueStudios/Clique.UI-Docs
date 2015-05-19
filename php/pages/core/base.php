
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>

			<?php get_sidebar('core'); ?>

			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Base</h1>
					<p class="article-lead" itemprop="about">The foundation of all HTML elements for <?php echo SITENAME; ?></p>
					<p>The <em>Base</em> componenet of <?php echo SITENAME; ?> is the foundation for all HTML elements, componenets, and structural layout models. It sets the default font styles, box-model properties, and colors for all elements that could be found on a webpage.</p>
					<p><?php echo SITENAME; ?> is build on top of, and reset by, <a href="http://necolas.github.com/normalize.css" target="_blank">Normalize.css</a>, but unlike most front-end frameworks which simply include the Normalize.css file, we've chopped it up and have included the reset properties in each of it's own components. This was done to maintain performance standards and keep the framework as slim as possible.</p>
					<hr>
					<h2 id="headings"><a href="#headings" class="link-reset">Headings</a></h2>
					<p>Use the <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> elements to define your headings, or add the <code>.h1</code>, <code>.h2</code>, <code>.h3</code>, <code>.h4</code>, <code>.h5</code> or <code>.h6</code> class to any element to apply the corresponding font properties.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#headings-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="headings-tabs" class="switcher margin">
						<li>
							<div class="row">
								<div class="col-6-12">
								<h3 class="docs-article-subtitle text-reset">w/ Native Elements</h3>
									<h1>h1 Heading 1</h1>
									<h2>h2 Heading 2</h2>
									<h3>h3 Heading 3</h3>
									<h4>h4 Heading 4</h4>
									<h5>h5 Heading 5</h5>
									<h6>h6 Heading 6</h6>
								</div>
								<div class="col-6-12">
									<h3 class="docs-article-subtitle text-reset">w/ Header Classes</h3>
									<p class="h1">h1 Heading 1</p>
									<p class="h2">h2 Heading 2</p>
									<p class="h3">h3 Heading 3</p>
									<p class="h4">h4 Heading 4</p>
									<p class="h5">h5 Heading 5</p>
									<p class="h6">h6 Heading 6</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row row-2-cols">
								<div class="col">
									<pre><code>
&lt;h1&gt;h1 Heading 1&lt;/h1&gt;
&lt;h2&gt;h2 Heading 2&lt;/h2&gt;
&lt;h3&gt;h3 Heading 3&lt;/h3&gt;
&lt;h4&gt;h4 Heading 4&lt;/h4&gt;
&lt;h5&gt;h5 Heading 5&lt;/h5&gt;
&lt;h6&gt;h6 Heading 6&lt;/h6&gt;
</code></pre>
								</div>
								<div class="col">
									<pre><code>
&lt;p class="h1"&gt;h1 Heading 1&lt;/p&gt;
&lt;p class="h2"&gt;h2 Heading 2&lt;/p&gt;
&lt;p class="h3"&gt;h3 Heading 3&lt;/p&gt;
&lt;p class="h4"&gt;h4 Heading 4&lt;/p&gt;
&lt;p class="h5"&gt;h5 Heading 5&lt;/p&gt;
&lt;p class="h6"&gt;h6 Heading 6&lt;/p&gt;
</code></pre>
								</div>
							</div>
						</li>
					</ul>
					<hr>
					<h2 id="paragraphs"><a href="#paragraphs" class="link-reset">Paragraphs &amp; Body Text</a></h2>
					<p>The global font-size, line-height and regular margins between elements are set with LESS variables, which can be customized. Paragraphs and other block elements stick to these values.</p>
					<table class="table-striped text-nowrap">
						<thead>
							<tr>
								<th>Property</th>
								<th>Default Value</th>
								<th>Common Computed Value</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><strong>font-weight</strong></td>
								<td>normal</td>
								<td>400</td>
							</tr>
							<tr>
								<td><strong>font-size</strong></td>
								<td>14px</td>
								<td>14px</td>
							</tr>
							<tr>
								<td><strong>line-height</strong></td>
								<td>1.42857143</td>
								<td>20px</td>
							</tr>
							<tr>
								<td><strong>font-family</strong></td>
								<td>"Helvetica Neue", Helvetica, Arial, sans-serif</td>
								<td>The value inherits the first available family listed in the stack.</td>
							</tr>
						</tbody>
					</table>
					<hr>
					<h2 id="text-level-semantics"><a href="#text-level-semantics" class="link-reset">Text-level semantics</a></h2>
					<p>The following list gives you a short overview of the most commonly used text-level semantics and how to utilize them.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th class="col-3-12">Element</th>
									<th class="col-9-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>&lt;a&gt;</code></td>
									<td>Turn text into hypertext using the <a href="#">a element</a>.</td>
								</tr>
								<tr>
									<td><code>&lt;em&gt;</code></td>
									<td>Emphasize text using the <em>em element</em>.</td>
								</tr>
								<tr>
									<td><code>&lt;strong&gt;</code></td>
									<td>Imply any extra importance using the <strong>strong element</strong>.</td>
								</tr>
								<tr>
									<td><code>&lt;code&gt;</code></td>
									<td>Define inline code snippets using the <code>code element</code>.</td>
								</tr>
								<tr>
									<td><code>&lt;del&gt;</code></td>
									<td>Mark document changes as deleted text using the <del>del element</del>.</td>
								</tr>
								<tr>
									<td><code>&lt;ins&gt;</code></td>
									<td>Mark document changes as inserted text using the <ins>ins element</ins>.</td>
								</tr>
								<tr>
									<td><code>&lt;mark&gt;</code></td>
									<td>Highlight text with no semantic meaning using the <mark>mark element</mark>.</td>
								</tr>
								<tr>
									<td><code>&lt;q&gt;</code></td>
									<td>Define inline quotations using <q>q element <q>inside</q> a q element</q>.</td>
								</tr>
								<tr>
									<td><code>&lt;abbr&gt;</code></td>
									<td>Define an abbreviation using the <abbr title="Abbreviation Element">abbr element</abbr> with a title.</td>
								</tr>
								<tr>
									<td><code>&lt;dfn&gt;</code></td>
									<td>Define a definition term using the <dfn title="Defines a definition term">dfn element</dfn> with a title.</td>
								</tr>
								<tr>
									<td><code>&lt;small&gt;</code></td>
									<td>De-emphasize text for small print using the <small>small element</small>.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h2 id="blockquotes"><a href="#blockquotes" class="link-reset">Blockquotes</a></h2>
					<p>For quoting multiple lines of content from another source within your document, use the <code>&lt;blockquote&gt;</code> element.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#blockquotes-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="blockquotes-tabs" class="switcher margin">
						<li>
							<blockquote>
								<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
								<small>Someone famous</small>
							</blockquote>
						</li>
						<li>
							<pre><code>&lt;blockquote&gt;
    &lt;p&gt;...&lt;/p&gt; &lt;!-- Quotation --&gt;
    &lt;small&gt;...&lt;/small&gt; &lt;!-- Source --&gt;
&lt;/blockquote&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="code-blocks"><a href="#code-blocks" class="link-reset">Code blocks</a></h2>
					<p>For multiple lines of code, use the <code>&lt;pre&gt;</code> element which defines preformatted text. It creates a new text block that preserves spaces, tabs and line breaks. Nest a <code>&lt;code&gt;</code> element inside to define the code block.</p>
					<p><span class="badge badge-danger">IMPORTANT</span> Be sure to escape any angle brackets in the code for proper rendering.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<pre><code>&lt;pre&gt;
    &lt;code&gt;...&lt;/code&gt;
&lt;/pre&gt;</code></pre>
					<hr>
					<h2 id="lists"><a href="#lists" class="link-reset">Lists</a></h2>
					<p>Create an unordered list using the <code>&lt;ul&gt;</code> element and the <code>&lt;ol&gt;</code> element for ordered lists. The <code>&lt;li&gt;</code> element defines the list item.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#lists-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="lists-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<div class="panel">
										<ul>
											<li>Item 1</li>
											<li>Item 2
												<ul>
													<li>Item 1</li>
													<li>Item 2
														<ul>
															<li>Item 1</li>
															<li>Item 2</li>
														</ul>
													</li>
												</ul>
											</li>
											<li>Item 3</li>
											<li>Item 4</li>
										</ul>
									</div>
								</div>
								<div class="col-6-12-medium">
									<div class="panel">
										<ol>
											<li>Item 1</li>
											<li>Item 2
												<ol>
													<li>Item 1</li>
													<li>Item 2
														<ol>
															<li>Item 1</li>
															<li>Item 2</li>
														</ol>
													</li>
												</ol>
											</li>
											<li>Item 3</li>
											<li>Item 4</li>
										</ol>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<div class="panel">
										<pre><code>&lt;ul&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...
        &lt;ul&gt;
            &lt;li&gt;...&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
									</div>
								</div>
								<div class="col-6-12-medium">
									<div class="panel">
										<pre><code>&lt;ol&gt;
    &lt;li&gt;...&lt;/li&gt;
    &lt;li&gt;...
        &lt;ol&gt;
            &lt;li&gt;...&lt;/li&gt;
        &lt;/ol&gt;
    &lt;/li&gt;
&lt;/ol&gt;</code></pre>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<hr>
					<h2 id="dls"><a href="#dls" class="link-reset">Description lists</a></h2>
					<p>Create a description list using the <code>&lt;dl&gt;</code> element. Use <code>&lt;dt&gt;</code> to define the term and <code>&lt;dd&gt;</code> for the description.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#dl-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="dl-tabs" class="switcher margin">
						<li>
							<dl>
								<dt>Description lists</dt>
								<dd>A description list defines terms and their corresponding descriptions.</dd>
								<dt>This is a term</dt>
								<dd>This is a description.</dd>
								<dt>This is a term</dt>
								<dd>This is a description.</dd>
							</dl>
						</li>
						<li>
							<pre><code>&lt;dl&gt;
    &lt;dt&gt;...&lt;/dt&gt;
    &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;</code></pre>
						</li>
					</ul>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
