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


    //     BEGIN HANDLER FOR ALL CHARACTERS
	//
	////////////////////////////////////////

	if ($char == '') {

		$charCount = 0;

		//     BUILDS CHARACTER ARRAY
		//
		////////////////////////////////////////

		$query = "SELECT * FROM " . $charTable . " ORDER BY tierdata";

		if (!$result = $mysqli->query($query)) {
   			die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) {
		    $dataChar[] =  $row;
		    $charCount++;
		}
		$json['characters'] = $dataChar;

	}

	//     begin char specific handler
	//
	////////////////////////////////////////

	else {

	  	$query = "SELECT * FROM " . $charTable . " WHERE name='" . $char . "'";
	 
	  	if (!$result = $mysqli->query($query)) {
	    	die('Invalid query: ' . $mysqli->error);
	  	}
	  	foreach ($result as $row) { 
	    	$charID = $row["id"];
	  	}

	  	$query = "SELECT * FROM " . $charTable . " WHERE id='" . $charID . "'";

	  	if (!$result = $mysqli->query($query)) {
	    	die('Invalid query: ' . $mysqli->error);
	  	}
	  	foreach ($result as $row) { 
	    	$charinfo = $row;
	  	}
	  	$json['info'] = $charinfo;


		//     begin gif collector
		//
		////////////////////////////////////////

		$query = "SELECT * FROM " . $charGifTable . " WHERE charid='" . $charID . "'";

		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) { 
			unset($row['charid']);
			unset($row['id']);
			$chargifs[] = $row;
		}
		$json['gifs'] = $chargifs;


	  	//     begin char techs collector
		//
		////////////////////////////////////////

		$query = "SELECT chartech.techid, techs.tech FROM " . $charTechTable . " INNER JOIN " . $techTable . " ON " . $charTechTable .".techid = " . $techTable . ".id" . " WHERE charid=" . $charID;

		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach($result as $row) {
			$techData[] = $row;
		}
		$json['techs'] = $techData;
	}

	echo "<pre>";
	echo json_encode($json, JSON_PRETTY_PRINT);
	echo "</pre>";
?>
