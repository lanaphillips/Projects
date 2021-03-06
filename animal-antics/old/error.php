<!DOCTYPE html>
<html>
    <head>
    <title>There Has Been an Error - Animal Antics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9 ]><link href="css/iefix.css" rel="stylesheet" media="screen"><![endif]-->
    </head>
    <body>
    <div id="picbg"></div>
    <div id="pgcont">
        <div id="headcont" class="row">
        <div id="logocont" class="span3"><a href="index.html" title="Animal Antics Home"><img src="img/logo.jpg" width="292" height="200" alt="Animal Antics" /></a></div>
        <div id="menucont" class="span3">
            <ul>
                <li><a href="index.html" title="Home">Home</a></li>
                <li><a href="daycaretraining.html" title="Doggy Day Care & Training">Doggy Day Care & Training</a></li>
                <li><a href="grooming.html" title="Grooming">Grooming</a></li>
                <li><a href="petfood.html" title="Pet Food">Pet Food</a></li>
                <li><a href="links.html" title="Links">Links</a></li>
                <li><a href="aboutus.html" title="About Us">About Us</a></li>
                <li><a href="registration.html" title="Registration">Registration</a></li>
                <li><a href="contact.html" title="Contact">Contact</a></li>
            </ul>
        </div>
        <div id="contactcont" class="span3">
        <p>1964 Rivera Drive, Suite J<br>Mount Pleasant, SC 29464</p>
        <p>Ph: coming soon<br>
		<a href="mailto:info@animalanticsllc.com" title="Email Us">info@animalanticsllc.com</a></p>
        <div id="contactfrmcont">
        <p>Animal antics newsletter</p>
        <div id="headfrmcont">
        <form id="headregister" action="includes/echeader.php" method="post">
        <input id="bottext" name="text" type="text" maxlength="70" size="47" />
        <input type="text" id="heademail" name="heademail" value="Your E-Mail Address" onfocus="if (this.value=='Your E-Mail Address') this.value=''" onblur="if(this.value=='') { this.value='Your E-Mail Address'; return false; }">
        <input type="submit" id="headsubmit" value="Subscribe">
        <div class="clearfix"></div>
        </form>
        </div>
        </div>
        <div id="socialcont">
        <p>Join Us!</p>
        <div id="socialicons">
        <div id="facebook"><a href="https://www.facebook.com/pages/Animal-Antics-LLC/357023004391292?ref=ts&fref=ts" target="_blank" title="Like Us on Facebook">Like Animal Antics on Facebook</a></div>
        <div id="twitter"><a href="https://twitter.com/AnimalAnticsLLC" target="_blank" title="Follow Us on Twitter">Follow Animal Antics on Facebook</a></div>
        <div class="clearfix"></div>
        </div>
        </div>
        </div>
        </div>
        <div id="bodycont">
        <div id="registerpghead"><div id="registerpgtitle" style="width:120px;"><h1>Sorry</h1></div></div>
        <div class="pgcontent">
        <h3>Unfortuanately we were undable to process your submission</h3>
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
        <div class="topbtn"><a href="#headcont" title="Back to Top">Back to Top</a></div>
        <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        </div>
        <div id="footercont">
        <div id="sitecopy"><p>All rights reserved 2013 - Animal Antics, LLC - &copy; 2013</p></div>
        <div id="sniffcopy"><a href="http://sniffdesign.com" target="_blank" title="Pet Web Site Design by Sniff Design Studio"><img src="img/sniffcopyright.png" alt="Pet Web Site Design by Sniff Design Studio" /></a></div>
        <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        </div>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>