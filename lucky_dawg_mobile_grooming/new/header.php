<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>

	<meta charset="utf-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Some Custom php scripts -->
	<?php include 'php/client.php'; ?>
	
	<!-- Making Title Dynamic -->
	<title><?php echo $title ?></title>
	
	<!-- Important Meta Info -->
	<meta name="title" content="<?php echo $pageName; ?>: Lucky Dawg Mobile Pet Grooming" />
	<meta name="description" content="" />
	<meta name="author" content="Sniff Design, sniffdesign.com" />

	<!-- Copyright that shit -->
	<meta name="Copyright" content="Copyright Lucky Dawg Mobile Grooming <?php echo date("Y"); ?>" />
	

	<!-- Yaya, i'm responsive! -->
	<!--
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	-->

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" />

	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.9.1.min.js'>\x3C/script>")</script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript" src="js/client.js"></script>
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/client.css">
	
	<!-- Twitter -->
	<meta name="twitter:site" content="Lucky Dawg Mobile Pet Grooming">
	<meta name="twitter:title" content="<?php echo $title ?>">
	<meta name="twitter:description" content="">
	<meta name="twitter:url" content="<?php echo $url; ?>">
	
	<!-- Facebook -->
	<meta property="og:title" content="<?php echo $title ?>" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="<?php echo $url; ?>" />

</head>

<body>

<div class="wrapper">
<header id="header">

	<div class="make-an-appointment">
		<a id="appointment-btn" href="#contact-form">Request an Appointment</a>
		<div class="form-wrapper">
			<?php include 'forms/request-an-appointment.php'; ?>
		</div>
	</div>

	<div class="col-1 contact">
		<p>
			<span class="phone"><strong>310.784.0775</strong></span>
			<span class="address">Lucky Dawg Salon Pet Grooming<br />
			2923 Rolling Hills Road<br />
			Torrance, CA 90505</span>
			<span class="hours">Hours: Tues - Sun, 8am - 5pm</span>
		</p>
	</div>
	<div class="col-1 logo">
		<a href="/">Lucky Dawg Mobile Pet Grooming</a>
	</div>
	<div class="col-1 socials">
		<ul>
			<li><a class="icon-facebook" target="_blank" href="https://www.facebook.com/pages/Lucky-Dawg-Mobile-Pet-Grooming/292360839365?fref=ts"><span>Facebook</span></a></li>
		</ul>
	</div>

	<nav id="navigation">
		<ul>
			<li><a <?php if ($filePath == "index") { echo 'class="selected"'; } ?> href="/">Home</a></li>
			<li><a <?php if ($filePath == "about_us") { echo 'class="selected"'; } ?>href="/about_us.php">About Us</a></li>
			<li><a <?php if ($filePath == "dog_grooming") { echo 'class="selected"'; } ?>href="/dog_grooming.php">Dog Grooming</a></li>
			<li><a <?php if ($filePath == "cat_grooming") { echo 'class="selected"'; } ?>href="/cat_grooming.php">Cat Grooming</a></li>
			<li><a <?php if ($filePath == "prices") { echo 'class="selected"'; } ?>href="/prices.php">Prices</a></li>
			<li><a <?php if ($filePath == "areas_serviced") { echo 'class="selected"'; } ?>href="/areas_serviced.php">Areas Serviced</a></li>
			<li><a <?php if ($filePath == "about_our_mobile_units") { echo 'class="selected"'; } ?>href="/about_our_mobile_units.php">About Our Mobile Units</a></li>
			<li><a <?php if ($filePath == "photo_gallery") { echo 'class="selected"'; } ?>href="/photo_gallery.php">Photo Gallery</a></li>
			<li><a <?php if ($filePath == "faq") { echo 'class="selected"'; } ?>href="/faq.php">FAQ</a></li>
			<li><a <?php if ($filePath == "contact_us") { echo 'class="selected"'; } ?>href="/contact_us.php">Contact Us</a></li>
			<li><a <?php if ($filePath == "gift_certificates") { echo 'class="selected"'; } ?>href="/gift_certificates.php">Gift Certificates</a></li>
			<li><a <?php if ($filePath == "links") { echo 'class="selected"'; } ?>href="/links.php">Links</a></li>
		</ul>
	</nav>

</header>
<div id="content">