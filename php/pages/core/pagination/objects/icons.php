<hr>
					<h2 id="pagination-with-icons"><a href="#pagination-with-icons" class="link-reset">Pagination with icons</a></h2>
					<p>Enhance your pagination with icons from the <a href="<?php echo get_url('core/icon'); ?>">Icon component</a> by adding one of the <code>.icon-*</code> classes to an <code>&lt;i&gt;</code> or <code>&lt;span&gt;</code> element within a pagination link.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#pagination3-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="pagination3-tabs" class="switcher margin">
						<li>
							<ul class="pagination">
								<li>
									<a href="#">
										<i class="icon-chevron-left"></i>
									</a>
								</li>
								<li class="active">
									<span>
										<i class="icon-chevron-left"></i>
									</span>
								</li>
								<li class="disabled">
									<span>
										<i class="icon-chevron-left"></i>
									</span>
								</li>
								<li>
									<span>...</span>
								</li>
								<li class="disabled">
									<span>
										<i class="icon-chevron-right"></i>
									</span>
								</li>
								<li class="active">
									<span>
										<i class="icon-chevron-right"></i>
									</span>
								</li>
								<li>
									<a href="#">
										<i class="icon-chevron-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-chevron-left">&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="#"&gt;&lt;i class="icon-chevron-right">&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;</code></pre>
						</li>
					</ul>
					<hr>