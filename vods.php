<?php
  require_once("techs/init.php");
  require_once("techs/initVods.php");

  //keeps track of how many vods we have on the page
  $Vodcounter = 0;

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
    	<meta name="description" content="A compendium for Super Smash Bros">
    	<meta name="author" content="smashlounge">
    	<title>Smash Lounge: Vods</title>

    	<!-- Main Dependencies -->
    	<?php printNewLibraries(); ?>

      <link href="/css/less/rich.css" rel="stylesheet">


  	</head>
  	<body>
      <div class="wrapper">
        <div class="box">

          <!-- top nav -->
          <?php navbar(); ?>
          <!-- /top nav -->

          <div class="row row-offcanvas row-offcanvas-left">

          <?php sidebar('vods'); ?>


           <!-- main right col -->
          <div class="column col-md-10" id="main">
            <section id="banner" data-speed="4" data-type="background">
              <div class="jumbotron">
                <div class='header'>vods</div>
                <div class="blur">

                  <div class="description">Learn from some great, moderator curated vods</div>

                  <div class="mast">
                  </div>
                </div>
              </div>
            </section>
            <div class="content-wrapper">

                <div class='container'>
                  <div class='row'>
                      <div class='col-md-4'>
                        <h2> Entertainment </h2>

                            <?php
                              foreach ($allVods['Entertainment'] as $vod) {
                                displayVod($vod);
                              }
                            ?>
                      </div>
                      <div class='col-md-4'>
                        <h2> Techniques </h2>
                            <?php
                              foreach ($allVods['Techniques'] as $vod) {
                                displayVod($vod);
                              }
                            ?>
                      </div>
                      <div class='col-md-4'>
                        <h2> Matches </h2>
                            <?php
                              foreach ($allVods['Matches'] as $vod) {
                                displayVod($vod);
                              }
                            ?>
                      </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="/js/jquery.fitvids.js"></script>
      <script src="/js/initVods.js"></script>
    </body>
</html>
