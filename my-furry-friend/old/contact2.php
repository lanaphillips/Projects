<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Keywords" content="cat sitting in San Francisco, San Francisco cat sitter, San Francisco cat therapist, cat behaviorist, Bay Area cat sitter, in home pet sitting for cats, cat pet sitter in San Francisco, San Francisco pet care services, pet sitter in San Francisco" />
<title>My Furry Friend - Contact</title>
<link href="mffStyles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<a name="top"></a>
<div align="center"> <br />
  <table width="750" border="0" cellspacing="0" cellpadding="0" class="pageContainer">
    <tr>
      <td colspan="2" align="center" valign="top" class="header"><a href="index.html"><img src="assets/logo2.jpg" alt="My Furry Friend - Specializing in the needs of cats" width="212" height="130" border="0" /></a></td>
    </tr>
    <tr>
      <td width="128" align="left" valign="top" class="nav"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" class="navcell"><a href="index.html"><img src="assets/btn_home.jpg" alt="Home" width="122" height="79" border="0" /></a></td>
          </tr>
          <tr>
            <td align="center" class="navcell"><a href="services.html"><img src="assets/btn_services.jpg" alt="Services" width="123" height="73" border="0" /></a></td>
          </tr>
          <tr>
            <td align="center" class="navcell"><a href="consult.html"><img src="assets/btn_behavior.jpg" alt="Behavioral Consultations" width="121" height="86" border="0" /></a></td>
          </tr>
          <tr>
            <td align="center" class="navcell"><a href="about.html"><img src="assets/btn_about.jpg" alt="About" width="123" height="81" border="0" /></a></td>
          </tr>
          <tr>
            <td align="center" class="navcell"><a href="contact.html"><img src="assets/btn_contact.jpg" alt="Contact Us" width="123" height="71" border="0" /></a></td>
          </tr>
          <tr>
            <td align="center" class="navcell"><a href="links.html"><img src="assets/btn_links.jpg" alt="Links" width="123" height="73" border="0" /></a></td>
          </tr>
        </table></td>
      <td width="618" align="left" valign="top" class="content"><p><img src="assets/title_contact.jpg" alt="Contact Us" width="186" height="60" /></p>
        <p><strong>Phone:</strong> 415-282-7387 (pets)</p>
        <p><strong>Email:</strong> <a href="mailto:myfurryfriend_sf@yahoo.com">info@myfurryfriend.net</a></p>
        <p><strong>Thank you, your message has been sent. </strong></p>
        <p>
          <?php
error_reporting(0);
  
$name = $_REQUEST['name'];
$address = $_REQUEST['address'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zip = $_REQUEST['zip'];
$email = $_REQUEST['email'];
$homephone = $_REQUEST['homephone'];
$cellphone = $_REQUEST['cellphone'];
$workphone = $_REQUEST['workphone'];
$website = $_REQUEST['website'];
$yellowpages = $_REQUEST['yellowpages'];
$newspaper = $_REQUEST['newspaper'];
$naaps = $_REQUEST['naaps'];
$vet = $_REQUEST['vet'];
$otherhearabout = $_REQUEST['otherhearabout'];
$pet1name = $_REQUEST['pet1name'];
$pet1age = $_REQUEST['pet1age'];
$pet1gender = $_REQUEST['pet1gender'];
$pet2name = $_REQUEST['pet2name'];
$pet2age = $_REQUEST['pet2age'];
$pet2gender = $_REQUEST['pet2gender'];
$otherpetinfo = $_REQUEST['otherpetinfo'];
$requestpetsitting = $_REQUEST['requestpetsitting'];
$requestconsult = $_REQUEST['requestconsult'];
$addinfo = $_REQUEST['addinfo'];

if($homephone != "") {
	$homephone= $homephone . "   (home)";
}
if($cellphone != "") {
	$cellphone= $cellphone . "   (cell)";
}
if($workphone != "") {
	$workphone= $workphone . "   (work)";
}

$messagesend = "
MY FURRY FRIEND - WEBSITE CONTACT FORM >>

CONTACT DETAILS
========================================
From: $name
Address: 
$address
$city  $state  $zip
Email: $email
Phone: $homephone
       $cellphone
       $workphone


HEARD ABOUT MY FURRY FRIEND
========================================
Website: $website
Yellow Pages: $yellowpages
Newspaper: $newspaper
NAAPS: $naaps
Vet: $vet
Other: $otherhearabout

PET INFORMATION
========================================
Pet 1:
	$pet1name
	Age: $pet1age  Sex: $pet1gender

Pet 2:
	$pet2name
	Age: $pet2age  Sex: $pet2gender
	
Other:
$otherpetinfo


PET SITTING REQUEST INFO
========================================
$requestpetsitting


BEHAVIORAL CONSULTING REQUEST INFO
========================================
$requestconsult


ADDITIONAL INFO
========================================
$addinfo

";
$messagesend = stripslashes($messagesend);

ini_set("sendmail_from", $email);

mail('info@myfurryfriend.net', 'My Furry Friend - Website Contact Form', $messagesend, "From: $email");

?>
        </p>
        <p><br /><br /><a href="#top"><img src="assets/backtotop.jpg" alt="Back to Top" width="106" height="41" border="0" /></a></p></td>
    </tr>
    <tr>
      <td colspan="2" align="center" class="footer"><a href="index.html">Home</a> <a href="services.html">Services</a> <a href="consult.html">Behavioral Consultations</a> <a href="about.html">About</a> <a href="contact.html">Contact Us</a> <a href="links.html">Links</a></td>
    </tr>
  </table>
  <div align="center" class="copyright">Copyright &copy; 2006 My Furry Friend.  All Rights Reserved. Site Design by: <a href="http://www.sniffdesign.com" target="_blank">Sniff Design Studio</a></div>
</div>
</body>
</html>
