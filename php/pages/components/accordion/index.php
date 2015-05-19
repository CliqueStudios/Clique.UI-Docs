
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Accordion</h1>
					<p class="article-lead" itemprop="about">Create a list of items, allowing each item's content to be expanded and collapsed by clicking its header.</p>
					<hr>
						<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>To apply the Accordion component, add the <code>accordion</code> class and the <code>data-accordion</code> attribute to a container element. Add the <code>accordion-content</code> class to each of the content sections within the container. Finally, add the <code>accordion-title</code> class to any element, like a heading, above the content section to create a toggle.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="accordion" data-accordion>
						<h3 class="accordion-title">Heading 1</h3>
						<div class="accordion-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
						<h3 class="accordion-title">Heading 2</h3>
						<div class="accordion-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
						<h3 class="accordion-title">Heading 3</h3>
						<div class="accordion-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div class="accordion" data-accordion&gt;

    &lt;h3 class="accordion-title"&gt;...&lt;/h3&gt;
    &lt;div class="accordion-content"&gt;...&lt;/div&gt;

    &lt;h3 class="accordion-title"&gt;...&lt;/h3&gt;
    &lt;div class="accordion-content"&gt;...&lt;/div&gt;

    &lt;h3 class="accordion-title"&gt;...&lt;/h3&gt;
    &lt;div class="accordion-content"&gt;...&lt;/div&gt;

&lt;/div&gt;</code></pre>
					<hr>
					<h2 id="no-collapse"><a href="#no-collapse" class="link-reset">Muliple open items</a></h2>
					<p>To display multiple content sections at the same time without one collapsing when the other one is opened, add the <code>{collapse: false}</code> option to the date attribute.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div class="accordion" data-accordion="{collapse: false}">
						<h3 class="accordion-title">Heading 1</h3>
						<div class="accordion-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
						<h3 class="accordion-title">Heading 2</h3>
						<div class="accordion-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
						<h3 class="accordion-title">Heading 3</h3>
						<div class="accordion-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
					</div>
					<hr>
					<h2 id="javascript"><a href="#javascript" class="link-reset">JavaScript</a></h2>
					<?php
						require_once __DIR__ . '/js/options.php';
						require_once __DIR__ . '/js/init.php';
						require_once __DIR__ . '/js/events.php';
					?>
					<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
