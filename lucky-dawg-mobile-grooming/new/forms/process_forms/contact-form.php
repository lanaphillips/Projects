<?php

$EmailFrom    = "yourwebsite@luckydawgmobilegrooming.com";
$EmailTo      = "info@sniffdesign.com";
$Subject      = "I'd Like To Make an Appointment";
$firstName    = Trim(stripslashes($_POST['firstName'])); 
$lastName     = Trim(stripslashes($_POST['lastName'])); 
$Tel          = Trim(stripslashes($_POST['Tel'])); 
$Email        = Trim(stripslashes($_POST['Email'])); 
$Street       = Trim(stripslashes($_POST['Street'])); 
$cityStateZip = Trim(stripslashes($_POST['cityStateZip'])); 
$Message      = Trim(stripslashes($_POST['Message'])); 

$Breed        = Trim(stripslashes($_POST['Breed'])); 
$Weight       = Trim(stripslashes($_POST['Weight'])); 
$gDate        = Trim(stripslashes($_POST['gDate'])); 
$Requests     = Trim(stripslashes($_POST['Requests'])); 

$How          = Trim(stripslashes($_POST['How'])); 
$Other        = Trim(stripslashes($_POST['Other'])); 

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

$Body .= "Address: ";
$Body .= "\n";
$Body .= $Street;
$Body .= "\n";
$Body .= $cityStateZip;

$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "\n";

$Body .= "Pet Breed: ";
$Body .= $Breed;
$Body .= "\n";

$Body .= "Pet Weight: ";
$Body .= $Weight;
$Body .= "\n";

$Body .= "Date Last Groomed: ";
$Body .= $gDate;
$Body .= "\n";

$Body .= "Special Grooming Requests: ";
$Body .= $Requests;
$Body .= "\n";
$Body .= "\n";

$Body .= "How Did You Hear/Find About Us: ";
$Body .= $How;
$Body .= "\n";

$Body .= "Other: ";
$Body .= $Other;
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