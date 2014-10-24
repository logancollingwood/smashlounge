<?php
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
        require('techs/dbSuper.php');

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
            echo "TRYING LOGIN";
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

    <?php
        printLibraries();
    ?>

    <!-- Custom CSS for this view -->
    <link href="css/dashboard_tech.css" rel="stylesheet">
    <link href="/css/new.css" rel="stylesheet">
    <link href="/css/users.css" rel="stylesheet">




    <link rel="shortcut icon" href="/img/favicon.png">

</head>

<body>
        <div class='container-fluid'>

    <?php
        createNavBar();
    ?>



    <div class='row'>

        <div class="col-sm-3 col-md-2 sidebar">

            <?php makeSidebar($loggedIn, 'login'); ?>

        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
             <div class='row'>
                    <div class='col-md-6 col-md-offset-3'>
                        <div class='well'>
                            <form action="login.php" method="post" class="form-horizontal">
                                <fieldset>
                                <h2 class="form-signin-heading">Please sign in</h2>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">email</label>
                                    <div class="col-md-4">
                                    <input id="email" name="email" type="email" placeholder="support@smashlounge.com" class="form-control input-md" required>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="location">password</label>
                                    <div class="col-md-4">
                                    <input id="password" name="password" type="password" placeholder="*(#@!())(*" class="form-control input-md" required>
                                    </div>
                                </div>


                                <div class="control-group">
                                  <div class="controls">
                                    <button class="btn btn-lg btn-primary SL bttn" type="submit">Sign in</button>
                                  </div>
                                </div>

                                <br/>

                                </fieldset>
                            </form>

                            <?php
                                if ($submit) {
                                    alertStatus($submit);
                                }
                            ?>
                        </div>
                    </div>
                </div>
        </div>



  </div>



</div> <!-- CONTAINER -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/jquery.fitvids.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/toggler.js"></script>
    <script src="/js/jquery.fitvids.js"></script>
</body>
</html>
