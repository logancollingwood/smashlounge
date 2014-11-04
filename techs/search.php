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
	$html .= '<a target="_blank" href="urlString">';
	$html .= '<h3>nameString</h3>';
	$html .= '</a>';
	$html .= '</li>';


	// Get Search
	$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
	$search_string = $mysqli->real_escape_string($search_string);
	// Check Length More Than One Character
	if (strlen($search_string) >= 1 && $search_string !== ' ') {
		echo $search_string;

		// Build Query
		$query = 'SELECT * FROM users
		WHERE username 
		LIKE "%'.$search_string.'%" 
		OR username LIKE "%'.$search_string.'%"';
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
				$display_url = "\/users/" . $result['username'];


				// Insert Name
				$output = str_replace('nameString', $display_name, $html);

				// Insert URL
				$output = str_replace('urlString', $display_url, $output);

				// Output
				echo($output);
		    }
		}else{
	    	// Format No Results Output
			$output = str_replace('urlString', 'javascript:void(0);', $html);
			$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
			$output = str_replace('functionString', 'Sorry :(', $output);

			// Output
			echo($output);
		}


	}


?>