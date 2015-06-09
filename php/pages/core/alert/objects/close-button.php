<hr>
<h2 id="sub-objects"><a href="#sub-objects" class="link-reset">Sub Objects</a></h2>
<p>To apply a close button, add the <code>.alert-close</code> class to a <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> element inside the alert box. To enable the JavaScript for the close button, just add the <code>[data-alert]</code> attribute to the alert box. We recommend adding the <code>.close</code> class from the <a href="<?php echo get_url('core/close'); ?>">Close component</a> to give the button a proper styling, though you can also use text or an image.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#alert-close-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="alert-close-tabs" class="switcher margin">
	<li>
		<div class="alert" data-alert>
			<a href="#" class="alert-close close"></a>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="alert" data-alert&gt;
    &lt;a href="#" class="alert-close close"&gt;&lt;/a&gt;
        ...
&lt;/div&gt;</code></pre>
	</li>
</ul>
