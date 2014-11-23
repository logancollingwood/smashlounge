<?php

////////////////////////////////////////
//            EXPORTED GLOBALS
//
//
//    USERID
//    
//
//


$userid = '';
$userFields = array();


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
$sponsor ='';
$hasLocation = false;
$hasFriendcode = false;
$friendcode = '';
$location = '';
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
    $profileImage = $image;
  }
  if ($row['facebook'] != '') {
    $hasFacebook = true;
    $facebook = $row['facebook'];
  }
  if ($row['friendcode'] != '') {
    $hasFriendcode = true;
    $friendcode = $row['friendcode'];
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

$friends = Array();
$query = "SELECT * from friends WHERE myid='" . $userid . "'";
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $friends[] = $row['friendid'];
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
        echo "        <h3><small class='pull-left labelz'>main</small><br>";
        echo "        <a href='/characters.php?char=" . urlencode($main) . "'>$main</a></h3>";
        echo "        <div class='mainPic $main'></div>";
    echo "</div>";
	}
}

function makeSponsorPanel($hasSponsor, $sponsor) {
    if ($hasSponsor) {
    echo "<div class='well'>";
        echo "        <h3><small class='pull-left labelz'>sponsor</small><br>";
        echo "        $sponsor</h3>";
    echo "</div>";
  }
}

function makeLocationPanel($hasLocation, $location) {
    if ($hasLocation) {
    echo "<div class='well'>";
        echo "        <h3><small class='pull-left labelz'>location</small><br>";
        echo "        $location</h3>";
    echo "</div>";
  }
}
function makeFriendcodePanel($hasFriendcode, $friendcode) {
    if ($hasFriendcode) {
      //cancels us from trying to display empty friendcodes
      if ($friendcode != 0) {
        $parts = str_split($friendcode, 4);
        $friendcode = $parts[0] .'-'. $parts[1] .'-'. $parts[2];
        echo "<div class='well'>";
            echo "        <h3><small class='pull-left labelz'>3DS friendcode</small><br>";
            echo "        $friendcode</h3>";
        echo "</div>";
      }
    }
} 

function makeFriendsPanel($friends) {
  global $mysqli;
  echo "<div class='well'>";
    echo "<ul>";
      foreach ($friends as $friend) {
        $friendName = 'Not Found';
        $query = "SELECT * from users WHERE id='" . $friend . "'";
        if (!$result = $mysqli->query($query)) {
          die('Invalid query: ' . $mysqli->error);
        }
        foreach ($result as $foundFriend) {
          $friendName = $foundFriend['username'];
        }
        echo "<li>" . $friendName . "</li>";
      }
    echo "</ul>";
  echo "</div>";
}

function makePinnedPanel($hasVod, $vodType, $vod) {
  $counter = 0;
  if ($hasVod) {
    if ($vodType == 'youtube') {
      echo "<div class='well youtube'>";
       echo "<iframe id='ytplayer' type='text/html' src='http://www.youtube.com/embed/$vod' frameborder='0'></iframe>";
      echo "</div>";
    }
  }
}

function makePinnedGifs($hasGifs, $usergifs) {
  $counter = 0;
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
        echo "<div class='panel panel-default'>";
          echo "<div class='panel-heading'>";
          echo "  <span class='glyphicon glyphicon-search SL'></span><input id='search' type='text' placeholder='username' />";
          echo "</div>";
          echo "<div class='panel-body userlist'>";
            echo "  <!-- Show Results -->";
            echo '  <ul id="results" class="users">';
            foreach ($allUsers as $user) {
              echo "<li>"; 
              if ($user['sponsor'] != '') {
                echo "<h4><small>" . $user['sponsor'] . "</small></h4>";
              } else {
                echo "<br>";
              }
              echo "<a href='/users/" . $user['username'] . "'>" . $user['username'] . "</a>";
              echo "</li>";
            }

            echo '  </ul>';
            echo "<div class='clr'></div>";
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