
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Utility</h1>
					<p class="article-lead" itemprop="about">A collection of useful utility classes to style your content.</p>
					<hr>
					<h2 id="container"><a href="#container" class="link-reset">Container</a></h2>
					<p>Add the <code>.container</code> class to a block element to give it a max-width and wrap the main content of your website. For large screens it applies a different max-width.</p>
					<hr>
					<h3>Centering</h3>
					<p>To center the container, use the <code>.container-center</code> class. For any other block element, you additionally need to apply a width.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#centering-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="centering-tabs" class="switcher margin">
						<li>
							<div class="col-6-12-medium container-center">
								<div class="panel panel-box panel-box-primary">Centered block element</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="col-6-12-medium container-center"&gt;...&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="clearing-and-floating"><a href="#clearing-and-floating" class="link-reset">Clearing and floating</a></h2>
					<p>Floating is fundamental for creating all kinds of layouts. But floats need to be cleared or in the worst case, you might end up with a scrambled site. The following classes will help you to setup basic layouts.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#floating-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="floating-tabs" class="switcher margin">
						<li>
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
											<td><code>.float-left</code></td>
											<td>Float the element to the left.</td>
										</tr>
										<tr>
											<td><code>.float-right</code></td>
											<td>Float the element to the right.</td>
										</tr>
										<tr>
											<td><code>.clearfix</code></td>
											<td>Add this class to a parent container to clear floats.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="clearfix"&gt;
    &lt;div class="float-right"&gt;...&lt;/div&gt;
    &lt;div class="float-left"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Alignment of images and objects</h3>
					<p>Align images or other elements with spacing between the text and the element.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#alignment-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="alignment-tabs" class="switcher margin">
						<li>
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
											<td><code>.align-left</code></td>
											<td>Floats the element to the left and creates right and bottom margin.</td>
										</tr>
										<tr>
											<td><code>.align-right</code></td>
											<td>Floats the element to the right and creates left and bottom margin.</td>
											<tr>
												<td><code>.align-medium-left</code>
												</td>
												<td>Only affects device widths of <em>768px</em> and higher.</td>
											</tr>
										</tr>
										<tr>
											<td><code>.align-medium-right</code></td>
											<td>Only affects device widths of <em>768px</em> and higher.</td>
										</tr>
										<tr>
											<td><code>.align-center</code></td>
											<td>Centers the element and creates bottom margin.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<p class="clearfix">
								<img class="align-medium-right" src="<?php echo get_image('placeholder_400x200.svg'); ?>" width="400" height="200" alt="Image aligned to the right">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</li>
						<li>
							<pre><code>&lt;p class="clearfix"&gt;
    &lt;img class="align-medium-right" src="images/placeholder.svg"&gt;
    ...
&lt;/p&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="vertical-alignment"><a href="#vertical-alignment" class="link-reset">Vertical alignment</a></h2>
					<p>To align objects vertically, you need to create a parent container to which the object itself will be aligned.</p>
					<p><span class="badge">NOTE</span> The object you align needs to have a width or max-width that is smaller than its parent container.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#vertical-alignment-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="vertical-alignment-tabs" class="switcher margin">
						<li>
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
											<td><code>.vertical-align</code></td>
											<td>Add this class to the parent container. This container needs a specific height.</td>
										</tr>
										<tr>
											<td><code>.vertical-align-middle</code></td>
											<td>Add this class to the child element to center your content.</td>
										</tr>
										<tr>
											<td><code>.vertical-align-bottom</code></td>
											<td>Add this class to the child element to align your content to the bottom.</td>
										</tr>
										<tr>
											<td><code>.height-1-1</code></td>
											<td>This helper class applies a height of 100%.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<div class="vertical-align panel panel-box" style="height: 200px;">
										<div class="vertical-align-middle col-6-12-medium">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										</div>
									</div>
								</div>
								<div class="col-6-12-medium">
									<div class="vertical-align panel panel-box" style="height: 200px;">
										<div class="vertical-align-bottom col-6-12-medium">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="row" data-row-margin>
								<div class="col-6-12-medium">
									<pre><code>&lt;div class="vertical-align"&gt;
    &lt;div class="vertical-align-middle"&gt; ... &lt;/div&gt;
