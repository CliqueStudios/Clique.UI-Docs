
<div class="docs-middle">
	<div class="container container-center">
		<div class="row" data-row-margin>
			<?php get_sidebar('components'); ?>
			<div class="docs-main col-9-12-medium">
				<article class="article" itemscope itemtype="http://schema.org/Article">
					<h1 class="article-title" itemprop="headline">Upload</h1>
					<p class="article-lead" itemprop="about">Allow users to upload files through a file input form element or a placeholder area.</p>
					<hr>
						<h2 id="usage"><a href="#usage" class="link-reset">Usage</a></h2>
					<p>This JavaScript component utilizes the latest XMLHttpRequest Level 2 specification and provides the ability of uploading files via ajax including tracking of the upload progress. The component provides two ways of uploading files: <code>select</code> and <code>drop</code>. While the <code>select</code> request can only be applied to <code>&lt;input type=&quot;file&quot;&gt;</code> elements, you can basically use any element with <code>drop</code>, which enables you to simply drag and drop files from your desktop into the specified element to upload them. Note that this component does not handle your file uploads on the server.</p>
					<p>The Upload component always needs to be implemented individually according to your requirements. In our example case we used the <a href="<?php echo get_url('components/placeholder'); ?>">Placeholder</a> and the <a href="<?php echo get_url('components/form-file'); ?>">Form file</a> component, applying both the <code>drop</code> and <code>select</code> requests. Additionally we used the <a href="<?php echo get_url('components/progress'); ?>">Progress component</a> to illustrate the uploading progress.</p>
					<h3 class="docs-article-subtitle">Example</h3>
					<div id="upload-drop" class="placeholder text-center"><i class="icon-cloud-upload icon-medium text-muted margin-small-right"></i> Attach binaries by dropping them here or<a class="form-file">selecting one<input id="upload-select" type="file"></a>.
					</div>
					<div id="progressbar" class="progress hidden">
						<div class="progress-bar" style="width: 0%;">0%</div>
					</div>
					<h3 class="docs-article-subtitle">Markup</h3>
					<pre><code>&lt;div id="upload-drop" class="placeholder"&gt;
    Info text...
    &lt;a class=&quot;form-file&quot;&gt;Select a file&lt;input id="upload-select" type="file"&gt;&lt;/a&gt;.
&lt;/div&gt;
&lt;div id="progressbar" class="progress hidden"&gt;
    &lt;div class="progress-bar" style="width: 0%;"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
					<hr>
					<h3>JavaScript</h3>
					<p> To create <code>select</code> and <code>drop</code> upload listeners you need to instantiate each upload class with the target element and options, which defines callbacks and useful settings. </p>
					<pre><code class="javascript">$(function(){
var progressbar = $("#progressbar"),
    bar = progressbar.find('.progress-bar'),
    settings = {
        // upload url
        action : '/',

        // allow only images
        allow : '*.(jpg|jpeg|gif|png)',

        loadstart : function() {
            bar.css("width", "0%").text("0%");
            progressbar.removeClass("hidden");
        },
        progress : function(percent) {
            percent = Math.ceil(percent);
            bar.css("width", percent+"%").text(percent+"%");
        },
        allcomplete : function(response) {
            bar.css("width", "100%").text("100%");
            setTimeout(function(){
                progressbar.addClass("hidden");
            }, 250);
            alert("Upload Completed")
        }
    },
    select = Clique.uploadSelect($("#upload-select"), settings),
    drop = Clique.uploadDrop($("#upload-drop"), settings);
});</code></pre>
					<hr>
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
									<td><code>action</code></td>
									<td>string</td>
									<td>''</td>
									<td>Target url for the upload</td>
								</tr>
								<tr>
									<td><code>single</code></td>
									<td>boolean</td>
									<td>true</td>
									<td>Send each file one by one</td>
								</tr>
								<tr>
									<td><code>param</code></td>
									<td>string</td>
									<td>files[]</td>
									<td>Post query name</td>
								</tr>
								<tr>
									<td><code>params</code></td>
									<td>JSON Object</td>
									<td>{}</td>
									<td>Additional request parameters</td>
								</tr>
								<tr>
									<td><code>allow</code></td>
									<td>string</td>
									<td>*.*</td>
									<td>File filter</td>
								</tr>
								<tr>
									<td><code>filelimit</code></td>
									<td>integer</td>
									<td>false</td>
									<td>Limit the number of files to upload</td>
								</tr>
								<tr>
									<td><code>type</code></td>
									<td>(text | json)</td>
									<td>text</td>
									<td>Response type from server</td>
								</tr>
							</tbody>
						</table>
					</div>
					<h3>Callback events</h3>
					<div class="overflow-container">
						<table class="table-striped">
							<thead>
								<tr>
									<th>Name</th>
									<th>Parameter</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><code>before</code></td>
									<td>settings, files</td>
								</tr>
								<tr>
									<td><code>beforeAll</code></td>
									<td>files</td>
								</tr>
								<tr>
									<td><code>beforeSend</code></td>
									<td>xhr</td>
								</tr>
								<tr>
									<td><code>progress</code></td>
									<td>percent</td>
								</tr>
								<tr>
									<td><code>complete</code></td>
									<td>response, xhr</td>
								</tr>
								<tr>
									<td><code>allcomplete</code></td>
									<td>response, xhr</td>
								</tr>
								<tr>
									<td><code>notallowed</code></td>
									<td>file, settings</td>
								</tr>
								<tr>
									<td><code>loadstart</code></td>
									<td>event</td>
								</tr>
								<tr>
									<td><code>load</code></td>
									<td>event</td>
								</tr>
								<tr>
									<td><code>loadend</code></td>
									<td>event</td>
								</tr>
								<tr>
									<td><code>error</code></td>
									<td>event</td>
								</tr>
								<tr>
									<td><code>abort</code></td>
									<td>event</td>
								</tr>
								<tr>
									<td><code>readystatechange</code></td>
									<td>event</td>
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
