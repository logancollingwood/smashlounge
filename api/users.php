<?php

	require("techs/db.php");

	//     BUILDS DATABASE CONNCETION
	//
	//
	//
	////////////////////////////////////////

	$mysqli = new mysqli($dahostname, $username, $password, $database);
	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	function getInfoForUsername($mysqli, $id) {


		$query = "SELECT * FROM userinfo WHERE userid='". $id . "'";

		  if (!$result = $mysqli->query($query)) {
		    die('Invalid query: ' . $mysqli->error);
		  }
		  foreach ($result as $row) {
		    $data = $row;
		  }
		  return $data;
	}

	function getUserID($mysqli, $username) {
		//echo "getting user id";
		$query = "SELECT * from users WHERE username='" . $username . "'";
		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) {
		 $userid = $row['id'];
		}
		if ($userid == '') {
		  return '';
		} else {
			return $userid;
		}
	}
?>