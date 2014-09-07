<?php 
    require("static/config.php");
    require("techs/init.php");
    require_once("techs/sentry.php");
    
    $loggedIn = false;
    if (Sentry::check())
    {
        $user = Sentry::getUser();
        // User is logged in
        header("Location: /" . $user['username'] );
        die("Redirecting to index.php"); 
    }

    if(!empty($_POST)){ 


        try
        {
            $user = Sentry::findUserByCredentials(array(
                'email'      => $_POST['email'],
                'password'   => $_POST['password']
            ));
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            header("Location: login.php?str=failed"); 
        }


        try {
            // Log the user in
            Sentry::login($user, true);
        }
        catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            header("Location: login.php?str=failed");
        }
        catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
        {
            header("Location: login.php?str=failed");
        }
        catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
        {
            header("Location: login.php?str=failed");
        }



        header("Location: update.php"); 
        die("Redirecting to: secret"); 
    }
    $submit = isset($_GET['str'])       ? trim($_GET['str'])       : "";


    function alertStatus($submit) {
        if ($submit == 'logout') {
            echo "<div class='alert alert-success alert-dismissable' role='alert'>You have been successfully logged out.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'taken') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like that username is taken!";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'failed') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Look like the information you entered is incorrect.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'login') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! You need to be logged in to access that page.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        }
    }
?>  
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="static/css/login.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet" media="screen">
    <link href="css/users.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/favicon.png">
    <script type="text/javascript" src="http://test.gfycat.com/gfycat_test_june25.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
        <div class='container-fluid'>

    <?php 
        createNavBar();
    ?>

    

    <div class='row'>

        <div class="col-sm-3 col-md-2 sidebar">

            <?php makeSidebar($loggedIn); ?>

        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

                    <form action="login" method="post" class="form-signin" role="form">
                        <h2 class="form-signin-heading">Please sign in</h2>
                        <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <button class="btn btn-lg btn-primary btn-block SL bttn" type="submit">Sign in</button>
                    </form>

                    <?php 
                        if ($submit) {
                            alertStatus($submit);
                        }
                    ?>
                
        </div>

        

  </div>

    
            
</div> <!-- CONTAINER -->
</body>
</html>