&lt;/div&gt;</code></pre>
								</div>
								<div class="col-6-12-medium">
									<pre><code>&lt;div class="vertical-align"&gt;
    &lt;div class="vertical-align-bottom"&gt; ... &lt;/div&gt;
&lt;/div&gt;</code></pre>
								</div>
							</div>
						</li>
					</ul>
					<h3>Center the entire page</h3>
					<p>The <code>.height-1-1</code> class comes in handy, if you want to extend the <code>&lt;html&gt;</code> and <code>&lt;body&gt;</code> elements to the full height of the page. This can be very useful when creating error pages.</p>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;html class="height-1-1"&gt;
    ...
    &lt;body class="height-1-1"&gt;
        &lt;div class="vertical-align"&gt;
            &lt;div class="vertical-align-middle"&gt;...&lt;/div&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
					<hr>
					<h3>Center horizontally</h3>
					<p> To center your content horizontally as well, add the <code>.text-center</code> class to the parent and the <code>.container-center</code> class to the child element. This is necessary because of the responsive behavior.</p>
					<hr>
					<h2 id="viewport-height"><a href="#viewport-height" class="link-reset">Viewport height</a></h2>
					<p>To create a container that fills the height of the entire viewport, for example for fullscreen image or video teasers, just add the <code>.height-viewport</code> class.</p>
					<hr>
					<h2 id="position-elements"><a href="#position-elements" class="link-reset">Position elements</a></h2>
					<p><?php echo SITENAME; ?> provides a number of classes to position your content without having to add your own CSS.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th class="col-3-12">Class</th>
									<th class="col-9-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.position-top</code></td>
									<td>Positions an element absolute at the top.</td>
								</tr>
								<tr>
									<td><code>.position-top-left</code></td>
									<td>Positions an element absolute at the top left.</td>
								</tr>
								<tr>
									<td><code>.position-top-right</code></td>
									<td>Positions an element absolute at the top right.</td>
								</tr>
								<tr>
									<td><code>.position-bottom</code></td>
									<td>Positions an element absolute at the bottom.</td>
								</tr>
								<tr>
									<td><code>.position-bottom-left</code></td>
									<td>Positions an element absolute at the bottom left.</td>
								</tr>
								<tr>
									<td><code>.position-bottom-right</code></td>
									<td>Positions an element absolute at the bottom right.</td>
								</tr>
								<tr>
									<td><code>.position-cover</code></td>
									<td>Adds absolute positioning to an element and stretches it to cover the entire parent.</td>
								</tr>
								<tr>
									<td><code>.position-relative</code></td>
									<td>Adds relative positioning to an element.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h2 id="responsive-objects"><a href="#responsive-objects" class="link-reset">Responsive objects</a></h2>
					<p>Images in <?php echo SITENAME; ?> adapt to the width of their parent container by default. If you want to apply the responsive behavior to media elements or iframes, just add one of the following classes.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#responsive-objects-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Examples</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="responsive-objects-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-striped text-nowrap">
									<thead>
										<tr>
											<th class="col-3-12">Class</th>
											<th class="col-9-12">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.responsive-width</code></td>
											<td>Adjusts the object's width according to its parent's width, keeping the original aspect ratio.</td>
										</tr>
										<tr>
											<td><code>.responsive-height</code></td>
											<td>Adjusts the object's height according to its parent's height, keeping the original aspect ratio.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="row row-2-cols">
								<div class="col">
									<?php
										$v_width = 1500;
										$v_height = round((350 / 600) * $v_width);
									?>
									<p>
										<video controls class="responsive-width" width="<?php echo $v_width; ?>" height="<?php echo $v_height; ?>">
											<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.mp4?test1" type="video/mp4">
											<source src="http://www.quirksmode.org/html5/videos/big_buck_bunny.ogv?test1" type="video/ogg">
										</video>
									</p>
								</div>
								<div class="col">
									<?php
										$img_height = 1500;
										$img_width = round((350 / 600) * $img_height);
									?>
									<p style="height: 100px;">
										<img class="responsive-height" src="<?php echo get_image('placeholder_200x200.jpg'); ?>" width="<?php echo $img_width; ?>" height="<?php echo $img_height; ?>">
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="row" data-row-margin>
								<div class="col-12-12">
									<?php
										$output = '<pre><code>&lt;video controls class="responsive-width" width="' . $v_width . '" height="' . $v_height . '"&gt;' . "\n";
										$output .= '    ...' . "\n";
										$output .= '&lt;/video&gt;</code></pre>';
										echo $output;
									?>
								</div>
							</div>
							<div class="row">
								<div class="col-12-12">
									<?php
										$output = '<pre><code>&lt;p style="height: 100px;"&gt;' . "\n";
										$output .= '    &lt;img class="responsive-height" src="images/placeholder_200x200.jpg" width="' . $img_width . '" height="' . $img_height . '"&gt;' . "\n";
										$output .= '&lt;/p&gt;</code></pre>' . "\n";
										echo $output;
									?>
								</div>
							</div>
						</li>
					</ul>
					<hr>
					<h2 id="margin"><a href="#margin" class="link-reset">Margin</a></h2>
					<p>Add one of the following classes to add spacing to block elements.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th class="col-3-12">Class</th>
									<th class="col-9-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.margin</code></td>
									<td>Adds the same top and bottom margins as a paragraph usually has.</td>
								</tr>
								<tr>
									<td><code>.margin-top</code></td>
									<td>Adds top margin.</td>
								</tr>
								<tr>
									<td><code>.margin-bottom</code></td>
									<td>Adds bottom margin.</td>
								</tr>
								<tr>
									<td><code>.margin-left</code></td>
									<td>Adds left margin.</td>
								</tr>
								<tr>
									<td><code>.margin-right</code></td>
									<td>Adds right margin.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h3>Larger margin</h3>
					<p>Add one of the following classes to add larger spacing to block elements.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th class="col-3-12">Class</th>
									<th class="col-9-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.margin-large</code></td>
									<td>Adds large top and bottom margin.</td>
								</tr>
								<tr>
									<td><code>.margin-large-top</code></td>
									<td>Adds large top margin.</td>
								</tr>
								<tr>
									<td><code>.margin-large-bottom</code></td>
									<td>Adds large bottom margin.</td>
								</tr>
								<tr>
									<td><code>.margin-large-left</code></td>
									<td>Adds large left margin.</td>
								</tr>
								<tr>
									<td><code>.margin-large-right</code></td>
									<td>Adds large right margin.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h3>Smaller margin</h3>
					<p>Add one of the following classes to add smaller spacing to block elements.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th class="col-3-12">Class</th>
									<th class="col-9-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.margin-small</code></td>
									<td>Adds small top and bottom margin.</td>
								</tr>
								<tr>
									<td><code>.margin-small-top</code></td>
									<td>Adds small top margin.</td>
								</tr>
								<tr>
									<td><code>.margin-small-bottom</code></td>
									<td>Adds small bottom margin.</td>
								</tr>
								<tr>
									<td><code>.margin-small-left</code></td>
									<td>Adds small left margin.</td>
								</tr>
								<tr>
									<td><code>.margin-small-right</code></td>
									<td>Adds small right margin.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h3>Remove margin</h3>
					<p>Add one of the following classes to remove spacing from block elements.</p>
					<div class="overflow-container">
						<table class="table-condensed">
							<thead>
								<tr>
									<th class="col-3-12">Class</th>
									<th class="col-9-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.margin-remove</code></td>
									<td>Removes all margins.</td>
								</tr>
								<tr>
									<td><code>.margin-top-remove</code></td>
									<td>Removes top margin.</td>
								</tr>
								<tr>
									<td><code>.margin-bottom-remove</code></td>
									<td>Removes bottom margin.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h2 id="auto-margin"><a href="#auto-margin" class="link-reset">Auto margin</a></h2>
					<p>To add spacing to stacking elements, for example inline elements that wrap on smaller vieports, just add the <code>data-margin</code> attribute to their parent container. It will automatically add the <code>.margin-small-top</code> to the lower element.</p>
					<p><span class="badge">NOTE</span> By default, the data attribute adds the <code>.margin-small-top</code> class to stacking elements. To apply a bigger margin, just add the <code>{cls:'margin-top'}</code> option.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#auto-margin-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="auto-margin-tabs" class="switcher margin">
						<li>
							<p class="col-6-12" data-margin>
								<button class="button">Button</button>
								<button class="button">Button</button>
								<button class="button">Button</button>
								<button class="button">Button</button>
								<button class="button">Button</button>
								<button class="button">Button</button>
								<button class="button">Button</button>
								<button class="button">Button</button>
								<button class="button">Button</button>
								<button class="button">Button</button>
							</p>
						</li>
						<li>
							<pre><code>&lt;p data-margin&gt;
    &lt;button&gt;...&lt;/button&gt;
    &lt;button&gt;...&lt;/button&gt;
