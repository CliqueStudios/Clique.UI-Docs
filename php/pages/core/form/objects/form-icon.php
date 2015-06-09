<hr>
<h3>Form Icon</h3>
<p>Below is an example of how to add an icon from the <a href="<?php echo get_url('core/icon'); ?>">Icon component</a> to a form.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#form-icon-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="form-icon-tabs" class="switcher margin">
	<li>
		<form class="form">
			<div class="form-icon">
				<i class="icon-calendar"></i>
				<input type="text">
			</div>
			<div class="form-icon">
				<i class="icon-clock"></i>
				<input type="text">
			</div>
		</form>
	</li>
	<li>
		<pre><code>&lt;form class="form"&gt;
    &lt;div class="form-icon"&gt;
    	&lt;i class="icon-calendar"&gt;&lt;/i&gt;
    	&lt;input type="text"&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
	</li>
</ul>
