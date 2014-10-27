<?php
  $char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";

  require_once("techs/init.php");
  require_once("techs/twitch.php");
  require_once("techs/sentry.php");



?>
<!--

ooooo
`888'
 888          .ooooo.   .oooooooo  .oooo.   ooo. .oo.
 888         d88' `88b 888' `88b  `P  )88b  `888P"Y88b
 888         888   888 888   888   .oP"888   888   888
 888       o 888   888 `88bod8P'  d8(  888   888   888
o888ooooood8 `Y8bod8P' `8oooooo.  `Y888""8o o888o o888o
                       d"     YD
                       "Y88888P'

-->
<!--

Smashlounge is built for the community, by the community.

All tools used on this site are for non-commercial purposes.
Questions?
  smashlounge@gmail.com

-->

<!DOCTYPE html>
<html lang="en">
  <head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A compendium for Super Smash Bros">
    <meta name="author" content="smashlounge">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Smash Lounge</title>

    <!-- Main Dependencies -->
    <?php

      printLibraries();

    ?>

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">



    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <?php
      createNavBar();
    ?>

    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">
          <?php makeSidebar($loggedIn, 'home') ?>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



          <div class="jumbotron banner">

            <h1 class='lead'>smash lounge</h1>
            <hr style='width:50%;'>
            <p class="fifty">A compendium for acquiring ultimate smash knowledge. Check out an example page to get going</br>
            <?php
              if ($displayChar) {
                echo "<hr style='width:50%;'><a class='btn btn-primary btn-lg bttn rand' href=characters.php?char=" .  urlencode($randomLink) . ">"."<span class='glyphicon glyphicon-search pull-left'></span>    " . $randomLink . "</a>";
              } else if ($displayTech) {
                echo "<hr style='width:50%;'><a class='btn btn-primary btn-lg bttn rand' href=techniques.php?tech=" .  urlencode($randomLink) . ">"."<span class='glyphicon glyphicon-search pull-left'></span>    " . $randomLink . "</a>";
              }
              echo "</br>";
              echo "</p>";
            ?>
          </div>
          <div class='mobilenav'>
            <hr>
            <ul class='nav'>
              <li class='home active'><a href='/'><span class='glyphicon glyphicon-home pull-left'></span>&nbsp;Home</a></li>
              <li class='home'><a href='/users.php'><span class='glyphicon glyphicon-user pull-left'></span>&nbsp;Users</a></li>
              <li class='home'><a href='/submit.php'><span class='glyphicon glyphicon-inbox pull-left'></span>&nbsp;Submit</a></li>
              <li class='home'><a href='/lounge.php'><span class='glyphicon glyphicon-globe pull-left'></span>&nbsp;Lounge</a></li>
              <li class='home'><a href='/attending.php'><span class='glyphicon glyphicon-list pull-left'></span>&nbsp;Attending</a></li>
              <li class='home'><a href='/upcoming.php'><span class='glyphicon glyphicon-calendar pull-left'></span>&nbsp;Upcoming</a></li>
              <?php
                makeCollapseNav('tech', $dataTech, 'out', $char, $tech, '');
                makeCollapseNav('char', $dataChar, 'out', $char, $tech, '');
              ?>
            </ul>
            <hr>
          </div>

          <div class="row">
            <div class="col-md-8 col-sm-8">

            <?php

              $string_reddit = file_get_contents("http://www.reddit.com/r/smashgifs/hot.json");
              $json = json_decode($string_reddit, true);
              $children = $json['data']['children'];
              $randGif = rand(0, count($children)-1);

                echo "<div id='randomSlot' class='panel panel-default gifTainer'>";
                echo "</div>";

              ?>

              <div class='panel panel-default'>
                <div class='panel-heading'>Introducing..</div>
                <div class='panel-body vimeo'>
                  <iframe src="//player.vimeo.com/video/101609571?byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><br/>
                </div>
                <div class='panel-footer'>
                <h3><small>from <a href="http://vimeo.com/bobackv">boback</a></small></h3>
                </div>
              </div>

            </div>

            <div class='col-md-4 col-sm-4'>

              <div class='panel panel-default'>
                <div class='panel-heading'> Live SSBM Streams </div>
                <div class='panel-body randgifz'>
                  <?php
                    $counter = 0;
                    $maxCount = 4;
                    foreach ($activeStreams as $data) {
                      if ($counter >= $maxCount) break;
                      echo "<p>";
                      echo "<h4>";
                      echo "<a href='" . $data['channel']['url'] . "' class='theme'>";
                      echo $data['channel']['status'] . "</h4></a>";
                      echo $data['channel']['display_name'] . "<br>";
                      echo $data['viewers'] . "  <i class='fa fa-eye theme'></i>";
                      echo "</p>";
                      echo "<hr>";
                      $counter++;
                    }
                  ?>
                </div>
              </div>

              <?php
              createBeg(.3);
              ?>

          </div>


        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toggler.js"></script>
    <script>
       $(document).ready(function(){
          // Target your .container, .wrapper, .post, etc.
          $(".vimeo").fitVids();
        });
    </script>
    <script src="js/randomGfycat.js"></script>
  </body>
</html>
