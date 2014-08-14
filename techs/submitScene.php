<?php
	/*
		Form handler for content submission pane. Will accept title, url, and a description.

		Writes output to /submit/
	*/
	$url = $_POST["fburl"];
	$cityName = $_POST["cityName"];
	$region = $_POST['selector'];
	$game = $_POST['game'];
	if ($game == ''|| $region == '' || $cityName == '' || $url == '') {
		header("Location: ../lounge.php?submit=false#success");
	}


			$file = 'submit/submitScene.txt';
			// Open the file to get existing content
			$current = file_get_contents($file);
			// Append a new person to the file
			$current .= "City Name: $cityName \n";
			$current .= "URL: $url \n";
			$current .= "Game: $game\n";
			$current .= "Region: $region \n\n";

			// Write the contents back to the file
			file_put_contents($file, $current);

			//echo $char;
			//echo $url;
			//echo $description;
			header("Location: ../lounge.php?submit=true#success");

		

?>