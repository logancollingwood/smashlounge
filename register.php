<?php 
    require("static/config.php");
    require("techs/init.php");
    require("techs/sentry.php");

    if(!empty($_POST)) { 
        $username = $_POST['username'];
        // Ensure that the user fills out fields 
        if(empty($_POST['username'])) { 
            die("Please enter a username."); 
        } 
        if(empty($_POST['password'])) { 
            die("Please enter a password."); 
        } 
        if (preg_match("/\\s/", $username)) {
            header("Location: register.php?str=spaces");
        }
         
        try{
            // Create the user
            $user = Sentry::createUser(array(
                'email'     => $_POST['username'],
                'password'  => $_POST['password'],
                'activated' => true,
            ));
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            header("Location: register?str=spaces"); 
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            header("Location: register?str=spaces");
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            header("Location: register?str=spaces");
        }
        header("Location: update?str=success"); 
        die("Redirecting to update"); 
    } 
    $alert = isset($_GET['str'])       ? trim($_GET['str'])       : "";


    function alertStatus($submit) {
        if ($submit == 'success') {
            echo "<div class='alert alert-success alert-dismissable' role='alert'>Congratulations! Your account has been created.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'taken') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like that username is taken!";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'spaces') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Please make sure your username contains no whitespace!";
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
    <script src="js/bootstrap.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="static/css/login.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link href="css/users.css" rel="stylesheet" media="screen">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
    <div class='container-fluid'>

        <div class='row'>
            <?php createNavBar('update'); ?>

            <div class="col-sm-3 col-md-2 sidebar">

               <?php makeSidebar($loggedIn); ?>

            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

                

                <form action="register" method="post" class="form-signin" role="form">
                    <h2 class="form-signin-heading">Please Register</h2>
                    <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block SL bttn" type="submit">Register</button>
                </form>

                <?php 
                    if ($alert) {
                        alertStatus($alert);
                    }
                ?>
            </div>
        </div>


    </div>
</body>
</html>