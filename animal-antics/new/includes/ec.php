<?php
//This line must remain here. Thankyou. 'Hacker Fighter' PHP contact form V 1.1. Copyright 2011 Joshua Luther Hunt-Smith, all rights reserved. Project page URL: servertosite.com/php-contact-forms-open-source/hacker-fighter.html This project is released under the BSD license: creativecommons.org/licenses/BSD/

function mailio($chk){
if(preg_match('/^[\w.-]+@[\w.-]+\.([\w.]{2,10})\z/',$chk) && strlen($chk) < 70)
{;}else if($chk===''){die(header("Location: /error.php?er=1"));}else{die(header("Location: /error.php?er=2"));}}


//The email address shown below needs to be changed to your receiving email address, please only change between the two ' '
$you= 'info@animalanticsllc.com';
$subject= $_SERVER['HTTP_HOST']." Class Registration";
$sbot= $_POST['text'];
$email= $_POST['email'];
$name=$_POST['name'];
$address=$_POST['address'];
$dayphone=$_POST['dphone'];
$evephone=$_POST['ephone'];
$dogname=$_POST['dogname'];
$dogbreed=$_POST['breed'];
$dogsex=$_POST['sex'];
$dogage=$_POST['age'];
$dogvet=$_POST['vet'];
$vacdate=$_POST['vacdate'];
$rabiesdate=$_POST['rabies'];
$referral=$_POST['referral'];
$goal=$_POST['goal'];
$breedchoice=$_POST['breedchoice'];
$prevtraining=$_POST['prevtraining'];
if($sbot===''){$sbot;}else{die('<h1>You filled in an input, that was supposed to remain blank as an anti spam measure. Go back and fill in only labeled inputs <span>(!)</span></h1>');}
mailio($email);
$name= nl2br($name);
$address= nl2br($address);
$dayphone= nl2br($dayphone);
$evephone= nl2br($evephone);
$dogname= nl2br($dogname);
$dogbreed= nl2br($dogbreed);
$dogsex= nl2br($dogsex);
$dogage= nl2br($dogage);
$dogvet= nl2br($dogvet);
$vacdate= nl2br($vacdate);
$rabiesdate= nl2br($rabiesdate);
$referral= nl2br($referral);
$goal= nl2br($goal);
$breedchoice= nl2br($breedchoice);
$prevtraining= nl2br($prevtraining);
$mx=<<<cb
<h4>Email:</h4> $email
<br />
<h4>Name:</h4> $name
<br />
<h4>Address:</h4> $address
<br />
<h4>Day Phone:</h4> $dayphone
<br />
<h4>Evening Phone:</h4> $evephone
<br />
<h4>Dog Name:</h4> $dogname
<br />
<h4>Dog Breed:</h4> $dogbreed
<br />
<h4>Dog Sex:</h4> $dogsex
<br />
<h4>Dog Age:</h4> $dogage
<br />
<h4>Veterinary Clinic::</h4> $dogvet
<br />
<h4>Vaccination Dates: DHLPP::</h4> $vacdate
<br />
<h4>Rabies:</h4> $rabiesdate
<br />
<h4>How did you hear about our classes?</h4> $referral
<br />
<h4>What do you hope to accomplish in this class?</h4> $goal
<br />
<h4>Why did you choose this particular dog/breed?</h4> $breedchoice
<br />
<h4>Have you done any training with this dog previously?</h4> $prevtraining
<br />
cb;

$hdrs = "From:$email\r\n";
$hdrs .= 'Content-type: text/html; charset=utf-8' . "\r\n";
mail($you,$subject,$mx,$hdrs);
    header("Location: /thankyou.html");

?>

