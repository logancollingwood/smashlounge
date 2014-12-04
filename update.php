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
        } else if ($submit == 'error') {
            echo "<div class='alert alert-danger alert-dismissable' role='alert'>Woops! Looks like there was an error updating your profile. Please try again.";
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
  if ($hasInfo) {
    if ($userFields['latitude'] != 0) {
      if ($userFields['longitude'] != 0) {
        $hasLocation = true;
      }
    }
  }

  $usergifs = array();
  $query = "SELECT * FROM usergif WHERE userid=" . $userID;
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $usergifs[] = $row;
    $hasGifs = true;
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

    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqmaEEEbIm2Iln3ieqGdtfzVLi6AzHA1Q&sensor=true">
    </script>


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
          <?php printBetaMast(); ?>


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
                          if ($hasInfo) {
                            $selected = $userFields['main'];
                          } else {
                            $selected = 0;
                          }
                          for ($i = 1; $i <= 26; $i++) {
                            $chars[$i] = getCharFromID($mysqli, $i);
                            echo "<option value='$i' ";

                              if ($selected == $i) {
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
                    <input id="vod" name="vod" type="text" placeholder="https://www.youtube.com/watch?v=" 
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
                    <input id="friendcode" name="friendcode" type="text" placeholder="friendcode" class="form-control input-md" maxlength="14"
                    <?php
                      if ($hasInfo) {
                        echo $userFields['friendcode'];
                        if ($userFields['friendcode'] != 0) {
                          $parts = str_split($userFields['friendcode'], 4);
                          $friendcode = $parts[0] .'-'. $parts[1] .'-'. $parts[2];
                          echo " value='" . $friendcode . "'";
                        }
                      }
                    ?>>
                    <span class="help-block">Your 3DS Friend Code!</span>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                    <button class="btn btn-lg btn-primary btn-block bttn" type="submit" id="updateInfo" style="width: 100%;"><span id="loader" class="glyphicon glyphicon-refresh"></span> Save</button>
                  </div>
                  
                  <input id='userid' name='userid' value='<?php echo $userID; ?>' hidden='true'>
                  </div>
                  </div>

                  

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
                  <h3><small><small>This is totally optional, but will pin your location to the global map so you can connect with local players </small></small></h3>
                </div>
                <div class='panel-footer'>
                  <div class='submit-wrapper'>
                    <form class="form-horizontal" role="form">
                    
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="gfycat">Latitude:</label>
                        <div class="col-md-6">
                          <input id="lat" name="lat" type="text" placeholder="lat" readonly="true" class="form-control input-md"
                          <?php
                            if ($hasLocation) {
                              if ($userFields['latitude'] != 0) {
                                echo " value='" . $userFields['latitude'] . "'";
                              }
                            }
                          ?>>
                        </div>
                      </div>


                    <div class="form-group">
                      <label class="col-md-4 control-label" for="gfycat">Longitude: </label>
                      <div class="col-md-6">
                        <input id="long" name="long" type="text" placeholder="long" readonly="true" class="form-control input-md"
                        <?php
                          if ($hasLocation) {
                            if ($userFields['longitude'] != 0) {
                              echo " value='" . $userFields['longitude'] . "'";
                            }
                          }
                        ?>>
                      </div>
                      
                    </div>
                     <?php
                      if ($hasLocation) {
                        echo '<div class="form-group">';
                        echo '  <div class="col-md-5 col-md-offset-4">';
                        echo '   <button type="button" class="btn btn-default" id="clear" aria-label="Left Align">';
                        echo '      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
                        echo '      remove me from the map';
                        echo '    </button>';
                        echo '  </div>';
                        echo '</div>';
                      }
                    ?>


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
    <script src="js/jquery.fitvids.js"></script>


    <script>
      var map;
      var marker;
      var markers = [];
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
          markers.push(marker);
          map.setCenter(location);
      }

      // Removes the markers from the map, but keeps them in the array.
      function clearMarkers() {
        setAllMap(null);
      }


      // Deletes all markers in the array by removing references to them.
      function deleteMarkers() {
        clearMarkers();
        markers = [];
      }

      // Sets the map on all markers in the array.
      function setAllMap(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
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

          //this allows the user to remove themselves from the player map assuming that they save the form
          $("#clear").on("click", function(event) {
            $("#lat").val(0);
            $("#long").val(0);
            deleteMarkers();
          });

          $("#updateInfo").on("click", function(event) {
            $("#loader").addClass(" glyphicon-refresh-animate");
            // Prevent default behavior
            event.preventDefault();
            var data = $(".submit-wrapper form").serialize();
            console.log(data);
            $.ajax({
              url: '/techs/update.php',
              type: 'POST',
              data: data,
              dataType: "html"
            })
            .done(function(html) {
              window.location.replace("/update.php?str=success");
            })
            .fail(function(html) {
              console.log(html);
              //window.location.replace("/update.php?str=error");
            })
            .always(function(html) {
              $("#loader").removeClass(" glyphicon-refresh-animate");
            });
          });
          
        });

    </script>
  </body>
</html>
