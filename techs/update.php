<?php

  require("db.php");

  $mysqli = new mysqli($dahostname, $username, $password, $database);

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
     
      if (!empty($matches)) {
        if ($matches[1] != '') {
          $params['vod'] = $matches[1];
        }
      } else {
        $params['vod'] = '';
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
        return true;

      } else {

        $keys = "(main";
        $values = "(:main";
        $query_params = array();
        $query_params[":main"] = $main;
        $query_params[":userID"] = $userID;
        foreach ($params as $key => $item) {
          $keys .= " ," . $key;
          $values .= ", :" . $key;
          $paramz = ":" . $key;
          $query_params[$paramz] = $item;
        }
        $keys .= ")";
        $values .= ")";


        $query = "INSERT INTO userinfo " . $keys . " VALUES " . $values;
        /*
        $query_params = array(
          ':main' => $main,
          ':userID' => $userID,
          ':facebook' => $params['facebook'],
          ':latitude' => $params['latitude'],
          ':longitude' => $params['longitude'],
          ':twitch' => $params['twitch'],
          ':vod' => $params['vod'],
          ':twitter' => $params['twitter'],
          ':friendcode' => $params['friendcode']
        );
        */

        try{
          $stmt = $mysqli->prepare($query);
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
        return true;
    }
    return false;
?>