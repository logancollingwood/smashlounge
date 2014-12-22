<?php
  $char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";
  require("techs/init.php");
  require("techs/twitch.php");
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
    <?php analytics(); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Smash Lounge</title>

    <!-- Main Dependencies -->
    <?php

      printLibraries();

    ?>

    <link href="css/dashboard_mobile.css" rel="stylesheet">
  </head>

  <body>

    <?php
      createNavBar();
    ?>

    <div class="container-fluid">
      <div class="row">

        <!-- compartamentalize sidebar -->
        <div class="col-sm-3 col-md-2 sidebar">
          <?php makeSidebar($loggedIn, 'TMG') ?>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



          <div class="jumbotron banner">
            <h1 class="lead">THE MELEE GAMES</h1>
          </div>

          <div class="row">
            <div class="col-md-8 col-sm-8">

              <div class='panel panel-default'>
                <div class='panel-heading'>Description</div>
                <div class='panel-body vimeo'>
                  <div class='col-md-6 valign' style='padding-bottom:15px;'>
                    <img src="img/assets/tmg_poster.png" alt="TMG" style="max-width:100%;max-height:100%;">
                  </div>
                  <div class='col-md-6 valign'>
                    <p>
                      The Melee Games is an intercollegiate Super Smash Bros. Melee circuit, the first of it's kind. It currently operates in the Northeastern USA & California. Schools put together crews and fight through a free single elimination bracket throughout a seasonal semester. Over 70 schools are currently participating.
                    </p>
                  </div>
                  <br>
                </div>
              </div>

              <div class='panel panel-default'>
                <div class='panel-heading'>
                  Results from the recent Tri State tournament
                </div>
                <div class='panel-body vimeo'>
                  <div class='challonge_bracket_real' style='width:100%;height:500px;'>
                    <iframe src='http://themeleegames.challonge.com/TS' width='100%' height='500' frameborder='0' id='bracket' scrolling='auto' allowtransparency='true'></iframe>
                  </div>
                </div>
              </div>
            </div>

            <div class='col-md-4 col-sm-4'>

              <div class='panel panel-default'>
                <div class='panel-heading'>Social Media</div>
                <div class='panel-body'>
                  <p>
                    <a class="btn btn-default" href="//www.facebook.com/TheMeleeGames">
                      <i class="fa fa-facebook fa-lg"></i> facebook</a>
                    <hr>
                    <a class="btn btn-default" href="//themeleegames.challonge.com">
                      challonge</a>
                    <hr>
                    <a class="btn btn-default" href="//www.youtube.com/user/TheMeleeGame">
                      <i class="fa fa-youtube fa-lg"></i> youtube</a>
                    <hr>
                    <a class="btn btn-default" href="//www.Twitch.tv/TheMeleeGames">
                      <i class="fa fa-twitch fa-lg"></i> Twitch</a>
                    <hr>
                  </p>
                </div>
              </div>

              <div class='panel panel-default'>
                <div class='panel-heading'>
                  upcoming..
                </div>
                <div class='panel-body'>
                  <a class="btn btn-default" href='/tournament/TMG%20Columbia%20vs%20UMass%20Boston'>NYC vs Boston </a>
                  <hr>
                </div>
              </div>
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
  </body>
</html>
