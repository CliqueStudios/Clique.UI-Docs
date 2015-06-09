<hr>
<h2 id="border-radius"><a href="#border-radius" class="link-reset">Border radius</a></h2>
<p>To add rounded corners to an element, like an image, just add the <code>.border-rounded</code>. To a apply a circled shape, add the <code>.border-circle</code> class.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#border-radius-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="border-radius-tabs" class="switcher margin">
	<li>
		<div class="row row-2-cols">
			<div class="col">
				<img class="border-rounded" src="<?php echo get_image('placeholder_200x200.svg'); ?>" width="200" height="200">
			</div>
			<div class="col">
				<img class="border-circle" src="<?php echo get_image('placeholder_200x200.svg'); ?>" width="200" height="200">
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;!-- For rounded radius --&gt;
&lt;img class="border-rounded" src="images/placeholder.svg"&gt;

&lt;!-- For circular radius --&gt;
&lt;img class="border-circle" src="images/placeholder.svg"&gt;</code></pre>
	</li>
</ul>
