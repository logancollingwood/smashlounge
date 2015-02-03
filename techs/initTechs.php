<?php
  $query = "SELECT * FROM " . $techTable . " WHERE tech='" . $tech . "'";
  $techID = -1;
  $notFound = TRUE;
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $techID = $row["id"];
    $techInfo = $row;
  }
  if ($techID != -1) {
    $notFound = FALSE;
  }



  $query = "SELECT * FROM gifs WHERE dataid='" . $techID . "' AND typeid=2";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $gifs[] = $row;
  }
  //ksort($gifs);

?>

