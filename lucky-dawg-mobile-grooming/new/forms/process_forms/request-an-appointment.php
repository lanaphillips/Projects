<?php

$EmailFrom = "yourwebsite@luckydawgmobilegrooming.com";
$EmailTo   = "info@sniffdesign.com";
$Subject   = "I'd Like To Make an Appointment";
$firstName = Trim(stripslashes($_POST['firstName'])); 
$lastName  = Trim(stripslashes($_POST['lastName'])); 
$Tel       = Trim(stripslashes($_POST['Tel'])); 
$Email     = Trim(stripslashes($_POST['Email'])); 
$Message   = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/oops.php\">";
  exit;
}

// Anti Spam Measure
if(!empty($_POST['Spam'])){
	print "<meta http-equiv=\"refresh\" content=\"0;URL=/\">";
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $firstName . " " . $lastName;
$Body .= "\n";
$Body .= "Tel: ";
$Body .= $Tel;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/thankyou.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/oops.php\">";
}
?>