<?php
  $char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";

  require_once("techs/init.php");
  require_once("techs/twitch.php");
  require_once("techs/sentry.php");



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


    <title>Smash Lounge</title>

    <!-- Main Dependencies -->
    <?php

      printLibraries();

    ?>

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">



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
          <?php makeSidebar($loggedIn, 'home') ?>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php //printBetaMast(); ?>
          <div class="jumbotron banner">

            <h1 class='lead'>smash lounge</h1>
            <hr style='width:50%;'>
            <p class="fifty"><small>A compendium for acquiring ultimate smash knowledge. Check out an example page to get going</small></br></p>

                <?php
                  if ($displayChar) {
                    echo "<hr style='width:50%;'><a class='btn btn-primary btn-lg bttn rand' href=characters/" .  urlencode($randomLink) . ">"."<span class='glyphicon glyphicon-search pull-left'></span>    " . $randomLink . "</a>";
                  } else if ($displayTech) {
                    echo "<hr style='width:50%;'><a class='btn btn-primary btn-lg bttn rand' href=techniques/" .  urlencode($randomLink) . ">"."<span class='glyphicon glyphicon-search pull-left'></span>    " . $randomLink . "</a>";
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


        </div>
      </div>
    </div>

    <script src="js/jquery.fitvids.js"></script>
    <script>
    // 2. This code loads the IFrame Player API code asynchronously.
          var tag = document.createElement('script');

          tag.src = "https://www.youtube.com/iframe_api";
          var firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

          // 3. This function creates an <iframe> (and YouTube player)
          //    after the API code downloads.
          var player;
          function onYouTubeIframeAPIReady() {
            var id = getRandomVod();
            player = new YT.Player('player', {
              height: '390',
              width: '640',
              videoId: id,
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
            });
          }
          var vods = ['iNjzXdPj0s8', 'MCcJ8QPW3wA', 'CjlMagFQNCE', '5Y0opIt4nqc', 'IpIWmRev2fw', '1LUBCbqAK5g', '-kFClkXgfUs', '2TqKzVDb7pE', '2TqKzVDb7pE', 'pM13h34KUCg', 'IY2pTqKz36c', '6QKRlmzCOUI', 'xXrErJsA4ck', 'JTABgDjRnA0', 'kVO3YZh1KXs', 'HDGBYiErj9M'];
          var index = 0;

          function getRandomVod() {
            if (index >= vods.length) index = 0;
            var vodID = vods[index];
            index++;
            return vodID;
          }
          // 4. The API will call this function when the video player is ready.
          function onPlayerReady(event) {
            //event.target.playVideo();
            $("#vod").fitVids();
            player.setPlaybackQuality('hd720');
          }

          function playNewVideo() {
            var id = getRandomVod();
            player.loadVideoById(id);
            player.setPlaybackQuality('hd720');
          }

          // 5. The API calls this function when the player's state changes.
          //    The function indicates that when playing a video (state=1),
          //    the player should play for six seconds and then stop.
          var done = false;
          function onPlayerStateChange(event) {
            if (event.data == YT.PlayerState.PLAYING && !done) {
              setTimeout(stopVideo, 6000);
              done = true;
            }
          }
          function stopVideo() {
            player.stopVideo();
          }
    </script>
    <script>
       $(document).ready(function(){
          // Target your .container, .wrapper, .post, etc.
          console.log("fired");
          $(document).on("click", "#newVod", function(e) {
            playNewVideo();
          });
        });
    </script>
    <script src="js/randomGfycat.js"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
  </body>
 <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</html>
