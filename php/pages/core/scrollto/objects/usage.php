<hr>
<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
<p>To gradually descrease the speed when you jump from one section of your page to another, for example with a to-top scroller, just add the <code>data-scrollto</code> attribute to an <code>&lt;a&gt;</code> element, that links to the ID of the section you want to target.</p>
<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
	<div class="col">
		<h3>Usage</h3>
	</div>
	<div class="col">
		<ul class="tab" data-tab="{connect:'#scrollto-tabs'}">
			<li><a href="#">Classes</a></li>
			<li><a href="#">Example</a></li>
			<li><a href="#">Markup</a></li>
		</ul>
	</div>
</div>
<ul id="scrollto-tabs" class="switcher margin">
	<li>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Data Attributes</h3>
			</div>
		</div>
		<div class="overflow-container">
			<table class="table-striped text-nowrap">
				<thead>
					<tr>
						<th>Attribute</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>[data-scrollto]</code></td>
						<td>This is the identifier for the JavaScript to initialize the component.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</li>
	<li>
		<a href="#usage" class="button" data-scrollto>Scroll To Top</a>
		<a href="#" class="button" data-scrollto="{offset:150}">Scroll Down 150px</a>
	</li>
	<li>
		<pre><code>&lt;a href="#target" class="button" data-scrollto&gt;...&lt;/a&gt;
&lt;a href="#" class="button" data-scrollto="{offset:150}"&gt;...&lt;/a&gt;</code></pre>
	</li>
</ul>

<hr>
<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
<p>This is an example of how to set options via attribute:</p>
<pre><code>data-scrollto=&quot;{target:'#my-id'}&quot;</code></pre>
<hr>
<h3>Options</h3>
<div class="overflow-container">
	<table class="table-striped">
		<thead>
			<tr>
				<th>Option</th>
				<th>Possible value</th>
				<th>Default</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>duration</code></td>
				<td>integer</td>
				<td>1000</td>
				<td>Duration of the scroll animation, in milliseconds</td>
			</tr>
			<tr>
				<td><code>transition</code></td>
				<td>string</td>
				<td>'easeOutExpo'</td>
				<td>Animation timing function of the scroll</td>
			</tr>
			<tr>
				<td><code>offset</code></td>
				<td>integer</td>
				<td>0</td>
				<td>Offset to scroll to from the current position in the window</td>
			</tr>
		</tbody>
	</table>
</div>

<hr>
<h3>Events</h3>
<div class="overflow-container">
	<table class="table-striped text-nowrap">
		<thead>
			<tr>
				<th>Name</th>
				<th>Parameter</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><code>willscroll.clique.scrollTo</code></td>
				<td>event</td>
				<td>Fired before the <code>&lt;html&gt;</code> and <code>&lt;body&gt;</code> starts scrolling</td>
			</tr>
			<tr>
				<td><code>didscroll.clique.scrollTo</code></td>
				<td>event</td>
				<td>Fired after the <code>&lt;html&gt;</code> and <code>&lt;body&gt;</code> scrolling has completed</td>
			</tr>
		</tbody>
	</table>
</div>
