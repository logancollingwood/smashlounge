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
			$query = "INSERT INTO techgif (techID, url, description, source) values (?, ?, ?, ?)";
			
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

		} else if ($pageKey == 1) {
			$query = "INSERT INTO chargif (charid, url, description, source) values (?, ?, ?, ?)";
			
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

		} else {
			printf("Which page is this for?");
			exit();	
		}
	} else if ($key == 'group') {

		$query = "SELECT * FROM submissionsgroup WHERE id =" . $_POST['id'];

		if ($result = $mysqli->query($query)) {
		    while ($row = $result->fetch_row()) {
		    	/*
		    	$pageKey = $row[4];
		    	$url = $row[1];
		        $source = $row[2];
		        $description = $row[3];
		    	$dataID = $row[5];
				*/
		        printf("%s (%s,%s, %s)\n", $url, $source, $description, $dataID);
		    }
		    /* free result set */
		    $result->close();
		} else {
			printf("Unable to find record in submissions table. Exiting.");
			exit();
		}
		$query = "INSERT INTO locals (name, profileid, region, lat, long) values (?, ?, ?, ?, ?)";

	}
	exit();

?>