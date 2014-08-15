<?php

require("db.php");


$techCount = 0;
$charCount = 0;
$datazCount = 0;
$listCounter = 0;

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


//     BUILDS TECHS ARRAY
//
//
//
////////////////////////////////////////

$query = "SELECT * from " . $techTable;
if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $dataTech[] =  $row["tech"];
  $techCount++;
}
if ($techCount = 0) $notFound = true;
asort($dataTech);

//     BUILDS RANDOM HOMEPAGE GIF
//
//
//
////////////////////////////////////////


$randomTech = $dataTech[array_rand($dataTech)];

$randGif = rand(0, 10);

//     BUILDS CHARACTER ARRAY
//
//
//
////////////////////////////////////////

$query = "SELECT * FROM " . $charTable . " ORDER BY tierdata";

if (!$result = $mysqli->query($query)) {
  die('Invalid query: ' . $mysqli->error);
}
foreach ($result as $row) {
  $dataChar[] =  $row;
  $charCount++;
}
if ($charCount = 0) $charnotFound = true;



function makeCollapseNav($key, $data, $collapsed, $char = 'null', $tech = 'null', $dataName = 'null') {
  if ($key === 'char') {
    echo "<li>";
    echo "<a id='toggler' href='#' data-toggle='collapse' class='active' data-target='#chars'>";
    echo "<span class='glyphicon glyphicon-collapse-down pull-left' id='collapseDownChars'></span>";
    echo "&nbsp;Characters";
    echo "</a>";
    echo "<li>";
    echo "<div id='chars' class='collapse " . $collapsed . "'>";
    echo "<ul class='nav nav-list'>";
    $counter = 0;
    foreach ($data as $chardata) {
      $counter++;
      echo "<li ";
      if (strcasecmp($chardata["name"], $char) == 0) {
        echo "class='active'";
      }
      echo "><a href=characters.php?char=" . urlencode($chardata['name']) . ">";
      echo $chardata["name"];
      echo "<span class='badge pull-right'>". $counter . "</span>";
      echo "</a>";
      echo "</li>";
      echo "\n";
    }
    echo "</ul>";
    echo "</div>";
  } else if ($key === 'tech') {
    echo "<li>";
    echo "<a id='toggler' href='#' data-toggle='collapse' class='active' data-target='#techs'>";
    echo "<span class='glyphicon glyphicon-collapse-down pull-left' id='collapseDownTechs'></span>";
    echo "&nbsp;Techniques";
    echo "</a>";
    echo "<li>";
    echo "<div id='techs' class='collapse " . $collapsed . "'>";
    echo "<ul class='nav nav-list'>";
    $counter = 0;
    foreach ($data as $rec) {
      $counter++;
      echo "<li ";
      if (strcasecmp($rec, $tech) == 0) {
        echo "class='active'";
      }
      echo "><a href=techniques?tech=" . urlencode($rec) . ">";
      echo $rec . "</a></li>";
      echo "\n";
    }
    echo "</ul>";
    echo "</div>";
  } else if ($key === 'data') {
    echo "<li>";
    echo "<a id='toggler' href='#' data-toggle='collapse' class='active' data-target='#dataz'>";
    echo "<span class='glyphicon glyphicon-collapse-down pull-left' id='collapseDownDataz'></span>";
    echo "&nbsp;Data";
    echo "</a>";
    echo "<li>";
    echo "<div id='dataz' class='collapse " . $collapsed . "'>";
    echo "<ul class='nav nav-list'>";
    foreach ($data as $rec) {
      echo "<li ";
      if (strcasecmp($rec, $dataName) == 0) {
        echo "class='active'";
      }
      echo "><a href=data.php?data=" . urlencode($rec) . ">";
      echo $rec . "</a></li>";
      echo "\n";
    }
    echo "</ul>";
    echo "</div>";
  }
}
function makeSubmitForm($from, $Thachar, $Thatech) {
  if ($from == 'char'){
    echo "<form class='form-horizontal' action='techs/submit' method='post'>";
    echo "  <div class='form-group'>";
    echo "    <label for='gfyurl' class='col-sm-2 control-label'>Gfycat Url</label>";
    echo "    <div class='col-sm-10'>";
    echo "    <input type='text' class='form-control' name='gfyurl' placeholder='url'>";
    if ($from == 'char'){
      echo "    <input type='hidden' name='char' value='" . urlencode($Thachar) . "'>";
    } elseif ($from == 'tech') {
      echo "    <input type='hidden' name='char' value='" . urlencode($Thatech) . "'>";
    }
    echo "    </div>";
    echo "  </div>";
    echo "  <div class='form-group'>";
    echo "    <label for='submitdesc' class='col-sm-2 control-label'>Description</label>";
    echo "    <div class='col-sm-10'>";
    echo "    <textarea class='form-control' rows='3' name='submitdesc' placeholder='Description'></textarea>";
    echo "    </div>";
    echo "  </div>";

    echo "  <div class='form-group'>";
    echo "    <label for='gfyurl' class='col-sm-2 control-label'>Source</label>";
    echo "    <div class='col-sm-10'>";
    echo "    <input type='text' class='form-control' name='source' placeholder='Kevin Toy'>";
    echo "    </div>";
    echo "  </div>";

    echo "  <div class='form-group'>";
    echo "    <div class='col-sm-offset-2 col-sm-10'>";
    echo "    <button type='submit' class='btn btn-default'>Submit!</button>";
    echo "    </div>";
    echo "  </div>";
    echo "</form>";
  } else if ($from == 'tech') {
    echo "<form class='form-horizontal' action='techs/submit' method='post'>";
    echo "  <div class='form-group'>";
    echo "    <label for='gfyurl' class='col-sm-2 control-label'>Gfycat Url</label>";
    echo "    <div class='col-sm-10'>";
    echo "    <input type='text' class='form-control' name='gfyurl' placeholder='url'>";
    if ($from == 'char'){
      echo "    <input type='hidden' name='tech' value='" . urlencode($Thachar) . "'>";
    } elseif ($from == 'tech') {
      echo "    <input type='hidden' name='tech' value='" . urlencode($Thatech) . "'>";
    }
    echo "    </div>";
    echo "  </div>";
    echo "  <div class='form-group'>";
    echo "    <label for='submitdesc' class='col-sm-2 control-label'>Description</label>";
    echo "    <div class='col-sm-10'>";
    echo "    <textarea class='form-control' rows='3' name='submitdesc' placeholder='Description'></textarea>";
    echo "    </div>";
    echo "  </div>";

    echo "  <div class='form-group'>";
    echo "    <label for='gfyurl' class='col-sm-2 control-label'>Source</label>";
    echo "    <div class='col-sm-10'>";
    echo "    <input type='text' class='form-control' name='source' placeholder='Kevin Toy'>";
    echo "    </div>";
    echo "  </div>";

    echo "  <div class='form-group'>";
    echo "    <div class='col-sm-offset-2 col-sm-10'>";
    echo "    <button type='submit' class='btn btn-default'>Submit!</button>";
    echo "    </div>";
    echo "  </div>";
    echo "</form>";
  }
}


