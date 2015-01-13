<?php


    require("../techs/db.php");

  // Start XML file, create parent node

  $dom = new DOMDocument("1.0");
  $node = $dom->createElement("markers");
  $parnode = $dom->appendChild($node);


    // Opens a connection to a MySQL server

    $mysqli = new mysqli($dahostname, $username, $password, $database);
    if ($mysqli->connect_errno) {   
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
    }

  // Select all the rows in the markers table

  $query = "SELECT * FROM userinfo";

  if (!$result = $mysqli->query($query)) {
      die('Invalid query: ' . $mysqli->error);
  }

  header("Content-type: text/xml");

  foreach ($result as $row) {

    $userID = $row['userid'];

    $query = "SELECT * FROM users where id=" . $userID;

    if (!$result = $mysqli->query($query)) {
      die('Invalid query: ' . $mysqli->error);
    }
    foreach ($result as $rowInner) {
        $username = $rowInner['username'];
    }
    $profileHref = "/users/" . $username;

    $region = "";
    /*
    switch ($row['region']) {
    case 1:
        $region = "Atlantic North";
        break;
    case 2:
        $region = "Atlantic South";
        break;
    case 3:
        $region = "Midwest";
        break;
    case 4:
        $region = "South & Southwest";
        break;
    case 5:
        $region = "West Coast";
        break;
    }
    */
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name", $username);
    //$newnode->setAttribute("region", $region);
    $newnode->setAttribute("lat", $row['latitude']);
    $newnode->setAttribute("lng", $row['longitude']);
    $newnode->setAttribute("href", $profileHref);

    $game = "Loves all games!";
    /*
    switch ($row['game']) {
    case 0:
        $game = "All";
        break;
    case 1:
        $game = "Smash 64";
        break;
    case 2:
        $game = "Smash Melee";
        break;
    case 3:
        $game = "Smash Brawl";
        break;
    case 4:
        $game = "Project M";
        break;
    case 5:
        $game = "Smash 4";
        break;
    }
    */
    $newnode->setAttribute("type", $game);
  }


echo $dom->saveXML();




?>