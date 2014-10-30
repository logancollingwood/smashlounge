<?php

  require("techs/init.php");
 

    $loggedIn = true;
    if ( ! Sentry::check())
    {
        $loggedIn = false;
        // User is not logged in, or is not activated
        header("Location: login?str=login");
        die("Redirecting to index.php");
    }
    $user = Sentry::getUser();
    $userID = $user['id'];
    $username = $user['username'];

    $userFields = array();
    $alert = isset($_GET['str'])       ? trim($_GET['str'])       : "";


  function alertStatus($submit) {
        if ($submit == 'success') {
            echo "<div class='alert alert-success alert-dismissable' role='alert'>Congratulations! Your account has been updated.";
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

  $query = "SELECT * FROM userinfo WHERE userid=" . $userID;
  $hasInfo = false;
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $userFields = $row;
    $hasInfo = true;
  }




  if(!empty($_POST)){

      updateProfile($userID, $_POST);


      $vod = '';
      $main = $_POST['main'];
      $location = $_POST['location'];
      $vodURL = $_POST['vod'];
      $facebook = $_POST['facebook'];
      //echo $vodURL;
      //preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $vodURL, $matches);
      //echo $matches;
      if (empty($matches) && $_POST['vod'] != '') {
        header("Location: /update?str=url");
        die("Redirecting to update.php");
      }
      $twitter = $_POST['twitter'];
      $twitchId = $_POST['twitch'];


      $params = array();
      $params['main'] = $main;
      $params['location'] = $location;
      //$params['vod'] = $matches[1];
      $params['twitter'] = $twitter;
      $params['twitch'] = $twitchId;
      $params['facebook'] = $facebook;

      $hasGfy = false;

      if (isset($_POST['gfycat']) && $_POST['gfycat'] != '' ) {
        $hasGfy = true;
      }
      if ($hasGfy) {
        $gfyURL = remove_http($_POST['gfycat']);
        $gfyID = grabGfyName($gfyURL);
        if ($gfyID === '') {
          header("Location: /update?str=url");
          die("Redirecting to update.php");
        }
      }

      if (preg_match("/\\s/", $params['twitter'])) {
        header("Location: update.php?str=spaces");
        die('redirecting');
      }

      if (preg_match("/\\s/", $params['twitch'])) {
        header("Location: update.php?str=spaces");
        die('redirecting');
      }



      if ($hasInfo) {
        if (!empty($params)) {
          $setString = "SET main ='" . $main . "'";
        }

        foreach ($params as $key => $item) {
          if ($key != 'main' || $item != '') {
            $setString .= "," . $key . "='" . $item . "'";
          }
        }


        $query = "UPDATE userinfo " . $setString . "WHERE userid= " . $userID;

        if (!$result = $mysqli->query($query)) {
          die('Invalid query: ' . $mysqli->error);
        } else {
          header("Location: /update.php?str=success");
        }

      } else {

        /*
        $insertString = "(main";
        foreach ($params as $key => $item) {
          if ($key != 'main' || $item != '') {
            $insertString .= "," . $key . "='" . $item . "'";
          }
        }
        */

        $query = "INSERT INTO userinfo (main, userid, facebook, location, twitch, vod, twitter) VALUES (:main, :userID, :facebook, :location, :twitch, :vod, :twitter);";
        $query_params = array(
          ':main' => $main,
          ':userID' => $userID,
          ':facebook' => $facebook,
          ':location' => $location,
          ':twitch' => $twitchId,
          ':vod' => $vod,
          ':twitter' => $twitter
        );

        try{
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
        } catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }

      }
          $query = "INSERT INTO usergif (userid, url) VALUES (:userID, :id);";
          $query_params = array(
            ':userID' => $userID,
            ':id' => $gfyID
          );
          try{
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
          } catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }


      header("Location: /update.php?str=success");
    }

    //print_r($userFields);
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

    <?php
        printLibraries();
    ?>

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">
    <link href='css/users.css' rel='stylesheet'>

    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqmaEEEbIm2Iln3ieqGdtfzVLi6AzHA1Q&sensor=true">
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>

  <body>

    <?php
      createNavBar();
    ?>

    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">
          <?php makeSidebar($loggedIn, 'update'); ?>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



          <div class="jumbotron banner">
                <?php
                    if ($alert) {
                        alertStatus($alert);
                    }
                ?>
            <h1 class="lead">
              Update your profile
            </h1>


          </div>

          <div class="row">
            <div class="col-md-7">


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
                        <?php

                          $selected = $userFields['main'];
                          $recentlyMained = isset($_POST['main'])       ? trim($_POST['main'])       : "0";
                          for ($i = 1; $i <= 26; $i++) {
                            $chars[$i] = getCharFromID($mysqli, $i);
                            echo "<option value='$i' ";

                              if ($selected == $i || $i == $recentlyMained) {
                                echo "selected='selected'";
                              }
                            echo ">" . $chars[$i] . "</option>";
                          }

                        ?>
                      </select>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="location">Location</label>
                    <div class="col-md-4">
                    <input id="location" name="location" type="text" placeholder="Santa Cruz"
                    <?php
                      if ($hasInfo) {
                        if ($userFields['location'] != '') {
                          echo " value='" . $userFields['location'] . "'";
                        }
                      }
                    ?> class="form-control input-md">
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
                    <label class="col-md-4 control-label" for="facebook">facebook!</label>
                    <div class="col-md-4">
                    <input id="facebook" name="facebook" type="text" placeholder="miom_pewpewu"
                    <?php
                      if ($hasInfo) {
                        if ($userFields['facebook'] != '') {
                          echo " value='" . $userFields['facebook'] . "'";
                        }
                      }
                    ?>
                     class="form-control input-md">
                    <span class="help-block">Please enter just your facebook username</span>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="twitter">Twitter!</label>
                    <div class="col-md-4">
                    <input id="twitter" name="twitter" type="text" placeholder="miom_pewpewu" 
                    <?php
                      if ($hasInfo) {
                        if ($userFields['twitter'] != '') {
                          echo " value='" . $userFields['twitter'] . "'";
                        }
                      }
                    ?>
                    class="form-control input-md">
                    <span class="help-block">Please enter just your twitter username</span>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="twitch">Twitch</label>
                    <div class="col-md-4">
                    <input id="twitch" name="twitch" type="text" placeholder="pewpewu" 
                    <?php
                      if ($hasInfo) {
                        if ($userFields['twitch'] != '') {
                          echo " value='" . $userFields['twitch'] . "'";
                        }
                      }
                    ?>
                    class="form-control input-md">
                    <span class="help-block">Please enter just your Twitch channel name, if you have one!</span>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="gfycat">Gfycat!</label>
                    <div class="col-md-4">
                    <input id="gfycat" name="gfycat" type="text" placeholder="gfycat.com/" 
                    <?php
                      if ($hasInfo) {
                        if ($userFields['twitter'] != '') {
                          echo " value='" . $userFields['twitter'] . "'";
                        }
                      }
                    ?> class="form-control input-md">
                    <span class="help-block">Please enter a link to a sweet gfycat!</span>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="friendcode">3DS Friend Code!</label>
                    <div class="col-md-4">
                    <input id="friendcode" name="friendcode" type="text" placeholder="friendcode" class="form-control input-md">
                    <span class="help-block">Your 3DS Friend Code!</span>
                    </div>
                  </div>

                      <div id="map-canvas"/></div>

                      <div class="form-group">
                        <label class="col-md-4 control-label" for="latitude">latitude</label>
                        <div class="col-md-4">
                        <input id="latitude" name="lat" type="text" placeholder="lat" class="form-control input-md">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="longitude">longitude</label>
                        <div class="col-md-4">
                        <input id="longitude" name="long" type="text" placeholder="long" class="form-control input-md">
                        </div>
                      </div>
                  <hr>
                  </div>
                  <div class='panel panel-footer'>

                    <button class="btn btn-lg btn-primary btn-block bttn" type="submit">Save</button>
                  </div>

                  </fieldset>
                  </form>

                  </div>





            </div>
            <?php if ($hasInfo) { ?>
              <div class='col-md-5'>
                <div class='panel panel-default'>
                  <div class='panel-heading'>
                    <div class='row'>
                      <div class='col-md-3'>
                        <?php
                         echo "      <a href='http://www.smashlounge.com/users/$username'>$username</a>";
                        ?>
                      </div>
                      <div class='col-md-3'>
                        <a href='http://www.smashlounge.com'><span class='logo'>@smash lounge</span></a>
                      </div>
                    </div>
                  </div>
                  <div class='panel-body'>

                        <div class='row'>

                          <div class='col-md-7 col-sm-7'>
                            <?php

                                echo"<div class='info'>";
                                  echo "  <h3><small>main: </small><a href='/characters?char=" . getCharFromID($mysqli, $userFields['main']) . "'>" . getCharFromID($mysqli, $userFields['main']) . "</a></h3>";
                                  echo "<hr>";
                                  echo "  <h3><small>location: </small>" . $userFields['location'] . "</h3>";
                                  echo "<hr>";
                                  echo "  <h3><small>sponsor: </small>" . $userFields['sponsor'] . "</h3>";
                                echo "</div>";

                            ?>
                          </div>
                          <div class='col-md-5 col-sm-5'>
                            <?php
                                echo"<div class='info'>";
                                  echo "  <h3><small>twitter: </small><a href='https://www.twitter.com/" . $userFields['twitter'] . "'>" . $userFields['twitter'] . "</a></h3>";
                                  echo "<hr>";
                                  echo "  <h3><small>twitch: </small><a href='https://www.twitch.tv/" . $userFields['twitch'] . "'>" . $userFields['twitch'] . "</a></h3>";
                                  echo "<hr>";
                                  echo "  <h3><small>facebook: </small><a href='https://www.facebook.com/" . $userFields['facebook'] . "'>" . $userFields['facebook'] . "</a></h3>";
                                echo "</div>";
                            ?>
                          </div>
                        </div>


                  </div>
                </div>
              </div>
            <?php } ?>


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
    <script src="js/mapInitUpdate.js"></script>
    <script>
       $(document).ready(function(){
          // Target your .container, .wrapper, .post, etc.

          $(".vimeo").fitVids();
        });
    </script>
  </body>
</html>
