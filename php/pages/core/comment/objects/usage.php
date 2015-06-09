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
						<td><code>.comment-list</code></td>
						<td>Applied to a <code>&lt;ul&gt;</code> item, this class applies the appropriate style to a list of comments.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Modifieres</h3>
			</div>
		</div>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><code>.comment-primary</code></td>
						<td>An alternate to the <code>.comment</code> class, this class gives the element a different background- and border-color.</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="flex flex-bottom flex-space-between row-margin docs-article-subtitle">
			<div class="col">
				<h3>Sub Objects</h3>
			</div>
		</div>
		<div class="overflow-container">
			<table class="table-striped">
				<thead>
					<tr>
						<th>Class</th>
						<th>Description</th>
					</tr>
				</thead>
				<tbody>
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
						<article class="comment comment-primary">
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
        &lt;article class="comment"&gt;
		    &lt;header class="comment-header"&gt;
		        &lt;img class="comment-avatar" src="images/avatar.png"&gt;
		        &lt;h4 class="comment-title"&gt;...&lt;/h4&gt;
		        &lt;div class="comment-meta"&gt;...&lt;/div&gt;
		    &lt;/header&gt;
		    &lt;div class="comment-body"&gt;...&lt;/div&gt;
		&lt;/article&gt;
        &lt;ul&gt;
            &lt;li&gt;
                &lt;article class="comment comment-primary"&gt;
				    &lt;header class="comment-header"&gt;
				        &lt;img class="comment-avatar" src="images/avatar.png"&gt;
				        &lt;h4 class="comment-title"&gt;...&lt;/h4&gt;
				        &lt;div class="comment-meta"&gt;...&lt;/div&gt;
				    &lt;/header&gt;
				    &lt;div class="comment-body"&gt;...&lt;/div&gt;
				&lt;/article&gt;
            &lt;/li&gt;
        &lt;/ul&gt;
    &lt;/li&gt;
    ...
&lt;/ul&gt;</code></pre>
	</li>
</ul>
