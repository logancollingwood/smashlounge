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
	  		if ($row['region'] == 1) {
	  			$row['region'] = 'Atlantic North';
	  		} else if ($row['region'] == 2) {
	  			$row['region'] = 'Atlantic South';
	  		} else if ($row['region'] == 3) {
	  			$row['region'] = 'MidWest';
	  		} else if ($row['region'] == 4) {
	  			$row['region'] = 'South West';
	  		} else if ($row['region'] == 5) {
	  			$row['region'] = 'West Coast';
	  		} else if ($row['region'] == 6) {
	  			$row['region'] = 'International';
	  		}
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