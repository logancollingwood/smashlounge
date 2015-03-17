<?php

  require_once("techs/sentry.php");
  require_once("techs/tables.php");
  require_once("techs/db.php");



$modules = array('api', 'admin', 'cgi-bin', 'css', 'demos', 'fonts', 'img', 'js', 'static',
 'techs', 'vendor', '404', 'about', 'awards', 'characters', 'composer.json', 'composer.lock',
  'composer.phar', 'donate', 'error_log', 'index', 'info', 'login', 'logout', 'lounge', 'moderate',
   'register', 'techniques', 'upcoming', 'update', 'users'); 


$techCount = 0;
$charCount = 0;
$datazCount = 0;
$listCounter = 0;
$moderatorFlag = -1;

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

  $loggedIn = false;
  $loggedInID = -1;
  $user['username'] = 'none';
  $user['id'] = -1;
  if (Sentry::check())
  {
      $loggedIn = true;
      $user = Sentry::getUser();
      $loggedInID = getIdFromUsername($mysqli, $user['username']);
      $friendsofLoggedIn = Array();
      $query = "SELECT * from friends WHERE myid='" . $user['id'] . "'";
      //$query = "SELECT * from friends WHERE myid='" . $loggedInID . "'";

      if (!$result = $mysqli->query($query)) {
        die('Invalid query: ' . $mysqli->error);
      }
      foreach ($result as $row) {
        $friendsofLoggedIn[] = $row['friendid'];
      }
      if ($user->hasAccess('admin')) {
        $moderatorFlag = 1;
      }
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



//     BUILDS RANDOM LINK
//
//
//
////////////////////////////////////////
$displayChar = false;
$displayTech = false;

$which = rand(0,1);
if ($which < 0.5) {
  $displayChar = true;
  $randomChar = $dataChar[array_rand($dataChar)];
  $randomLink = $randomChar['name'];
} else {
  $displayTech = true;
  $randomLink = $dataTech[array_rand($dataTech)];
}
  

function grabGfyName ($url) {
  $pattern = '/((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/';
  $matches = array();
 
  preg_match ($pattern, $url, $matches);
 
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

//span style
//margin-left:10%;margin-top:4%

function makeCollapseNav($key, $data, $collapsed, $char = 'null', $tech = 'null', $dataName = 'null', $target = '') {
  if ($key === 'char') {
    if ($char != '') {
      echo "<li id='charsAnchor' class='home active'>";
    } else {
      echo "<li id='charsAnchor'>";
    }
    echo "<a href='#char" . $target . "' id='toggler' data-toggle='collapse' class='active' data-target='#chars" . $target . "'>";
    echo "<span class='glyphicon glyphicon-collapse-down sidebarico' id='collapseDownChars'></span>";
    echo "<span class='pagetitle'>characters</span>";
    echo "</a>";
    echo "<li>";
    echo "<div id='chars" . $target . "' class='collapse " . $collapsed . "'>";
    echo "<ul class='nav nav-list'>";
    $counter = 0;
    foreach ($data as $chardata) {
      $counter++;
      echo "<li class='list-dd";
      if (strcasecmp($chardata["name"], $char) == 0) {
        echo " active";
      }
      echo "'>";

      echo "<a ";
      if (strcasecmp($chardata["name"], $char) == 0) echo "class='activeNav' ";
      echo "href=/characters/" . urlencode($chardata['name']) . ">";
      echo "<span class='badge pull-left tier'>". $counter . "</span>";
      echo $chardata["name"];

      echo "</a>";
      echo "</li>";
      echo "\n";
    }
    echo "</ul>";
    echo "</div>";
  } else if ($key === 'tech') {
    if ($tech != '') {
      echo "<li id='techsAnchor' class='home active'>";
    } else {
      echo "<li id='techsAnchor'>";
    }
    echo "<a href='#tech" . $target . "' id='toggler' data-toggle='collapse' class='active' data-target='#techs" . $target . "'>";
    echo "<span class='glyphicon glyphicon-collapse-down sidebarico' id='collapseDownTechs'></span>";
    echo "<span class='pagetitle'>techniques</span>";
    echo "</a>";
    echo "<li>";
    echo "<div id='techs" . $target . "' class='collapse " . $collapsed . "'>";
    echo "<ul class='nav nav-list'>";
    $counter = 0;
    foreach ($data as $rec) {
      $counter++;
      echo "<li class='list-dd";
      if (strcasecmp($rec, $tech) == 0) {
        echo " active";
      }
      echo "'>";
      echo "<a ";
      if (strcasecmp($rec, $tech) == 0) echo "class='activeNav' ";
      echo "href=/techniques/" . urlencode($rec) . ">";
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
  global $moderatorFlag;
  echo "<div class='navbar navbar-inverse navbar-fixed-top' role='navigation'>";
  echo "  <div class='container-fluid heddur'>";
  echo "    <div class='navbar-header'>";
  echo "      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>";
  echo "        <span class='sr-only'>Toggle navigation</span>";
  echo "        <span class='icon-bar'></span>";
  echo "        <span class='icon-bar'></span>";
  echo "        <span class='icon-bar'></span>";
  echo "      </button>";
  echo "      <div class='navbar-brand spacing'>";
  echo "        <a class='navbar-brand heddur' href='/'>smashlounge&nbsp;&nbsp;";
  if ($extra == 'vods') echo ":vods";
  echo "          &nbsp;&nbsp;<img src='/img/assets/gccontroller.png' style='width:30px;height:20px'/></a>";
  echo "      </div>";
  echo "    </div>";
  echo "    <div class='navbar-collapse collapse'>";
  echo "      <ul class='nav navbar-nav navbar-right'>";
  echo "          <li><a href='https://www.twitter.com/thesmashlounge'><i class='fa fa-twitter'></i></a></li>";
  echo "          <li><a href='https://www.facebook.com/SmashLounge'><i class='fa fa-facebook'></i></a></li>";
  echo "          <li><a href='http://www.reddit.com/r/smashlounge'><i class='fa fa-reddit'></i></a></li>";
  echo "          <li><a href='http://www.github.com/logancollingwood/smashlounge'><i class='fa fa-github-alt'></i></a></li>";
  echo "          <li><a href='/api/docs.php'>api</a></li>";
  echo "          <li ";
  if ($extra == 'donate') echo ' class="here"';
  echo " ><a href='/donate.php'>donate</a></li>";
  echo "          <li ";
  if ($extra == 'about') echo ' class="here"';
  echo "><a href='/about.php'>about</a></li>";
  if ($moderatorFlag == 1) echo "<li><a href='/admin.php'>moderate</a></li>";
  echo "      </ul>";
  echo "    </div>";
  echo "  </div>";
  echo "</div>";
}

function createBeg($cap) {
  $quotes = array('smashlounge was created in a college dorm room', 'smashlounge was created by two full time students', 'smashlounge is open source for the community','smashlounge costs about $30/month to run: all contributions are useful','smashlounge exists for the community, and is open to all improvements');

  $rand = rand(0, 10) / 10;
  if ($rand < $cap) {
    echo "<div class='well full'>";
    echo "  <h3>Want to support us? </h3><h4><small>" . $quotes[array_rand($quotes)] . "</small></h4><hr> <a href='http://www.github.com/logancollingwood/smashlounge'><p>Contribute</p></a><hr><a href='/donate.php'> <p>Donate</p></a>";
    echo "</div>";
  }
}


function getCharFromID($mysqli, $id) {
  if ($id == '0') {
    return "NO MAIN";
  }
  $query = "SELECT * FROM charinfo WHERE id='". $id . "'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $main = $row['name'];
  }
  return $main;
}

function getTechFromID($mysqli, $id) {
  if ($id == '0') {
    return "NO TECH";
  }
  $query = "SELECT * FROM techs WHERE id='". $id . "'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $tech = $row['tech'];
  }
  return $tech;
}

function getIDFromChar($mysqli, $name) {
  if ($name == '') {
    return "NO MAIN";
  }
  $query = "SELECT * FROM charinfo WHERE id='". $id . "'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $main = $row['id'];
  }
  return $main;
}

function getIdFromUsername($mysqli, $username) {
  $userid = -1;
  $query = "SELECT * from users WHERE username='" . $username . "'";
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
   $userid = $row['id'];
  }
  return $userid;
}

