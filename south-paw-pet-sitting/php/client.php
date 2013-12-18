<?php 

	/* Please Set Client Name */
	$clientName = "South Paw Pet Sitting";

	/* This is for the titles */
	$path = $_SERVER["SCRIPT_NAME"];
	$file = basename($path);        // $file is set to "myfile.php" 
	$filePath = basename($path, ".php"); // $file is set to "myfile" 
	$fileName = str_replace("_", " ", $filePath);
	$pageName = ucwords($fileName);

	/* Body Class */
	if ($filePath == 'index' ) {
		$bodyClass = 'home';
	}else{
		$bodyClass = $filePath;
	}

	/* Current Page Url */
	if ($pageName == ("Index" || "") ) {
		$url = "http://" . $_SERVER['HTTP_HOST'];
	}else{
		$url = "http://" . $_SERVER['HTTP_HOST'] . "/" . $fileName;
	}

    /* Page Title, Description, Meta */
    switch($filePath){
        case 'index': 
            $title = 'In Home Pet Care Serving Akron, Ohio';
            $description = 'Professional pet care service and dog walking.';
            $metaTags = 'professional pet sitting, dog walking service, serving West Akron, Fairlawn, Highland Square, Ohio';
            break;
        case '404':
            $title = 'In Home Pet Care Serving Akron, Ohio';
            $description = 'Professional pet care service and dog walking.';
            $metaTags = 'professional pet sitting, dog walking service, serving West Akron, Fairlawn, Highland Square, Ohio';
            break;
        case 'about':
            $title = 'Meet Our Pet Care Service Team, Akron Ohio';
            $description = 'Come and Meet Our Devoted Pet Care Professionals.';
            $metaTags = 'Experience pet sitting team, professional pet care professionals, dog walking service, cat care services, in-home pet care';
            break;
        case 'faq':
            $title = 'Questions and Answers Regarding Our Pet Care Services, Akron, Ohio';
            $description = 'Why South Paw Pet Sitting professional pet care services is the right choice for you.';
            $metaTags = 'Dog walking, companion animal pet care, Award winning pet care, dedicated pet care, Akron, Ohio';
            break;
        case 'news':
            $title = 'News and More for South Paw Pet Sitting Service, Akron Ohio';
            $description = 'Come and read all about our news and updates for South Paw Pet Sitting.';
            $metaTags = 'professional pet care professional news, updates for our pet sitting service, pet sitting and public relations';
            break;
        case 'services':
            $title = 'In Home Pet Care Serving Akron, Ohio';
            $description = 'Professional dog and cat pet sitting services.';
            $metaTags = 'cat sitting, dog walking, pet vacation care, puppy walks, aquarium care, award winning dog walking service';
            break;
        case 'thankyou':
            $title = 'In Home Pet Care Serving Akron, Ohio';
            $description = 'Professional pet care service and dog walking.';
            $metaTags = 'professional pet sitting, dog walking service, serving West Akron, Fairlawn, Highland Square, Ohio';
            break;
        default:
            $title = 'In Home Pet Care Serving Akron, Ohio';
            $description = 'Professional pet care service and dog walking.';
            $metaTags = 'professional pet sitting, dog walking service, serving West Akron, Fairlawn, Highland Square, Ohio';
            break;
    }

?>