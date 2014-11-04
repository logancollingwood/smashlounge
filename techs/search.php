<?php
	require_once("db.php");
	$mysqli = new mysqli($dahostname, $username, $password, $database);

	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	// Define Output HTML Formatting
	$html = '';
	$html .= '<ul><li class="result">';
	$html .= '<a href="urlString" target="_blank">';
	$html .= '</a><h3>nameString</h3>';
	$html .= '</li>';
	$html .= '</ul>';

	// Get Search
	$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_GET['query']);
	$search_string = $mysqli->real_escape_string($search_string);
	// Check Length More Than One Character
	if (strlen($search_string) >= 1 && $search_string !== ' ') {
	}
	echo $search_string;
	
	// Build Query
	$query = 'SELECT * FROM users 
	WHERE username 
	LIKE "%'.$search_string.'%" 
	OR name LIKE "%'.$search_string.'%"';

	// Do Search
	$result = $mysqli->query($query);
	while($results = $result->fetch_array()) {
	    $result_array[] = $results;
	}

	// Check If We Have Results
	if (isset($result_array)) {
	    foreach ($result_array as $result) {
	        // Output
	        print_r($result);
	    }
	}else{
	    // Output
	    echo('Nothing to display.');
	}


	$display_name = preg_replace("/".$search_string."/i", "<strong class='highlight'>".$search_string."</strong>", $result['username']);
	$display_url = "\/users/" . $result['username'];


	// Insert Name
	$output = str_replace('nameString', $display_name, $html);

	// Insert URL
	$output = str_replace('urlString', $display_url, $output);

	// Output
	echo($output);

	// Format No Results Output
	$output = str_replace('urlString', 'JavaScript:void(0);', $html);
	$output = str_replace('nameString', 'No Results Found.', $output);

	// Output
	echo($output);
?>