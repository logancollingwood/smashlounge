<?php
	/*
		Form handler for content submission pane. Will accept title, url, and a description.

		Writes output to /submit/



	*/	require('dbSuper.php');

		$mysqli = new mysqli($dahostname, $username, $password, $dbname);
		if ($mysqli->connect_errno) {   
		  printf("Connect failed: %s\n", $mysqli->connect_error);
		  exit();
		}

		$char = $_POST["char"];
		$tech = $_POST["tech"];

		if ($char) {
			$pageid = 1;
			$id = getCharID($char, $mysqli);
		} else if ($tech) {
			$pageid = 0;
			$id = getTechId($tech, $mysqli);
		}

		$url = $_POST["gfyurl"];
		$pos = strpos($url, 'gfycat');

		if($pos === false){ 
		  	if ($char) {
				header("Location: ../characters.php?char=" . $char . "&submit=false#success");
				exit();
			} else if ($tech) {
				header("Location: ../techniques.php?tech=" . $tech . "&submit=false#success");
				exit();
			}
		}

		$description = $_POST["submitdesc"];
		$source = $_POST["source"];
		$gfyid = substr( strrchr( $url, '/' ), 1 );

		$query = "INSERT INTO " . $table . " VALUES ('','" . $gfyid . "','" . $source . "','" . $description . "','" . $pageid . "','" . $id . "')";

		$mysqli->query($query);

		$mysqli->close();


		if ($char) {
			header("Location: ../characters.php?char=" . $char . "&submit=true#success");
		} else if ($tech) {
			header("Location: ../techniques.php?tech=" . $tech . "&submit=true#success");
		}



		function getCharID($char, $mysqli) {
			$decoded = urldecode($char);
			$query = "SELECT * FROM charinfo WHERE name='" . $decoded . "'";
			$results = 0;
			if (!$result = $mysqli->query($query)) {
		  		die('Invalid query: ' . $mysqli->error);
			}
			foreach ($result as $row) {
				$results++;
				$id = $row['id'];
			}
			if ($results == 0) {
				die('no id found');
			}
			return $id;
		}


		function getTechId($tech, $mysqli) {
			$decoded = urldecode($tech);
			$query = "SELECT * FROM techs WHERE tech='" . $decoded . "'";
			$results = 0;
			if (!$result = $mysqli->query($query)) {
		  		die('Invalid query: ' . $mysqli->error);
			}
			foreach ($result as $row) {
				$results++;
				$id = $row['id'];
			}
			if ($results == 0) {
				die('no id found');
			}
			return $id;
		}
	
?>