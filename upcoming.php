<?php
  $hasGet = false;
  $tournament = isset($_GET['tournament'])       ? trim($_GET['tournament'])       : "";
  $tournament = urldecode($tournament);

  if ($tournament != '') {
    $hasGet = true;
  }
  require("techs/init.php");
  require("techs/initUpcoming.php");
  require("techs/twitch.php");

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
    <meta name="description" content="SmashLounge: Super Smash Brothers techniques">
    <meta name="author" content="smashlounge">


    <title>Smash Lounge: Upcoming Events</title>

    


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

          <?php sidebar('upcoming'); ?>

            <!-- main right col -->
            <div class="column col-md-10" id="main">
                

                <section id="banner" data-speed="4" data-type="background">
                  <div class="jumbotron">
                    <div class='header'>upcoming</div>
                    <div class="blur">
                      <hr>
                      <div class="description">
                        <?php 
                          if (!$hasTournament) { 
                            echo "scout upcoming events";
                          } else {
                            echo $tournament;
                          }
                        ?>
                      </div>
                      <hr>
                      <div class="mast">
                      </div>
                    </div>
                  </div>
                </section>
                <div class="content-wrapper">

        <div class='row'>

          <div class='col-md-9'>

            <!-- NO TOURNAMENT HANDLER -->
            <?php if (!$hasTournament) { ?>



                <!-- NAV -->
                <div class='page-header'>
                  <div class='row'>

                    <div class='col-md-8'>
                      <h3 class="month"></h3>
                    </div>

                    <div class='col-md-4'>
                      <div class="pull-right form-inline">
                        <div class="btn-group">
                          <button class="btn btn-warning" data-calendar-view="year">Year</button>
                          <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                          <button class="btn btn-warning" data-calendar-view="week">Week</button>
                          <button class="btn btn-warning" data-calendar-view="day">Day</button>
                        </div>

                        <hr>

                        <div class="btn-group">
                          <button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
                          <button class="btn" data-calendar-nav="today">Today</button>
                          <button class="btn btn-primary" data-calendar-nav="next">Next >></button>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
                <div id='calendar'></div>


            <!-- FOR TOURNAMENT SPECIFIC HANDLER -->
            <?php } else { 

                if ($bracket != '') {
                  makeBracket($bracket);
                }
                makeDiscussion();

            } ?>

          </div>

          <div class='col-md-3'>
            
            <?php
              if ($hasTournament) {
                makeTwitchPanel($hasTwitch, $twitch);
                makeVods($vods);
                if ($first || $second || $third) {
                  makeStandings($first, $second, $third);
                }
                
                makeInfo($host, $attending, $location);
              }
            ?>

            <div class='panel panel-default'>
              <div class='panel-header'>
                <h4>Upcoming:</h4>
              </div>
              <div class='panel-body'>
                <ul id="eventlist" class="nav nav-list"></ul>
              </div>
            </div>

            <div class='panel panel-default'>
              <div class='panel-header'>
                <h4>Recent:</h4>
              </div>
              <div class='panel-body'>
                <ul id="recentList" class="nav nav-list"></ul>
              </div>
            </div>

            <div class='well'>
              <h4> <a href='/submit.php#tournament'> Submit a Tournament </a></h4>
            </div>
            <hr>
          </div>

          </div>

        </div>
      </div>

    </div>



    <script type="text/javascript" src="/js/underscore-min.js"></script>
    <script type="text/javascript" src="/js/calendar.js"></script>
    <script type="text/javascript" src="/js/initTournament.js"></script>
    <script type="text/javascript" src="/js/jquery.challonge.js"></script>
    <script type="text/javascript">
        var calendar = $("#calendar").calendar(
            {
                modal: "#events-modal",
                tmpl_path: "/css/tmpls/",
                events_source: '/api/upcoming',
                onAfterEventsLoad: function(events) {
                  if(!events) {
                    return;
                  }
                  var upcomingList = $('#eventlist');
                  upcomingList.html('');

                  var recentList = $('#recentList');
                  recentList.html('');

                    var upcomingCounter = 0;
                    var recentCounter = 0;
                  $.each(events, function(key, val) {
                    var time = val.start;
                    var startDate = new Date(time);
                    var todaysDate = new Date();
                    if (time >= todaysDate) {
                      if (!(upcomingCounter >= 5)) {
                        $(document.createElement('li'))
                          .html('<a href="/tournament/' + encodeURIComponent(val.title) + '">' + val.title + '</a>')
                          .appendTo(upcomingList);
                        upcomingCounter++;
                      }
                    } else {
                      if (!(recentCounter >= 5)) {
                        $(document.createElement('li'))
                          .html('<a href="/tournament/' + encodeURIComponent(val.title) + '">' + val.title + '</a>')
                          .appendTo(recentList);
                        recentCounter++;
                      }
                    }
                  });
                },
                onAfterViewLoad: function(view) {
                  $('.page-header h3').text(this.getTitle());
                  $('.btn-group button').removeClass('active');
                  $('button[data-calendar-view="' + view + '"]').addClass('active');
                }
            });

          $('.btn-group button[data-calendar-nav]').each(function() {
            var $this = $(this);
            $this.click(function() {
              calendar.navigate($this.data('calendar-nav'));
            });
          });

          $('.btn-group button[data-calendar-view]').each(function() {
            var $this = $(this);
            $this.click(function() {
              calendar.view($this.data('calendar-view'));
            });
          });
          
    </script>

  </body>