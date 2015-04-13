<?php
	require('dbSuper.php');
	$mysqli = new mysqli($dahostname, $username, $password, $dbname);
	
	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	$type = $_POST['key'];
	$id = $_POST['id'];

	$place = '';
	if ($type == 'gif') {
		$place = 'submissions';
	} else if ($type =='vod') {
		$place = 'submissionsvod';
	} else if ($type == 'technique') {
		$place = 'submissionstech';
	} else if ($type == 'group') {
		$place = 'submissionsgroup';
	} else {
		echo "unspecified";
		die();
	}

	$query = "DELETE FROM " . $place . " WHERE id=" . $id;
	if (!($stmt = $mysqli->prepare($query))) {
	     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
	     exit();
	}
	// Execute
	if (!$stmt->execute()) {
	    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	    exit();
	}
	printf("%d Row deleted.\n", $stmt->affected_rows);
	$stmt->close();
?>