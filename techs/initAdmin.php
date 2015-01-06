<?php
	  $gifSubmission = array();
	  $groupSubmission = array();
	  $techSubmission = array();
	  $tournamentSubmission = array();


	  $query = "SELECT * FROM submissions";
	  if (!$result = $mysqli->query($query)) {
	  	echo "sumission gif gathering failed";
	  	die();
	  } else {
	  	foreach ($result as $row) {
	  		$gifSubmission[] = $row;
	  	}
	  }
	  
	  $query = "SELECT * FROM submissionsgroup";
	  if (!$result = $mysqli->query($query)) {
	  	echo "sumission group gathering failed";
	  	die();
	  } else {
	  	foreach ($result as $row) {
	  		$groupSubmission[] = $row;
	  	}
	  }

  	  $query = "SELECT * FROM submissionstech";
	  if (!$result = $mysqli->query($query)) {
	  	echo "sumission tech gathering failed";
	  	die();
	  } else {
	  	foreach ($result as $row) {
	  		$techSubmission[] = $row;
	  	}
	  }

  	  $query = "SELECT * FROM submissionstournament";
	  if (!$result = $mysqli->query($query)) {
	  	echo "sumission tournament gathering failed";
	  	die();
	  } else {
	  	foreach ($result as $row) {
	  		$tournamentSubmission[] = $row;
	  	}
	  }
?>