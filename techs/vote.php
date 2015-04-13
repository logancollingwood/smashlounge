<?php
	require_once("tables.php");
  	require_once("dbSuper.php");


	// Include the composer autoload file
	include_once "../vendor/autoload.php";


	// Import the necessary classes
	use Illuminate\Database\Capsule\Manager as Capsule;

	// Create the Sentry alias
	class_alias('Cartalyst\Sentry\Facades\Native\Sentry', 'Sentry');

	// Create a new Database connection
	$capsule = new Capsule;

	$capsule->addConnection([
	    'driver'    => 'mysql',
	    'host'      =>  $dahostname,
	    'database'  =>  $dbname,
	    'username'  =>  $username,
	    'password'  =>  $password,
	    'charset'   => 'utf8',
	    'collation' => 'utf8_unicode_ci',
	]);

	$capsule->bootEloquent();

	$mysqli = new mysqli($dahostname, $username, $password, $dbname);

	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	$user['id'] = -1;
	if (Sentry::check()) {
		$loggedIn = true;
		$user = Sentry::getUser();
	} else {
		echo "login";
		die();
	}

	//error_log(print_r($_POST));
	$gifId = $_POST['gifId'];


	$direction = $_POST['direction'];

	$actualTinyInt = 0;

	if ($direction == 'up') {

		$actualTinyInt = 1;

	} else if ($direction == 'down') {
		
		$actualTinyInt = -1;

	} else {
		die();
	}

	$userId = $user["id"];

	//This catches to see if we should just update or create a new record
	//this keeps the database from holding infinitely many votes per user instead of just updating a current one
	$query = "SELECT * from gifvotes where gifid = $gifId and voterid = $userId;";
	if (!$result = $mysqli->query($query)) {
	  die('Invalid query: ' . $mysqli->error);
	} else {
		$query = "	UPDATE gifvotes 
				  	SET direction=$actualTinyInt
				  	WHERE gifid = $gifId AND voterid = $userId;";
		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		} else {
			echo "duplicateSuccess";
			return;
		}
	}

	$query = "
		INSERT INTO gifvotes (gifid,voterid,direction)
		VALUES ($gifId,$userId,$actualTinyInt);";

	if (!$result = $mysqli->query($query)) {
	  die('Invalid query: ' . $mysqli->error);
	} else {
		echo "success";
		return;
	}
?>