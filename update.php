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
    global $username;
        if ($submit == 'success') {
            echo "<div class='alert alert-success alert-dismissable' role='alert'>View your updated <a href=/users/" . $username . ">profile</a>";
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
  $hasGifs = false;
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $userFields = $row;
    $hasInfo = true;
  }

  $hasLocation = false;
  if ($userFields['latitude'] != 0) {
    if ($userFields['longitude'] != 0) {
      $hasLocation = true;
    }
  }

  $query = "SELECT * FROM usergif WHERE userid=" . $userID;
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $usergifs[] = $row;
    $hasGifs = true;
  }



  if(!empty($_POST)){

      //updateProfile($userID, $_POST);

      print_r($_POST);

      $vod = '';
      $main = $_POST['main'];
      $location = $_POST['location'];
      $vodURL = $_POST['vod'];
      $facebook = $_POST['facebook'];
      $latitude = $_POST['lat'];
      $longitude = $_POST['long'];
      echo $latitude;
      echo $longitude;

      preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $vodURL, $matches);
      
      //echo($matches[1]);

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
      $params['latitude'] = $latitude;
      $params['longitude'] = $longitude;

      if ($matches[1] != '') {
        $params['vod'] = $matches[1];
      }

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
            <h1 class="lead">
              Update your profile
            </h1>
          </div>
          <?php
              if ($alert) {
                  alertStatus($alert);
              }
          ?>
          <div class="row">
            <div class="col-md-6">


              <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h3>Modify your profile!</h3>
                </div>
                <div class='panel-body full'>
                 


                <div class='submit-wrapper'>
                  <form class="form-horizontal" role="form">
                  <!-- Select Basic -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="main">Main</label>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                    <input id="vod" name="vod" type="text" placeholder="https://www.youtube.com/watch?v=UbfInBIJitM" 
                    <?php
                      if ($hasInfo) {
                        if ($userFields['vod'] != '') {
                          echo " value='http://www.youtube.com/watch?v=" . $userFields['vod'] . "'";
                        }
                      }
                    ?>class="form-control input-md">
                    <span class="help-block">Please link a vod you would like displayed on your profile page</span>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="facebook">facebook!</label>
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                    <input id="gfycat" name="gfycat" type="text" placeholder="gfycat.com/" class="form-control input-md">
                    <span class="help-block">Please enter a link to a sweet gfycat!</span>
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="friendcode">3DS Friend Code!</label>
                    <div class="col-md-6">
                    <input id="friendcode" name="friendcode" type="text" placeholder="friendcode" class="form-control input-md" maxlength="14">
                    <span class="help-block">Your 3DS Friend Code!</span>
                    </div>
                  </div>

                  <hr>
                  <input id='userid' name='userid' value='<?php echo $userID; ?>' hidden='true'>
                  </div>
                  </div>
                  <div class='panel panel-footer'>
                    <button class="btn btn-lg btn-primary btn-block bttn" type="submit" id="updateInfo">Save</button>
                  </div>

                  

                  </div>
              </form>
            </div>
            <div class='col-md-6'>
              <div class='panel panel-default'>
                <div class='panel-heading'>
                  <h3>Want to add yourself to our global player map?</h3>
                </div>
                <div class='panel-body full'>
                  <div id="map-canvas"/></div>
                  <h3> <small>Click on the map to pin your location </small></h3>
                </div>
                <div class='panel-footer'>
                  <div class='submit-wrapper'>
                    <form class="form-horizontal">
                    latitude
                    <input id="lat" name="lat" type="text" placeholder="lat" class="form-control input-md" disabled="disabled"
                    <?php
                      if ($hasLocation) {
                        if ($userFields['latitude'] != 0) {
                          echo " value='" . $userFields['latitude'] . "'";
                        }
                      }
                    ?> >
                    longitude
                    <input id="long" name="long" type="text" placeholder="long" class="form-control input-md" disabled="disabled"
                    <?php
                      if ($hasLocation) {
                        if ($userFields['longitude'] != 0) {
                          echo " value='" . $userFields['longitude'] . "'";
                        }
                      }
                    ?> >
                    </form>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        <div class='row'>
            <?php 
              $counter = 0;
              foreach ($usergifs as $gif) {
                $counter++;
                echo "<div class='col-md-4'>";
                  echo "<div class='well'>";
                    echo "<h3> Gif #" . $counter . "</h3>";
                    echo "<hr>";
                    echo "<img class='gfyitem' data-expand=true data-id='" . $gif['url'] . "'/>";
                  echo "</div>";
                echo "</div>";
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
      var map;
      var marker;

      function bindInfoWindow(map, infoWindow) {


        google.maps.event.addListener(map, 'click', function( event ){
          var lat = event.latLng.lat();
          var lon = event.latLng.lng();
          document.getElementById('long').value = lon.toFixed(3);
          document.getElementById('lat').value = lat.toFixed(3);

        });

        google.maps.event.addListener(map, 'click', function(event) {
          placeMarker(event.latLng, map);
        });
      }

      function placeMarker(location, map) {
          if (marker == undefined){
              marker = new google.maps.Marker({
                  position: location,
                  map: map,
                  animation: google.maps.Animation.DROP,
              });
          }
          else{
              marker.setPosition(location);
          }
          map.setCenter(location);
      }

      function initialize() {
        var mapOptions = {
          zoom: 4,
          <?php 
            if ($hasLocation) {
              echo "center: new google.maps.LatLng(" . $userFields['latitude'] . ", " . $userFields['longitude'] . ")";
            } else {
              echo "center: new google.maps.LatLng(37.6, -95.665)";
            }
          ?>
        };
        var infoWindow = new google.maps.InfoWindow;
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        bindInfoWindow(map, infoWindow);
        <?php
          if ($hasLocation) {
            echo "var pos = new google.maps.LatLng(
              parseFloat(" . $userFields['latitude'] . "),
              parseFloat(" . $userFields['longitude'] . "));";
            echo "placeMarker(pos, map)";
          }
        ?>
      }

      google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <script>
      function addDashes(f) {
        f.value = f.value.slice(0,4)+"-"+f.value.slice(4,8) + "-" + f.value.slice(8,12);
      }
        $(document).ready(function(){
          // Target your .container, .wrapper, .post, etc.

          $(".vimeo").fitVids();

          $("#friendcode").on("keypress", function(ev) {
            //prevents users from entering non-numeric values
            var keyCode = window.event ? ev.keyCode : ev.which;
            //codes for 0-9
            if (keyCode < 48 || keyCode > 57) {
                //codes for backspace, delete, enter
                if (keyCode != 0 && keyCode != 8 && keyCode != 13 && !ev.ctrlKey) {
                    ev.preventDefault();
                }
            }

            //if we got a number, let's hyphenate it on every 4 values
            var foo = $(this).val().split("-").join(""); // remove hyphens
            if (foo.length > 0) {
              foo = foo.match(new RegExp('.{1,4}', 'g')).join("-");
            }
            $(this).val(foo);
          });

            $("#updateInfo").on("click", function(event) {
              console.log('firing');
              // Prevent default behavior
              event.preventDefault();
              var data = $(".submit-wrapper form").serialize();
              console.log(data);
              $.ajax({
                url: '/techs/update.php',
                type: 'POST',
                data: data,
              })
              .done(function() {
                window.location.replace("/update.php?str=success");
              })
              .fail(function() {
                console.log('failing');
              })
              .always(function() {
                // Handler for all gif submissions
              });
            });
            
          });

    </script>
  </body>
</html>
