<?php
	$username = 'submit';
	$password = '201miramarDr';
	$dahostname = 'localhost';
	$dbname = 'thalounge';
	$mods = Array();
  	// Include the composer autoload file
	include_once("../vendor/autoload.php");
	include_once("mods.php");

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

	if (Sentry::check()) {
      	$loggedIn = true;
      	$user = Sentry::getUser();
      	try {
			// Create the group
			$group = Sentry::createGroup(array(
			    'name'        => 'Moderator',
			    'permissions' => array(
			        'admin' => 1,
			    ),
			));
		}
		catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
		{
			echo 'Name field is required\n';
		}
		catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
		{
			//echo 'Group already exists' . "\n";
		}
		if (in_array($user['username'], $mods)) {
			//echo "mod is in the list";
	  	    try {// Find the group using the group id
			    $adminGroup = Sentry::findGroupById(1);

			    // Assign the group to the user
			    $user->addGroup($adminGroup);
			} catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e) {
				echo 'Group was not found.\n';
				die();
			}
			echo "success\n";
			die();
		} else {
		  	echo "Sorry! You're not flagged to be a mod yet. Want to apply? Email us or tweet us :]\n";
	  		die();
		}
   	} else {
	  	echo "Not logged in";
	  	die();
  	}

?>