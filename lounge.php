<?php
  require("techs/init.php");
  require("techs/initScenes.php");
  $listcounter = 0;
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

    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqmaEEEbIm2Iln3ieqGdtfzVLi6AzHA1Q&sensor=true">
    </script>

    
  </head>

  <body>

    <?php
      createNavBar()
    ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php makeSidebar($loggedIn, 'lounge') ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main map">

          <div class="row">
            <div class="jumbotron banner">
 
                
                  <?php if (!$id) ?>
                  <h1 class='lead'>Locate a group near you! <h1/><p class='fifty'>(the locations are merely for reference and do not represent actual group locations)</p>

            </div>
            <?php if (!$id) { ?>
            <div id="map-canvas"/></div>

            <div class="container-fluid">

              <div class="row">
                <div class="alignSides">
                  <!--West Coast-->
                  <?php 
                    makeLoungeList($sceneWESTCOASTBESTCOAST, 'West Coast', $listcounter);
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
                    echo "<li class='list-group-item gray'>";
                    echo "<h4> Submit a scene! </h4>";
                    makeSubmitSceneForm($regions);
                    echo "</li>";
                    if ($submit) {
                      alertMSG($submit);
                    }
                    echo "</ul>";
                    echo "</td>";
                  ?>
              </div>
            </div> 
            <?php } ?>

          </div>
        </div>
      </div>
    </div>

    <script src="js/mapInit.js"></script>
  </body>
</html>

