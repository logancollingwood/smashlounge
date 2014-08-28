<?php 
    require("static/config.php");
    require("techs/init.php");
    if(!empty($_POST)) 
    { 
        // Ensure that the user fills out fields 
        if(empty($_POST['username'])) 
        { die("Please enter a username."); } 
        if(empty($_POST['password'])) 
        { die("Please enter a password."); } 

         
        // Check if the username is already taken
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( ':username' => $_POST['username'] ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $row = $stmt->fetch(); 
        if($row){ header("Location: register.php?str=taken"); } 
         
        // Add row to database 
        $query = " 
            INSERT INTO users ( 
                username, 
                password, 
                salt 
            ) VALUES ( 
                :username, 
                :password, 
                :salt
            ) 
        "; 
         
        // Security measures
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
        $password = hash('sha256', $_POST['password'] . $salt); 
        for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); } 
        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $password, 
            ':salt' => $salt 
        ); 
        try {  
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
        $username=$_POST["username"];
        if (!file_exists($path) && !is_dir($path)) {
            mkdir(dirname(__FILE__)."/"."$username");         
        } 
        header("Location: index?str=success"); 
        die("Redirecting to index"); 
    } 
    $submit = isset($_GET['str'])       ? trim($_GET['str'])       : "";
    function alertStatus($submit) {
        if ($submit == 'success') {
            echo "<div class='alert alert-success alert-dismissable' role='alert'>Congratulations! Your account has been created.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'taken') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like that username is taken!";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        }
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="description" content="Bootstrap Tab + Fixed Sidebar Tutorial with HTML5 / CSS3 / JavaScript">
    <meta name="author" content="Untame.net">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="static/css/login.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet" media="screen">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <?php
        createNavBar('moderate');
    ?>


    <div class="container fluid">

        <form action="register" method="post" class="form-signin" role="form">
            <h2 class="form-signin-heading">Please Register</h2>
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>

        <?php 
            if ($submit) {
                alertStatus($submit);
            }
        ?>

    </div> <!-- /container -->


</body>
</html>