&lt;/p&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="border-radius"><a href="#border-radius" class="link-reset">Border radius</a></h2>
					<p>To add rounded corners to an element, like an image, just add the <code>.border-rounded</code>. To a apply a circled shape, add the <code>.border-circle</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#border-radius-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="border-radius-tabs" class="switcher margin">
						<li>
							<div class="row row-2-cols">
								<div class="col">
									<img class="border-rounded" src="<?php echo get_image('placeholder_200x200.svg'); ?>" width="200" height="200">
								</div>
								<div class="col">
									<img class="border-circle" src="<?php echo get_image('placeholder_200x200.svg'); ?>" width="200" height="200">
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;!-- For rounded radius --&gt;
&lt;img class="border-rounded" src="images/placeholder.svg"&gt;

&lt;!-- For circular radius --&gt;
&lt;img class="border-circle" src="images/placeholder.svg"&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="heading-large"><a href="#heading-large" class="link-reset">Heading large</a></h2>
					<p>To increase the font size of your headings on tablets and desktops, just add the <code>.heading-large</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#heading-large-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="heading-large-tabs" class="switcher margin">
						<li>
							<h1 class="heading-large">Heading</h1>
						</li>
						<li>
							<pre><code>&lt;h1 class="heading-large"&gt;...&lt;h1&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="link-reset"><a href="#link-reset" class="link-reset">Link Reset</a></h2>
					<p>If a link should not have the default link color, just add the <code>.link-reset</code> class to the anchor element or the parent element. The anchor element will then inherit the color of it's parent (unless specified, that of the body). This class also removes the <code>text-decoration: underline;</code> on hover and focus.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#link-reset-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="link-reset-tabs" class="switcher margin">
						<li>
							<div class="row row-3-cols">
								<div class="col">
									<a href="#" class="link-reset">Anchor Tag</a>
								</div>
								<div class="col">
									<h2 class="link-reset"><a href="#">Heading</a></h2>
								</div>
								<div class="col">
									<ul class="list-unstyled col-3-12-medium link-reset">
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
										<li><a href="#">Link</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;!-- Class applied directly to 'a' element --&gt;
