<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Site Name</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="a website description">
	<meta name="author" content="the author">

	<!-- styles -->
	<link rel="stylesheet" href="../assets/css/styles.css" type="text/css" media="screen" charset="utf-8">
	
	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- fav and touch icons -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
	<header class="site-header container">
		<h1>Site Name</h1>
		<?php print $_SERVER['DOCUMENT_ROOT']; ?>
	</header>
	<nav class="site-nav nav-horizontal" data-image="true">
		<ul class="menu menu-left">
			<li class="first dropdown">
				<a href="#">item one</a>
				<ul class="dropdown-menu">
					<li><a href="#">sub one</a></li>
					<li><a href="#">sub two</a></li>
					<li><a href="#">sub three</a></li>
				</ul>
			</li>
			<li><a href="#">item two</a></li>
			<li><a href="#">item three</a></li>
			<li class="last"><a href="#">item four</a></li>
		</ul>
		<ul class="menu menu-right">
			<li class="first"><a href="#">something</a></li>
			<li class="last"><a href="#">somewhat</a></li>
		</ul>
	</nav>