function alertMSG($success) {
    if ($success == 'true') {
      echo "<div class='alert alert-success alert-dismissable' id='success'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
      echo "Thanks! We'll check it out ASAP.</div>";
    } else if ($success == 'false') {
      echo "<div class='alert alert-danger alert-dismissable' id='success'>";
      echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
      echo "Woops! Looks like your link was broken..</div>";
    }
}

function makeCharDataTable($charTier, $charWeight, $charFallSpeed) {
        echo "  <table class='table table-bordered table-hover stats'>";
        echo "    <tr>";
        echo "      <td> Rank </td>";
        echo "      <td> Weight </td>";
        echo "      <td> Fall Speed </td>";
        echo "    </tr>";
        echo "    <tr>";
        echo "      <td>" . $charTier . "</td>";
        echo "      <td>" . $charWeight . "</td>";
        echo "      <td>" . $charFallSpeed . "</td>";
        echo "    </tr>";
        echo "  </table>";
}

function drawGif($title, $url, $permalink) {
  echo "<div class='panel-heading rgbaTheme'> Enjoy a random <a href='http://www.reddit.com/r/smashgifs'>smashgif</a>:</div>";
  $gfycatstr = parse_url($url);
  $gfycatstr = $gfycatstr['path'];
  $gfycatstr = substr($gfycatstr, 1);
  echo "<div class='panel-body randgifz'>";
  echo "<img class='gfyitem' data-expand=true data-id='" . $gfycatstr . "'/>";
  echo "</div>";
  echo "<div class='panel-footer rgbaTheme'>";
  echo  "<h4 randGifDesc><a href='" . $permalink . "'>" .  $title . "</a></h4>";
  echo "</div>";
}

