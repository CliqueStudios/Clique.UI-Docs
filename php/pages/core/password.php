
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Form password</h1>
					<p class="article-lead" itemprop="about">Create a form with a toggle to hide or show passwords.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply this component, add the <code>form-password</code> class to a <code>&lt;div&gt;</code> element around a password input field. To create a toggle for showing or hiding passwords, just add the <code>.form-password-toggle</code> class and the <code>data-form-password</code> attribute to an <code>&lt;a&gt;</code> element.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<form class="form">
						<div class="form-password">
							<input type="password" value="Bazinga!">
							<a href="#" class="form-password-toggle" data-form-password>Show</a>
						</div>
					</form>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;form class="form"&gt;
    &lt;div class="form-password"&gt;
        &lt;input type="password"&gt;
        &lt;a href="#" class="form-password-toggle" data-form-password&gt;...&lt;/a&gt;
    &lt;/div&gt;
&lt;/form&gt;</code></pre>
					<hr>
					<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
					<p>This is an example of how to set options via attribute:</p>
					<pre><code>data-form-password=&quot;{lblShow:'...', lblHide:'...'}&quot;</code></pre>
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
									<td><code>lblShow</code></td>
									<td>any string</td>
									<td>'Show'</td>
									<td>Hide label text</td>
								</tr>
								<tr>
									<td><code>lblHide</code></td>
									<td>any string</td>
									<td>'Hide'</td>
									<td>Show label text</td>
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
