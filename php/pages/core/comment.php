
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('core'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Comment</h1>
					<p class="article-lead" itemprop="about">Create comments, for example about articles.</p>
					<hr>
					<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>The Comment component consists of a comment header, including an avatar, a title and meta data, and a comment body.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#comment-tabs'}">
								<li><a href="#">Classes</a></li>
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="comment-tabs" class="switcher margin">
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
											<td><code>.comment</code></td>
											<td>Add this class to define the Comment component.</td>
										</tr>
										<tr>
											<td><code>.comment-header</code></td>
											<td>Add this class to create a comment header.</td>
										</tr>
										<tr>
											<td><code>.comment-avatar</code></td>
											<td>Add this class to an <code>&lt;img&gt;</code> element to create an avatar for the comment author.</td>
										</tr>
										<tr>
											<td><code>.comment-title</code></td>
											<td>Add this class to a heading to create a comment title.</td>
										</tr>
										<tr>
											<td><code>.comment-meta</code></td>
											<td>Add this class to a paragraph to create meta data about your comment.</td>
										</tr>
										<tr>
											<td><code>.comment-body</code></td>
											<td>Add this class to a <code>&lt;div&gt;</code> element to create comment body.</td>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
						<li>
							<article class="comment">
								<header class="comment-header">
									<img class="comment-avatar" src="<?php echo get_image('avatar.png'); ?>" width="50" height="50" alt="">
									<h4 class="comment-title">Author</h4>
									<div class="comment-meta">12 days ago | Profile | #</div>
								</header>
								<div class="comment-body">
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
								</div>
							</article>
						</li>
						<li>
							<pre><code>&lt;article class="comment"&gt;
    &lt;header class="comment-header"&gt;
        &lt;img class="comment-avatar" src="images/avatar.png"&gt;
        &lt;h4 class="comment-title"&gt;...&lt;/h4&gt;
        &lt;div class="comment-meta"&gt;...&lt;/div&gt;
    &lt;/header&gt;
    &lt;div class="comment-body"&gt;...&lt;/div&gt;
&lt;/article&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="comment-lists"><a href="#comment-lists" class="link-reset">Comment lists</a></h2>
					<p>Add the <code>.comment-list</code> class to a <code>&lt;ul&gt;</code> element to create a list of comments. You can nest any number of <code>&lt;ul&gt;</code> elements inside a comment list.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#comment-list-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="comment-list-tabs" class="switcher margin">
						<li>
							<ul class="comment-list">
								<li>
									<article class="comment">
										<header class="comment-header">
											<img class="comment-avatar" src="<?php echo get_image('avatar.png'); ?>" width="50" height="50" alt="">
											<h4 class="comment-title">Author</h4>
											<div class="comment-meta">12 days ago | Profile | #</div>
										</header>
										<div class="comment-body">
											<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
										</div>
									</article>
									<ul>
										<li>
											<article class="comment">
												<header class="comment-header">
													<img class="comment-avatar" src="<?php echo get_image('avatar.png'); ?>" width="50" height="50" alt="">
													<h4 class="comment-title">Author</h4>
													<div class="comment-meta">12 days ago | Profile | #</div>
												</header>
												<div class="comment-body">
													<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
												</div>
											</article>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<pre><code>&lt;ul class="comment-list"&gt;
    &lt;li&gt;
        &lt;article class="comment"&gt;...&lt;/article&gt;
        &lt;ul&gt;
            &lt;li&gt;
                &lt;article class="comment"&gt;...&lt;/article&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li&gt;
        &lt;article class="comment"&gt;...&lt;/article&gt;
    &lt;/li&gt;
&lt;/ul&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="color-modifier"><a href="#color-modifier" class="link-reset">Color modifier</a></h2>
					<p>To style a comment differently, for example to highlight it as the admin's comment, just add the <code>.comment-primary</code> class.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#comment-modifier-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="comment-modifier-tabs" class="switcher margin">
						<li>
							<article class="comment comment-primary">
								<header class="comment-header">
									<img class="comment-avatar" src="<?php echo get_image('avatar.png'); ?>" width="50" height="50" alt="">
									<h4 class="comment-title">Author</h4>
									<div class="comment-meta">12 days ago | Profile | #</div>
								</header>
								<div class="comment-body">
									<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
								</div>
							</article>
						</li>
						<li>
							<pre><code>&lt;article class="comment comment-primary"&gt;...&lt;/article&gt;</code></pre>
						</li>
					</ul>
					<hr>
					<h2 id="subnav-in-comments"><a href="#subnav-in-comments" class="link-reset">Subnav in comments</a></h2>
					<p>You can also use a subnav from the <a href="sub<?php echo get_url('core/nav'); ?>">Subnav component</a> to display the comment's meta data.</p>
					<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
						<div class="col">
							<h3>Usage</h3>
						</div>
						<div class="col">
							<ul class="tab" data-tab="{connect:'#comment-subnav-tabs'}">
								<li><a href="#">Example</a></li>
								<li><a href="#">Markup</a></li>
							</ul>
						</div>
					</div>
					<ul id="comment-subnav-tabs" class="switcher margin">
						<li>
							<article class="comment">
								<header class="comment-header">
									<img class="comment-avatar" src="<?php echo get_image('avatar.png'); ?>" width="50" height="50" alt="">
									<h4 class="comment-title">Subnav as comment meta</h4>
									<ul class="comment-meta subnav subnav-line">
										<li class="disabled"><a href="#">12 days ago</a></li>
										<li><a href="#">Profile</a></li>
										<li><a href="#">#</a></li>
									</ul>
								</header>
							</article>
						</li>
						<li>
							<pre><code>&lt;article class="comment"&gt;
    &lt;header class="comment-header"&gt;
        &lt;img class="comment-avatar" src="images/avatar.png"&gt;
        &lt;h4 class="comment-title"&gt;...&lt;/h4&gt;
        &lt;ul class="comment-meta subnav subnav-line"&gt;
            &lt;li class="disabled"&gt;&lt;a href="#"&gt;12 days ago&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#">Profile&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#">#&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/header&gt;
    &lt;div class="comment-body"&gt;...&lt;/div&gt;
&lt;/article&gt;</code></pre>
						</li>
					</ul>
				<?php get_microdata('author'); ?>
				</article>
			</div>
		</div>
	</div>
</div>
