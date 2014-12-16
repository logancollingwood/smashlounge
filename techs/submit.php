<?php
	require('dbSuper.php');

	$mysqli = new mysqli($dahostname, $username, $password, $dbname);
	
	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	function grabGfyName ($url) {
	  $pattern = '/((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/';
	  $matches = array();
	 
	  preg_match ($pattern, $url, $matches);
	 
	  return $matches[4];
	}

	//echo(print_r($_POST));
	
	$key = $_POST['key'];

	if ($key == 'gif') {
		$pageID = -1;
		$dataID = -1;
		$postKeys = array('gif_selector', 'gif_techselector', 'gif_charselector', 'gif_url', 'gif_source', 'gif_description');


		// Check for each $_POST key
		foreach ($postKeys as $key) {
			if (!isset($_POST[$key]) || empty($_POST[$key])) {
				//printf("Value missing: %s\n", $key);
				//exit();
			}
		}
		if ($_POST['gif_selector'] == 'tech') {
			$pageID = 0;
			$dataID = $_POST['gif_techselector'];
		} else if ($_POST['gif_selector'] == 'char') {
			$pageID = 1;
			$dataID = $_POST['gif_charselector'];
		}

		$url 			= $_POST['gif_url'];
		$cleanURL		= grabGfyName($url);

		//let's see if our url is a gfycat..
		if ($cleanURL == '') { 
			printf("gfycat");
			exit();
		}
		$source 		= $_POST['gif_source'];
		$description 	= $_POST['gif_description'];

		// Prepare
		if (!($stmt = $mysqli->prepare("INSERT INTO submissions (url, source, description, pageid, dataid) VALUES (?, ?, ?, ?, ?)"))) {
		     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
		     exit();
		}

		// Bind Params
		if (!$stmt->bind_param("sssss", $cleanURL, $source, $description, $pageID, $dataID)) {
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

	} else if ($key == 'tournament') {

		$tournamentName = $_POST['tournament_name'];
		$tournamentStart = $_POST['tournament_start'];
		$tournamentEnd = $_POST['tournament_end'];
		$tournamentTwitch = $_POST['tournament_twitch'];
		$tournamentChallonge = $_POST['tournament_challonge'];
		$tournamentHost = $_POST['tournament_host'];
		
		if ($tournamentName == '' || $tournamentEnd == '' || $tournamentStart == '' 
			|| $tournamentTwitch == '' || $tournamentChallonge == '' || $tournamentHost == '') {
			printf("nullfields");
			exit();
		}

		if (!($stmt = $mysqli->prepare("INSERT INTO submissionstournament (title, start, end, stream, bracket, host) VALUES (?, ?, ?, ?, ?, ?)"))) {
		     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
		     exit();
		}
		// Bind Params
		if (!$stmt->bind_param("ssssss", $tournamentName, $tournamentStart, $tournamentEnd, $tournamentTwitch, $tournamentChallonge, $tournamentHost)) {
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

	} else if ($key == 'technique') {

		$techname = $_POST['tech_name'];
		$techDesc = $_POST['tech_desc'];
		$techWiki = $_POST['tech_ssbwiki'];

		if ($techname == '' || $techDesc == '' || $techWiki == '') {
			printf("nullfields");
			exit();
		}

		if (!($stmt = $mysqli->prepare("INSERT INTO submissionstech (name, description, ssbwiki) VALUES (?, ?, ?)"))) {
		     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
		     exit();
		}
		// Bind Params
		if (!$stmt->bind_param("sss", $techname, $techDesc, $techWiki)) {
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

	} else if ($key == 'group') {

		$group = $_POST['group_name'];
		$group_fb = $_POST['group_facebook'];
		if ($group == '' || $group_fb == '') {
			printf("nullfields");
			exit();
		}
		$group_lat = isset($_POST['group_lat'])       ? trim($_POST['group_lat'])       : 0;
		$group_long = isset($_POST['group_long'])       ? trim($_POST['group_long'])       : 0;
		if (!($stmt = $mysqli->prepare("INSERT INTO submissionsgroup (name, fb, latitude, longitude) VALUES (?, ?, ?, ?)"))) {
		     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
		     exit();
		}
		// Bind Params
		if (!$stmt->bind_param("ssss", $group, $group_fb, $group_lat, $group_long)) {
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

	} else {
		echo "FAILURE";
		return false;
	}
	return true;
?>