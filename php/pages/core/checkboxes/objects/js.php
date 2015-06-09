<hr>
<h2 id="usage"><a href="#usage" class="link-reset">JavaScript</a></h2>
<h3 class="docs-article-subtitle">Manual Initialization</h3>
<pre><code>// Clique.UI API
Clique.checkbox('.my-checkbox');
Clique.radio('.my-radio');

// jQuery API
$('.my-checkbox').clique('checkbox');
$('.my-radio').clique('radio');
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
