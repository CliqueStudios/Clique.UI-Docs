<hr>
<h2 id="overflow-container"><a href="#overflow-container" class="link-reset">Overflow container</a></h2>
<p>To create a container that provides a horizontal scrollbar whenever the elements inside it are wider than the container itself, just add the <code>.overflow-container</code> class to a <code>&lt;div&gt;</code> element. This comes in useful when having to handle tables on a responsive website, which at some point would just get too big.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#overflow-container-tabs'}">
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="overflow-container-tabs" class="switcher margin">
	<li>
		<div class="overflow-container">
			<table class="table-striped table-condensed text-nowrap">
				<thead>
					<tr>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
						<th>Table Heading</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
						<td>Table Footer</td>
					</tr>
				</tfoot>
				<tbody>
					<tr>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
					</tr>
					<tr>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
					</tr>
					<tr>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
						<td>Table Data</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<pre><code>&lt;div class="overflow-container"&gt;
    &lt;table&gt;
        ...
    &lt;/table&gt;
&lt;/div&gt;</code></pre>
	</li>
</ul>