function getYoutubeIdFromUrl($url) {
  $parts = parse_url($url);
  if(isset($parts['query'])){
    parse_str($parts['query'], $qs);
    if(isset($qs['v'])){
      return $qs['v'];
    }else if($qs['vi']){
      return $qs['vi'];
    }
  }
  if(isset($parts['path'])){
    $path = explode('/', trim($parts['path'], '/'));
    return $path[count($path)-1];
  }
  return '';
}

function makeSidebar($loggedIn, $currentPage = '') {
  $pages = array('home', 'admin', 'lounge', 'upcoming', 
    'users', 'login', 'moderate', 'register', 'update', 
    'techs', 'chars', 'attending', 'submit', 'TMG', 'rankings', 
    'vods');
  $specials = array('techs', 'chars');
  global $dataTech, $dataChar, $char, $tech;
  $user = Sentry::getUser();

  echo "<div class='expander'>";
  echo "  <ul class='nav nav-sidebar'>";
    if ($currentPage == 'home') {
      echo "    <li class='home active'><a href='/'><span class='glyphicon glyphicon-home pull-left'></span>&nbsp;home</a></li>";
    } else {
      echo "    <li class='home'><a href='/'><span class='glyphicon glyphicon-home pull-left'></span>&nbsp;home</a></li>";
    }
    if ($currentPage == 'TMG') {
      echo "    <li class='home active'><a href='/themeleegames.php'><img src='/img/assets/tmgico.png' alt='TMG' class='pull-left' style='max-width:100%;max-height:100%;' width='30px'>&nbsp;tmg</a></li>";
    } else {
      echo "    <li class='home'><a href='/themeleegames.php'><img src='/img/assets/tmgico.png' alt='TMG' class='pull-left' style='max-width:100%;max-height:100%;' width='30px'>&nbsp;tmg</a></li>";
    }
    
    if ($currentPage == 'vods') {
      echo "     <li class='home active'><a href='/vods.php'><i class='fa fa-youtube-play pull-left'></i>&nbsp;vods</a></li>";
    } else {
      echo "     <li class='home'><a href='/vods.php'><i class='fa fa-youtube-play pull-left'></i>&nbsp;vods</a></li>";
    } 
    if ($currentPage == 'users') {
      echo "     <li class='home active'><a href='/users.php'><span class='glyphicon glyphicon-user pull-left'></span>&nbsp;users</a></li>";
    } else {
      echo "     <li class='home'><a href='/users.php'><span class='glyphicon glyphicon-user pull-left'></span>&nbsp;users</a></li>";
    }    
    if ($currentPage == 'submit') {
      echo "    <li class='home active'><a href='/submit.php'><span class='glyphicon glyphicon-inbox pull-left'></span>&nbsp;submit</a></li>";
    } else {
      echo "    <li class='home'><a href='/submit.php'><span class='glyphicon glyphicon-inbox pull-left'></span>&nbsp;submit</a></li>";
    }
    if ($currentPage == 'lounge') {
      echo "    <li class='home active'><a href='/lounge.php'><span class='glyphicon glyphicon-globe pull-left'></span>&nbsp;lounge</a></li>";
    } else {
      echo "    <li class='home'><a href='/lounge.php'><span class='glyphicon glyphicon-globe pull-left'></span>&nbsp;lounge</a></li>";
    }
    if ($currentPage == 'rankings') {
      echo "    <li class='home active'><a href='/rankings.php'><span class='glyphicon glyphicon-certificate pull-left'></span>&nbsp;rankings</a></li>";
    } else {
      echo "    <li class='home'><a href='/rankings.php'><span class='glyphicon glyphicon-certificate pull-left'></span>&nbsp;rankings</a></li>";
    }
    if ($currentPage == 'upcoming') {
      echo "    <li class='home active'><a href='/upcoming.php'><span class='glyphicon glyphicon-calendar pull-left'></span>&nbsp;upcoming</a></li>";
    } else {
      echo "    <li class='home'><a href='/upcoming.php'><span class='glyphicon glyphicon-calendar pull-left'></span>&nbsp;upcoming</a></li>";
    }
    if (in_array($currentPage, $pages) && !in_array($currentPage, $specials)) {
      makeCollapseNav('tech', $dataTech, 'out', $char, $tech, '');
      makeCollapseNav('char', $dataChar, 'out', $char, $tech, '');
    } else if ($currentPage == 'techs') {
      makeCollapseNav('tech', $dataTech, 'in', $char, $tech, '');
      makeCollapseNav('char', $dataChar, 'out', $char, $tech, '');
    } else if ($currentPage == 'chars') {
      makeCollapseNav('tech', $dataTech, 'out', $char, $tech, '');
      makeCollapseNav('char', $dataChar, 'in', $char, $tech, '');
    }

  echo "   </ul>";
  echo "</div>";
  

  if ($loggedIn) {
    echo "<div class='loginbox'>";
    echo "    <hr class='login'>";

    echo "    <a class='btn bttn login ";
      if ($currentPage=='login') {
        echo "active";
      }
    echo "' href='/users/" . $user['username'] . "'>profile</a>";

    echo "    <a class='btn bttn login' href='/logout.php'>logout</a>";
    echo "</div>";

  } else {
    echo "<div class='loginbox'>";
    echo "    <hr class='login'>";
    echo "    <a class='btn bttn login ";
      if ($currentPage=='login') {
        echo "active";
      }
    echo "' href='/login.php'>login</a>";


    echo "    <a class='btn bttn login ";
      if ($currentPage=='register') {
        echo "active";
      }
    echo "' href='/register.php'>register</a>";

    echo "</div>";
  }
}

