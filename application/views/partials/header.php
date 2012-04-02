<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo $title; ?></title>
		<meta name="description" content="Laravel is a clean and classy PHP framework with minimal configuration and expressive syntax. RESTful routing; ORM; beautiful code.">
		<meta name="keywords" content="php framework, framework, restful routing, restful, clean php">
		<meta name="robots" content="index,follow">
		<meta name="application-name" content="Laravel">
		<link rel="author" href="/humans.txt">
		<link rel="dns-prefetch" href="//ajax.googleapis.com">
		<link rel="shortcut icon" href="<?php echo URL::to_asset('img/favicon.png'); ?>">

		<!-- styles -->
		<link href="<?php echo URL::to_asset('css/style.css') ?>?3" rel="stylesheet" type="text/css">

		<!-- Js for fonts and tracking -->
		<script type="text/javascript" src="http://use.typekit.com/dlj4kfm.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src="<?php echo URL::to_asset('js/modernizr-2.5.2.min.js'); ?>"></script>

		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-23865777-1']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>

	<body<?php if (isset($body_class)) echo ' class="'.$body_class.'"'; ?>>
		<header>
			<div class="container">
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container" style="width: auto;">
							<h1><a href="http://laravel.com">Laravel</a></h1>

							<div class="nav-collapse">
								<ul class="nav pull-right">
									<li><a href="<?php echo url(); ?>">Home</a></li>
									<li><a href="<?php echo url('about'); ?>">About</a></li>
									<li><a href="<?php echo url('about#donations'); ?>">Donate</a></li>
									<li><a href="http://bundles.laravel.com">Bundles</a></li>
									<li class="dropdown">
										<a href="<?php echo url('docs'); ?>" class="dropdown-toggle" data-toggle="dropdown">Learn <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="<?php echo url('docs'); ?>">Documentation</a></li>
											<li><a href="http://screenr.com/user/laravel">Screencasts</a></li>
											<li class="divider"></li>
											<li><a href="<?php echo url('api'); ?>">Developer API</a></li>
										</ul>
									</li>
									<li class="dropdown">
										<a href="http://forums.laravel.com" class="dropdown-toggle" data-toggle="dropdown">Community <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="http://forums.laravel.com">Forums</a></li>
											<li><a href="<?php echo url('irc') ?>">IRC</a></li>
										</ul>
									</li>
									<li class="download"><a href="<?php echo url('download') ?>">Download</a></li>
								</ul>
							</div><!-- /.nav-collapse -->
						</div>
					</div><!-- /navbar-inner -->
				</div>
			</div>
		</header>