<?php 

	/* This is for the titles */
	$path = $_SERVER["SCRIPT_NAME"];
	$file = basename($path);        // $file is set to "myfile.php" 
	$filePath = basename($path, ".php"); // $file is set to "myfile" 
	$fileName = str_replace("_", " ", $filePath);
	$pageName = ucwords($fileName);

	/* Current Page Title */
	if ($pageName == "Index") {
		$title = "Lucky Dawg Mobile Pet Grooming";
	}else{
		$title = "" . $pageName . ": Lucky Dawg Mobile Pet Grooming";
	}

	/* Current Page Url */
	if ($pageName == "Index") {
		$url="http://" . $_SERVER['HTTP_HOST'];
	}else{
		$url="http://" . $_SERVER['HTTP_HOST'] . "/" . $fileName;
	}

?>