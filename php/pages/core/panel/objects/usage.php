<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>The Panel component consists of the panel itself, the panel title and a panel badge. To prevent redundant white space, top and bottom margins are removed from the panel's content.</p>
<p><span class="badge badge-info">NOTE</span> By default, a panel is blank and has no styling. That is why it is important to add a modifier class, which gives the panel some styling. In our examples we used the <code>.panel-box</code> class.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#panels-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="panels-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.panel</code></td>
						<td>Add this class to a <code>&lt;div&gt;</code> element to define the Panel component.</td>
					</tr>
					<tr>
						<td><code>.panel-title</code></td>
						<td>Add this class to a heading to create the panel title.</td>
					</tr>
					<tr>
						<td><code>.panel-badge</code></td>
						<td>Add this class to a <code>&lt;div&gt;</code> element to create a panel badge. The easiest way to style your badge, is by adding the modifier classes from the <a href="<?php echo get_url('core/badge'); ?>">Badge component</a>.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<div class="col-6-12-medium">
			<div class="panel panel-box">
			<div class="panel-badge badge badge-danger">Badge</div>
				<h3 class="panel-title">Panel Title</h3>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</div>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="panel"&gt;
    &lt;div class="panel-badge badge"&gt;...&lt;/div&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    ...
&lt;/div&gt;</code></pre>
	</li>
</ul>
