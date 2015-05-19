
	<div class="docs-middle">
		<div class="container container-center">
			<div class="row" data-row-margin>
				<?php get_sidebar('core'); ?>
				<div class="docs-main col-9-12-medium">
					<article class="article" itemscope itemtype="http://schema.org/Article">
						<h1 class="article-title" itemprop="headline">Radios &amp; Checkboxes</h1>
						<p class="article-lead" itemprop="about">Apply a custom style to radio and checkbox inputs.</p>
						<p><?php echo SITENAME; ?> styles radios and checkboxes through a combined use of the CSS property <em>appearance</em> and custom markup applied by the <a href="<?php echo get_url('core/form'); ?>">Form Component</a>. By using JavaScript to help create the Radio and Checkbox components, <?php echo SITENAME; ?> is able to fire custom events when a user interacts with your form elements.</p>
						<p>If you don't include the <a href="<?php echo get_url('core/form'); ?>">Form Component</a> in your build of <?php echo SITENAME; ?> radios and checkboxes will fall back to the native browser style.</p>
						<hr>
						<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
						<?php
					$text = '<form>
	<div class="form-row">
		<label><input type="radio" name="radio"> Default</label>
		<label><input type="radio" name="radio" checked> Checked</label>
		<label><input type="radio" name="radio" disabled> Disabled</label>
		<label><input type="radio" name="radio1" disabled checked> Disabled &amp; Checked</label>
	</div>
	<div class="form-row">
		<label><input type="checkbox"> Default</label>
		<label><input type="checkbox" checked> Checked</label>
		<label><input type="checkbox" disabled> Disabled</label>
		<label><input type="checkbox" disabled checked> Disabled &amp; Checked</label>
	</div>
</form>';
						print_example($text);
					?>
						<hr>
						<h2 id="usage"><a href="#usage" class="link-reset">JavaScript</a></h2>
						<h3 class="docs-article-subtitle">Manual Initialization</h3>
					<pre><code>&lt;!-- Clique.UI API --&gt;
Clique.checkbox('.my-checkbox', {
    // Options...
});
Clique.radio('.my-radio', {
    // Options...
});

&lt;!-- jQuery API --&gt;
$('.my-checkbox').clique('checkbox', {
    // Options...
});
$('.my-radio').clique('radio', {
    // Options...
});
</code></pre>
						<h3 class="docs-article-subtitle">Options</h3>
						<p>This components accepts no options.</p>
						<h3 class="docs-article-subtitle">Events</h3>
						<table class="table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Parameters</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>clique.checbox.checked</code></td>
									<td>event</td>
									<td>Triggered whenever the checkbox is checked</td>
								</tr>
								<tr>
									<td><code>clique.checbox.unchecked</code></td>
									<td>event</td>
									<td>Triggered whenever the checkbox is unchecked</td>
								</tr>
								<tr>
									<td><code>clique.radio.checked</code></td>
									<td>event</td>
									<td>Triggered whenever the radio is checked</td>
								</tr>
								<tr>
									<td><code>clique.radio.unchecked</code></td>
									<td>event</td>
									<td>Triggered whenever the radio is unchecked</td>
								</tr>
							</tbody>
						</table>
					<?php get_microdata('author'); ?>
				</article>
				</div>
			</div>
		</div>
	</div>
