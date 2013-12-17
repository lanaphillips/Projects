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

	/* Current Page Title */
	if ($pageName == ("Index" || "") ) {
		$title = $clientName;
	}else{
		$title = "" . $pageName . " : " . $clientName . "";
	}

	/* Current Page Url */
	if ($pageName == ("Index" || "") ) {
		$url="http://" . $_SERVER['HTTP_HOST'];
	}else{
		$url="http://" . $_SERVER['HTTP_HOST'] . "/" . $fileName;
	}

?>