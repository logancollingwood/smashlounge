<?php
  require("static/config.php");
  require("techs/init.php");
    $loggedIn = false;
    

    if(!empty($_SESSION['user'])) {
        $loggedIn = true;
    }
    if(!$loggedIn) {
        header("Location: login?str=login");
        die("Redirecting to index.php"); 
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





  if(!empty($_POST)){ 

      $main = $_POST['main'];
      $location = $_POST['location'];
      $vodURL = $_POST['vod'];
      $vod = getYoutubeIdFromUrl($vodURL);
      
      $twitter = $_POST['twitter'];
      $twitchId = $_POST['twitch'];

      echo $main . $location . $vod . $twitter . $twitchId;


      $username = $_SESSION['user']['username'];

      $userID = getIdFromUsername($mysqli, $username);
      
      echo "\n" . $userID . "\n";
      /*
        $query = " 
            SELECT 
                id, 
                username, 
                password, 
                salt
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try{ 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $login_ok = false; 
        $row = $stmt->fetch(); 
        if($row){ 
            $check_password = hash('sha256', $_POST['password'] . $row['salt']); 
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['salt']);
            } 
            if($check_password === $row['password']){
                $login_ok = true;
            } 
        } 

        if ($login_ok) { 
            unset($row['salt']); 
            unset($row['password']); 
            $_SESSION['user'] = $row;
            //echo "chill";
            header("Location: update.php"); 
            die("Redirecting to: secret"); 
        } else { 
            header("Location: login.php?str=failed"); 
            print("Login Failed."); 
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8'); 
        } 
      */
    }


?>
<!--

ooooo                                                   
`888'                                                   
 888          .ooooo.   .oooooooo  .oooo.   ooo. .oo.   
 888         d88' `88b 888' `88b  `P  )88b  `888P"Y88b  
 888         888   888 888   888   .oP"888   888   888  
 888       o 888   888 `88bod8P'  d8(  888   888   888  
o888ooooood8 `Y8bod8P' `8oooooo.  `Y888""8o o888o o888o 
                       d"     YD                        
                       "Y88888P'                        
                       
-->
<!--

Smashlounge is built for the community, by the community.

All tools used on this site are for non-commercial purposes.
Questions?
  smashlounge@gmail.com

-->

<!DOCTYPE html>
<html lang="en">
  <head>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-51481444-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Smash Lounge</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://test.gfycat.com/gfycat_test_june25.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <?php
      createNavBar();
    ?>

    <div class="container-fluid">
      <div class="row">

       <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar turnup">
            <li class="home"><a href="/"><span class='glyphicon glyphicon-home pull-left'></span>&nbsp;Home</a></li>
            <li class="home"><a href="/lounge.php"><span class='glyphicon glyphicon-globe pull-left'></span>&nbsp;Lounge</a></li>
            <li class='home'><a href='/users.php'><span class='glyphicon glyphicon-user pull-left'></span>&nbsp;Users</a></li>
            <?php 
              makeCollapseNav("tech", $dataTech, 'out', $char, $tech, '');
              makeCollapseNav("char", $dataChar, 'out', $char, $tech, '');
            ?>
          </ul>
          <br/>
          <br/>
          <div class='row loginbox'>

            <div class='row'>
              <div class='col-md-12'>
                <ul class='nav nav-sidebar loginbox'>
                 <li class="home login"><a href="/login"><span class='glyphicon glyphicon-send pull-left'></span>&nbsp;Log in</a></li>
                </ul>
              </div>
            </div>

            <?php if ($loggedIn) { ?>
                <div class='row'>
                  <div class='col-md-6'>
                    <ul class='nav nav-sidebar loginbox'>
                      <li class="home active login"><a href="/update">&nbsp;Update</a></li>
                    </ul>
                  </div>
                  <div class='col-md-6'>
                    <ul class='nav nav-sidebar loginbox'>
                      <li class="home login"><a href="/static/logout">&nbsp;logout</a></li>
                    </ul>
                  </div>
                </div>
            <?php } ?>

          </div>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



          <div class="jumbotron full">

            <h1 class="hddr">Hey <?php echo $_SESSION['user']['username']; ?></h1>
            <p class="fifty">update your profile information<br/>
            
          </div>

          <div class="row">
            <div class="col-md-12 col-sm-12">


              <div class='panel panel-default'>
                <div class='panel-heading'>
                  <legend><h3>Modify your profile!</h3></legend>
                </div>
                <div class='panel-body'>
                <form action="update" method="post" class="form-horizontal">
                  <fieldset>



                  <!-- Select Basic -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="main">Main</label>
                    <div class="col-md-4">
                      <select id="main" name="main" class="form-control">
                        <option value="1">Bowser</option>
                        <option value="2">Captain Falcon</option>
                        <option value="3">Donkey Kong</option>
                        <option value="4">Dr. Mario</option>
                        <option value="5">Falco</option>
                        <option value="6">Fox</option>
                        <option value="7">Ganondorf</option>
                        <option value="8">Ice Climbers</option>
                        <option value="9">Jigglypuff</option>
                        <option value="10">Kirby</option>
                        <option value="11">Link</option>
                        <option value="12">Luigi</option>
                        <option value="13">Mario</option>
                        <option value="14">Marth</option>
                        <option value="15">Mewtwo</option>
                        <option value="16">Mr. Game And Watch</option>
                        <option value="17">Ness</option>
                        <option value="18">Peach</option>
                        <option value="19">Pichu</option>
                        <option value="20">Pikachu</option>
                        <option value="21">Roy</option>
                        <option value="22">Samus</option>
                        <option value="23">Sheik</option>
                        <option value="24">Yoshi</option>
                        <option value="25">Young Link</option>
                      </select>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="location">Location</label>  
                    <div class="col-md-4">
                    <input id="location" name="location" type="text" placeholder="Santa Cruz" class="form-control input-md">
                    <span class="help-block">Where do you play?</span>  
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="vod">VOD</label>  
                    <div class="col-md-4">
                    <input id="vod" name="vod" type="text" placeholder="https://www.youtube.com/watch?v=UbfInBIJitM" class="form-control input-md">
                    <span class="help-block">Please link a vod you would like displayed on your profile page</span>  
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="twitter">Twitter!</label>  
                    <div class="col-md-4">
                    <input id="twitter" name="twitter" type="text" placeholder="miom_pewpewu" class="form-control input-md">
                    <span class="help-block">Please enter just your twitter username</span>  
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="twitch">Twitch</label>  
                    <div class="col-md-4">
                    <input id="twitch" name="twitch" type="text" placeholder="pewpewu" class="form-control input-md">
                    <span class="help-block">Please enter just your Twitch channel name, if you have one!</span>  
                    </div>
                  </div>

                  <button class="btn btn-lg btn-primary btn-block bttn" type="submit">Update your profile!</button>

                  <br/>
                  </fieldset>
                  </form>
                  </div>

              

           
                  </div>
            </div>

            <div class='col-md-4 col-sm-4'>

              <?php 
                  if ($alert) {
                      alertStatus($alert);
                  }
              ?>
            
            </div>


        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toggler.js"></script>
    <script>
       $(document).ready(function(){
          // Target your .container, .wrapper, .post, etc.
          $(".vimeo").fitVids();
        });
    </script>
  </body>
</html>