function sidebar($currentPage = '') {
  $pages = array(
    "home" => array("/", "glyphicon glyphicon-home"),
    "vods" => array("/vods.php", "glyphicon glyphicon-play-circle"),
    "users" => array("/users.php", "glyphicon glyphicon-user"),
    "submit" => array("/submit.php", "glyphicon glyphicon-inbox"),
    "lounge" => array("/lounge.php", "glyphicon glyphicon-globe"),
    "rankings" => array("/rankings.php", "glyphicon glyphicon-certificate"),
    "upcoming" => array("/upcoming.php", "glyphicon glyphicon-calendar")
    );
    $modules = array('home', 'admin', 'lounge', 'upcoming', 
    'users', 'login', 'moderate', 'register', 'update', 
    'techs', 'chars', 'attending', 'submit', 'TMG', 'rankings', 
    'vods');
  $specials = array('techs', 'chars');
  global $dataTech, $dataChar, $char, $tech, $loggedIn;
  $user = Sentry::getUser();

  echo '
            <!-- sidebar -->
            <div class="column col-md-2 col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">';
                echo '<div class="row">';
                echo '<h1 class="sidebar"><a href="/" class="hvr-underline-from-center">smashlounge</a></h1>';
                echo "</div>";
                echo '<div class="row">';
               echo '<div class="expander">
                <ul class="nav" id="lg-menu">';
                      foreach ($pages as $title => $href) {
                        if (strcmp($currentPage, $title) == 0) {
                          echo '<li class="home active">';
                        } else {
                          echo '<li class="home">';
                        }
                            echo "<a href='" . $href[0] . "'>";
                              echo "<span class='" . $href[1] . " sidebarico'></span>";
                              echo "<span class='pagetitle'>" . $title . "</span>";
                            echo "</a>";
                          echo "</li>";
                      }
            if (in_array($currentPage, $modules) && !in_array($currentPage, $specials)) {
              makeCollapseNav('char', $dataChar, 'out', $char, $tech, '');
              makeCollapseNav('tech', $dataTech, 'out', $char, $tech, '');
            } else if ($currentPage == 'techs') {
              makeCollapseNav('char', $dataChar, 'out', $char, $tech, '');
              makeCollapseNav('tech', $dataTech, 'out', $char, $tech, '');
            } else if ($currentPage == 'chars') {
              makeCollapseNav('char', $dataChar, 'out', $char, $tech, '');
              makeCollapseNav('tech', $dataTech, 'out', $char, $tech, '');
            }
  echo '        </ul>
              </div>';
              echo "</div>";
                if ($loggedIn) {
                    echo "<div class='row'>";
                      echo "<div class='loginbox' style='padding-top:30px;'>";
                      //echo "    <hr class='login'>";
                      echo "<div class='col-md-6'>";
                        echo "    <a class='button button-inline button-small button-info ";
                          if ($currentPage=='login') {
                            echo "active";
                          }
                        echo "' href='/users/" . $user['username'] . "'>profile</a>";
                      echo "</div>";
                      echo "<div class='col-md-6'>";
                        echo "    <a class='button button-inline button-small button-info' href='/logout.php'><span>logout</span></a>";
                      echo "</div>";
                      echo "</div>";
                    echo "</div>";

                  } else {
                    echo "<div class='row'>";
                      echo "<div class='loginbox' style='padding-top:30px;'>";
                      //echo "    <hr class='login'>";
                      echo "<div class='col-md-6'>";
                        echo "    <a class='button button-inline button-small button-info ";
                          if ($currentPage=='login') {
                            echo "active";
                          }
                        echo "' href='/login.php'><i class='fa fa-key'></i><span>login</span></a>";
                      echo "</div>";
                      echo "<div class='col-md-6'>";
                        echo "    <a class='button button-inline button-small button-info ";
                          if ($currentPage=='register') {
                            echo "active";
                          }
                        echo "' href='/register.php'><i class='fa fa-user'></i><span>register</span></a>";
                      echo "</div>";
                      echo "</div>";
                    echo "</div>";
                  }
  echo ' 
              
                <!-- tiny only nav-->
                <ul class="nav visible-xs" id="xs-menu">
                    <li><a href="#featured" class="text-center"><i class="glyphicon glyphicon-list-alt"></i></a></li>
                    <li><a href="#stories" class="text-center"><i class="glyphicon glyphicon-list"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-paperclip"></i></a></li>
                    <li><a href="#" class="text-center"><i class="glyphicon glyphicon-refresh"></i></a></li>
                </ul>
              
            </div>
            <!-- /sidebar -->
     ';
}

