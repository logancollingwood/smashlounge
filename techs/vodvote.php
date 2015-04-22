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
	/**
	 * Send as JSON
	 */
	header("Content-Type: application/json", true);

	$capsule->bootEloquent();
	$mysqli = new mysqli($dahostname, $username, $password, $dbname);

	if ($mysqli->connect_errno) {   
	  printf("Connect failed: %s\n", $mysqli->connect_error);
	  exit();
	}

	$json['success'] = 0;
	$json['login'] = 0;

	$user['id'] = -1;
	if (Sentry::check()) {
		$json['login'] = 1;
		$loggedIn = true;
		$user = Sentry::getUser();
		$vodId = $_POST['vodId'];
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
		$query = "SELECT * from vodvotes where vodid = $vodId and voterid = $userId;";

		if (!$result = $mysqli->query($query)) {
		  die('Invalid query: ' . $mysqli->error);
		
		} else {
		  	$rows = mysqli_num_rows($result);
		  	//If there are actually results here
		  	if ($rows != 0) {

		  		//if you've already voted, and you're now voting up
		  		if ($direction == 'up') {
					$modifyDirection = 1;
				//if you've already voted, and you're now voting down
				} else if ($direction == 'down') {
					$modifyDirection = -1;
				} 

		  		$query = "	UPDATE vodvotes 
					  	SET direction=$modifyDirection
					  	WHERE vodid = $vodId AND voterid = $userId;";
				if (!$result = $mysqli->query($query)) {
				  die('Invalid query: ' . $mysqli->error);
				} else {
					$json['success'] = 1;
					$totScore = getVodScore($vodId);
				
					$json['score'] = $totScore['total'];
				}
			//If not, we have to do a fresh insert
		  	} else {
  				$query = "
					INSERT INTO vodvotes (vodid,voterid,direction)
					VALUES ($vodId,$userId,$actualTinyInt);";

				if (!$result = $mysqli->query($query)) {
				  die('Invalid query: ' . $mysqli->error);
				} else {
					$json['success'] = 1;
					$totScore = getVodScore($vodId);

					$json['score'] = $totScore['total'];
				}
			}

		}


	} else {
		$json['login'] = 0;
	}

	function getVodScore($vodID) {
	  global $mysqli;

	  $query = "
	      SELECT vodid, SUM(direction) as total, SUM(CASE WHEN direction<0 THEN direction ELSE 0 END) as up,
	           SUM(CASE WHEN direction>=0 THEN direction ELSE 0 END) as down
	    FROM vodvotes
	    where vodid = $vodID";
	  
	  if (!$result = $mysqli->query($query)) {
	    die('Invalid query: ' . $mysqli->error);
	  }
	  foreach ($result as $row) {
	    $score = $row;
	  }

	  //force undefined values to 0
	  //this also catches when a gif has not been voted on before
	  //shouldn't effect anything, only graphical display of current totals
	  if ($score["vodid"] == NULL) $score["vodid"] = -1;
	  if ($score["up"] == NULL) $score["up"] = 0;
	  if ($score["total"] == NULL) $score["total"] = 0;
	  if ($score["down"] == NULL) $score["down"] = 0;

	  return $score;
	}
	

	echo json_encode($json);

	exit;
?>