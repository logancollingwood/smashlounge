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

    $score = getScoreByID($row['id']);

    $row['score'] = $score;

    $gifs[] = $row;
  }

  function invenDescSort($item1,$item2) {
    if ($item1['score'] == $item2['score']) return 0;
    return ($item1['score'] < $item2['score']) ? 1 : -1;
  }
  usort($gifs,'invenDescSort');

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
function makeTwitterTechCard($tech, $desc) {

  $techURL = urlencode($tech);
  $imgPath = "https://smashlounge.com/img/Characters/" . $char . "HeadSSBM.png";


  echo "
  <meta name='twitter:url' content='https://smashlounge.com/techniques/$techURL' />
  <meta name='twitter:card' content='summary' />
  <meta name='twitter:site' content='@thesmashlounge' />
  <meta name='twitter:title' content='SmashLounge - $char' />
  <meta name='twitter:description' content='$desc' />
  <meta name='twitter:image' content='$imgPath' />
  ";

}
?>

