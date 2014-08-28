<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();


if(empty($_SESSION['user'])) {
        header("Location: ../login");
        die("Redirecting to index.php"); 
  }

// Unset all of the session variables.
$_SESSION = array();



header("Location: /login.php?str=logout");
?>