<?php 
    require("techs/init.php");
    

    if(!empty($_POST)) {

        $postKeys = array('username', 'email', 'password');

        // Check for each $_POST key
        foreach ($postKeys as $key) {
            if (!isset($_POST[$key]) || empty($_POST[$key])) {
                header("Location: register.php?str=fields");
                exit();
            }
        }
        if (strcmp($_POST['password'], $_POST['password2']) != 0) {
            header("Location: register.php?str=pass");
            exit();
        }
        $username = $_POST['username'];

        $query = "SELECT * FROM users WHERE username='". $username . "'";

        if (!$result = $mysqli->query($query)) {
            die('Invalid query: ' . $mysqli->error);
        }
        foreach ($result as $row) {
            header("Location: register.php?str=unexists");
            die('redirecting');
        }

        if (in_array($username, $modules)) {
            header("Location: register.php?str=reserved"); 
            die('redirecting');
        }
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {
            header("Location: register.php?str=chars");
            die('redirecting');
        }
        if (preg_match("/\\s/", $username)) {
            header("Location: register.php?str=spaces");
            die('redirecting');
        }
         
        try{
            // Create the user
            $user = Sentry::createUser(array(
                'username'     => $_POST['username'],
                'email'        => $_POST['email'],
                'password'  => $_POST['password'],
                'activated' => true,
            ));
        }catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
        {
            echo 'Login field is required.';
            exit();
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'Password field is required.';
            exit();
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            header("Location: register.php?str=spaces");
            exit();
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            header("Location: register.php?str=exists");
            exit();
        }
        if ($user == NULL) {
            header("Location: register.php?str=taken");
            exit();
        }
        
        // SUCCESSFUL sign up
        $_GET['str'] = 'success';

    } 
    $alert = isset($_GET['str'])       ? trim($_GET['str'])       : "";


    function alertStatus($submit) {
        if ($submit == 'success') {
            echo "<div class='alert alert-success alert-dismissable' role='alert'>Congratulations! Your account has been created.";
            echo "    <hr><a class='btn bttn login' href='/login.php'>Log in</a>";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'exists') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like that email is already in use!";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'unexists') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like that username is already in use!";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'spaces') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Please make sure your username contains no whitespace!";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'reserved') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! That username is reserved. Please try another one!";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'chars') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Please don't include special characters in your username!";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'fields') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like you're missing some fields.";
            echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
            echo "</div>";
        } else if ($submit == 'pass') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like you're passwords don't match.";
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
    <meta name="description" content="Register for Smash Lounge">
    <meta name="author" content="smashlounge.com">

    <?php
        printLibraries();
    ?>
    

    
    <link href="css/dashboard_mobile.css" rel="stylesheet">


</head>

<body>
    <div class='container-fluid'>

        <div class='row'>
            <?php createNavBar(); ?>

            <div class="col-sm-3 col-md-2 sidebar">

               <?php makeSidebar($loggedIn, 'register'); ?>

            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

                <div class='row'>
                    <div class='col-md-6 col-md-offset-3'>
                        <div class='well'>
                            <form action="register.php" method="post" class="form-horizontal" role="form">
                                <fieldset>
                                <h2 class="form-signin-heading">Please Register</h2>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">tag</label>
                                    <div class="col-md-6">
                                    <input type="text" name="username" class="form-control input-md" placeholder="pewpewu" required autofocus>
                                </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">email</label>
                                    <div class="col-md-6">
                                    <input id="email" name="email" type="email" placeholder="support@smashlounge.com" class="form-control input-md" required>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="password">password</label>
                                    <div class="col-md-6">
                                    <input id="password" name="password" type="password" placeholder="****" class="form-control input-md" required>
                                    </div>
                                </div>
                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="password2">confirm password</label>
                                    <div class="col-md-6">
                                    <input id="password2" name="password2" type="password" placeholder="****" class="form-control input-md" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="controls">
                                        <button class="btn btn-lg btn-primary SL bttn" type="submit">Register</button>
                                    </div>
                                </div>
                                <br />
                            </form>

                            <?php 
                                if ($alert) {
                                    echo "<br>";
                                    alertStatus($alert);
                                }
                            ?>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toggler.js"></script>
</body>
</html>