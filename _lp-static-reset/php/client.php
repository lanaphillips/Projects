<?php 

	/* Please Set Client Name */
	$clientName = "Client Name Here";

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
    switch($bodyClass){
        case 'home': 
            $title = '';
            $description = '';
            $metaTags = '';
            break;
        default:
            $title = '';
            $description = '';
            $metaTags = '';
            break;
    }

?>