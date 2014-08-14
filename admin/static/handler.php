<?php
	require('static/submitCred.php');
	
	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'); 
    try { $db = new PDO("mysql:host={$dahostnae};dbname={$dbname};charset=utf8", $username, $password, $options); } 
    catch(PDOException $ex){ die("Failed to connect to the database: " . $ex->getMessage());} 
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 


	$treatment = $_POST["treatment"];
	$getID = $_GET['id'];

	echo " treatment " . $_GET["treatment"] . "\n";
	echo " id " . $_GET['id'] . "\n";

	  	$query = " 
            SELECT 
                * 
            FROM submissions 
            WHERE 
                id = :id 
        "; 
        $query_params = array( ':id' => $_GET['id'] ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $row = $stmt->fetch(); 
        print_r($row);


	if ($treatment == 'good') {

		if ($tuple['pageid'] == 0) {

			$query = " 
	            INSERT INTO " . $techTable . " ( 
	                id, 
	                techID, 
	                url,
	                description, 
	                source 
	            ) VALUES ( 
	                :id, 
	                :techID, 
	                :url,
	                :description,
	                :source
	            ) 
	        ";

	        $query_params = array( 
	            ':id' => '', 
	            ':techID' => $tuple['dataid'],
	            ':url' => $tuple['url'],
	            ":description" => $tuple['description'],
	            ':source' => $tuple['source'] 
	        ); 
	        try {  
	            $stmt = $db->prepare($query); 
	            $result = $stmt->execute($query_params); 
	        } 
	        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
	        echo "Success!\n";

		} else if ($tuple['pageid'] == 1) {
			$destination = $charTable;
			$key = 'techID';
		}


	} else {

	}
?>