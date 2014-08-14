<?php 

	require("../techs/db.php");
	
	//     BUILDS DATABASE CONNCETION
	//
	//
	//
	////////////////////////////////////////

	$connection=mysql_connect ($dahostname, $username, $password);
	if (!$connection) {  die('Not connected : ' . mysql_error());}

	// Set the active MySQL database

	$db_selected = mysql_select_db($database, $connection);
	if (!$db_selected) {
	  die ('Can\'t use db : ' . mysql_error());
	}

	
	$techCount = 0;


	//     BUILDS TECHS ARRAY
	//
	//
	//
	////////////////////////////////////////

	$query = "SELECT * from " . $techTable;
	$result = mysql_query($query);
	if (!$result) {
	  die('Invalid query: ' . mysql_error());
	}
	while ($row = mysql_fetch_assoc($result)) { 
	  $dataTech[] =  $row["tech"];
	  $techCount++;
	}
	asort($dataTech);

	echo "<pre>";
	echo json_encode($dataTech, JSON_PRETTY_PRINT);
	echo "</pre>";

?>
