<?php
require("dbSuper.php");

// Include the composer autoload file
include_once "../vendor/autoload.php";


// Import the necessary classes
//use Illuminate\Database\Capsule\Manager as Capsule;

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

?>