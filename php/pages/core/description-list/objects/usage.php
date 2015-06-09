<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>There is no component class necessary to create a description list, but <?php echo SITENAME; ?> provides a couple of modifier classes to display the list in a different style. The modifiers of the Description list component are <em>not</em> combinable with each other.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#description-list-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="description-list-tabs" class="switcher margin">
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
						<td><code>.dl-horizontal</code></td>
						<td>Modifier to display the <code>dt</code> and <code>dd</code> elements in a horizontal layout.</td>
					</tr>
					<tr>
						<td><code>.dl-line</code></td>
						<td>Modifier to add a line seperator between each item.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<dl class="dl-horizontal">
		<dt>Horizontal</dt>
			<dd>A description list defines terms and their corresponding descriptions.</dd>
			<dt>Lorem ipsum</dt>
			<dd>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
			<dt>Lorem ipsum dolor sit amet.</dt>
			<dd>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</dd>
		</dl>
		<hr>
		<dl class="dl-line">
			<dt>Line</dt>
			<dd>A description list defines terms and their corresponding descriptions.</dd>
			<dt>Lorem ipsum</dt>
			<dd>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</dd>
			<dt>Lorem ipsum dolor sit amet.</dt>
			<dd>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</dd>
		</dl>
	</li>
	<li>
		<pre><code>&lt;dl class="dl-horizontal"&gt;
    &lt;dt&gt;... &lt;/dt&gt;
    &lt;dd&gt;... &lt;/dd&gt;
&lt;/dl&gt;

&lt;dl class="dl-line"&gt;
    &lt;dt&gt;... &lt;/dt&gt;
    &lt;dd&gt;... &lt;/dd&gt;
&lt;/dl&gt;</code></pre>
	</li>
</ul>
