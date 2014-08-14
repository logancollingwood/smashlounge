<?php 

	require("../techs/db.php");
	$char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
	$json;
	
	//     BUILDS DATABASE CONNCETION
	//
	////////////////////////////////////////

	$mysqli = new mysqli($dahostname, $username, $password, $database);
	if ($mysqli->connect_errno) {   
      	printf("Connect failed: %s\n", $mysqli->connect_error);
    	exit();
    }

	$query = "SELECT * FROM " . $locals;

	if (!$result = $mysqli->query($query)) {
  		die('Invalid query: ' . $mysqli->error);
	}
	foreach ($result as $row) {
		unset($row['id']);
		urldecode($row['profileid']);
	    $scene[] =  $row;
	}

	$json['scenes'] = $scene;
	

	echo "<pre>";
	echo json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
	echo "</pre>";
?>
