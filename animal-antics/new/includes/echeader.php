<?php
//This line must remain here. Thankyou. 'Hacker Fighter' PHP contact form V 1.1. Copyright 2011 Joshua Luther Hunt-Smith, all rights reserved. Project page URL: servertosite.com/php-contact-forms-open-source/hacker-fighter.html This project is released under the BSD license: creativecommons.org/licenses/BSD/

function mailio($chk){
if(preg_match('/^[\w.-]+@[\w.-]+\.([\w.]{2,10})\z/',$chk) && strlen($chk) < 70)
{;}else if($chk===''){die(header("Location: /error.php?er=1"));}else{die(header("Location: /error.php?er=2"));}}


//The email address shown below needs to be changed to your receiving email address, please only change between the two ' '
$you= 'info@animalanticsllc.com';
$subject= $_SERVER['HTTP_HOST']." Newsletter Registration";
$sbot= $_POST['text'];
$email= $_POST['heademail'];
if($sbot===''){$sbot;}else{die('<h1>You filled in an input, that was supposed to remain blank as an anti spam measure. Go back and fill in only labeled inputs <span>(!)</span></h1>');}
mailio($email);
$mx=<<<cb
<h4>Email:</h4> $email
cb;

$hdrs = "From:$email\r\n";
$hdrs .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($you,$subject,$mx,$hdrs);
    header("Location: /thankyou.html");

?>

