<?php
	require_once("tables.php");
  	require_once("dbSuper.php");

	$mysqli = new mysqli($dahostname, $username, $password, $dbname);

	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}
	error_log(print_r($_POST));
	$gifId = $_POST['gifId'];
	$pageId = $_POST['page'];
	$direction = $_POST['direction'];

	if ($direction == 'up') {
		$query = "UPDATE $pageId SET score = score + 1 WHERE id=$gifId";
	} else if ($direction == 'down') {
		$query = "UPDATE $pageId SET score = score - 1 WHERE id=$gifId";
	} else {
		die();
	}

	if (!$result = $mysqli->query($query)) {
	  die('Invalid query: ' . $mysqli->error);
	} else {
		return;
	}
?>