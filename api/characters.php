<?php 

	function getStatusCodeMessage($status)
	{
	    // these could be stored in a .ini file and loaded
	    // via parse_ini_file()... however, this will suffice
	    // for an example
	    $codes = Array(
	        100 => 'Continue',
	        101 => 'Switching Protocols',
	        200 => 'OK',
	        201 => 'Created',
	        202 => 'Accepted',
	        203 => 'Non-Authoritative Information',
	        204 => 'No Content',
	        205 => 'Reset Content',
	        206 => 'Partial Content',
	        300 => 'Multiple Choices',
	        301 => 'Moved Permanently',
	        302 => 'Found',
	        303 => 'See Other',
	        304 => 'Not Modified',
	        305 => 'Use Proxy',
	        306 => '(Unused)',
	        307 => 'Temporary Redirect',
	        400 => 'Bad Request',
	        401 => 'Unauthorized',
	        402 => 'Payment Required',
	        403 => 'Forbidden',
	        404 => 'Not Found',
	        405 => 'Method Not Allowed',
	        406 => 'Not Acceptable',
	        407 => 'Proxy Authentication Required',
	        408 => 'Request Timeout',
	        409 => 'Conflict',
	        410 => 'Gone',
	        411 => 'Length Required',
	        412 => 'Precondition Failed',
	        413 => 'Request Entity Too Large',
	        414 => 'Request-URI Too Long',
	        415 => 'Unsupported Media Type',
	        416 => 'Requested Range Not Satisfiable',
	        417 => 'Expectation Failed',
	        500 => 'Internal Server Error',
	        501 => 'Not Implemented',
	        502 => 'Bad Gateway',
	        503 => 'Service Unavailable',
	        504 => 'Gateway Timeout',
	        505 => 'HTTP Version Not Supported'
	    );
	 
	    return (isset($codes[$status])) ? $codes[$status] : '';
	}
	 
	// Helper method to send a HTTP response code/message
	function sendResponse($status = 200, $body = '', $content_type = 'text/html')
	{
	    $status_header = 'HTTP/1.1 ' . $status . ' ' . getStatusCodeMessage($status);
	    header($status_header);
	    header('Content-type: ' . $content_type);
	    echo $body;
	}

	require("../techs/db.php");
	$char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
	$json;
	
	//     BUILDS DATABASE CONNCETION
	//
	////////////////////////////////////////

	$mysqli = new mysqli($dahostname, $username, $password, $database);
	if ($mysqli->connect_errno) {   
      	printf("Connect failed: %s\n", $mysqli->connect_error);
    	exit();
    }


    //     BEGIN HANDLER FOR ALL CHARACTERS
	//
	////////////////////////////////////////

	if ($char == '') {

		$charCount = 0;

		//     BUILDS CHARACTER ARRAY
		//
		////////////////////////////////////////

		$query = "SELECT * FROM " . $charTable . " ORDER BY tierdata";

		if (!$result = $mysqli->query($query)) {
   			die('Invalid query: ' . $mysqli->error);
		}
		foreach ($result as $row) {
		    $dataChar[] =  $row;
		    $charCount++;
		}
		$json['characters'] = $dataChar;

	}

	//     begin char specific handler
	//
	////////////////////////////////////////

	else {

	  	$query = "SELECT * FROM " . $charTable . " WHERE name='" . $char . "'";
	 
	  	if (!$result = $mysqli->query($query)) {
	    	die('Invalid query: ' . $mysqli->error);
	  	}
	  	foreach ($result as $row) { 
	    	$charID = $row["id"];
	  	}

	  	$query = "SELECT * FROM " . $charTable . " WHERE id='" . $charID . "'";

	  	if (!$result = $mysqli->query($query)) {
	    	die('Invalid query: ' . $mysqli->error);
	  	}
	  	foreach ($result as $row) { 
	    	$charinfo = $row;
	  	}
	  	$json['info'] = $charinfo;


		//     begin gif collector
		//
		////////////////////////////////////////

		$query = "SELECT * FROM " . $charGifTable . " WHERE charid='" . $charID . "'";

		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		  sendResponse(400, 'Invalid request');
		}
		foreach ($result as $row) { 
			unset($row['charid']);
			unset($row['id']);
			$chargifs[] = $row;
		}
		$json['gifs'] = $chargifs;


	  	//     begin char techs collector
		//
		////////////////////////////////////////

		$query = "SELECT chartech.techid, techs.tech FROM " . $charTechTable . " INNER JOIN " . $techTable . " ON " . $charTechTable .".techid = " . $techTable . ".id" . " WHERE charid=" . $charID;

		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		  sendResponse(400, 'Invalid request');
		}
		foreach($result as $row) {
			$techData[] = $row;
		}
		$json['techs'] = $techData;
		}


        sendResponse(200, json_encode($json, JSON_PRETTY_PRINT));
        return true;
	
?>