function getNewGif($url, $children) {
  $randGif = rand(0, count($children)-1);
  $url = $children[$randGif]['data']['url'];
  if (strpos($url, "gfycat") !== false) {
    return $url;
  } else {
    getNewGif($url, $children);
  }
}


function makeSubmitSceneForm($regions) {
  $randomRegion = array("Santa Cruz", "New York", "San Francisco", "Tallahassee", "Los Angeles", "El Paso", "Ann Arbor");

  echo "<form class='form-horizontal' action='techs/submitScene' method='post'>";

    echo "  <div class='form-group'>";
    echo "    <label for='selector' class='col-sm-2 control-label'>Region</label>";
    echo "  <div class='col-sm-10'>";
    echo "    <select class='form-control' name='selector'>";
    echo "      <option value='1'>Atlantic North</option>";
    echo "      <option value='2'>Atlantic South</option>";
    echo "      <option value='3'>Midwest</option>";
    echo "      <option value='4'>South and Southwest</option>";
    echo "      <option value='5'>West Coast</option>";
    echo "    </select>";
    echo "    </div>";
    echo "  </div>";

    echo "  <div class='form-group'>";
    echo "    <label for='game' class='col-sm-2 control-label'>Game Title</label>";
    echo "  <div class='col-sm-10'>";
    echo "    <select class='form-control' name='game'>";
    echo "      <option value='0'>All</option>";
    echo "      <option value='1'>SSB64</option>";
    echo "      <option value='2'>SSBM</option>";
    echo "      <option value='3'>Brawl</option>";
    echo "      <option value='4'>Project M</option>";
    echo "      <option value='5'>Smash 4</option>";
    echo "    </select>";
    echo "    </div>";
    echo "  </div>";

    echo "  <div class='form-group'>";
    echo "    <label for='fburl' class='col-sm-2 control-label'>Facebook Group Url</label>";
    echo "    <div class='col-sm-10'>";
    echo "      <input type='text' class='form-control' name='fburl' placeholder='https://www.facebook.com/groups/{GROUP}'>";
    echo "    </div>";
    echo "  </div>";

    echo "  <div class='form-group'>";
    echo "    <label for='cityName' class='col-sm-2 control-label'>City Name</label>";
    echo "    <div class='col-sm-10'>";
    echo "      <input type='text' class='form-control' name='cityName' placeholder='". $randomRegion[array_rand($randomRegion)] ."'>";
    echo "    </div>";
    echo "  </div>";

    echo "  <div class='form-group'>";
    echo "    <div class='col-sm-offset-2 col-sm-10'>";
    echo "    <button type='submit' class='btn btn-default'>Submit!</button>";
    echo "    </div>";
    echo "  </div>";

  echo "</form>";
}


