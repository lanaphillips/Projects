<!DOCTYPE html>
<html>
<head>
    <title>Error: Animal Antics</title>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="title" content="Animal Antics | Pet Supplies | Dog Grooming | Doggie Daycare &amp; Training | Mount Pleasant, SC" />
	<meta name="description" content="Animal Antics is your destination for a wide variety of pet supplies, pet food, dog grooming, doggie daycare and training in the Mount Pleasant, South Carolina area." />
	<meta name="keywords" content="Animal Antics, Dog, Cat, Pet, Supplies, Grooming, Daycare, Training, Mount Pleasant, South Carolina" />

    <!-- Twitter -->
	<meta name="twitter:site" content="Animal Antics">
	<meta name="twitter:title" content="Animal Antics | Pet Supplies | Dog Grooming | Doggie Daycare &amp; Training | Mount Pleasant, SC">
	<meta name="twitter:description" content="Animal Antics is your destination for a wide variety of pet supplies, pet food, dog grooming, doggie daycare and training in the Mount Pleasant, South Carolina area.">
	<meta name="twitter:url" content="http://animalanticsllc.com">

	<!-- Facebook -->
	<meta property="og:title" content="Animal Antics | Pet Supplies | Dog Grooming | Doggie Daycare &amp; Training | Mount Pleasant, SC" />
	<meta property="og:description" content="Animal Antics is your destination for a wide variety of pet supplies, pet food, dog grooming, doggie daycare and training in the Mount Pleasant, South Carolina area." />
	<meta property="og:url" content="http://animalanticsllc.com" />
	<meta property="og:image" content="" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css">
    <link href="css/styles.css" rel="stylesheet" media="screen">

</head>

<body class="error">
<div class="wrapper">

	<div id="header">

		<div class="col-1 logo">
			<a href="/index.html">
				<img src="img/logo.png" alt="Animal Antics">
			</a>
		</div>

		<div class="col-1 nav">
			<ul>
                <li><a href="index.html" title="Home">Home</a></li>
                <li><a href="aboutus.html" title="About Us">About Us</a></li>
                <li><a href="grooming.html" title="Grooming">Grooming</a></li>
                <li><a href="petfood.html" title="Pet Food">Pet Food</a></li>
                <li><a href="daycaretraining.html" title="Doggy Day Care &amp; Training">Doggy Day Care &amp; Training</a></li>
                <li><a href="events.html" title="events">Events</a></li>
                <li><a href="contact.html" title="Contact">Contact Us</a></li>
            </ul>
		</div>

		<div class="col-1 contact-info">
			<ul>
				<li>1964 Rivera Drive, Suite J<br>Mount Pleasant, SC 29464</li>
				<li>Ph: 843-284-8903<br />Fax: 843-388-7904<br /><a href="mailto:info@animalanticsllc.com" title="Email Us">info@animalanticsllc.com</a></li>
				<li>
					<div class="newsletter">
	                    <form id="headregister" action="includes/echeader.php" method="post">
	                    	<label>Animal antics newsletter</label>
	                    	<input id="bottext" name="text" type="text" maxlength="70" size="47">
	                        <input type="text" id="email" name="heademail" value="Your E-Mail Address" onfocus="if (this.value=='Your E-Mail Address') this.value=''" onblur="if(this.value=='') { this.value='Your E-Mail Address'; return false; }">
	                        <input type="submit" id="submit" value="Subscribe">
	                    </form>
					</div>
				</li>
				<li class="socials">
					Join Us!
					<ul>
						<li class="facebook">
							<a class="icon-facebook" target="_blank" href="https://www.facebook.com/pages/Animal-Antics-LLC/357023004391292?ref=ts&fref=ts" title="Like Us on Facebook"></a>
						</li>
						<li class="twitter">
							<a class="icon-twitter" target="_blank" href="https://twitter.com/AnimalAnticsLLC" title="Follow Us on Twitter"></a>
						</li>
						<li class="pinterest">
							<a class="icon-pinterest" target="_blank" href="http://pinterest.com/jst4di/"></a>
						</li>
					</ul>
				</li>
			</ul>
		</div>

	</div>

	<div id="content">

		<div class="col-3 banner">

			<img src="img/training/banner.jpg" alt="">

			<h1>Sorry</h1>

			<div class="tagline">"A Holistic Approach to Pet Wellness"</div>

		</div>

		<div class="col-3">
			<div class="article">
				<h2>Unfortuanately we were undable to process your submission</h2>
		        <p>We have detected an error with your submission. Please follow the information below:</p>
		        <p style="height:150px;">
		        <?php
				$er = 0;
		        if ($_GET['er'] !== ''){
					$er = $_GET['er'];	
				}
				if ($er !== 0) {
					switch ($er){
						case 1:
						echo "Email address input left empty. Please go back and put in your email address.";
						break;
						case 2:
						echo "Invalid email address entered. Please go back and fix it before sending.";
						break;
						default:
						break;
					}
				}
				?>
		        </p>
			</div>
		</div>

	</div>

	<div id="footer">

		<div class="legal">
			<p>&copy; 2013 Animal Antics. All rights reserved.</p>
		</div>

		<div class="designed-by">
			<p>Designed by <a target="_blank" href="http://sniffdesign.com">Sniff Design</a></p>
		</div>

	</div>

</div><!-- .wrapper -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/client.js" type="text/javascript"></script>

</body>
</html>