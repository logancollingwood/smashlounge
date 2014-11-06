<?php
	require('dbSuper.php');

	$mysqli = new mysqli($dahostname, $username, $password, $dbname);
	
	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	function grabGfyName ($url) {
	  $pattern = '/((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/';
	  $matches = array();
	 
	  preg_match ($pattern, $url, $matches);
	 
	  return $matches[4];
	}

	//echo(print_r($_POST));
	
	$key = $_POST['key'];

	if ($key == 'gif') {
		$pageID = -1;
		$dataID = -1;
		$postKeys = array('gif_selector', 'gif_techselector', 'gif_charselector', 'gif_url', 'gif_source', 'gif_description');


		// Check for each $_POST key
		foreach ($postKeys as $key) {
			if (!isset($_POST[$key]) || empty($_POST[$key])) {
				//printf("Value missing: %s\n", $key);
				//exit();
			}
		}
		if ($_POST['gif_selector'] == 'tech') {
			$pageID = 0;
			$dataID = $_POST['gif_techselector'];
		} else if ($_POST['gif_selector'] == 'char') {
			$pageID = 1;
			$dataID = $_POST['gif_charselector'];
		}

		$url 			= $_POST['gif_url'];
		$cleanURL		= grabGfyName($url);

		//let's see if our url is a gfycat..
		if ($cleanURL == '') { 
			printf("gfycat");
			exit();
		}
		$source 		= $_POST['gif_source'];
		$description 	= $_POST['gif_description'];

		// Prepare
		if (!($stmt = $mysqli->prepare("INSERT INTO submissions (url, source, description, pageid, dataid) VALUES (?, ?, ?, ?, ?)"))) {
		     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
		     exit();
		}

		// Bind Params
		if (!$stmt->bind_param("sssss", $cleanURL, $source, $description, $pageID, $dataID)) {
		    echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		    exit();
		}

		// Execute
		if (!$stmt->execute()) {
		    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		    exit();
		}

		printf("%d Row inserted.\n", $stmt->affected_rows);
		$stmt->close();

	} else if ($key == 'tournament') {

	} else if ($key == 'technique') {

	} else if ($key == 'group') {

	} else {
		echo "FAILURE";
		return false;
	}
	return true;
?>