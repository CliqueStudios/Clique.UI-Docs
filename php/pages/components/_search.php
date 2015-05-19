
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Search</h1>
					<p class="article-lead" itemprop="about"></p>
					<p class="article-lead" itemprop="about">Easily create a nicely looking search.</p>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Search component consists of a search form and the search field itself.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th>Class</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.search</code></td>
									<td>Add this class to a <code>&lt;form&gt;</code> element to define the Search component.</td>
								</tr>
								<tr>
									<td><code>.search-field</code></td>
									<td>Add this class to an <code>&lt;input&gt;</code> element to create the search field.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<p>To enable the necessary JavaScript for the search, just add the <code>data-search</code> attribute.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<form class="search" data-search>
						<input class="search-field" type="search" placeholder="search...">
					</form>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;form class="search" data-search&gt;
    &lt;input class="search-field" type="search" placeholder=""&gt;
&lt;/form&gt;</code></pre>
					<hr>
					<h2 id="json-search-results"><a href="#json-search-results" class="link-reset">JSON search results</a></h2>
					<p>Just add <code>{source:'PATH/TO/RESULTS'}</code> to the data attribute and set the path to your search results, which need to be formatted in JSON ( <a href="_searchautocomplete.json">Example</a>). You can use a dropdown from the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a> to display search results. A dropdown from the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a> is injected to display the search results. You can even navigate through the dropdown with the up and down keys of your keyboard.</p>
					<p><span class="badge badge-danger">IMPORTANT</span> The search requires the <a href="<?php echo get_url('components/autocomplete'); ?>">autocomplete</a> component to work. Please make sure that you include them always together.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<form class="search" data-search="{source:'../tests/components/_searchautocomplete.json'}">
						<input class="search-field" type="search" placeholder="search...">
					</form>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;form class="search" data-search="{source:'my-results.json'}"&gt;
    &lt;input class="search-field" type="search" placeholder=""&gt;

    &lt;!-- This is the dropdown, which is injected through JavaScript --&gt;
    &lt;div class="dropdown dropdown-search"&gt;
        &lt;ul class="nav nav-search"&gt;...&lt;/ul&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
					<hr>
					<h2 id="search-in-navbars"><a href="#search-in-navbars" class="link-reset">Search in navbars</a></h2>
					<p>A search can be used inside a Navbar from the <a href="<?php echo get_url('core/navbar'); ?>">Navbar component</a>.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<nav class="navbar">
						<div class="navbar-flip">
							<div class="navbar-content">
								<form class="search" data-search="{flipDropdown:true, source:'../tests/components/_searchautocomplete.json'}">
									<input class="search-field" type="search" placeholder="search...">
								</form>
							</div>
						</div>
					</nav>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;nav class="navbar"&gt;
    &lt;div class="navbar-flip"&gt;
        &lt;div class="navbar-content"&gt;
            &lt;form class="search" data-search="{source:'my-results.json'}"&gt;
            ...
            &lt;/form&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/nav&gt;</code></pre>
					<hr>
					<h2 id="search-in-off-canvas"><a href="#search-in-off-canvas" class="link-reset">Search in off-canvas</a></h2>
					<p>A search can also be placed inside the off-canvas bar.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<button data-offcanvas="{target:'#offcanvas-6'}">Open</button>
					<div id="offcanvas-6" class="offcanvas">
						<div class="offcanvas-bar">
							<form class="search">
								<input class="search-field" type="search" placeholder="search...">
							</form>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;!-- This is the button toggling the off-canvas sidebar --&gt;
&lt;button data-offcanvas="{target:'#my-id'}"&gt;...&lt;/button&gt;

&lt;!-- This is the off-canvas sidebar --&gt;
&lt;div id="my-id" class="offcanvas"&gt;
    &lt;div class="offcanvas-bar"&gt;
        &lt;form class="search"&gt; ... &lt;/form&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
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
									<td><code>source</code></td>
									<td>string</td>
									<td>''</td>
									<td>Data source url</td>
								</tr>
								<tr>
									<td><code>minLength</code></td>
									<td>integer</td>
									<td>3</td>
									<td>Min. input length before triggering autocomplete</td>
								</tr>
								<tr>
									<td><code>param</code></td>
									<td>string</td>
									<td>search</td>
									<td>Query name when sending ajax request</td>
								</tr>
								<tr>
									<td><code>delay</code></td>
									<td>integer</td>
									<td>300</td>
									<td>Delay time after stop typing</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3 class="docs-article-subtitle">Init element manually</h3>
					<pre><code>var search = Clique.search(element, {
    /* options */
});</code></pre>
					<h3>Events</h3>
					<p>Same as the <a href="<?php echo get_url('components/autocomplete'); ?>">Autocomplete component</a>.</p>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