function navbar() {
  echo '<div class="navbar navbar-sl navbar-static-top" id="navbar">  
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand gccontroller hvr-trim"><img src="/img/assets/gccontroller.png" style="width:30px;height:20px;bottom:3px;"/></a>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
    <div class="navbar-header">
      <div class="small-logo-container">
        <a class="small-logo" href="#">sl</a>
      </div>
    </div>
    <form class="navbar-form navbar-left search" style="margin-left: 2%;">
        <div class="input-group input-group-sm" style="width:300px;">
          <input type="text" class="form-control search" placeholder="Search for..." id="searchBar">
          <ul class="results" id="searchBarResults">
          </ul>
          <div class="input-group-btn">
            <button class="btn btn-default" onclick="searchBar()"><i class="glyphicon glyphicon-search"></i></button>
          </div>
        </div>
    </form>
    <ul class="nav navbar-nav">
      <li>
        <a href="/submit.php" role="button"><i class="glyphicon glyphicon-plus"></i><span> Submit</span></a>
      </li>
      <li>
        <a href="/donate.php" role="button"><i class="glyphicon glyphicon-envelope"></i><span> Support</span></a>
      </li>
      <li>
        <a href="/about.php" role="button"><i class="glyphicon glyphicon-flag"></i><span> About</span></a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></a>
        <ul class="dropdown-menu">
          <li><a href="">More</a></li>
          <li><a href="">More</a></li>
          <li><a href="">More</a></li>
          <li><a href="">More</a></li>
          <li><a href="">More</a></li>
        </ul>
      </li>
    </ul>
    </nav>
  </div>';
}
function footer() {
  $links = array(
    "twitter" => array("https://www.twitter.com/thesmashlounge", "fa-twitter-square"),
    "facebook" => array("https://www.facebook.com/SmashLounge", "fa-facebook-square"),
    "reddit" => array("https://www.reddit.com/r/SmashLounge", "fa-reddit-square"),
    "about" => array("/about.php", "fa-info-circle"),

  );
  echo '
  <div class="row footer">
    <ul class="nav navbar-nav">';
    foreach ($links as $key => $rec) {
      echo '<li>';
        echo '<a href="' . $rec[0] . '" target="_blank">';
          echo '<i class="fa ' . $rec[1] . ' fa-2x"></i>';
          echo '&nbsp;';
          echo $key;
        echo '</a>';
      echo "</li>";
    }
    /*
      <li><a href="https://www.twitter.com/thesmashlounge"><i class="fa fa-twitter-square fa-2x"></i>&nbsp;twitter</a></li>
      <li><a href="https://www.twitter.com/thesmashlounge"><i class="fa fa-twitter-square fa-2x"></i>&nbsp;twitter</a></li>
    */
  echo '  </ul>
  </div>
  ';
}
function hasSubdomain($url) {
    $parsed = parse_url($url);
    $exploded = explode('.', $parsed["host"]);
    return (count($exploded) > 2);
}

