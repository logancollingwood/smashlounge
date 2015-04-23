<?php
   require_once("techs/init.php");
   require_once("techs/sentry.php");
   

   $loggedIn = false;
   if (Sentry::check())
   {
       $user = Sentry::getUser();
       // User is logged in
       header("Location: /index.php");
       die("Redirecting to index.php");
   }
   
   $redirect = isset($_GET['redirect'])       ? trim($_GET['redirect'])       : "";
   $submit = isset($_GET['str'])       ? trim($_GET['str'])       : "";
   
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
   
       header("Location: index.php");
       die("Redirecting to: secret");
   }
   
   function alertStatus($submit) {
       if ($submit == 'logout') {
           echo "<div class='alert alert-success alert-dismissable' role='alert'>You have been successfully logged out.";
           echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
           echo "</div>";
       } else if ($submit == 'taken') {
           echo "<div class='alert alert-danger alert-dismissable' role='alert'>Whoops! Looks like that username is taken!";
           echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
           echo "</div>";
       } else if ($submit == 'failed') {
           echo "<div class='alert alert-danger alert-dismissable' role='alert'>Whoops! Look like the information you entered is incorrect.";
           echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
           echo "</div>";
       } else if ($submit == 'login') {
           echo "<div class='alert alert-danger alert-dismissable' role='alert'>Whoops! You need to be logged in to access that page.";
           echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
           echo "</div>";
       }
       else if ($submit == 'mod') {
           echo "<div class='alert alert-danger alert-dismissable' role='alert'>Whoops! You need to be a moderator to view that page.";
           echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
           echo "</div>";
       }
   }
   ?>
<!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="SmashLounge: Super Smash Brothers techniques">
      <meta name="author" content="smashlounge">
      
        <title>Login</title>

        <!-- Main Dependencies -->
        <?php printNewLibraries(); ?>

        <link href="/css/less/rich.css" rel="stylesheet">

    </head>
   <body>
      <div class="wrapper">
      <div class="box">
      <!-- top nav -->
      <?php navbar(); ?>
      <!-- /top nav -->
      <div class="row row-offcanvas row-offcanvas-left">
         <?php sidebar('login'); ?>
         <!-- main right col -->
         <div class="column col-md-10" id="main">
            <section id="banner" data-speed="4" data-type="background">
               <div class="jumbotron">
                  <div class='header'>login</div>
                  <div class="blur">
                     <div class="description"></div>
                     <div class="mast"></div>
                  </div>
               </div>
            </section>
            <div class="content-wrapper">
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
                                    <input id="email" name="email" type="email" placeholder="tsl@smashlounge.com" class="form-control input-md" required>
                                 </div>
                              </div>
                              <!-- Text input-->
                              <div class="form-group">
                                 <label class="col-md-4 control-label" for="location">password</label>
                                 <div class="col-md-6">
                                    <input id="password" name="password" type="password" placeholder="******" class="form-control input-md" required>
                                 </div>
                              </div>
                              <div class="control-group">
                                 <div class="controls" style="text-align:center">
                                    <button class='button button-inline button-large button-success SL bttn' type="submit"><span> <i class="fa fa-sign-out"></i>Sign In</span></button>
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