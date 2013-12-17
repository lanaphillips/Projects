<?php

$EmailTo   = "jackie@southpawpetsit.com";
$Subject   = "Hi from your website!";
$Name	   = Trim(stripslashes($_POST['Name'])); 
$Email     = Trim(stripslashes($_POST['Email'])); 
$Message   = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/404\">";
  exit;
}

// Anti Spam Measure
if(!empty($_POST['Spam'])){
	print "<meta http-equiv=\"refresh\" content=\"0;URL=/\">";
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/thankyou\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=/404\">";
}

?>