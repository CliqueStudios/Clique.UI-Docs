
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Text Inputs</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking forms with different styles and layouts.</p>
					<hr>
					<h2 id="control-states"><a href="#control-states" class="link-reset">Control states</a></h2>
					<p>Provide the user with basic information through feedback states on form controls.</p>
					<h3>Disabled</h3>
					<p>Add the <code>disabled</code> attribute to a form control and it will be appear muted.</p>
					<?php
$text = '<input type="text" placeholder="Text input" disabled>
<select disabled>
	<option>Option 01</option>
	<option>Option 02</option>
	<option>Option 03</option>
</select>';
						print_example($text);
					?>
					<hr>
					<h3>Validation states</h3>
					<p>Add the <code>.form-danger</code> or <code>.form-success</code> class to a form control to notify the user, whether or not the value is validated.</p>
					<?php
$text = '<input type="text" class="form-danger" value="Danger">
<input type="text" class="form-success" value="Success">';
						print_example($text);
					?>
					<hr>
					<h2 id="control-modifiers"><a href="#control-modifiers" class="link-reset">Control modifiers</a></h2>
					<h3>Size modifiers</h3>
					<p>Add the <code>.form-large</code> or <code>.form-small</code> class to an <code>&lt;input&gt;</code>, <code>&lt;select&gt;</code> or <code>&lt;textarea&gt;</code> element to make it smaller or larger.</p>
					<?php
					$text = '<p><input type="text" class="form-large" placeholder=".form-large"></p>
<p><input type="text" placeholder="Default"></p>
<p><input type="text" class="form-small" placeholder=".form-small"></p>';
						print_example($text, array('remove' => 'p'));
					?>
					<hr>
					<h3>Form blank</h3>
					<p>Add the <code>.form-blank</code> class to minimize the styling of form controls.</p>
					<?php
					$text = '<input type="text" placeholder="form-blank" class="form-blank">';
						print_example($text);
					?>
					<hr>
					<h3>Help text</h3>
					<p>Use the <code>.form-help-inline</code> or <code>.form-help-block</code> class to add inline and block level help text for the controls.</p>
					<?php
					$text = '<div class="form-row">
	<input type="text" placeholder="Text input"> <span class="form-help-inline">The <code>.form-help-inline</code> class creates spacing to the left.</span>
</div>
<div class="form-row">
	<textarea placeholder="Textarea"></textarea>
	<p class="form-help-block">The <code>.form-help-block</code> class creates an associated paragraph.</p>
</div>';
						print_example($text);
					?>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
