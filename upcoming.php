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
  require_once("techs/sentry.php");


    $loggedIn = false;
    if (Sentry::check())
    {
        $loggedIn = true;
        $user = Sentry::getUser();
    }


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
    <meta name="description" content="A compendium for Super Smash Bros.">
    <meta name="author" content="">


    <title>Smash Lounge: Upcoming Events</title>

    


    
    <?php 
      printLibraries();
    ?>

    <!-- Custom styles for this template -->
    <link href="/css/dashboard_mobile.css" rel="stylesheet">
    <link href="/css/calendar.css" rel="stylesheet">



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


    <div class='container-fluid'>
      <div class="col-sm-3 col-md-2 sidebar">
        <?php makeSidebar($loggedIn, 'upcoming') ?>
      </div>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        
          <div class='jumbotron banner'>
            <div class='row'>
              <?php 
                if (!$hasTournament) { 
                  echo "<h1 class='lead'>Upcoming events</h1>";
                } else {
                  echo "<div class='col-md-1 vcenter'>";
                    echo "<a href='/upcoming.php'><i class='fa fa-angle-left fa-4x'></i></a>";
                  echo "</div>";
                  echo "<div class='col-md-8 vcenter'>";
                    echo "<h1 class='lead'>$tournament</h1>";
                  echo "</div>";
                  echo "<div class='col-md-3 vcenter'>";
                    echo "<h1><anchor>" . date("F jS", strtotime($startDate))  . " - " . date("F jS", strtotime($endDate)) . "</anchor></h2>";
                  echo "</div>";
                }
              ?>
            </div>
          </div>
       

        <div class='row'>

          <div class='col-md-9'>

            <!-- NO TOURNAMENT HANDLER -->
            <?php if (!$hasTournament) { ?>


              <div class='well'>
                <!-- NAV -->
                <div class='page-header'>
                  <div class='row'>

                    <div class='col-md-8'>
                      <h3></h3>
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
              </div>

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

                if ($first || $second || $third) {
                  makeStandings($first, $second, $third);
                }
                
                makeInfo($host, $attending);
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
                  var list = $('#eventlist');
                  list.html('');

                  $.each(events, function(key, val) {
                    var time = new Date(val.start);
                    
                    $(document.createElement('li'))
                      .html('<a href="/tournament/' + encodeURI(val.title) + '">' + val.title + '</a>')
                      .appendTo(list);
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