<?php
	require('submitCred.php');
	$gifs;


    //     BUILDS DATABASE CONNCETION
	//
	//
	//
	////////////////////////////////////////

	$mysqli = new mysqli($dahostname, $username, $password, $dbname);
	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}
	$query = "SELECT * FROM " . $table;

	if (!$result = $mysqli->query($query)) {
  		die('Invalid query: ' . $mysqli->error);
	}
	$gifCount = 0;
	foreach ($result as $row) {
  		$gifs[$gifCount]['id'] = $row['id'];
  		$gifs[$gifCount]['url'] = $row['url'];
  		$gifs[$gifCount]['source'] = $row['source'];
  		$gifs[$gifCount]['description'] = $row['description'];
  		$gifs[$gifCount]['pageid'] = $row['pageid'];
  		$gifs[$gifCount]['dataid'] = $row['dataid'];
  		$gifCount++;
	}


?>