<!DOCTYPE html>
<html>
<head>
    
    <title>My Furry Friend - Professional Cat Setting Service | San Francisco, CA</title> 

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="title" content="Professional Cat Setting Service | San Francisco, CA | My Furry Friend" />
    <meta name="description" content="My Furry Friend - Thank You for submitting your form" />
    <meta name="Keywords" content="cat sitting in San Francisco, San Francisco cat sitter, San Francisco cat therapist, cat behaviorist, Bay Area cat sitter, in home pet sitting for cats, cat pet sitter in San Francisco, San Francisco pet care services, pet sitter in San Francisco" />

    <!-- Twitter -->
    <meta name="twitter:site" content="Professional Cat Setting Service | San Francisco, CA | My Furry Friend">
    <meta name="twitter:title" content="My Furry Friend">
    <meta name="twitter:description" content="My Furry Friend - Thank You for submitting your form">
    <meta name="twitter:url" content="http://myfurryfriend.net">

    <!-- Facebook -->
    <meta property="og:title" content="Professional Cat Setting Service | San Francisco, CA | My Furry Friend" />
    <meta property="og:description" content="My Furry Friend - Thank You for submitting your form" />
    <meta property="og:url" content="http://myfurryfriend.net" />
    <meta property="og:image" content="" />

    <!-- CSS -->
    <link href="css/styles.css" rel="stylesheet" media="screen">

</head>
<body class="thank-you">

    <div class="wrapper">

        <header id="header">
            <div id="logo">
                <a href="index.html">My Furry Friend</a>
            </div>
        </header>

        <div id="content">

            <aside id="aside">
                <nav>
                    <ul>
                        <li class="home">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="services">
                            <a href="services.html">Services</a>
                        </li>
                        <li class="behavior">
                            <a href="behavior.html">Behavioral Consultation</a>
                        </li>
                        <li class="about">
                            <a href="about.html">About</a>
                        </li>
                        <li class="contact">
                            <a href="contact.html">Contact Us</a>
                        </li>
                        <li class="links">
                            <a href="links.html">Links</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main id="main">
                <article>
                    <h1><span>Thank You</span>/h1>
                    <p><strong>Phone:</strong> <a href="tel://1-415-282-7387">415-282-7387</a> (pets)</p>
                    <p><strong>Email:</strong> <a href="mailto:info@myfurryfriend.net">info@myfurryfriend.net</a></p>
                    <p>Thank You, your message has been sent!</p>
                </article>
            </main>

        </div>

        <footer id="footer">
            <nav>
                <ul>
                    <li class="home">
                        <a href="/">Home</a>
                    </li>
                    <li class="services">
                        <a href="services.html">Services</a>
                    </li>
                    <li class="behavior">
                        <a href="behavior.html">Behavior</a>
                    </li>
                    <li class="about">
                        <a href="about.html">About</a>
                    </li>
                    <li class="contact">
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <li class="links">
                        <a href="links.html">Links</a>
                    </li>
                </ul>
            </nav>
            <div class="legal">&copy; <?php echo date("Y") ?> My Furry Friend. All Rights Reserved. Site Design by: <a href="http://sniffdesign.com">Sniff Design Studio</a></div>
        </footer>

    </div>

    <!-- PHP -->
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

    <!-- JS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/client.js"></script>

</body>
</html>