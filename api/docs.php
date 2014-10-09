<?php
  require("../techs/db.php");
  

  $mysqli = new mysqli($dahostname, $username, $password, $database);
  if ($mysqli->connect_errno) {   
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
  }

  $query = "SELECT * FROM " . $charTable . " ORDER BY tierdata";

  //Defines the amount of API response examples to render in documentation
  $examples = 2;
  $counter = 0;


  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) {
    if ($counter >= $examples) break;
    $dataChar[] =  $row;
    $charCount++;
    $counter++;
  }
  $json['characters'] = $dataChar;



  $query = "SELECT * FROM " . $charTable . " WHERE name='" . $char . "'";
   
  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) { 
    $charID = $row["id"];
  }
  $query = "SELECT * FROM " . $charTable . " WHERE id='6'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach ($result as $row) { 
    $charinfo = $row;
  }
  $json['info'] = $charinfo;

  //     begin gif collector
  //
  ////////////////////////////////////////

  $query = "SELECT * FROM " . $charGifTable . " WHERE charid='6'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  $examples = 2;
  $counter = 0;
  foreach ($result as $row) {
    if ($counter >= $examples) break;
    unset($row['charid']);
    unset($row['id']);
    unset($row['pageid']);
    $chargifs[] = $row;
    $counter++;
  }
  $json['gifs'] = $chargifs;


  //     begin char techs collector
  //
  ////////////////////////////////////////

  $query = "SELECT chartech.techid, techs.tech FROM " . $charTechTable . " INNER JOIN " . $techTable . " ON " . $charTechTable .".techid = " . $techTable . ".id" . " WHERE charid='6'";

  if (!$result = $mysqli->query($query)) {
    die('Invalid query: ' . $mysqli->error);
  }
  foreach($result as $row) {
    unset($row['techid']);
    $techData[] = $row;
  }
  $json['techs'] = $techData;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>API Docs</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/grid.css" rel="stylesheet">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid heddur">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
         <a class="navbar-brand heddur" href="/">smash lounge&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-gamepad fa-1x"></i></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right"> 
            <li><a href="https://www.twitter.com/thesmashlounge"><i class="fa fa-twitter"></i></a></li>
            <li><a href="http://www.reddit.com/r/smashlounge"><i class="fa fa-reddit"></i></a></li>
            <li><a href="https://www.facebook.com/SmashLounge"><i class="fa fa-facebook"></i></a></li>
            <li class='here'><a href="/api/docs">api</a></li>
            <li><a href="/donate.php">donate</a></li>
            <li><a href="/about.html">about</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="page-header">
        <h1>Smashlounge API Docs</h1>
        <p class="lead">Building documentation for API. (STILL A WORK IN PROGRESS)</p>
      </div>

      <h2>characters</h2>
      <p>For info on all characters, simply call <a href='http://www.smashlounge.com/api/characters'>http://smashlounge.com/api/characters</a></p>
      <h4>response</h4>
      <div class="well">
        <?php 
          echo "<pre>";
          echo json_encode($json['characters'], JSON_PRETTY_PRINT);
          echo "</pre>";
        ?>
      </div>

      <h3>Specify a character using GET to find relevant gifs!</h3>
      <p>Example api url: <a href='http://www.smashlounge.com/api/characters?char=Fox'>http://smashlounge.com/api/characters?char=Fox</a></p>
      <h4>response</h4>
      <div class="well">
        <?php 
          echo "<p>['info']</p>";
          echo "<pre>";
          echo json_encode($json['info'], JSON_PRETTY_PRINT);
          echo "</pre>";

          ?>
          <p>['gifs']</p>
          <ul class="list-group">
            <li class="list-group-item">
            <span class="badge">1</span>
            The url is a reference to a gfycat ID. <br />
            ie: gfycat.com/{id}
            </li>
          </ul>

          <?php
          echo "<pre>";
          echo json_encode($json['gifs'], JSON_PRETTY_PRINT);
          echo "</pre>";

          echo "<p>['techs']</p>";
          echo "<pre>";
          echo json_encode($json['techs'], JSON_PRETTY_PRINT);
          echo "</pre>";
 
        ?>
      </div>

      <hr>


    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
