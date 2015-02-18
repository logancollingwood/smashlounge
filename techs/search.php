<?php
	require_once("db.php");


	$mysqli = new mysqli($dahostname, $username, $password, $database);

	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	// Define Output HTML Formating
	$html = '';
	$html .= '<li class="result">';
	$html .= '<h4><small>no sponsor</small></h4>';
	$html .= '<a target="_blank" href="urlString">';
	$html .= 'nameString';
	$html .= '</a>';
	$html .= '</li>';

	if (!isset($_POST['query'])) {
		echo "damn";
		return;
	}
	
	// Get Search
	$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
	$search_string = $mysqli->real_escape_string($search_string);
	// Check Length More Than One Character
	if (strlen($search_string) >= 1 && $search_string !== ' ') {

		// Build Query
		$query = 'SELECT users.username, userinfo.sponsor FROM users LEFT JOIN userinfo on users.id=userinfo.userid
		WHERE users.username 
		LIKE "%'.$search_string.'%" 
		OR users.username LIKE "%'.$search_string.'%"';

		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach($result as $row) {
		    $result_array[] = $row;
		}

		// Check If We Have Results
		if (isset($result_array)) {
		    foreach ($result_array as $result) {
		        // Output
        		$display_name = $result['username'];
				$display_url = "/users/" . $result['username'];


				// Insert Name
				$output = str_replace('nameString', $display_name, $html);

				// Insert Sponsor
				if (isset($result['sponsor'])) {
					$secondout = str_replace('no sponsor', $result['sponsor'], $output);
				} else {
					$secondout = str_replace('no sponsor', '', $output);
				}

				// Insert URL
				$final = str_replace('urlString', $display_url, $secondout);

				// Output
				echo($final);
		    }
		} else {
	    	// Format No Results Output

			$output = str_replace('urlString', 'javascript:void(0);', $html);
			$output = str_replace('<h4><small>no sponsor</small></h4>', '<br>', $html);
			$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
			$output = str_replace('functionString', 'Sorry :(', $output);

			// Output
			echo($output);
		}


	} else {
		$query = 'SELECT users.username, userinfo.sponsor FROM users LEFT JOIN userinfo on users.id=userinfo.userid';
		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach($result as $row) {
		    $result_array[] = $row;
		}

		// Check If We Have Results
		if (isset($result_array)) {
		    foreach ($result_array as $result) {
		        // Output
        		$display_name = preg_replace("/".$search_string."/i", "<strong class='highlight'>".$search_string."</strong>", $result['username']);
				$display_url = "/users/" . $result['username'];


				// Insert Name
				$output = str_replace('nameString', $display_name, $html);

				// Insert Sponsor
				if ($result['sponsor'] != '') {
					$secondout = str_replace('no sponsor', $result['sponsor'], $output);
				} else {
					$secondout = str_replace('no sponsor', '', $output);
				}

				// Insert URL
				$final = str_replace('urlString', $display_url, $secondout);

				// Output
				echo($final);
		    }
		}
	}


?>