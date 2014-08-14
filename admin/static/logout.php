<?php 
	session_start();
	session_unset();
    //unset($_SESSION['user']);
    session_destroy();
    header("Location: http://www.smashlounge.com/admin/"); 
    die("Redirecting to: index.php");
?>