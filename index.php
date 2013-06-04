	<?php include('_inc/header.php'); ?> 

<!-- GRID -->
<section class="container">
	<h1>Twelve Column Grid</h1>
	<!-- 
	
	grid system 
	
	-->
	<section class="row-fluid">
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
		<div class="span1 box">hi</div>
	</section>
	<section class="row-fluid">
		<div class="span2 box">hi</div>
		<div class="span2 box">hi</div>
		<div class="span2 box">hi</div>
		<div class="span2 box">hi</div>
		<div class="span2 box">hi</div>
		<div class="span2 box">hi</div>
	</section>
	<section class="row-fluid">
		<div class="span3 box">hi</div>
		<div class="span3 box">hi</div>
		<div class="span3 box">hi</div>
		<div class="span3 box">hi</div>
	</section>
	<section class="row-fluid">
		<div class="span4 box">hi</div>
		<div class="span4 box">hi</div>
		<div class="span4 box">hi</div>
	</section>
	<section class="row-fluid">
		<div class="span5 box">hi</div>
		<div class="span5 box">hi</div>
		<div class="span2 box">hi</div>
	</section>
	<section class="row-fluid">
		<div class="span6 box">hi</div>
		<div class="span4 box">hi</div>
		<div class="span2 box">hi</div>
	</section>
	<section class="row-fluid">
		<div class="span6 box">hi</div>
		<div class="span6 box">hi</div>
	</section>
	<section class="row-fluid">
		<div class="span8 box">hi</div>
		<div class="span4 box">hi</div>
	</section>
</section>

