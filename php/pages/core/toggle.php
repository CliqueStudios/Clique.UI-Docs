
	<div class="docs-middle">
		<div class="container container-center">
			<div class="row" data-row-margin>

				<?php get_sidebar('core'); ?>

				<div class="docs-main col-9-12-medium">
					<article class="article" itemscope itemtype="http://schema.org/Article">
						<h1 class="article-title" itemprop="headline">Toggle</h1>
						<p class="article-lead" itemprop="about">Hide, switch or change the appearence of different contents through a toggle.</p>
						<hr>
						<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
						<p>To apply this component, just add the <code>data-toggle="{target: #ID}"</code> attribute to a <code>&lt;button&gt;</code> or <code>&lt;a&gt;</code> element. You can use any selector with the toggle attribute.</p>
						<p>The toggle will add or remove a class from the item. By default, it adds the <code>.hidden</code> class to hide the element.</p>
						<?php
					$text = '<p><button data-toggle="{target:\'#toggle1\'}">Toggle</button></p>
<div id="toggle1" class="panel panel-box">What\'s up?</div>';
						print_example($text);
					?>
						<hr>
						<h2 id="multiple-items"><a href="#multiple-items" class="link-reset">Multiple items</a></h2>
						<p>You can also toggle multiple items at the same time. Just use the appropriate selector.</p>
						<?php
					$text = '<p><button data-toggle="{target:\'.toggle2\'}">Toggle</button></p>
<div class="panel panel-box toggle2">Hello!</div>
<div class="panel panel-box toggle2 hidden">World!</div>';
						print_example($text);
					?>
						<p><span class="badge">NOTE</span> In this example we added the <code>.hidden</code> class to one of the items, so that only the other item will be shown. The toggle will switch visible states between both elements.</p>
						<hr>
						<h2 id="custom-class"><a href="#custom-class" class="link-reset">Custom class</a></h2>
						<p>If you don't want to toggle the <code>.hidden</code> class, you can also add your own custom class.</p>
						<?php
					$text = '<p><button data-toggle="{target:\'#toggle3\', cls:\'panel-box-primary\'}">Toggle</button></p>
<div id="toggle3" class="panel panel-box">What\'s up?</div>';
						print_example($text);
					?>
						<p><span class="badge">NOTE</span> In this example we used the <code>.panel-box-primary</code> class to switch between different panel styles.</p>
						<h2 id="toggle-animations"><a href="#toggle-animations" class="link-reset">Animations</a></h2>
						<p>The Toggle component allows you to add animations to items when toggling between them. Just add one of the <code>.animation-*</code> classes from the <a href="<?php echo get_url('core/animation'); ?>">Animation component</a> to the <code>animation</code> parameter. The class will be applied to the in as well as the out animation. If you prefer a different out animation, just add another class.</p>
						<?php
					$text = '<p><button data-toggle="{target:\'#toggle5\', animation:\'animation-slide-left, animation-slide-bottom\'}">Toggle</button></p>
<div id="toggle5" class="panel panel-box">It\'s magic!</div>';
						print_example($text);
					?>
						<hr>
						<h2 id="javascript"><a href="#javascript-options" class="link-reset">JavaScript options</a></h2>
						<p>This is an example of how to set options via attribute:</p>
						<pre><code>data-toggle=&quot;{target:'#my-id'}&quot;</code></pre>
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
										<td><code>target</code></td>
										<td>CSS selector</td>
										<td>false</td>
										<td>Elements where classes should be toggled</td>
									</tr>
									<tr>
										<td><code>cls</code></td>
										<td>string</td>
										<td>'hidden'</td>
										<td>Class to toggle</td>
									</tr>
									<tr>
										<td><code>animation</code></td>
										<td>mixed</td>
										<td>false</td>
										<td>Any animation class name.</td>
									</tr>
								</tbody>
							</table>
						</div>
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
										<td><code>toggle.clique</code></td>
										<td>event, data</td>
										<td>After toggle completed</td>
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