function makeTwitchPanel($hasTwitch, $twitch) {
  if ($hasTwitch) {
    echo "<div class='well'>";
        echo "        <h3><small class='pull-left labelz'>twitch</small><br>";
          if (streamIsLive($twitch)) {
            echo "<a href='http://www.twitch.tv/$twitch'> Online</a>";
          } else {
            echo "<a href='http://www.twitch.tv/$twitch'> Offline</a>";
          }
    echo "</div>";
  }
}

function getLatLong($cityName) {

  $query = "?address=" . urlencode($cityName);
  $clientId = '&key=AIzaSyAXOuPfrJzmPwmqJ5U7OLDLqs9B7HpjXlA';
  $file = "https://maps.googleapis.com/maps/api/geocode/json" . $query . $clientId;
  echo $file;
  //https://maps.googleapis.com/maps/api/geocode/json?address=Mountain+View,+CA&key=AIzaSyAXOuPfrJzmPwmqJ5U7OLDLqs9B7HpjXlA
}

function array_sort($array, $on, $order=SORT_ASC)
{
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}


function printLibraries() {
  echo "<!-- PRINTING DEPENDENCIES -->";
  echo "\n";
  analytics();
  echo "<link rel='shortcut icon' href='/img/favicon.ico'>";
  echo "<!-- Bootstrap core CSS -->";
  echo "<link href='/css/bootstrap.min.css' rel='stylesheet'>";
  echo "<link href='https://fonts.googleapis.com/css?family=Ubuntu:300|Raleway:300|Didact+Gothic|Quicksand:400,700' rel='stylesheet' type='text/css'>";
  echo "<script type='text/javascript' src='/js/gfycat_test_june25.js'></script>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>";
  echo "<link href='//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet'>";
  echo "<link href='/css/new.css' rel='stylesheet'>";
  echo "<link href='/css/users.css' rel='stylesheet'>";
  //Open Graph Properties
  echo '
  <meta property="og:description" 
    content="Smashlounge: An open knowledgebase for Super Smash Brothers" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:title" content="smashlounge" />
  <meta property="og:url" content="http://www.smashlounge.com" />
  <meta property="og:site_name" content="smashlounge" />
  <meta property="og:image" content="http://smashlounge.com/img/assets/BG_twit.jpg" />
  <meta property="og:image:secure_url" content="https://smashlounge.com/img/assets/BG_twit.jpg" />';

  echo "<script src='/js/bootstrap.min.js'></script>";
  echo "<script src='/js/toggler.js'></script>";
  echo "<!--  -->";
  echo "\n";
}