&lt;a class="link-reset"&gt;...&lt;a&gt;

&lt;!-- Applied to immediate parent --&gt;
&lt;h1 class="link-reset"&gt;&lt;a href="#"&gt;...&lt;a&gt;&lt;h1&gt;

&lt;!-- Applied to containing element --&gt;
&lt;ul class="link-reset"&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a href="#"&gt;...&lt;a&gt;&lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="scrollable-box"><a href="#scrollable-box" class="link-reset">Scrollable box</a></h2>
					<p>Add the <code>.scrollable-box</code> class to create a panel-like box which has a max-height and provides a vertical scrollbar.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#scrollable-box-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="scrollable-box-tabs" class="switcher margin">
						<li>
							<div class="scrollable-box col-6-12-medium">
								<ul class="list-unstyled">
									<li>
										<label><input type="checkbox"> Category 1</label>
									</li>
									<li>
										<label><input type="checkbox"> Category 2</label>
										<ul>
											<li>
												<label><input type="checkbox"> Category 2.1</label>
											</li>
											<li>
												<label><input type="checkbox"> Category 2.2</label>
											</li>
											<li>
												<label><input type="checkbox"> Category 2.3</label>
												<ul>
													<li>
														<label><input type="checkbox"> Category 2.3.1</label>
													</li>
													<li>
														<label><input type="checkbox"> Category 2.3.2</label>
													</li>
												</ul>
											</li>
											<li>
												<label><input type="checkbox"> Category 2.4</label>
											</li>
										</ul>
									</li>
									<li>
										<label><input type="checkbox"> Category 3</label>
									</li>
									<li>
										<label><input type="checkbox"> Category 4</label>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="scrollable-box"&gt;
    ...
