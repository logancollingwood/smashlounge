<?php

  require("dbSuper.php");
  header('Content-type: text/html');

  function grabGfyName ($url) {
    $pattern = '/((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/';
    $matches = array();
   
    preg_match ($pattern, $url, $matches);
    if (!isset($matches[4])) return null;
    return $matches[4];
  }

  function remove_http($url) {
   $disallowed = array('http://', 'https://');
   foreach($disallowed as $d) {
      if(strpos($url, $d) === 0) {
         return str_replace($d, '', $url);
      }
   }
   return $url;
  } 

  $varcharFields = Array('image', 'facebook', 'location',
    'twitch', 'vod', 'twitter', 'sponsor', 'friendcode', 'garpr');

  $mysqli = new mysqli($dahostname, $username, $password, $dbname);

  if ($mysqli->connect_errno) {   
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }
  
  $userID = $_POST['userid'];
  $query = "SELECT * FROM userinfo WHERE userid=" . $userID;

  $hasInfo = false;
  $hasGifs = false;
  $userFields = array();
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $userFields = $row;
    $hasInfo = true;
  }

  $hasLocation = false;
  if (!empty($userFields)) {
    if ($userFields['longitude'] != 0) {
      $hasLocation = true;
    }
    $hasInfo = true;
  }

	if(!empty($_POST)){

      //updateProfile($userID, $_POST);

      //print_r($_POST);

      $vod = '';
      $main = $_POST['main'];
      $location = $_POST['location'];
      $vodURL = $_POST['vod'];
      $facebook = $_POST['facebook'];
      $latitude = $_POST['lat'];
      $longitude = $_POST['long'];
      $userID = $_POST['userid'];
      $friendcode = $_POST['friendcode'];
      $friendcode = str_replace('-', '', $friendcode);

      
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
      $params['vod'] = $vodURL;

      if ($friendcode != '') {
        //$friendcode = str_replace('-', '', $friendcode);
        if (strlen($friendcode) != 12) {
          header("Location: /update.php?str=friendcode");
          die("Redirecting to update.php");
        } else {
          $params['friendcode'] = $friendcode;
        }
      } else {
        $params['friendcode'] = 0;
      }

      $hasGfy = false;
      $gfyID = '';
      $numGifs = 3;
      $gfys = array();
      for ($i = 1; $i < $numGifs+1; $i++) {
        $gfyCat = $_POST['gfy'.$i];
        $gfys[] = $gfyCat;
        $hasGfy = true;
      }

      if (preg_match("/\\s/", $params['twitter'])) {
        //header("Location: update.php?str=spaces");
        die('redirecting');
      }

      if (preg_match("/\\s/", $params['twitch'])) {
        //header("Location: update.php?str=spaces");
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
          //header("Location: /update.php?str=success");
        }


      } else {

        $keys = "(";
        $values = "(";
        $counter = 0;
        $query_params = array();
        $numParams = count($params);
        foreach ($params as $key => $item) {
          if ($counter == 0) {
            $keys .= "userid, ";
            $values .= $userID. ", ";
          }
          if ($params[$key] == '' || $params[$key] == null) {
            if ($key == 'main') {
              $params[$key] = 0;
            } else {
              $params[$key] = "''";
            }
          }
          if ($counter < $numParams - 1) {
            $keys .= $key . ", ";
            if (in_array($key, $varcharFields) && $params[$key] != "''") {
              $values .= "'" . $params[$key] . "', ";
            } else {
              $values .= $params[$key] . ", ";
            }
          } else {
            $keys .= $key;
            if (in_array($key, $varcharFields) && $params[$key] != "''") {
              $values .= "'" . $params[$key] . "'";
            } else {
              $values .= $params[$key];
            }
          }
          $counter++;
        }
        $keys .= ")";
        $values .= ")";

        $query = "INSERT INTO userinfo " . $keys . " VALUES " . $values;
        error_log($query);

        try{
          mysqli_query($mysqli, $query);
        } catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }

      }

      $query = "SELECT count(*) from usergif where userid=" . $userID;

      $result = $mysqli->query($query);
      $row = $result->fetch_row();
      $count = $row[0];

      if ($hasGfy) {
        if ($count > 0) {
          $query = "DELETE FROM usergif WHERE userid=" . $userID;
          try{
            $stmt = $mysqli->prepare($query);
            $result = $stmt->execute();
          } catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
        }
      }

      foreach($gfys as $gfyID) {
        if ($gfyID = '') continue;
        //error_log($gfyID);
        $query = "INSERT INTO usergif (userid, url) VALUES (?, ?)";
        if (!($stmt = $mysqli->prepare($query))) {
         error_log("Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error);
         exit();
        }
        // Bind Params
        if (!$stmt->bind_param("ss", $userID, $gfyID)) {
          error_log("Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error);
          exit();
        }
        // Execute
        if (!$stmt->execute()) {
            error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
            exit();
        }
      }

    return true;
    }
  return false;
?>