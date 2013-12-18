<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 

<head>

	<meta charset="utf-8">
	
	<!-- Custom PHP script -->
	<?php include 'php/client.php'; ?>

	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $clientName; ?></title>
	
	<!-- Meta -->
	<meta name="title" content="<?php echo $title; ?>" />
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $metaTags; ?>" />
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="<?php echo $clientName; ?> <?php echo date("Y"); ?>" />
	<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->

	<!-- CSS -->
	<link rel="stylesheet" href="/css/reset.css" />
	<link rel="stylesheet" href="/css/style.css" />
	
	<!-- Windows 8 -->
	<meta name="application-name" content="" /> 
	<meta name="msapplication-TileColor" content="" /> 
	<meta name="msapplication-TileImage" content="" />

	<!-- Twitter -->
	<meta name="twitter:card" content="">
	<meta name="twitter:site" content="">
	<meta name="twitter:title" content="<?php echo $title; ?>">
	<meta name="twitter:description" content="">
	<meta name="twitter:url" content="<?php echo $url; ?>">

	<!-- Facebook -->
	<meta property="og:title" content="<?php echo $title; ?>" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="<?php echo $url; ?>" />
	<meta property="og:image" content="" />

</head>
<body class="<?php echo $bodyClass; ?>">

<div id="wrapper">
<header id="header" role="banner">
	
	<div id="logo" class="logo"><a href="/"><?php echo $clientName; ?></a></div>

	<nav id="navigation" role="navigation">

		<ul class="left-nav">
			<li class="home<?php if ($bodyClass == "home") { echo ' selected'; } ?>"><a href="/">Home</a></li>
			<li class="services<?php if ($bodyClass == "services") { echo ' selected'; } ?>"><a href="/services">Services</a></li>
		</ul>
		<ul class="right-nav">
			<li class="faq<?php if ($bodyClass == "faq") { echo ' selected'; } ?>"><a href="/faq">FAQ</a></li>
			<li class="about<?php if ($bodyClass == "about") { echo ' selected'; } ?>"><a href="/about">About</a></li>
			<li class="news<?php if ($bodyClass == "news") { echo ' selected'; } ?>"><a href="/news">News</a></li>
		</ul>

	</nav>

	<div id="slogan" class="slogan">
		<div class="slogan-wrapper">
			<span>Leave 'Em in the Right Hands!</span>
		</div>
	</div>

</header>
	