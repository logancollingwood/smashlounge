<?php
	$char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";
  $submit = isset($_GET['submit'])       ? trim($_GET['submit'])       : "";
	require("techs/init.php");
  
  require ("techs/initChar.php");
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
    <title>Smash Lounge: <?php echo $char ?></title>

      <!-- Main Dependencies -->
      <?php printNewLibraries(); ?>

      <link href="/css/less/rich.css" rel="stylesheet">
    
  </head>

  <body>

  	<div class="wrapper">
        <div class="box">
          <div class="row row-offcanvas row-offcanvas-left">

          <?php sidebar('chars'); ?>
    
          
           <!-- main right col -->
          <div class="column col-md-10" id="main">
            <!-- top nav -->
            <?php navbar(); ?>
            <!-- /top nav -->
            <section id="home" data-speed="4" data-type="background">
              <div class="jumbotron">
                <div class='header'><?php 
                if (!$charnotFound){
                  echo $char; 
                } else {
                  echo "Check out one of these guides!";
                }
              ?></div>
              </div>
            </section>
            <div class="content-wrapper">
            <?php 
              echo "<div class='row'>";
                echo "<div class='col-md-8'>";
                echo "<ul class='nav nav-tabs' role='tablist' id='myTab'>";
                echo "  <li class='active'><a href='#gener' role='tab' data-toggle='tab' class='tabz'>General</a></li>";
                echo "  <li><a href='#data' role='tab' data-toggle='tab' class='tabz'>Data</a></li>";
                echo "</ul>";
                  echo "<div class='tab-content'>";
                  	if (!$charnotFound) {
                      echo "<div class='tab-pane active' id='gener'>";
                            echo "<ul class='list-group chars'>";
                            $counter = 0;
                            if (count($chargifs) > 0) {
                              foreach ($chargifs as $tmpGif) {
                                $counter++;
                                echo "<li class='list-group-item'>";
                                echo "  <div class='row'>";
                                echo "    <div class='col-md-11'>";
                                echo "      <img class='gfyitem' data-expand=true data-id='" . $tmpGif['url'] . "'/>";
                                echo "      <h4>Example #" . $counter . "</h4>";
                                echo "      <span class='text-muted'>" . $tmpGif['description'] . "</span>";
                                if ($tmpGif['source'] && filter_var($tmpGif['source'], FILTER_VALIDATE_URL)) {
                                  echo "<br /><span class='text-muted'><a href='" . $tmpGif['source'] . "'>source</a></span>";
                                } else if ($tmpGif['source']) {
                                  echo "<br /><span class='text-muted'>Courtesy of: " . $tmpGif['source'] . "</span>";
                                }
                                echo "    </div>";

                                /* Voting Controls */
                                echo "    <div class='col-md-1 voteBlock'>";
                                echo "      <a href='#' class='vote' data-id='" . $tmpGif['id'] . "' data-type='chargif' data-direction='up'><span class='glyphicon glyphicon-chevron-up btn-lg'></span></a>";
                                echo "      <hr>";
                                echo "      <h4>". $tmpGif['score'] . "</h3>";
                                echo "      <hr>";
                                echo "      <a href='#' class='vote' data-id='" . $tmpGif['id'] . "' data-type='chargif' data-direction='down'><span class='glyphicon glyphicon-chevron-down btn-lg'></span></a>";
                                echo "    </div>";
                                echo "  </div>";
                                echo " </li>";
                              }
                            } else {
                              echo "<li class='list-group-item'>";
                              echo  "<h4>Woops! This character has no general gifs! <br><small><a href='/submit.php'>Submit One</a></small></h4>";
                              echo "</li>";
                            }
                          echo "<li class='list-group-item'>";
                          echo "<h4> <a href='/submit.php#gif'> Submit a gif </a></h4>";
                          echo "</li>";
                        echo "</ul>";
                        echo "</div>";
                        printCharData($moves, $author);
                      } else {
                          echo "<div class='row placeholders'>";
                          echo "<ul class='list-group chars'>";
                          foreach ($dataChar as $charRec) {
                                  echo "<li class='list-group-item list-group-item-info'>";
                                  echo "<a href=/characters/" . urlencode($charRec['name']) . ">";
                                  echo $charRec['name'] . "</a></li>";
                                  echo "\n";
                          }
                          echo "</ul>";
                          echo "</div>";
                    }
                  ?>
                  </div>
                  </div>
                  <div class='col-md-4'>
                    <?php if (!$charnotFound) { ?>
                      <div class="panel panel-default">
                        <!-- Default panel contents -->
                          <div class="panel-heading">How to: <?php echo $char ?></div>
                          <div class="panel-body desc">
                            <p><?php echo $charGuide; ?></p>
                          </div>
                          <!-- List group -->
                          <?php 
                         
                              echo "<ul class='list-group'>";
                              if ($storedTechz) {
                                foreach ($storedTechz as $key => $value) {
                                  echo "<li class='list-group-item techLink'><a href='/techniques.php?tech=" . urlencode($value['tech']) . "'>" . $value['tech'] . "</a></li>";
                                }
                              }
                              if (!$charnotFound) {
                                echo "<li class='list-group-item dataChar'>";
                                makeCharDataTable($charTier, $charWeight, $charFallSpeed);
                                echo "</li>";
                              }
                            echo "</ul>";
                            
                          ?>
                      </div>
                      <?php } ?>
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


                     

                  </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
  <script src="/js/voting.js"></script>
  </body>
</html>
