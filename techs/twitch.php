<?php

	/** Variables **/

	global $activeStreams;
	// Consider making $clientid global? or pull from database?
	$clientId = 'j0p7hrbz0zec4a3vwfgrvau6nmw5e68'; 

	/** Functions **/

	/**
	 * Checks active streams for a specific game
	 * @param  string $game The game whose active streams we're looking for
	 * @return array, boolean = false       If there active streams, returns array, if not, returns false.
	 */
	function getGameStreams($game = '') {
		$streamsArray = [];
		$queryString = urlencode($game);
		$file = "https://api.twitch.tv/kraken/search/streams?q=" . $queryString;
		
		// File Check
		if ($file) {
			$json_array = json_decode(file_get_contents($file), true);

			if ($json_array['streams'] != NULL) {
				foreach ($json_array['streams'] as $stream) {
					$streamsArray[] = $stream;
				}

				// Return active streams
				return $streamsArray;
			} else {
				// No active streams
				return false;
			}		
		} else {
			// Error in finding the file
			return false;
		}
	}

	/**
	 * Checks if channel is live
	 * @param  string $username Twitch username
	 * @return boolean          Whether or not the stream is live
	 */
	function streamIsLive($username = '') {
		$file = "https://api.twitch.tv/kraken/streams?channel=$username";
		$json_array = json_decode(file_get_contents($file), true);

		if (empty($json_array['streams'])) {
			return false;
		}

		return true;
	}

	/** Main Code **/
	$activeStreams = getGameStreams('Super Smash Bros');
?>