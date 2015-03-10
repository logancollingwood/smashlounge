<?php
	$numEntities = 2;
	require_once("db.php");
	$mysqli = new mysqli($dahostname, $username, $password, $database);

	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	if (!isset($_POST['query'])) {
		echo "damn";
		return;
	}
	// Define Output HTML Formating
	$html = '';
	$html .= '<li class="result">';
	$html .= '<div class="row">';
	$html .= '<div class="col-md-6">';
	$html .= '<p class="descr"><small>no sponsor</small></p>';
	$html .= '</div>';
	$html .= '<div class="col-md-6">';
	$html .= '<a href="urlString">';
	$html .= 'nameString';
	$html .= '</a>';
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</li>';

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
		    $result_array["users"][] = $row;
		}

		$query = 'SELECT techs.tech, techs.description FROM techs
		WHERE techs.tech 
		LIKE "%'.$search_string.'%" 
		OR techs.tech LIKE "%'.$search_string.'%"';

		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		}
		foreach($result as $row) {
		    $result_array["techs"][] = $row;
		}


		// Check If We Have Results
		if (isset($result_array)) {
			if (isset($result_array["users"])) {
				$final = "<p class='searchTitle'><small>users</small></p>";
				$final .= "<hr>";
				$counter = 0;

				foreach ($result_array["users"] as $users) {
					if ($counter > $numEntities) break;
					$name = $users["username"];
					$sponsor = $users["sponsor"];
					$display_url = "/users/" . urlencode($name);

					// Insert Name
					$output = str_replace('nameString', $name, $html);

					// Insert Sponsor
					if ($sponsor != "") {
						$secondout = str_replace('no sponsor', $sponsor, $output);
					} else {
						$secondout = str_replace('no sponsor', '', $output);
					}

					// Insert URL
					$final .= str_replace('urlString', $display_url, $secondout);

					// Output
					
					$counter++;
				}
				echo($final);
			}
			if (isset($result_array["techs"])){
				$final = "<p class='searchTitle'><small>techs</small></p>";
				$final .= "<hr>";
				$counter = 0;
				foreach ($result_array["techs"] as $tech) {
					if ($counter > $numEntities) break;
					$name = $tech["tech"];
					$description = $tech["description"];
					$description = substr($description, 0, 50);
					$description .= "...";
					$display_url = "/techniques/" . urlencode($name);

					// Insert Name
					$output = str_replace('nameString', $name, $html);

					// Insert Sponsor
					if ($description != "") {
						$secondout = str_replace('no sponsor', $description, $output);
					} else {
						$secondout = str_replace('no sponsor', '', $output);
					}

					// Insert URL
					$final = str_replace('urlString', $display_url, $secondout);

					// Output
					echo($final);
					$counter++;
				}
			}
			/*
		    foreach ($result_array as $key => $result) {
		        // Output
        		$display_name = $result[0];
				$display_url = $key . $result[$];


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
		    */
		} else {
	    	// Format No Results Output

			$output = str_replace('urlString', 'javascript:void(0);', $html);
			$output = str_replace('<h4><small>no sponsor</small></h4>', '<br>', $html);
			$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
			$output = str_replace('functionString', 'Sorry :(', $output);

			// Output
			echo($output);
		}


	}
?>