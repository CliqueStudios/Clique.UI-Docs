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