<h3>Modal Dialog Lightbox</h3>
<p>To create a lightbox-like modal dialog, just add the <code>.modal-dialog-lightbox</code> class. This can be useful, if you want to use the modal as a lightbox for your images. The close button will adjust its position automatically to the dialog.</p>
<p><span class="badge">NOTE</span> When creating a close button within the lightbox modifier, we also recommend adding the <code>.close-alt</code> class from the <a href="<?php echo get_url('core/close'); ?>">Close component</a> to the close button to give your button a styling that fits the lightbox modal.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#modal-lightbox-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="modal-lightbox-tabs" class="switcher margin">
	<li>
		<button class="button" data-modal="{target:'#modal-lightbox'}">Open Lightbox Modal</button>
		<div id="modal-lightbox" class="modal">
			<div class="modal-dialog modal-dialog-lightbox">
				<a href="#" class="modal-close close close-alt"></a>
				<img src="<?php echo get_image('placeholder_600x400.jpg'); ?>" width="600" height="400" alt="">
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div id="modal-target" class="modal"&gt;
	&lt;div class="modal-dialog modal-dialog-lightbox"&gt;
		&lt;a href="#" class="modal-close close close-alt"&gt;&lt;/a&gt;
		...
	&lt;/div&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
