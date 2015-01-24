<?php
$query = "SELECT * FROM " . $techTable . " WHERE tech='" . $tech . "'";
  $techID = -1;
  $notFound = TRUE;
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $techID = $row["id"];
  }
  if ($techID != -1) {
    $notFound = FALSE;
  }


  $query = "SELECT * FROM " . $techInfo . " WHERE techID='" . $techID . "'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $description = $row["description"];
    $input = $row["inputs"];
    $wiki = $row["smashwiki"];
  }
  if (!$description) {
    $description = "No description found for " . $tech;
  }

  $query = "SELECT * FROM " . $techInfo . " WHERE techID='" . $techID . "'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $input = $row["inputs"];
  }
  if (!$description) {
    $input = "No inputs found for " . $tech;
  }

  $query = "SELECT * FROM " . $techInfo . " WHERE techID='" . $techID . "'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $wiki = $row["smashwiki"];
  }


  $query = "SELECT * FROM " . $gif . " WHERE techID='" . $techID . "'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $gifs[] = $row;
  }
  ksort($gifs['score']);
?>

