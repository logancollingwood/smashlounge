<?php

	global $activeStreams;

	$gameTitle = "?q=Super%20Smash%20Bros";
	$clientId = 'j0p7hrbz0zec4a3vwfgrvau6nmw5e68';
	$file = "https://api.twitch.tv/kraken/search/streams" . $gameTitle;
	
	 $json_array = json_decode(file_get_contents($file), true);

	
	if ($json_array['streams'] != NULL) {
		foreach ($json_array['streams'] as $stream) {
			$activeStreams[] = $stream;
		}
	}
	/*
	foreach ($activeStreams as $data) {
		echo "Title of Stream: " . $data['channel']['display_name'] . "\n";
		echo "Status: " . $data['channel']['status'] . "\n";
		echo "Link : " . $data['channel']['url'] . "\n";
		echo "Number of Viewers: " . $data['viewers'] . "\n\n";


	}
	*/
	
?>