
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Form</h1>
					<p class="article-lead" itemprop="about">Easily create nicely looking forms with different styles and layouts.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>This component applies to all forms and form elements. All form control elements are placed side by side within the next row.</p>
					<?php
					$text = '<form>
	<fieldset data-margin>
		<legend>Form</legend>

		<!-- Text-based inputs -->
		<input type="text" placeholder="Text input">
		<input type="password" placeholder="Password input">

		<!-- Select -->
		<select>
			<option>Option 1</option>
			<option>Option 2</option>
			<option>Option 3</option>
		</select>

		<!-- Button -->
		<button class="button">Button</button>

		<!-- Checbox -->
		<label>
			<input type="checkbox"> Checkbox
		</label>
	</fieldset>
</form>';
						print_example($text);
					?>
					<hr>
					<h3>Rows</h3>
					<p>Add the <code>.form-row</code> class to a <code>&lt;div&gt;</code> element to stack form controls.</p>
					<?php
					$text = '<form>
	<fieldset>
		<legend>Legend</legend>
		<div class="form-row">
			<input type="text" placeholder="Text input">
		</div>
		<div class="form-row">
			<input type="password" placeholder="Password input">
		</div>
		<div class="form-row">
			<select>
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
			</select>
		</div>
		<div class="form-row">
			<button class="button">Button</button>
		</div>
		<div class="form-row">
			<label>
				<input type="checkbox"> Checkbox
			</label>
		</div>
	</fieldset>
</form>';
						print_example($text);
					?>
					<hr>
					<h2 id="layout-modifiers"><a href="#layout-modifiers" class="link-reset">Layout modifiers</a></h2>
					<p><span class="badge">NOTE</span> Layout modifiers can also be added to a <code>&lt;fieldset&gt;</code> element. This means, if you use fieldsets, you can have different form layouts for each fieldset.</p>
					<h3>Form stacked</h3>
					<p>Add the <code>.form-stacked</code> class to display labels on top of controls.</p>
					<?php
					$text = '<form class="form-stacked">
	<div class="form-row">
		<label class="form-label" for="form-s-it">Text input</label>
		<div class="form-controls">
			<input type="text" id="form-s-it" placeholder="Text input">
		</div>
	</div>
	<div class="form-row">
		<label class="form-label" for="form-s-ip">Password input</label>
		<div class="form-controls">
			<input type="password" id="form-s-ip" placeholder="Password input">
		</div>
	</div>
	<div class="form-row">
		<label class="form-label" for="form-s-s">Select field</label>
		<div class="form-controls">
			<select id="form-s-s">
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
			</select>
		</div>
	</div>
	<div class="form-row">
		<label class="form-label" for="form-s-t">Textarea</label>
		<div class="form-controls">
			<textarea id="form-s-t" placeholder="Textarea text"></textarea>
		</div>
	</div>
	<div class="form-row">
		<span class="form-label">Radio input</span>
		<div class="form-controls">
			<label><input type="radio" name="radio" checked> 1</label>
			<label><input type="radio" name="radio"> 2</label>
			<label><input type="radio" name="radio"> 3</label>
		</div>
	</div>
	<div class="form-row">
		<span class="form-label">Checkbox input</span>
		<div class="form-controls">
			<label><input type="checkbox" checked> 1</label>
			<label><input type="checkbox"> 2</label>
			<label><input type="checkbox"> 3</label>
		</div>
	</div>
</form>';
						print_example($text);
					?>
					<hr>
					<h3>Form horizontal</h3>
					<p>Add the <code>.form-horizontal</code> class to display labels and controls side by side.</p>
					<?php
					$text = '<form class="form-horizontal">
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
	<div class="form-row">
		<label class="form-label" for="form-h-s">Select field</label>
		<div class="form-controls">
			<select id="form-h-s">
				<option>Option 1</option>
				<option>Option 2</option>
				<option>Option 3</option>
			</select>
		</div>
	</div>
	<div class="form-row">
		<label class="form-label" for="form-h-t">Textarea</label>
		<div class="form-controls">
			<textarea id="form-h-t" placeholder="Textarea text"></textarea>
		</div>
	</div>
	<div class="form-row">
		<span class="form-label">Radio input</span>
		<div class="form-controls form-controls-text">
			<label><input type="radio" name="radio" checked> 1</label>
			<label><input type="radio" name="radio"> 2</label>
			<label><input type="radio" name="radio"> 3</label>
		</div>
	</div>
	<div class="form-row">
		<span class="form-label">Checkbox input</span>
		<div class="form-controls form-controls-text">
			<label><input type="checkbox" checked> 1</label>
			<label><input type="checkbox"> 2</label>
			<label><input type="checkbox"> 3</label>
		</div>
	</div>
</form>';
						print_example($text);
					?>
					<hr>
					<h2 id="form-and-grid"><a href="#form-and-grid" class="link-reset">Form and grid</a></h2>
					<p>When used with the <a href="<?php echo get_url('core/grid'); ?>">Grid component</a>, a text-based input that is the immediate child of a <code>[class*="col-"]</code> element will fit the width of the container.</p>
					<?php
					$text = '<div class="row">
	<div class="col-12-12">
		<input type="text" placeholder="100%">
	</div>
</div>
<div class="row">
	<div class="col-6-12">
		<input type="text" placeholder="50%">
	</div>
	<div class="col-3-12">
		<input type="text" placeholder="25%">
	</div>
	<div class="col-3-12">
		<input type="text" placeholder="25%">
	</div>
</div>
<div class="row" data-row-margin>
	<div class="col-6-12-medium">
		<input type="text" placeholder="50%">
	</div>
	<div class="col-6-12-medium">
		<input type="text" placeholder="50%">
	</div>
</div>';
						print_example($text);
					?>
					<hr>
					<h2 id="form-and-icons"><a href="#form-and-icons" class="link-reset">Form and icons</a></h2>
					<p>This is an example of how to add an icon from the <a href="<?php echo get_url('core/icon'); ?>">Icon component</a> to a form.</p>
					<?php
					$text = '<div class="form-icon">
	<i class="icon-calendar"></i>
	<input type="text">
</div>
<div class="form-icon">
	<i class="icon-clock"></i>
	<input type="text">
</div>';
						print_example($text);
					?>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