function printNewLibraries() {
  echo "<!-- PRINTING DEPENDENCIES -->";
  echo "\n";
  analytics();
  echo "<link rel='shortcut icon' href='/img/favicon.ico'>";
  echo "<!-- Bootstrap core CSS -->";
  echo "<link href='/css/bootstrap.min.css' rel='stylesheet'>";
  echo "<link href='https://fonts.googleapis.com/css?family=Ubuntu:300|Raleway:300|Didact+Gothic|Quicksand:400,700' rel='stylesheet' type='text/css'>";
  echo "<link href='http://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto' rel='stylesheet' type='text/css'>";
  echo "<script type='text/javascript' src='/js/gfycat_test_june25.js'></script>";
  echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js'></script>";
  echo "<link href='//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' rel='stylesheet'>";

  echo "<link href='/css/hover/css/hover-min.css' rel='stylesheet'>";
  

  //Open Graph Properties
  echo '
  <meta property="og:description" 
    content="Smashlounge: An open knowledgebase for Super Smash Brothers" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:title" content="smashlounge" />
  <meta property="og:url" content="http://www.smashlounge.com" />
  <meta property="og:site_name" content="smashlounge" />
  <meta property="og:image" content="http://smashlounge.com/img/assets/BG_twit.jpg" />
  <meta property="og:image:secure_url" content="https://smashlounge.com/img/assets/BG_twit.jpg" />';

  echo "<script src='/js/bootstrap.min.js'></script>";
  echo "<script src='/js/jquery.scrollTo.min.js'></script>";
  echo "<link href='/css/scrollbar/jquery.mCustomScrollbar.css' rel='stylesheet'>";
  
  echo "<script src='/js/app.js'></script>";
}

