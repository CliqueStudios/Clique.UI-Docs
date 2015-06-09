<hr>
<h3>Form Help</h3>
<p>Use the <code>.form-help-inline</code> or <code>.form-help-block</code> class to add inline and block level help text for the controls.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#form-help-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="form-help-tabs" class="switcher margin">
	<li>
		<form class="form">
			<div class="form-row">
				<input type="text" placeholder="Text input">
				<span class="form-help-inline">The <code>.form-help-inline</code> class creates spacing to the left.</span>
			</div>
			<div class="form-row">
				<textarea placeholder="Textarea"></textarea>
				<p class="form-help-block">The <code>.form-help-block</code> class creates an associated paragraph.</p>
			</div>
		</form>
	</li>
	<li>
		<pre><code>&lt;form class="form"&gt;
	&lt;!-- Inline --&gt;
    &lt;div class="form-row"&gt;
    	&lt;input type="text"&gt;
    	&lt;span class="form-help-inline"&gt;...&lt;/span&gt;
    &lt;/div&gt;

    &lt;!-- Block --&gt;
    &lt;div class="form-row"&gt;
    	&lt;input type="text"&gt;
    	&lt;span class="form-help-inline"&gt;...&lt;/span&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
	</li>
</ul>
