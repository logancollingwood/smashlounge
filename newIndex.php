<?php
  require_once("techs/init.php");
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
      <?php analytics(); ?>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="A compendium for Super Smash Bros">
      <meta name="author" content="smashlounge">
      <title>Smash Lounge: Vods</title>

      <!-- Main Dependencies -->
      <?php printNewLibraries(); ?>

      <link href="css/rich.css" rel="stylesheet">

    </head>

  <body>
      <div class="wrapper">
        <div class="box">
        <div class="row row-offcanvas row-offcanvas-left">
                      
          
            <?php sidebar('vods'); ?>

            <!-- main right col -->
            <div class="column col-sm-10 col-xs-11" id="main">
                
                <!-- top nav -->
                <?php navbar(); ?>
                <!-- /top nav -->
              
                <div class="padding">
                    <div class="full col-sm-9">
                      
                        <div class="jumbotron">
                          <div class='header'>smash lounge</div>
                          <hr>
                          <div class="description">A compendium for acquiring ultimate smash knowledge. Check out an example page to get going</br></div>

                              <?php
                                if ($displayChar) {
                                  echo "<hr><a class='btn btn-primary btn-lg bttn rand' href=characters/" .  urlencode($randomLink) . ">"."<span class='glyphicon glyphicon-search pull-left'></span>    " . $randomLink . "</a>";
                                } else if ($displayTech) {
                                  echo "<hr><a class='btn btn-primary btn-lg bttn rand' href=techniques/" .  urlencode($randomLink) . ">"."<span class='glyphicon glyphicon-search pull-left'></span>    " . $randomLink . "</a>";
                                }
                              //echo "<div style='width:2px;height:150px;background-color:#fff;'>&nbsp;</div>";
                              echo "&nbsp";
                              echo "&nbsp";
                              echo "<a class='btn btn-primary btn-lg bttn rand' href='submit.php'><span class='glyphicon glyphicon-cloud-upload pull-left'></span> Contribute</a>";
                              echo "</br>";
                          echo "</br>";
                          ?>
                        </div>
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
                          <div class="col-md-8 col-sm-8">

                            <?php
                              echo "<div id='randomSlot' class='panel panel-default gifTainer'>";
                              echo "</div>";
                            ?>

                          </div>

                          <div class='col-md-4 col-sm-4'>

                            <a class="twitter-timeline" href="https://twitter.com/thesmashlounge" data-widget-id="536330140297347072">Tweets by @thesmashlounge</a>
                          </div>
                        </div>

                        <div class='row'>
                          <div class='col-md-8'>
                            <div class='panel panel-default'>
                              <div class='panel-heading'>From the <a href="https://www.youtube.com/playlist?list=PLhHSkxk_9ky44HiUFCkX7LSv4ID5E7Wis">SmashLounge Invitational</a>&nbsp;<button type='button' class='btn btn-default btn-lg' id='newVod' aria-label='Left Align'>next-></button></div>
                              <div class='panel-body full'>
                                <div id="vod">
                                  <div id="player"></div>
                                </div>
                                <br>            
                              </div>
                              <div class='panel-footer'>
                                <div class='row'>
                                  <div class='col-md-6'>
                              
                                      <h3><small>Subscribe to us on youtube!</small></h3>
                                    
                                  </div>
                                  <div class='col-md-6' style="margin-top:1.5%;">
                                      <div class="g-ytsubscribe" data-channelid="UC27ZDkjVXXMSt315LTvgISw" data-layout="full" data-count="hidden"></div>
                                  </div>
                                </div>
                                <br>  
                              </div>
                            </div>
                          </div>

                          <div class='col-md-4'>
                            <div class='panel panel-default'>
                              <div class='panel-heading'> Live SSB Streams </div>
                              <div class='panel-body randgifz'>
                                <?php
                                  $counter = 0;
                                  $maxCount = 4;
                                  foreach ($activeStreams as $data) {
                                    if ($counter >= $maxCount) break;
                                    echo "<p>";
                                    echo "<h4>";
                                    echo "<a href='" . $data['channel']['url'] . "' class='theme'>";
                                    echo $data['channel']['status'] . "</h4></a>";
                                    echo $data['channel']['display_name'] . "<br>";
                                    echo $data['viewers'] . "  <i class='fa fa-eye theme'></i>";
                                    echo "</p>";
                                    if ($counter != $maxCount - 1) echo "<hr>";
                                    $counter++;
                                  }
                                ?>
                              </div>
                            </div>
                            <?php
                              createBeg(1);
                            ?>
                          </div>
                        </div>
                        <?php footer(); ?>
                    </div><!-- /col-9 -->

                </div><!-- /padding -->
            </div>
            <!-- /main -->
      </div>
    </div>
  </div>
    <script src="/js/jquery.fitvids.js"></script>
    <script src="/js/initIndex.js"></script>
    <script src="js/randomGfycat.js"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
    </body>
 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</html>
