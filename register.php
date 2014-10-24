<?php 
    require("techs/init.php");
    

    if(!empty($_POST)) {

        $postKeys = array('username', 'email', 'password');

        // Check for each $_POST key
        foreach ($postKeys as $key) {
            if (!isset($_POST[$key]) || empty($_POST[$key])) {
                header("Location: register?str=fields");
                exit();
            }
        }

        $username = $_POST['username'];

        $query = "SELECT * FROM users WHERE username='". $username . "'";

        if (!$result = $mysqli->query($query)) {
            die('Invalid query: ' . $mysqli->error);
        }
        foreach ($result as $row) {
            header("Location: register?str=unexists");
            die('redirecting');
        }

        if (in_array($username, $modules)) {
            header("Location: register?str=reserved"); 
            die('redirecting');
        }
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {
            header("Location: register?str=chars");
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
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            echo 'Password field is required.';
        }
        catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
        {
            header("Location: register?str=spaces");
            die('redirecting');
        }
        catch (Cartalyst\Sentry\Users\UserExistsException $e)
        {
            header("Location: register?str=exists");
            die('redirecting');
        }
        if ($user == NULL) {
            header("Location: register?str=taken");
            die('redirecting');
        }
        $_GET['str'] = 'success';
        //header("Location: login"); 
        //die("Redirecting to update"); 
    } 
    $alert = isset($_GET['str'])       ? trim($_GET['str'])       : "";


    function alertStatus($submit) {
        if ($submit == 'success') {
            echo "<div class='alert alert-success alert-dismissable' role='alert'>Congratulations! Your account has been created.";
            echo "    <hr><a class='btn bttn login' href='/login'>Log in</a>";
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
    

    
    <link href="static/css/login.css" rel="stylesheet">
    <link href="css/dashboard_tech.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet" media="screen">
    <link href="css/users.css" rel="stylesheet" media="screen">
    

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
                            <form action="register" method="post" class="form-horizontal" role="form">
                                <fieldset>
                                <h2 class="form-signin-heading">Please Register</h2>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="email">username</label>
                                    <div class="col-md-4">
                                    <input type="text" name="username" class="form-control input-md" placeholder="username" required autofocus>
                                </div>
                                </div>
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
                                        <button class="btn btn-lg btn-primary SL bttn" type="submit">Register</button>
                                    </div>
                                </div>
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
</body>
</html>