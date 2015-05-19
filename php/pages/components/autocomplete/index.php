
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Autocomplete</h1>
					<p class="article-lead" itemprop="about"></p>
					<p class="article-lead" itemprop="about">Create inputs that allow users to choose from a list of pre-generated values while typing.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>.autocomplete</code> class to a <code>&lt;div&gt;</code> element around an <code>input</code> element. To enable the necessary JavaScript for the autocomplete input, you also need to add the <code>data-autocomplete</code> attribute. Add <code>{source:'PATH/TO/RESULTS'}</code> to the data attribute and set the path to your autocomplete list, which needs to be formatted in JSON ( <a href="_autocomplete.json">Example</a>). A dropdown from the <a href="<?php echo get_url('core/dropdown'); ?>">Dropdown component</a> is injected to display autocomplete suggestions. You can even navigate through the dropdown with the up and down keys of your keyboard.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="autocomplete form" data-autocomplete="{source:'../tests/components/_autocomplete.json'}">
						<input type="text">
					</div>
					<p><span class="badge">Note</span> Type in Hamburg, New York, Moscow or Amsterdam.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="autocomplete form" data-autocomplete="{source:'my-autocomplete.json'}"&gt;
    &lt;input type="text"&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="custom-templates"><a href="#custom-templates" class="link-reset">Custom templates</a></h2>
					<p>You can also create custom templates to display the results differently.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="autocomplete form" data-autocomplete="{source:'../tests/components/_autocomplete.json'}">
						<input type="text">
						<script type="text/autocomplete">
							<ul class="nav nav-autocomplete autocomplete-results">
								{{~items}}
								<li data-value="{{ $item.value }}">
									<a> {{ $item.title }}
										<div>{{{ $item.text }}}</div>
									</a>
								</li>
								{{/items}}
							</ul>
						</script>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="autocomplete form" data-autocomplete="{source:'my-autocomplete.json'}"&gt;
    &lt;input type="text"&gt;
    &lt;script type="text/autocomplete"&gt;
        &lt;ul class="nav nav-autocomplete autocomplete-results"&gt;
            {{~items}}
            &lt;li data-value="{{ $item.value }}"&gt;
                &lt;a&gt;
                    {{ $item.title }}
                    &lt;div&gt;{{{ $item.text }}}&lt;/div&gt;
                &lt;/a&gt;
            &lt;/li&gt;
            {{/items}}
        &lt;/ul&gt;
    &lt;/script&gt;
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
									<td>url, array, callback function</td>
									<td>[]</td>
									<td>Data source</td>
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
					<pre><code>var autocomplete = Clique.autocomplete(element, {
    /* options */
});</code></pre>
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
									<td><code>select.clique.autocomplete</code></td>
									<td>event, data, acobject</td>
									<td>On item selected</td>
								</tr>
								<tr>
									<td><code>show.clique.autocomplete</code></td>
									<td>event</td>
									<td>On autocomplete dropdown show</td>
								</tr>
							</tbody>
						</table>
					</div>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
