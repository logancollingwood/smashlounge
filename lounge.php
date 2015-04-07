<?php
  $scene = isset($_GET['scene'])       ? trim($_GET['scene'])       : "";
  require("techs/init.php");
  require("techs/initScenes.php");
  $listcounter = 0;
  $id = NULL;
  $submit = NULL;
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


    <title>Smash Lounge: Find a group!</title>

    <!-- Main Dependencies -->
    <?php printNewLibraries(); ?>

    <link href="/css/less/rich.css" rel="stylesheet">


    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqmaEEEbIm2Iln3ieqGdtfzVLi6AzHA1Q&sensor=true">
    </script>

    
  </head>

  <body>
<div class="wrapper">
        <div class="box">

          <!-- top nav -->
          <?php navbar(); ?>
          <!-- /top nav -->

          <div class="row row-offcanvas row-offcanvas-left">

          <?php sidebar('lounge'); ?>
    
          
           <!-- main right col -->
          <div class="column col-md-10 map" id="main">
          <section id="banner" data-speed="4" data-type="background">
              <div class="jumbotron">
                <div class='header'>
                  Locate a group near you! 
                </div>
                <div class="blur">
                  <div class="description">                   
                    the locations are merely for reference and do not represent actual group locations
                  </div>
                  <div class="mast">
                  </div>
                </div>
              </div>
            </section>
            <div class="content-wrapper">
              <div class="container-fluid">
                <div id="map-canvas"/></div>
              </div>

            <div class="container-fluid">

              <div class="row">
                <div class="col-md-6 twoColumn">
                  <!--West Coast-->
                  <?php 
                    makeLoungeList($sceneWESTCOASTBESTCOAST, 'West Coast', $listcounter);
                    $listcounter++;
                  ?>
                </div>
                <div class="col-md-6 twoColumn">
                  <!--West Coast-->
                  <?php 
                    makeLoungeList($international, 'International', $listcounter);
                    $listcounter++;
                  ?>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 twoColumn">
                  <!--Atlantic North-->
                  <?php 
                    makeLoungeList($sceneNA, 'Atlantic North', $listcounter);
                    $listcounter++;
                  ?>
                </div>
                <div class="col-md-6 twoColumn">
                  <!--Atlantic South-->
                  <?php 
                    makeLoungeList($sceneSA, 'Atlantic South', $listcounter);
                    $listcounter++;
                  ?>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 twoColumn">
                  <!--MIDWEST-->
                  <?php 
                    makeLoungeList($sceneMW, 'MidWest', $listcounter);
                    $listcounter++;
                  ?>
                </div>
                <div class="col-md-6 twoColumn">
                  <!--South/Southwest-->
                  <?php 
                    makeLoungeList($sceneSW, 'South and Southwest', $listcounter);
                    $listcounter++;
                  ?>
                </div>
              </div>

              <div class="row">
                  <?php
                    printSubmit('group');
                  ?>
              </div>
            </div> 


          </div>
        </div>
      </div>
      </div>
    </div>

    <script src="js/mapInit.js"></script>
  </body>
</html>

