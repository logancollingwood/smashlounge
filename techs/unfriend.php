<?php

	require_once("tables.php");
  	require_once("dbSuper.php");

	$mysqli = new mysqli($dahostname, $username, $password, $dbname);

	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	$myID = $_POST['user_id'];
	$friendID = $_POST['friend_id'];
	//echo $myID . " " . $friendID;

	//$query = "DELETE FROM friends WHERE ;
	$query = "DELETE FROM friends WHERE friendid = (".$friendID.")";
	if (!$result = $mysqli->query($query)) {
	  die('Invalid query: ' . $mysqli->error);
	} else {
		return;
	}

?>