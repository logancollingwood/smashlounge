<?php 

	require("../techs/db.php");
	
	//     BUILDS DATABASE CONNCETION
	//
	//
	//
	////////////////////////////////////////

	
	//     BUILDS DATABASE CONNCETION
	//
	////////////////////////////////////////

	$mysqli = new mysqli($dahostname, $username, $password, $database);
	if ($mysqli->connect_errno) {   
      	printf("Connect failed: %s\n", $mysqli->connect_error);
    	exit();
    }

	
	$techCount = 0;
	$tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";
	$json;

	//     BUILDS TECHS ARRAY
	//
	//
	//
	////////////////////////////////////////
	if ($tech == '') {
		$query = "SELECT * 
			FROM techs";

		if (!$result = $mysqli->query($query)) {
   			die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) {
		  unset($row["id"]);
		  $dataTech[] = $row["tech"];
		  unset($row["tech"]);
		  $dataTech[] = $row;
		  $techCount++;
		}
		//asort($dataTech);

		echo "<pre>";
		echo json_encode($dataTech, JSON_PRETTY_PRINT);
		echo "</pre>";
	} else {

		$query = "SELECT * FROM techs WHERE tech='$tech'";
		if (!$result = $mysqli->query($query)) {
   			die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) {
  		  $json[] = $row["tech"];
		  unset($row["id"]);
		  unset($row["tech"]);
		  $json[] = $row;
		}


		echo "<pre>";
		echo json_encode($json, JSON_PRETTY_PRINT);
		echo "</pre>";
	}

?>
