	<?php echo $header; ?>

	<div class="hero-unit">
		<div class="container">
			<h1>A Framework For Web Artisans</h1>
			<p>Laravel is a clean and classy framework for PHP web development. Freeing you from
				spaghetti code, Laravel helps you<br> create wonderful applications using simple, expressive
				syntax. Development should be a creative experience<br> that you enjoy, not something that is
				painful. Enjoy the fresh air.</p>
		</div>
	</div>

	<div class="midcontent">
		<div class="container">

			<div class="boxes row">
				<div class="span6">
					<div class="documentation">
						<h3>INCREDIBLY WELL DOCUMENTED</h3>
						<p>A class API just doesn't cut it. Laravel has great documentation to help you get up to speed as quickly as possible. It's readable and thorough. You'll love it.</p>
						<a href="<?php echo url('docs'); ?>" class="yellow">view documentation &raquo;</a>
					</div>
				</div>
				<div class="span6">
					<div class="bundles">
						<h3>GRAB SOME BUNDLES</h3>
						<p>Bundles are a great way to package and share Laravel code. They can be anything - from a complete ORM or simple debugging tools, and it's a breeze to drop them into your application!</p>
						<a href="http://bundles.laravel.com" class="yellow">BUNDLE LIBRARY &raquo;</a>
					</div>
				</div>
			</div>
			<div class="boxes row">
				<div class="span6">
					<div class="testimonials">
						<h3>ALL THE COOL KIDS ARE DOING IT</h3>
						<blockquote>
						<p>"<?php echo $quote['quote']; ?>" <small><?php echo $quote['name']; ?> <cite title=""><?php echo $quote['title']; ?></cite></small></p>
						</blockquote>
					</div>
				</div>
				<div class="span6">
					<div class="github">
						<h3>NOW GIT TO WORK!</h3>
						<p>Laravel is open-source software. All of the code is available on Github and anyone can contribute, so go fork the repository and make a pull request!</p>
						<a href="http://github.com/laravel" class="yellow">VIEW ON GITHUB &raquo;</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php echo $footer; ?>