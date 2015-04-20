<?php
  require_once("techs/init.php");
  require_once("techs/twitch.php");
  require_once("techs/initIndex.php");
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SmashLounge: Super Smash Brothers techniques">
    <meta name="author" content="smashlounge">
    
      <title>Smash Lounge</title>

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
                      
          
            <?php sidebar('home'); ?>

            <!-- main right col -->
            <div class="column col-md-10" id="main">
                

                <section id="banner" data-speed="4" data-type="background">
                  <div class="jumbotron">
                    <div class='header'>smashlounge</div>
                    <div class="blur">

                      <div class="description">A compendium for acquiring ultimate smash knowledge. Check out an example page to get going</br></div>

                      <div class="mast">
                        <?php
                          if ($displayChar) {
                            echo '<a class="button button-inline button-large button-info" href=characters/' .  urlencode($randomLink) . '>'.'<span><i class="fa fa-share-alt"></i>' . $randomLink . '</span></a>';
                          } else if ($displayTech) {
                            echo '<a class="button button-inline button-large button-info" href=techniques/' .  urlencode($randomLink) . '>'.'<span><i class="fa fa-share-alt"></i>' . $randomLink . '</span></a>';
                          }
                        ?>
                        <a class='button button-inline button-large button-success' href='submit.php'><span> <i class="fa fa-sign-out"></i>contribute</span></a>
                      </div>
                    </div>
                  </div>
                </section>
                <div class="content-wrapper">
                  <div class='mobilenav'>
                    <div class='well'>
                      <ul class='nav'>
                        <li class='home active'><a href='/'><span class='glyphicon glyphicon-home pull-left'></span>&nbsp;Home</a></li>
                        <li class='home'><a href='/users.php'><span class='glyphicon glyphicon-user pull-left'></span>&nbsp;Users</a></li>
                        <li class='home'><a href='/submit.php'><span class='glyphicon glyphicon-inbox pull-left'></span>&nbsp;Submit</a></li>
                        <li class='home'><a href='/lounge.php'><span class='glyphicon glyphicon-globe pull-left'></span>&nbsp;Lounge</a></li>
                        <li class='home'><a href='/rankings.php'><span class='glyphicon glyphicon-certificate pull-left'></span>&nbsp;Rankings</a></li>
                        <li class='home'><a href='/upcoming.php'><span class='glyphicon glyphicon-calendar pull-left'></span>&nbsp;Upcoming</a></li>
                        <li class='home'><a href='/themeleegames.php'><img src='/img/assets/tmgico.png' alt='TMG' class='pull-left' style='max-width:100%;max-height:100%;' width='30px'>&nbsp;TMG</a></li>
                        <?php
                          makeCollapseNav('tech', $dataTech, 'out', $char, $tech, '', 'Mobile');
                          makeCollapseNav('char', $dataChar, 'out', $char, $tech, '', 'Mobile');
                        ?>
                      </ul>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 col-sm-10 col-md-offset-">

                      <?php
                        echo "<div id='randomSlot' class='panel gifTainer theaterGif'>";
                        echo "</div>";
                      ?>

                    </div>

                    <div class="col-md-6 col-sm-2">
                      <div class='panel gifTainer theaterGif'>
                        <?php printRandomVod(); ?>
                      </div>
                    </div>

                  </div>

                  <div class='row'>
                    <div class="col-md-8 col-sm-2">
                      <div class='panel panel-default streampanel'>
                        <div class='panel-heading'> Live SSB Streams </div>
                        <div class='panel-body streams'>
                          <?php
                            $counter = 0;
                            $maxCount = 3;
                            foreach ($activeStreams as $data) {
                              $streamer = $data['channel']['display_name'];
                              $gameTitle = $data['channel']['game'];

                              if ($counter >= $maxCount) break;
                              echo "<div class='streamTitle'>";
                              echo "<a href='" . $data['channel']['url'] . "' class='theme'>";
                              echo $data['channel']['status'] . "</a></div>";
                              echo "<div class='streamer'>";
                              echo "<a href=//www.twitch.tv/$streamer>$streamer";
                              echo "<img class='streamImg' src='" . $data['channel']['logo'] ."'></img></a>";
                              echo "</div>";
                              echo "<div class='viewers'>viewers:" . $data['viewers'] . "</div>";
                              echo "<div class='streamGame'>";
                              if (strcmp($gameTitle, "Super Smash Bros. Melee") == 0) {
                                echo "melee";
                              } else if (strcmp($gameTitle, "Super Smash Bros. for Wii U") == 0) {
                                echo "sm4sh";
                              } else if (strcmp($gameTitle, "Project M") == 0) {
                                echo "pm";
                              } else if (strcmp($gameTitle, "Smash Bros 64") == 0) {
                                echo "64";
                              } else if (strcmp($gameTitle, "Super Smash Bros. Brawl") == 0) {
                                echo "brawl";
                              } else {
                                echo "sm4sh";
                              }
                              echo "</div>";
                              if ($counter != $maxCount - 1) echo "<hr>";
                              $counter++;
                            }
                          ?>
                        </div>
                      </div>
                    </div>

                    <div class='col-md-4'>
                      <div class='panel panel-default'>
                        <div class='panel-heading'> <a class='button button-inline button-small button-success' href="http://twitter.com/thesmashlounge"><span> <i class="fa fa-twitter"></i>Hit us up on twitter</span></a> </div>
                        <div class='panel-body'>
                          <?php twitterTimeline() ?>
                        </div>
                      </div>
                      <?php
                        createBeg(1);
                      ?>
                    </div>
                  </div>
                  <?php footer(); ?>
                </div>
            </div>
          <!-- /main -->
      </div>
    </div>
  </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="/js/jquery.fitvids.js"></script>
      <script src="/js/initIndex.js"></script>
      <script src="js/randomGfycat.js"></script>
  </body>
 
</html>