&lt;/div&gt;</code></pre>
						</li>
					</ul>
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
					<hr>
					<h2 id="display-utilities"><a href="#display-utilities" class="link-reset">Display utilities</a></h2>
					<p>Add one of these classes to change the display properties of an element.</p>
					<div class="overflow-container">
						<table class="table-striped text-nowrap">
							<thead>
								<tr>
									<th class="col-3-12">Class</th>
									<th class="col-9-12">Description</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.display-block</code></td>
									<td>Forces the element to behave like a block element.</td>
								</tr>
								<tr>
									<td><code>.display-inline</code></td>
									<td>Forces the element to behave like an inline element.</td>
								</tr>
								<tr>
									<td><code>.display-inline-block</code></td>
									<td>Forces the element to behave like an inline-block element.</td>
								</tr>
							</tbody>
						</table>
					</div>
					<hr>
					<h2 id="visibility-utilities"><a href="#visibility-utilities" class="link-reset">Visibility utilities</a></h2>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#visible-utilities-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="visible-utilities-tabs" class="switcher margin">
						<li>
							<div class="overflow-container">
								<table class="table-condensed">
									<thead>
										<tr>
											<th class="col-3-12">Class</th>
											<th class="col-9-12">Description</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><code>.hidden</code></td>
											<td>Hides the element on any device.</td>
										</tr>
										<tr>
											<td><code>.hidden-touch</code></td>
											<td>Hides the element on touch devices.</td>
										</tr>
										<tr>
											<td><code>.hidden-notouch</code></td>
											<td>Hides the element on non-touch devices.</td>
										</tr>
										<tr>
											<td><code>.invisible</code></td>
											<td>Visually hides the element without affecting dom structure.</td>
										</tr>
										<tr>
											<td><code>.visible-hover</code></td>
											<td>Displays hidden content on hover using <code>display: block</code>. Add this class to the parent element.</td>
										</tr>
										<tr>
											<td><code>.visible-hover-inline</code></td>
											<td>Displays hidden content on hover using <code>display: inline-block</code>. Add this class to the parent element.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<div class="visible-hover-inline margin">
								Hover me...
								<div class="hidden">World!</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="visible-hover"&gt;
    ...
    &lt;div class="hidden"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h3>Responsive visibility</h3>
					<p>You can show or hide content on specific viewport widths. Breakpoints are set by LESS variables and can easily be modified. Since the line between different device sizes keeps blurring, class names are kept general and do not refer to particular devices.</p>
					<div class="overflow-container">
						<table class="table-line text-nowrap">
							<thead>
								<tr>
									<th class="col-3-12">Class</th>
									<th class="col-3-12">Small
										<br>
										<small>(Phones)</small>
										<br>
										<small style="font-weight: normal;">up to 767</small>
									</th>
									<th class="col-3-12">Medium
										<br>
										<small>(Tablets)</small>
										<br>
										<small style="font-weight: normal;">768 to 959</small>
									</th>
									<th class="col-3-12">Large
										<br>
										<small>(Desktops)</small>
										<br>
										<small style="font-weight: normal;">960 and larger</small>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>.visible-small</code></td>
									<td class="text-success">Visible</td>
									<td class="text-muted">Hidden</td>
									<td class="text-muted">Hidden</td>
								</tr>
								<tr>
									<td><code>.visible-medium</code></td>
									<td class="text-muted">Hidden</td>
									<td class="text-success">Visible</td>
									<td class="text-muted">Hidden</td>
								</tr>
								<tr>
									<td><code>.visible-large</code></td>
									<td class="text-muted">Hidden</td>
									<td class="text-muted">Hidden</td>
									<td class="text-success">Visible</td>
								</tr>
								<tr class="sep">
									<td><code>.hidden-small</code></td>
									<td class="text-muted">Hidden</td>
									<td class="text-success">Visible</td>
									<td class="text-success">Visible</td>
								</tr>
								<tr>
									<td><code>.hidden-medium</code></td>
									<td class="text-success">Visible</td>
									<td class="text-muted">Hidden</td>
									<td class="text-success">Visible</td>
								</tr>
								<tr>
									<td><code>.hidden-large</code></td>
									<td class="text-success">Visible</td>
									<td class="text-success">Visible</td>
									<td class="text-muted">Hidden</td>
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
