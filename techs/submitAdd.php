<?php

	require('dbSuper.php');
	$place = '';
	$pageKey = -1;
	$mysqli = new mysqli($dahostname, $username, $password, $dbname);
	
	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	$key = $_POST['key'];
	if ($key == 'gif') {

		$query = "SELECT * FROM submissions WHERE id =" . $_POST['id'];

		if ($result = $mysqli->query($query)) {
		    while ($row = $result->fetch_row()) {
		    	$pageKey = $row[4];

		    	$url = $row[1];
		        $source = $row[2];
		        $description = $row[3];
		    	$dataID = $row[5];

		        printf("%s (%s,%s, %s)\n", $url, $source, $description, $dataID);

		    }
		    /* free result set */
		    $result->close();
		} else {
			printf("Unable to find record in submissions table. Exiting.");
			exit();
		}
		if ($pageKey == 0) {
			$query = "INSERT INTO gifs (dataid, url, description, source, typeid) values (?, ?, ?, ?, 2)";
			
			if (!($stmt = $mysqli->prepare($query))) {
			     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
			     exit();
			}
			// Bind Params
			if (!$stmt->bind_param("ssss", $dataID, $url, $description, $source)) {
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

			$query = "DELETE FROM submissions WHERE id =" . $_POST['id'];
			if (!($stmt = $mysqli->prepare($query))) {
			     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
			     exit();
			}
			// Execute
			if (!$stmt->execute()) {
			    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
			    exit();
			}
			printf("Success with a gif.");
			exit();

		} else if ($pageKey == 1) {
			$query = "INSERT INTO gifs (dataid, url, description, source, typeid) values (?, ?, ?, ?, 0)";
			
			if (!($stmt = $mysqli->prepare($query))) {
			     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
			     exit();
			}
			// Bind Params
			if (!$stmt->bind_param("ssss", $dataID, $url, $description, $source)) {
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

			$query = "DELETE FROM submissions WHERE id =" . $_POST['id'];
			if (!($stmt = $mysqli->prepare($query))) {
			     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
			     exit();
			}
			// Execute
			if (!$stmt->execute()) {
			    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
			    exit();
			}
			exit();
			printf("Success with a gif.");
		} else {
			printf("Which page is this for?");
			exit();	
		}
	} else if ($key == 'group') {

		$query = "SELECT * FROM submissionsgroup WHERE id =" . $_POST['id'];

		if ($result = $mysqli->query($query)) {
		    while ($row = $result->fetch_row()) {
		    	$name = $row[1];
		    	$profileid = $row[2];
		    	$lat = $row[3];
		    	$long = $row[4];
		    	$region = $row[5];
		    	$game = $row[6];
		        printf("%s (%s,%s, %s), %s\n", $name, $profileid, $lat, $long, $region);
		    }
		    /* free result set */
		    $result->close();
		} else {
			printf("Unable to find record in submissions table. Exiting.");
			exit();
		}
		$query = "INSERT INTO locals (name, profileid, region, latitude, longitude, game) values (?, ?, ?, ?, ?, ?)";
		if (!($stmt = $mysqli->prepare($query))) {
	     	echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
	     	exit();
		}
		// Bind Params
		if (!$stmt->bind_param("ssssss", $name, $profileid, $region, $lat, $long, $game)) {
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

		$query = "DELETE FROM submissionsgroup WHERE id =" . $_POST['id'];
		if (!($stmt = $mysqli->prepare($query))) {
		     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
		     exit();
		}
		// Execute
		if (!$stmt->execute()) {
		    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		    exit();
		}
		printf("Success with a group.");
		exit();
	} else if ($key == 'technique') {
		$query = "SELECT * FROM submissionstech WHERE id =" . $_POST['id'];

		if ($result = $mysqli->query($query)) {
		    while ($row = $result->fetch_row()) {
		    	$name = $row[1];
		    	$description = $row[2];
		    	$wiki = $row[3];
		        printf("%s (%s,%s)\n", $name, $description, $wiki);
		    }
		    /* free result set */
		    $result->close();
		} else {
			printf("Unable to find record in submissions table. Exiting.");
			exit();
		}
		$query = "INSERT INTO techs (tech) values (?)";
		if (!($stmt = $mysqli->prepare($query))) {
	     	echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
	     	exit();
		}
		// Bind Params
		if (!$stmt->bind_param("s", $name)) {
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
		$insertID = $mysqli->insert_id;

		$query = "INSERT INTO techinfo (techid, description, smashwiki) values ($insertID, ?, ?)";
		if (!($stmt = $mysqli->prepare($query))) {
	     	echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
	     	exit();
		}
		// Bind Params
		if (!$stmt->bind_param("ss", $description, $wiki)) {
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


		$query = "DELETE FROM submissionstech WHERE id =" . $_POST['id'];
		if (!($stmt = $mysqli->prepare($query))) {
		     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
		     exit();
		}
		// Execute
		if (!$stmt->execute()) {
		    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		    exit();
		}
		printf("Success with a technique.");
		exit();
	} else if ($key == 'tournament') {
		$query = "SELECT * FROM submissionstournament WHERE id =" . $_POST['id'];

		if ($result = $mysqli->query($query)) {
		    while ($row = $result->fetch_row()) {
		    	$name = $row[1];
		    	$host = $row[12];
		    	$start = $row[4];
		    	$end = $row[5];
		    	$twitch = $row[9];
		    	$challonge = $row[3];
		        printf("%s %s %s %s %s %s\n", $name, $host, $start, $end, $twitch, $challonge);
		    }
		    /* free result set */
		    $result->close();
		} else {
			printf("Unable to find record in submissions table. Exiting.");
			exit();
		}

		$query = "INSERT INTO upcoming (title, bracket, start, end, stream, host) values (?, ?, ?, ?, ?, ?)";
		if (!($stmt = $mysqli->prepare($query))) {
	     	echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
	     	exit();
		}
		// Bind Params
		if (!$stmt->bind_param("ssssss", $name, $challonge, $start, $end, $twitch, $host)) {
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

		$query = "DELETE FROM submissionstournament WHERE id =" . $_POST['id'];
		if (!($stmt = $mysqli->prepare($query))) {
		     echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
		     exit();
		}
		// Execute
		if (!$stmt->execute()) {
		    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		    exit();
		}
		printf("Success with a tournament.");
		exit();
	}
	exit();

?>