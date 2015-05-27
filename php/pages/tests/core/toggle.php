
<div class="container container-center">
	<h1>Toggle</h1>
	<p><button class="button" data-toggle="{target:'#toggle1'}">Toggle</button> <a href="#" data-toggle="{target:'#toggle1'}">Link</a></p>
	<div id="toggle1" class="panel panel-box">What's up?</div>
	<h2>Two items</h2>
	<p><button class="button" data-toggle="{target:'.toggle2'}">Toggle</button></p>
	<div class="panel panel-box toggle2">Hello!</div>
	<div class="panel panel-box toggle2 hidden">World!</div>
	<h2>Two items with different toggles</h2>
	<div class="panel panel-box toggle3">
		<button class="button" data-toggle="{target:'.toggle3'}">Next</button>
		<p>Hello!</p>
	</div>
	<div class="panel panel-box panel-box-primary toggle3 hidden">
		<button class="button button-primary" data-toggle="{target:'.toggle3'}">Previous</button>
		<p>World!</p>
	</div>
	<h2>Toggle all above</h2>
	<button class="button" data-toggle="{target:'#toggle1, .toggle2, .toggle3'}">Go</button>
	<h2>Custom class</h2>
	<p><button class="button" data-toggle="{target:'#toggle4', cls:'panel-box-primary'}">Toggle</button></p>
	<div id="toggle4" class="panel panel-box">What's up?</div>
	<h2>Toggle with animation</h2>
	<p><button class="button" data-toggle="{target:'#toggle5', animation:'animation-fade'}">Toggle</button></p>
	<div id="toggle5" class="panel panel-box">Animation...</div>
	<p><button class="button" data-toggle="{target:'#toggle6', animation:'animation-slide-left, animation-slide-top'}">Toggle</button></p>
	<div id="toggle6" class="panel panel-box">Two different animations...</div>
</div>
