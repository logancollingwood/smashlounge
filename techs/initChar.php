<?php 

$frames;
global $author;


$query = "SELECT * FROM " . $charTable . " WHERE name='" . $char . "'";
$charID = -1;
$charnotFound = FALSE;
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $charID = $row["id"];
}
if ($charID == -1) {
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

$moves = array();
$moves[0]['name'] = "Special Moves";
$moves[1]['name'] = "Jabs";
$moves[2]['name'] = "Tilts";
$moves[3]['name'] = "Smash Attacks";
$moves[4]['name'] = "Aerials";
$moves[5]['name'] = "Ground Options";
$moves[6]['name'] = "Defensive Options";

$query = "SELECT * from attacks as a
  INNER JOIN gifs as g ON g.dataid = a.id
    WHERE a.gameid=0 AND a.charid=$charID";

if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $moves[$row['movetype']]['gifs'][] = $row;
}


$chargifs = Array();
$query = "SELECT * FROM gifs WHERE dataid=" . $charID . " AND typeid=0";

if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) { 
  $score = getScoreByID($row['id']);
  $row['score'] = $score;
  $chargifs[] = $row;
}

function invenDescSort($item1,$item2) {
  if ($item1['score'] == $item2['score']) return 0;
  return ($item1['score'] < $item2['score']) ? 1 : -1;
}
usort($chargifs,'invenDescSort');

function getScoreByID($id) {
  global $mysqli;

  $query = "
      SELECT gifid, SUM(direction) as total
    FROM gifvotes
    where gifid = $id";
  
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $score = $row['total'];
  }

  //force undefined values to 0
  //this also catches when a gif has not been voted on before
  //shouldn't effect anything, only graphical display of current totals

  if ($score == NULL) $score = 0;

  return $score;
}

//if (count($chargifs) != 0) $chargifs = array_sort($chargifs, 'score', SORT_DESC);

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
  /*
  foreach ($author as $name) {
    echo $name . " ";
  }
  */
  echo "</h4>";
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
              echo "<div class='charDataGfy'><img class='gfyitem' data-expand=true data-id='" . $info['url'] . "'/></div>";
              echo  "<p class='data-desc'>" . $info['description'] . "</h4>";
            
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

function makeTwitterCharCard($char, $desc) {

  $charURL = urlencode($char);
  $imgPath = "https://smashlounge.com/img/Characters/" . $char . "HeadSSBM.png";


  echo "
  <meta name='twitter:url' content='https://smashlounge.com/character/$charURL' />
  <meta name='twitter:card' content='summary' />
  <meta name='twitter:site' content='@thesmashlounge' />
  <meta name='twitter:title' content='SmashLounge - $char' />
  <meta name='twitter:description' content='$desc' />
  <meta name='twitter:image' content='$imgPath' />
  ";

}

?>