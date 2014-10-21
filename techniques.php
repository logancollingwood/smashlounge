<?php
  $char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";
  $submit = isset($_GET['submit'])       ? trim($_GET['submit'])       : "";
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
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-51481444-1', 'auto');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Smash Lounge: <?php echo $tech ?></title>

    <?php 
      printLibraries();
    ?>

    <!-- Custom styles for this template -->
    <link href="css/dashboard_tech.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">
    <link href="/css/users.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
   <?php
      createNavBar()
    ?>

  <div class="container-fluid">
      <div class="row">

        <div class="col-sm-3 col-md-2 sidebar">
          <?php makeSidebar($loggedIn, 'techs') ?>
        </div>
  
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="jumbotron banner">
            <h1 class="lead"><?php 
              if ($tech){
                echo $tech; 
              } else {
                echo "Check out one of these techs!";
              }
            ?>
            </h1>
            <p class="fifty">
            <?php
              if ($description) {
               echo $description;
              }
            ?>
            </p>
            <?php if ($input)
             echo "<p class='fifty2'>Inputs: <br />" . $input . "</p>";
             if ($wiki) 
             echo "<p><a class='btn btn-primary btn-lg bttn' role='button' href='" . $wiki . "'>Learn More</a></p>";
            ?>
          </div>
          <div class='row'>
          <div class='col-md-8'>
            <?php 
            

              if (!$notFound) {
                echo "<div class='row centered'>";
                $counter = 0;
                if ($gifs) {
                  echo "<ul id='techzz'>";
                  foreach ($gifs as $tmpGif) {
                    $counter++;
                    echo "<li class='list-group-item'>";
                      if (in_array($tech, $hasFrameData)) {
                        echo "<div class='row'>";
                          echo "<div class='col-md-8'>";
                            echo "<div id=gif" . $counter . " data-title=true data-autoplay=false data-controls=true data-expand=false data-id='" . $tmpGif['url'] . "' style='width:100%'></div>";
                            echo  "<h4>Example " . $counter . " of " . $tech . "</h4>";
                            echo  "<span class='text-muted'>" . $tmpGif['description'] . "</span>";
                            if ($tmpGif['source']) {
                              echo "<br /><span class='text-muted'>Courtesy of: " . $tmpGif['source'] . "</a></span>";
                            }
                            echo  "<span class='badge'>". $counter . "</span>";
                          echo "</div>";
                          echo "<div class='col-md-4'>";
                            echo "<div class='controller-wrapper'>";
                              makeControllerWithID($counter);
                            echo "</div>";
                          echo "</div>";
                        echo "</div>";
                      } else {
                        echo "<img class='gfyitem' data-expand=true data-id='" . $tmpGif['url'] . "'/>";
                        echo  "<h4>Example " . $counter . " of " . $tech . "</h4>";
                        echo  "<span class='text-muted'>" . $tmpGif['description'] . "</span>";
                        if ($tmpGif['source']) {
                          echo "<br /><span class='text-muted'>Courtesy of: " . $tmpGif['source'] . "</a></span>";
                        }
                        echo  "<span class='badge'>". $counter . "</span>";
                      }

                    echo "</li>";
                  }

                  echo "<li class='list-group-item'>";
                  echo "<h4> Submit a gif: </h4>";
                  makeSubmitForm("tech" , $char, $tech);
                  echo "</li>";
                  if ($submit) {
                    alertMSG($submit);
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
                echo "</div>";
              }

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
                <hr>
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toggler.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/adblockzorz.js"></script>
    <script type="text/javascript" src="js/svg.min.js"></script>
    <script type="text/javascript" src="js/frameinput.js"></script>
    <script src="js/initController.js"></script>
    <script>
      $(document).ready(function(){
        $("#canttouchthis").sticky({topSpacing:70});


      });
    </script>
</body>