function makeLoungeList($scene, $title, $listCounter) {
  echo "  <div class='row sceneTable'>";
  echo "   <div class='panel-group' id='accordion'>";
  echo "      <div class='panel panel-default'>";
  echo "        <!-- Default panel contents -->";
  echo "        <div class='panel-heading'>";
  echo "            <h4 class='panel-title'>";
  echo "              <a data-toggle='collapse' data-parent='#accordion' href='#collapse" . $listCounter . "'>";
  echo                $title . "&nbsp;<i class='fa fa-angle-double-down fa-2x'></i>";
  echo "              </a>";
  echo "            </h4>";
  echo "        </div>";
  echo "        <div id='collapse" . $listCounter . "' class='panel-collapse collapse out'>";
  echo "          <!-- Table -->";
  echo "          <table class='table table-hover'>";
  echo "            <tr>";
  echo "              <th>Facebook</th>";
  echo "              <th>Name</th>";
  echo "              <th>Game</th>";
  echo "            </tr>";
  if ($scene != NULL) {
    foreach ($scene as $row) {
      echo "<tr>";
      echo "<th><a href='" . $row['profileid'] . "'><i class='fa fa-facebook-square fa-3x'></i></a></th>";
      echo "<th>" . $row['name'] . "</th>";
      echo "<th>" . $row['game'] . "</th>";
      echo "</tr>";
    }
  }
  echo "  </table>";
  echo "  </div>";
  echo "  </div>";
  echo "  </div>";
  echo " </div>";
}

function createNavBar($extra = 'false') {
  echo "<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>";
  echo "  <div class='container-fluid heddur'>";
  echo "    <div class='navbar-header'>";
  echo "      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>";
  echo "        <span class='sr-only'>Toggle navigation</span>";
  echo "        <span class='icon-bar'></span>";
  echo "        <span class='icon-bar'></span>";
  echo "        <span class='icon-bar'></span>";
  echo "      </button>";
  echo "      <a class='navbar-brand heddur' href='/'>smash lounge&nbsp;&nbsp;&nbsp;&nbsp;<i class='fa fa-gamepad fa-1x'></i></a>";
  echo "    </div>";
  echo "    <div class='navbar-collapse collapse'>";
  echo "      <ul class='nav navbar-nav navbar-right'>";
  echo "          <li><a href='https://www.twitter.com/thesmashlounge'><i class='fa fa-twitter'></i></a></li>";
  echo "          <li><a href='https://www.facebook.com/SmashLounge'><i class='fa fa-facebook'></i></a></li>";
  echo "          <li><a href='http://www.reddit.com/r/smashlounge'><i class='fa fa-reddit'></i></a></li>";
  echo "          <li><a href='http://www.github.com/logancollingwood/smashlounge'><i class='fa fa-github-alt'></i></a></li>";
  echo "          <li><a href='/api/docs'>api</a></li>";
  echo "          <li><a href='/donate.php'>donate</a></li>";
  echo "          <li><a href='/about.html'>about</a></li>";
  if ($extra == 'logout') {
  echo "          <li><a href='static/logout.php'>logout</a></li>";
  } else if ($extra =='register') {
  echo "          <li><a href='/admin/register'>register</a></li>";
  } else if ($extra == 'moderate') {
  echo "          <li><a href='/admin'>moderate</a></li>";
  }
  echo "      </ul>";
  echo "    </div>";
  echo "  </div>";
  echo "</div>";
}

// Creates a well asking for code contributions or donations
// $cap defines what percentage of pages you want your ad to be shown on.
// ie $cap = .5 will generate this ad on 50% of page requests.
function createBeg($cap) {
  $rand = rand(0, 10) / 10;
  if ($rand < $cap) {
    echo "<div class='well full'>";
    echo "  <h3>Want to support us? </h3><hr> <a href='http://www.github.com/logancollingwood/smashlounge'><p>Contribute</p></a><hr><a href='/donate.php'> <p>Donate</p></a>";
    echo "</div>";
  }
}

?>