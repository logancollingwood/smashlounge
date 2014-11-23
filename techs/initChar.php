<?php 

$frames;
global $author;


$query = "SELECT * FROM " . $charTable . " WHERE name='" . $char . "'";

$charnotFound = FALSE;
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $charID = $row["id"];
}
if (!$charID) {
  $charnotFound = TRUE;
}

$query = "SELECT * FROM " . $charTable . " WHERE id='" . $charID . "'";
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $charTier = $row["tierdata"];
  $charWeight = $row['weight'];
  $charFallSpeed = $row['fallspeed'];
  $charGuide = $row['guide'];
}

$query = "SELECT * FROM " . $movesTable;
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $moves[] = $row;
}

$column = 0;
$source;
$author = [];
foreach ($moves as $row) {
  $dataid = $row['id'];
  $query = "SELECT * FROM " . $movesGifsTable . " WHERE charid='" . $charID . "' AND dataid='" . $dataid . "'";
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row2) {
    //print_r($row2);
    $moves[$column]['gifs'][] = $row2;
    $creator = $row2['source'];
    if (!in_array($creator, $author)) {
      $author[] = $row2['source'];
    }
  }
  $column++;
}

$chargifs = Array();
$query = "SELECT * FROM " . $charGifTable . " WHERE charid='" . $charID . "' AND pageid='0'";
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) { 
  $chargifs[] = $row;
}
if (count($chargifs) != 0) arsort($chargifs);

$storedTechz = Array();
$query = "SELECT chartech.techid, techs.tech FROM " . $charTechTable . " INNER JOIN " . $techTable . " ON " . $charTechTable .".techid = " . $techTable . ".id" . " WHERE charid=" . $charID;
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $storedTechz[] = $row;
}

function makeTooltip($author) {
  $data = "The red sections represent HIT boxes, where your character will damage others. ";
  $data .= "The yellow sections represent HURT boxes, where your character is vulnerable. ";
  $data .= "Blue sections represent invulnerable frames.";
  echo "<button id='tip' type='button' class='btn btn-lg btn-info popover-dismiss' data-toggle='popover' title='What are these?' data-content='";
  echo $data;
  echo "' data-placement='top'>Help</button>";
  echo "<h4>Gifs created by ";
  foreach ($author as $name) {
    echo $name . " ";
  }
  $author . ".</h4>";
  echo "<h5>Gifs collected by Marco</h5>";
}


function printCharData($moves, $author) {
   echo "<div class='tab-pane' id='data'>";
    echo "<div class='row frameRow'>";
    echo "<div class='panel panel-default'>";
      echo "<div class='panel-body frameData'>";

      foreach ($moves as $row) {

        echo "<div class='row framel'>";
        echo "<p class='data-header'>" . $row['name'] . ":</p>";
        $columns = 3;
        $columnIndex = 1;
        if (!empty($row['gifs'])) {
          foreach ($row['gifs'] as $info) {
              if ($columnIndex > $columns) {
                echo "</div>";
                echo "<div class='row framel'>";
                $columnIndex = 1;
              }

              echo "<div class='col-md-4'>";
              echo "<li class='list-group-item'>";
              echo "<img class='gfyitem' data-expand=true data-id='" . $info['url'] . "'/>";
              echo  "<h4>" . $info['description'] . "</h4>";
            
              if ($info['source']) {
              /*
              echo "<br /><span class='text-muted'>Courtesy of: " . $tmpGif['source'] . "</a></span>";
              */
              }
              echo "</li>";
              echo "</div>";
              $columnIndex++;
            
          }
        } else {
          echo "<p class='movenotfound'><i class='fa fa-exclamation-triangle fa-2x'></i> No Gifs Found</p>";
        }
        echo "</div>";
      }
      echo "</div>";

      echo "<div class='panel-footer frameData'>"; 
      makeTooltip($author);
      echo "</div>";  

    echo "</div>";
    echo "</div>";
  echo "</div>";
}

?>