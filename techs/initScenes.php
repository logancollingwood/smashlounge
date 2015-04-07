<?php 

	require("db.php");
	
	//     BUILDS DATABASE CONNCETION
	//
	////////////////////////////////////////

	$mysqli = new mysqli($dahostname, $username, $password, $database);
	if ($mysqli->connect_errno) {   
      	printf("Connect failed: %s\n", $mysqli->connect_error);
    	exit();
    }
    $international =  array();
	$query = "SELECT * FROM " . $locals;

	if (!$result = $mysqli->query($query)) {
  		die('Invalid query: ' . $mysqli->error);
	}

	foreach ($result as $row) {
		unset($row['id']);
		urldecode($row['profileid']);

		$game;
	    switch ($row['game']) {
	    case 0:
	        $game = "All";
	        break;
	    case 1:
	        $game = "SSB64";
	        break;
	    case 2:
	        $game = "SSBM";
	        break;
	    case 3:
	        $game = "Brawl";
	        break;
	    case 4:
	        $game = "Project M";
	        break;
	    case 5:
	        $game = "Smash 4";
	        break;
	    }

	    $row['game'] = $game;
	    $regionID = $row['region'];
	    if ($regionID == 1) {
	    	$sceneNA[] = $row;
	    } else if ($regionID == 2) {
	    	$sceneSA[] = $row;
	    } else if ($regionID == 3) {
	    	$sceneMW[] = $row;
	    } else if ($regionID == 4) {
	    	$sceneSW[] = $row;
	    } else if ($regionID == 5) {
	    	$sceneWESTCOASTBESTCOAST[] = $row;
	    } else if ($regionID == 6) {
	    	$international[] = $row;
	    }

	}
	$regions = array('Atlantic North', 'Atlantic South', 'MidWest', 'South and Southwest', 'West Coast', 'International');



?>
