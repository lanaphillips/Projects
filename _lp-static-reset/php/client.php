<?php 

	/* Please Set Client Name */
	$clientName = "Client Name";

	/* This is for the titles */
	$path = $_SERVER["SCRIPT_NAME"];
	$file = basename($path);        // $file is set to "myfile.php" 
	$filePath = basename($path, ".php"); // $file is set to "myfile" 
	$fileName = str_replace("_", " ", $filePath);
	$pageName = ucwords($fileName);

	/* Current Page Title */
	if ($pageName == ("Index" || "") ) {
		$title = "Site Name";
	}else{
		$title = "" . $pageName . ": Site Name";
	}

	/* Current Page Url */
	if ($pageName == ("Index" || "") ) {
		$url="http://" . $_SERVER['HTTP_HOST'];
	}else{
		$url="http://" . $_SERVER['HTTP_HOST'] . "/" . $fileName;
	}

?>