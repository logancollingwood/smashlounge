<?php

	/**
	 * Script to handle gfycat Submissions
	 */
	
	require('techs/db.php');

	$mysqli = new mysqli($dahostname, $username, $password, $database);
	
	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	if (!isset($_POST) || empty($_POST)) {
		printf("POST Values Missing");
		exit();
	}
	
	$postKeys = array('url', 'source', 'description');

	// Check for each $_POST key
	foreach ($postKeys as $key) {
		if (!isset($_POST[$key]) || empty($_POST[$key])) {
			printf("Value missing: %s\n", $key);
			exit();
		}
	}

	$url 			= $_POST['url'];
	$cleanURL		= grabGfyName($url);
	$source 		= $_POST['source'];
	$description 	= $_POST['description'];

	// Prepare
	if (!($stmt = $mysqli->prepare("INSERT INTO submissions (url, source, description) VALUES (?, ?, ?)"))) {
	     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
	     exit();
	}

	// Bind Params
	if (!$stmt->bind_param("sss", $cleanURL, $source, $description)) {
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