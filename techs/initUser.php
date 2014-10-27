<?php

////////////////////////////////////////
//            EXPORTED GLOBALS
//
//
//    USERID
//    
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

$userid = '';



require_once("techs/db.php");
$found = true;

//     BUILDS DATABASE CONNCETION
//
//
//
////////////////////////////////////////

$mysqli = new mysqli($dahostname, $username, $password, $database);
if ($mysqli->connect_errno) {   
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}

$username = isset($_GET['username'])       ? trim($_GET['username'])       : "";
$query = "SELECT * from users WHERE username='" . $username . "'";
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
 $userid = $row['id'];
}
if ($userid == '') {
  $found = false;
}





//     BUILDS USER INFO
//
//
//
////////////////////////////////////////
$hasTwitter = false;
$hasMain = false;
$hasSponsor = false;
$hasVod = false;
$hasTwitch = false;
$hasImage = false;
$hasFacebook = false;
$hasGifs = false;
$mainID = 0;
$twitch = '';
$twitter = '';
$vod = '';
$usergifs = array();


$main = "No Main!";
$query = "SELECT * from userinfo WHERE userid='" . $userid . "'";
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  	if ($row['twitter'] != '') {
  		$twitter = $row['twitter'];
  		$hasTwitter = true;
	}
	if ($row['main'] != 0) {
		$mainID = $row['main'];
		$hasMain = true;
	}
  if ($row['sponsor'] != '') {
    $hasSponsor = true;
    $sponsor = $row['sponsor'];
  }
  if ($row['vod'] != '') {
    $hasVod = true;
    $vod = $row['vod'];
  }
  if ($row['twitch'] != '') {
    $hasTwitch = true;
    $twitch = $row['twitch'];
  }
  if ($row['location'] != '') {
    $hasLocation = true;
    $location = $row['location'];
  }
  if ($row['image'] != '') {
    $hasImage = true;
    $image = $row['image'];
    $profileImage = "img/profiles/" . $image;
  }
  if ($row['facebook'] != '') {
    $hasFacebook = true;
    $facebook = $row['facebook'];
  }
}
if ($hasMain) {
  $main = getCharFromID($mysqli, $mainID);
}

//     BUILDS USER GIFS ARRAY
//
//
//
////////////////////////////////////////
$query = "SELECT * from usergif WHERE userid='" . $userid . "'";
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $hasGifs = true;
  $usergifs[] = $row;
}
if ($hasGifs) {
  shuffle($usergifs);
}




//     Makes Twitter Panel if the player has Twitter
//
//
//
////////////////////////////////////////
function makeTwitterPanel($hasTwitter, $twitter) {
	if ($hasTwitter) {
		echo "<div class='well'>";
        echo "			<a class='twitter-timeline' href='https://twitter.com/" . $twitter . "' data-widget-id='500580319922114561' data-screen-name='$twitter' data-show-replies='false'>Tweets by $twitter</a>";
    echo "</div>";
	}
}

function makeMainPanel($hasMain, $main, $mysqli) {
	if ($hasMain) {
		echo "<div class='well'>";
        echo "        <h3><small class='pull-left labelz'>main</small>";
        echo "        <a href='characters?char=" . urlencode($main) . "'>$main</a></h3>";
        echo "        <div class='mainPic $main'></div>";
    echo "</div>";
	}
}

function makeSponsorPanel($hasSponsor, $sponsor) {
    if ($hasSponsor) {
    echo "<div class='well'>";
        echo "        <h3><small class='pull-left labelz'>sponsor</small>";
        echo "        $sponsor</h3>";
    echo "</div>";
  }
}

function makeLocationPanel($hasLocation, $location) {
    if ($hasLocation) {
    echo "<div class='well'>";
        echo "        <h3><small class='pull-left labelz'>location</small>";
        echo "        $location</h3>";
    echo "</div>";
  }
}



function makePinnedPanel($hasVod, $vodType, $vod, $hasGifs, $usergifs) {
  $counter = 0;
  if ($hasVod) {
    if ($vodType == 'youtube') {
      echo "<div class='well youtube'>";
       echo "<iframe id='ytplayer' type='text/html' src='http://www.youtube.com/embed/$vod' frameborder='0'></iframe>";
      echo "</div>";
    }
  }
  if ($hasGifs) {     
    echo "<ul class='list-group'>";
    foreach ($usergifs as $tmpGif) {
      $counter++;
      echo "<li class='list-group-item'>";
      echo "<img class='gfyitem' data-expand=true data-id='" . $tmpGif['url'] . "'/>";
      
      echo "</li>";
    }
    echo "</ul>";
    echo "</br>";
  }
}

function makeUserGifs($hasGifs, $usergifs) {
  $counter = 0;
  if ($hasGifs) {
    echo "<div class='row>";
    echo "<ul class='list-group'>";
    foreach ($usergifs as $tmpGif) {
      $counter++;
      echo "<li class='list-group-item'>";
      echo "<img class='gfyitem' data-expand=true data-id='" . $tmpGif['url'] . "'/>";
      echo  "<span class='badge'>". $counter . "</span>";
      echo "</li>";
    }
    echo "</ul>";
    echo "</div>";
  }
}

function getAllUsers($mysqli) {
  $query = "SELECT users.username, userinfo.sponsor FROM users LEFT JOIN userinfo on users.id=userinfo.userid";
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
   $users[] = $row;
  }

  return $users;
}


function makeAllUsers($allUsers) {

  /*

                    echo "<div class='col-md-6'>";
                    echo "<iframe src='/usercard?username=Pewpewu' width='625px' height='412px' ALLOWTRANSPARENCY='true'></iframe>";
                  echo "</div>";
  */
  //print_r($allUsers);


      echo "<div class='col-md-4'>";
        echo "<div class='well'>";
          echo "<div class='table-responsive'>";
            echo "<table class='table table-hover table-striped'>";
              echo "<th style='text-align: center;'>username</th>";
              foreach ($allUsers as $user) {
                echo "<tr><td>"; 
                if ($user['sponsor'] != '') {
                  echo "<h4><small>" . $user['sponsor'] . "</small></h4>";
                } else {
                  echo "<br>";
                }
                echo "<a href='/" . $user['username'] . "'>" . $user['username'] . "</a>";
                echo "</td></tr>";
              }
            echo "</table>";
          echo "</div>";

      echo "</div>";
      echo "</div>";

        echo "<div class='col-md-8'>";
          echo "<div id='map-canvas'/></div>";
        echo "</div>";



      echo "</div>";

    echo "</div>";

}
?>