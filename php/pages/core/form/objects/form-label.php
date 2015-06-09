<hr>
<h3>Form Label &amp; Controls</h3>
<p>Add the <code>.form-label</code> and <code>.form-control</code> classes to elements within a <code>.form-stacked</code> or <code>.form-horizontal</code> modifier to apply additional layout style.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#form-label-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="form-label-tabs" class="switcher margin">
	<li>
		<div class="row row-2-cols">
			<div class="col">
				<div class="panel panel-box">
					<form class="form form-horizontal">
						<legend>Horizontal</legend>
						<div class="form-row">
							<label class="form-label" for="form-h-it">Text input</label>
							<div class="form-controls">
								<input type="text" id="form-h-it" placeholder="Text input">
							</div>
						</div>
						<div class="form-row">
							<label class="form-label" for="form-h-ip">Password input</label>
							<div class="form-controls">
								<input type="password" id="form-h-ip" placeholder="Password input">
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col">
				<div class="panel panel-box">
					<form class="form form-stacked">
						<legend>Stacked</legend>
						<div class="form-row">
							<label class="form-label" for="form-h-it">Text input</label>
							<div class="form-controls">
								<input type="text" id="form-h-it" placeholder="Text input">
							</div>
						</div>
						<div class="form-row">
							<label class="form-label" for="form-h-ip">Password input</label>
							<div class="form-controls">
								<input type="password" id="form-h-ip" placeholder="Password input">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;form class="form form-horizontal"&gt;
	&lt;div class="form-row"&gt;
		&lt;label class="form-label"&gt;...&lt;/label&gt;
		&lt;div class="form-controls"&gt;
			...
		&lt;/div&gt;
	&lt;/div&gt;
&lt;/form&gt;</code></pre>
	</li>
</ul>
