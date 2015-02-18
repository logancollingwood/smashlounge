<?php

  $char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";

  require_once("techs/init.php");
  require_once("techs/initAttending.php");
  require_once("techs/twitch.php");




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
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Smash Lounge: Attending</title>


    <!-- Main Dependencies -->
    <?php

      printLibraries();

    ?>

    <!-- Custom styles for this template -->
    <link href="css/dashboard_mobile.css" rel="stylesheet">



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
          <?php makeSidebar($loggedIn, 'attending') ?>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



          <div class="jumbotron banner">

            <h1 class='lead'>Attending</h1>
            
            <p class="fifty">Sign up to attend a tournament. Please only fill out if your attendance is guaranteed</br>
        
          </div>

          <div class="row">
            <div class='col-md-9'>
              <?php
                foreach ($upcomingEvents as $event) {
                  makeEventSignup($event);
                }
              ?>
            </div>            

            <div class='col-md-3'>
              <?php createBeg(1) ?>
              
              <div class="well pull-right adtainer" id="canttouchthis">
                <div class="panel-body ad" id="adholder">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- responsive! -->
                  <ins class="adsbygoogle"
                       style="display:block"
                       data-ad-client="ca-pub-5354507002335154"
                       data-ad-slot="6479366620"
                       data-ad-format="auto"></ins>
                  <script>
                  (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- VENMO API -->
    <script src='https://platform.venmo.com/sdk.js'></script>

  </body>
</html>
