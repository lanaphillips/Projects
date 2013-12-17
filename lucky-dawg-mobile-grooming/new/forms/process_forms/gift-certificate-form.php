<?php

$EmailFrom    = "yourwebsite@luckydawgmobilegrooming.com";
$EmailTo      = "info@sniffdesign.com";
$Subject      = "I'd Like To Purchase a Gift Certificate";
$firstName    = Trim(stripslashes($_POST['firstName'])); 
$lastName     = Trim(stripslashes($_POST['lastName']));  
$Phone        = Trim(stripslashes($_POST['Phone'])); 
$Email        = Trim(stripslashes($_POST['Email'])); 
$rName        = Trim(stripslashes($_POST['rName'])); 
$Amount       = Trim(stripslashes($_POST['Amount']));
$Street       = Trim(stripslashes($_POST['Street'])); 
$cityStateZip = Trim(stripslashes($_POST['cityStateZip'])); 

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

$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "\n";

$Body .= "Recipient's Name: ";
$Body .= $rName;
$Body .= "\n";

$Body .= "Amount: ";
$Body .= $Amount;
$Body .= "\n";

$Body .= "Address: ";
$Body .= "\n";
$Body .= $Street;
$Body .= "\n";
$Body .= $cityStateZip;

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