function analytics() {
  echo "<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-51481444-1', 'auto');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');
    </script>";
}

function printBetaMast() {
  echo "<div class='alert alert-info' role='alert'>There's an issue we're investigating which causes updating profiles to not work properly. Follow us on twitter for updates!<br><br>";
  echo "</div>";
}

function getGameFromID($id) {
        switch ($id) {
            case 0:
                return "All Games";
            case 1:
                return "Smash64";
            case 2:
                return "Smash Melee";
            case 3:
                return "Smash Brawl";
            case 4:
                return "Project M";
            case 5:
                return "Smash 4";
        }
}

function getAllTechs($mysqli, $techTable) {
  $query = "SELECT * from " . $techTable;
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $techs[] =  $row;
  }
  asort($techs);
  return $techs;
}

function getFrameDataForGif($id) {
  global $mysqli;

  $ret = '';

  $query = "SELECT * from framedatajson WHERE gifid=" . $id;
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    $ret = $row['json_text'];
  }

  return $ret;
}

/**
 * Prints a specified gif using a standard layout.
 * @param             gfyObject $gfy The structure
 * @param Optional    count $counter optional counter for gifs on page
 * representing the gif. Should contain
 * $gfyObject['id'] = the gfycat ID
 * $gfyObject['description'] = the description of the gfy
 * $gfyObject['source'] = the gfyobject source
 * $gfyObject['score'] = the score of the gif
 * @return null
 */
function printGfy($gfyObject, $count) {
  $num = $count+1;

  $frameData = getFrameDataForGif($gfyObject['id']);
  $source = '';
  if ($gfyObject['source'] && filter_var($gfyObject['source'], FILTER_VALIDATE_URL)) {
    $source = '<a href="' . $gfyObject['source'] . '">source</a>'; 
  } else if ($gfyObject['source']) {
    $source = 'Courtesy of ' . $gfyObject['source'];
  }
  /*
  if ($frameData != '') {

  } else {

  }
  */

  echo '<div class="gfyTainer">';
  echo '  <div class="row">';
  echo '    <div class="col-md-2 col-sm-2 voteBlock">';
  echo "       <span class='exNum'>";
  echo          '#';
  echo          $num;
  echo "       </span>";
  echo '        <hr>';
  echo '       <br>';
  echo "       <a href='#' class='vote' data-id='" . $gfyObject['id'] . "' data-type='chargif' data-direction='up'><span class='glyphicon glyphicon-chevron-up btn-lg'></span></a>";
  echo "       <h4>". $gfyObject['score'] . "</h4>";
  echo "       <a href='#' class='vote' data-id='" . $gfyObject['id'] . "' data-type='chargif' data-direction='down'><span class='glyphicon glyphicon-chevron-down btn-lg'></span></a>";        
  echo '    </div>';
  echo '    <div class="col-md-10 col-sm-2">';
  echo '      <img class="gfyitem" data-expand=true data-id="' . $gfyObject['url'] . '"/>';
  echo '      <div class="gfyFooter">';
  echo '        <div class="gfyDescription">' . $gfyObject['description'] . '</div>';
  echo '        <div class="gfySource">' . $source . '</div>';
  echo '      </div>';
  echo '    </div>';
  echo '  </div>';
  echo '</div>';

}


?>