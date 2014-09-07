<?php
	require_once('techs/sentry.php');
	Sentry::logout();

	header("Location: /login.php?str=logout");
?>