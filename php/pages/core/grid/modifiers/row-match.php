<hr>
<h3>Row Match</h3>
<p>The Grid component uses Flexbox, so the height of grid columns is matched automatically. To achieve the same effect in older browsers that don't support Flexbox, just add the <code>data-row-match</code> attribute to your grid. If your grid wraps into multiple rows, only grid columns within the same row are matched. To match grid columns accross all rows just use <code>data-row-match="{row: false}"</code>.</p>
<p><span class="badge">NOTE</span> If grid columns extend to a width of 100%, their heights will no longer be matched. This makes sense, for example, if they stack vertically in narrower viewports.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#grid-match-height-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="grid-match-height-tabs" class="switcher margin">
	<li>
		<div class="row row-divider" data-row-match>
			<div class="col-4-12-medium">Lorem ipsum dolor sit amet.</div>
			<div class="col-4-12-medium">Lorem ipsum dolor sit amet.</div>
			<div class="col-4-12-medium">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
		</div>
	</li>
	<li>
							<pre><code>&lt;div class="row row-divider" data-row-match&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
<hr>
<h3>Match height of panels</h3>
<p>If you want to match the heights of panels in a grid, just add the <code>.row-match</code> class. When using the data attribute, you need to add the <code>{target:'.panel'}</code> selector.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#grid-match-panel-height-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="grid-match-panel-height-tabs" class="switcher margin">
	<li>
		<div class="row row-divider" data-row-match="{target:'.panel'}" data-row-match>
			<div class="col-4-12-medium">
				<div class="panel panel-box">Lorem ipsum dolor sit amet.</div>
			</div>
			<div class="col-4-12-medium">
				<div class="panel panel-box">Lorem ipsum dolor sit amet.</div>
			</div>
			<div class="col-4-12-medium">
				<div class="panel panel-box">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
			</div>
		</div>
	</li>
	<li>
							<pre><code>&lt;div class="row row-divider" data-row-match="{target:'.panel'}" data-row-match&gt;
    &lt;div class="col-4-12-medium"&gt;
        &lt;div class="panel panel-box"&gt;...&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;
        &lt;div class="panel panel-box"&gt;...&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-4-12-medium"&gt;
        &lt;div class="panel panel-box"&gt;...&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