<!-- BUTTONS -->
<section class="container">
	<h2>New Better Btn Mark Up</h2>
	<p>Base class of .btn and all classes following .btn-property and the property is camel cased if more than one word</p>
	<section class="row-fluid-alt">
		<div class="span4">
			<h2>Button Colours</h2>
			<p>(main, secondary, grey, custom)</p>
			<a href="#" class="btn btn-main">main</a>
			<a href="#" class="btn btn-secondary">secondary</a>
			<a href="#" class="btn btn-grey">grey</a>
			<a href="#" class="btn btn-customColour">custom</a>
			<p>Active State (custom is black so you can't see it)</p>
			<a href="#" class="btn active btn-main">main</a>
			<a href="#" class="btn active btn-secondary">secondary</a>
			<a href="#" class="btn active btn-grey">grey</a>
			<a href="#" class="btn active btn-customColour">custom</a>
		</div>
		<div class="span4">
			<h2>Button Sizes</h2>
			<p>(smaller, small, medium, large, larger, custom)</p>
			<a href="#" class="btn btn-main btn-smaller">smaller</a>
			<a href="#" class="btn btn-main btn-small">small</a>
			<a href="#" class="btn btn-main btn-medium">medium</a>
			<a href="#" class="btn btn-main btn-large">large</a>
			<a href="#" class="btn btn-main btn-larger">larger</a>
			<a href="#" class="btn btn-main btn-customSize">custom</a>
		</div>
		<div class="span4">
			<h2>Other Buttons</h2>
			<p>(sets, dropdowns, etc)</p>
			<header>
				<h3>Button Sets</h3>
			</header>
			<div class="btn-set group">
				<a href="#" class="btn-main active">1</a>
				<a href="#" class="btn-main">2</a>
				<a href="#" class="btn-main">3</a>
				<a href="#" class="btn-main">4</a>
			</div>

			<div class="btn-dropdown dropdown-main group">
				<a href="#" class="btn-main">Button w/ Dropdown</a>
				<a href="#" class="btn-main btn-drop"><span class="carat">v</span></a>
				<ul>
					<li><a href="#">the</a></li>
					<li><a href="#">drop</a></li>
					<li><a href="#">down</a></li>
				</ul>
			</div>

			<div class="btn-dropdown dropdown-secondary group">
				<a href="#" class="btn-secondary">Button w/ Dropdown</a>
				<a href="#" class="btn-secondary btn-drop"><span class="carat">v</span></a>
				<ul>
					<li><a href="#">the</a></li>
					<li><a href="#">drop</a></li>
					<li><a href="#">down</a></li>
				</ul>
			</div>

			<div class="btn-dropdown dropdown-grey group">
				<a href="#" class="btn-grey">Button w/ Dropdown</a>
				<a href="#" class="btn-grey btn-drop"><span class="carat">v</span></a>
				<ul>
					<li><a href="#">the</a></li>
					<li><a href="#">drop</a></li>
					<li><a href="#">down</a></li>
				</ul>
			</div>


		</div>
	</section>
</section>

<!-- LISTS -->
<section class="container">
	<h2></h2>
	<section class="row-fluid">
		<!-- unordered lists -->
		<div class="span6">
			<!-- ONE LEVEL -->
			<h3>Unordered List (Basic)</h3>
			<ul>
				<li>item one</li>
				<li>item two</li>
				<li>item three</li>
				<li>item four</li>
			</ul>
			<!-- TWO LEVELS -->
			<h3>Unordered List (Expert)</h3>
			<ul>
				<li>item one</li>
				<li>item two</li>
				<li>item three
						<!-- level two -->
						<ul>
							<li>nested item one</li>
							<li>nested item two</li>
							<li>nested item three</li>
							<li>nested item four</li>
						</ul>
				</li>
				<li>item four</li>
			</ul>
			<!-- THREE LEVELS -->
			<h3>Unordered List (Madness)</h3>
			<ul>
				<li>item one</li>
				<li>item two</li>
				<li>item three
						<!-- level two -->
						<ul>
							<li>nested item one</li>
							<li>nested item two</li>
							<li>nested item three
								<!-- level three -->
								<ul>
									<li>nested nested item one</li>
									<li>nested nested item two</li>
									<li>nested nested item three</li>
								</ul>
							</li>
							<li>nested item four</li>
						</ul>
				</li>
				<li>item four</li>
			</ul>
			<!-- INCEPTION -->
			<h3>Unordered List (INCEPTION BRAMMMMMMM)</h3>
			<ul>
				<li>item one</li>
				<li>item two</li>
				<li>item three
						<!-- level two -->
						<ul>
							<li>nested item one</li>
							<li>nested item two</li>
							<li>nested item three
								<!-- level three -->
								<ul>
									<li>nested nested item one</li>
									<li>nested nested item two
										<!-- level inception -->
										<ul>
											<li>inception nested nested item one</li>
											<li>inception nested nested item two</li>
											<li>inception nested nested item three</li>
										</ul>
									</li>
									<li>nested nested item three</li>
								</ul>
							</li>
							<li>nested item four</li>
						</ul>
				</li>
				<li>item four</li>
			</ul>
			<!-- out of the dream -->
		</div>
		<!-- ordered lists -->
		<div class="span6">
			<!-- ONE LEVEL -->
			<h3>ordered List (Basic)</h3>
			<ol>
				<li>item one</li>
				<li>item two</li>
				<li>item three</li>
				<li>item four</li>
			</ol>
			<!-- TWO LEVELS -->
			<h3>ordered List (Expert)</h3>
			<ol>
				<li>item one</li>
				<li>item two</li>
				<li>item three
						<!-- level two -->
						<ol>
							<li>nested item one</li>
							<li>nested item two</li>
							<li>nested item three</li>
							<li>nested item four</li>
						</ol>
				</li>
				<li>item four</li>
			</ol>
			<!-- THREE LEVELS -->
			<h3>ordered List (Madness)</h3>
			<ol>
				<li>item one</li>
				<li>item two</li>
				<li>item three
						<!-- level two -->
						<ol>
							<li>nested item one</li>
							<li>nested item two</li>
							<li>nested item three
								<!-- level three -->
								<ol>
									<li>nested nested item one</li>
									<li>nested nested item two</li>
									<li>nested nested item three</li>
								</ol>
							</li>
							<li>nested item four</li>
						</ol>
				</li>
				<li>item four</li>
			</ol>
			<!-- INCEPTION -->
			<h3>ordered List (INCEPTION BRAMMMMMMM)</h3>
			<ol>
				<li>item one</li>
				<li>item two</li>
				<li>item three
						<!-- level two -->
						<ol>
							<li>nested item one</li>
							<li>nested item two</li>
							<li>nested item three
								<!-- level three -->
								<ol>
									<li>nested nested item one</li>
									<li>nested nested item two
										<!-- level inception -->
										<ol>
											<li>inception nested nested item one</li>
											<li>inception nested nested item two</li>
											<li>inception nested nested item three</li>
										</ol>
									</li>
									<li>nested nested item three</li>
								</ol>
							</li>
							<li>nested item four</li>
						</ol>
				</li>
				<li>item four</li>
			</ol>
		</div>
	</section>
</section>

	 <?php include('_inc/footer.php')?>

