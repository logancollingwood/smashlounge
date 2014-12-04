<?php
    require("techs/init.php");
    require_once("techs/sentry.php");

    $submit = isset($_GET['str'])       ? trim($_GET['str'])       : "";
    $loggedIn = false;
    if (Sentry::check())
    {
        $user = Sentry::getUser();
        // User is logged in
        header("Location: /users/" . $user['username']);
        die("Redirecting to index.php");
    }

    $redirect = isset($_GET['redirect'])       ? trim($_GET['redirect'])       : "";
    if(!empty($_POST)){ 
        //echo "logging in";
        //require('techs/dbSuper.php');

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
            if ($user != NULL) Sentry::login($user, true);
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

        if ($redirect) {

            header("Location: /" . $redirect . ".php") ;
            die("Redirecting to: redirect");
        }

        header("Location: login.php");
        die("Redirecting to: secret");
    }

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
    <link href="css/dashboard_mobile.css" rel="stylesheet">

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
          <?php printBetaMast(); ?>
             <div class='row'>
                    <div class='col-md-6 col-md-offset-3'>
                        <div class='well'>
                            <form action="login.php" method="post" class="form-horizontal">
                                <fieldset>
                                <h2 class="form-signin-heading">Please sign in</h2>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">email</label>
                                    <div class="col-md-6">
                                    <input id="email" name="email" type="email" placeholder="support@smashlounge.com" class="form-control input-md" required>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="location">password</label>
                                    <div class="col-md-6">
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



</div>


    <script src="/js/jquery.fitvids.js"></script>
</body>
</html>
