<?php 
    require_once("sentry.php");
    $redirect = isset($_GET['redirect'])       ? trim($_GET['redirect'])       : "";
    if(!empty($_POST)){ 
        echo "logging in";
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

        if ($redirect != '') {
            header("Location: " . $redirect);
            die("Redirecting to: redirect");
        }

        header("Location: login.php");
        die("Redirecting to: secret");
    }
?>