<hr>
					<h2 id="modifiers"><a href="#modifiers" class="link-reset">Modifiers</a></h2>
					<p>Modifier classes are necessary to add a specific style to panels. <?php echo SITENAME; ?> includes a number of panel modifiers, and of course you can always create your own.</p>
					<h3>Panel box</h3>
					<p>Add the <code>.panel-box</code> class to create a visually styled box. This is the default panel modifier.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#panel-box-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="panel-box-tabs" class="switcher margin">
						<li>
							<div class="row" data-row-margin>
								<div class="col-4-12-medium">
									<div class="panel panel-box">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
								<div class="col-4-12-medium">
									<div class="panel panel-box">
										<h3 class="panel-title">Title</h3>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									</div>
								</div>
							</div>
						</li>
						<li>
							<pre><code>&lt;div class="panel panel-box"&gt;
    &lt;h3 class="panel-title"&gt;...&lt;/h3&gt;
    ...
&lt;/div&gt;</code></pre>
						</li>
					</ul>