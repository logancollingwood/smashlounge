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
    $profileHref = "/users/$username";

    $region = "";

    
    $node = $dom->createElement("marker");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("name", htmlspecialchars($username));
    $newnode->setAttribute("lat", $row['latitude']);
    $newnode->setAttribute("lng", $row['longitude']);
    $newnode->setAttribute("href", $profileHref);

    $game = "Loves all games!";

    $newnode->setAttribute("type", $game);
  }


echo $dom->saveXML();




?>