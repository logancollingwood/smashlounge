
<?php
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";

  require("techs/init.php");
  require("techs/initTechs.php");
  require_once("techs/controller.php");

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
  logan.collingwood@gmail.com
-->
<!DOCTYPE html>
<html lang="en">
  <head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A compendium for Super Smash Brothers">
    <meta name="author" content="smashlounge">


    <title>Smash Lounge: <?php echo $tech ?></title>

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

       
          <?php sidebar('techs'); ?>

          
          <!-- main right col -->
          <div class="column col-md-10" id="main">



            <section id="banner" data-speed="4" data-type="background">
              <div class="jumbotron">
                <div class='header'>
                  <?php 
                    if ($techInfo["tech"]){
                      echo $techInfo["tech"]; 
                    } else {
                      echo "Check out one of these techs!";
                    }
                  ?>
                </div>
                <div class="blur">
                  <div class="description">                   
                    <?php
                      if ($techInfo["description"] != "") {
                       echo $techInfo["description"];
                      }
                    ?>
                  </div>
                  <div class="mast">
                    <?php
                     if (!empty($techInfo["inputs"]))  
                      echo "<p class='techInputs'>Inputs: <br />" . $techInfo["inputs"] . "</p>";
                     if ($techInfo["smashwiki"] != ''); 
                      echo "<p class='techInputs'><a class='button button-inline button-large button-info' role='button' href='" . $techInfo["smashwiki"] . "'>Learn More</a></p>";
                    ?>
                  </div>
                </div>
              </div>
            </section>

            <div class="content-wrapper">
              <div class="row">
              <?php 
              

                if (!$notFound) {
                  echo "<div class='col-md-8'>";

                  if ($gifs) {
                    $counter = 0;
                    $numGifs = count($gifs);
                    foreach ($gifs as $tmpGif) {
                      printGfy($tmpGif, $counter);  
                      if ($counter != $numGifs-1) {
                        echo "<hr>";
                      } else {
                        echo "<br>";
                      }
                      $counter++;
                    }
                    printSubmit('gif');
                  }
                } else {
                  echo "<ul class='list-group'>";
                  foreach ($dataTech as $techRec) {
                        echo "<li class='list-group-item list-group-item-info'>";
                        echo "<a href=techs.php?tech=" . urlencode($techRec) . ">";
                        echo $techRec . "</a></li>";
                        echo "\n";
                  }
                }
                  echo "</ul>";


                ?>
                </div>
                <div class='col-md-4'>
                  <div class='well'>
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                        var disqus_shortname = 'thesmashlounge'; // required: replace example with your forum shortname

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                  </div>
                  <?php

                  createBeg(.5);
                  ?>
                </div>
                <?php footer(); ?>
              



          </div>
        </div>
      </div>


    <script type="text/javascript" src="/js/svg.min.js"></script>
    <script type="text/javascript" src="/js/frameinput.js"></script>

    <script>
      $( document ).ready(function() {
        <?php foreach ($gifs as $tmpGif) { 
                $frameData = getFrameDataForGif($tmpGif['id']);

                if ($frameData != '') { ?>
                  $('#controller-<?php echo $tmpGif["id"]; ?>').frameinputs( <?php echo $frameData; ?> );
        <?php   }
              } ?>
      });
    </script>
</body>