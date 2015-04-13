<?php
  require_once("techs/init.php");
  require_once("techs/initVods.php");
  $whichVod = isset($_GET['vod'])       ? trim($_GET['vod'])       : "";
  //keeps track of how many vods we have on the page
  $Vodcounter = 0;
?>
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

                  <div class="description">
                    <?php 
                      if ($whichVod == '') echo "Learn from some great, moderator curated vods";
                      else echo $whichVod;
                    ?>
                  </div>

                  <div class="mast">
                  </div>
                </div>
              </div>
            </section>
            <div class="content-wrapper">
                <?php if ($whichVod == "") { ?>
                  <div class='row'>
                        <div class='col-md-4'>
                          <h2> Entertainment </h2>
                          <hr>

                              <?php
                                foreach ($allVods['Entertainment'] as $vod) {
                                  displayVod($vod);
                                }
                              ?>
                        </div>
                        <div class='col-md-4'>
                          <h2> Techniques </h2>
                          <hr>
                              <?php
                                foreach ($allVods['Techniques'] as $vod) {
                                  displayVod($vod);
                                }
                              ?>
                        </div>
                        <div class='col-md-4'>
                          <h2> Matches </h2>
                          <hr>
                              <?php
                                foreach ($allVods['Matches'] as $vod) {
                                  displayVod($vod);
                                }
                              ?>
                        </div>
                    </div>

                <?php } else { ?>

                  <?php gatherVods($whichVod); ?>

                <?php } ?>

              <?php footer() ?>
            </div>

          </div>
        </div>
      </div>

      <script src="/js/jquery.fitvids.js"></script>
      <script src="/js/initVods.js"></script>
    </body>
</html>
