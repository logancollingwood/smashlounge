<?php 
    require('static/db_submit.php');
    
   	//     BUILDS DATABASE CONNCETION
	//
	//
	//
	////////////////////////////////////////


	$mysqli = new mysqli($dahostname, $username, $password, $database);
	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

?>