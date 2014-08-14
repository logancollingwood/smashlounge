<?php
  require("techs/init.php");
  require("techs/initUpcoming.php");
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

  ga('create', 'UA-51481444-1', 'smashlounge.com');
  ga('send', 'pageview');

</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A compendium for Super Smash Bros.">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Smash Lounge: Upcoming Events</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard_tech.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/calendar.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://test.gfycat.com/gfycat_test_may18.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>

    <?php
      createNavBar();
    ?>


    <div class='container-fluid'>
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar turnup">
          <li class="home"><a href="/"><span class='glyphicon glyphicon-home pull-left'></span>&nbsp;Home</a></li>
          <li class="home"><a href="/lounge.php"><span class='glyphicon glyphicon-globe pull-left'></span>&nbsp;Lounge</a></li>
          <li class="home active"><a href="/upcoming"><span class='glyphicon glyphicon-calendar pull-left'></span>&nbsp;Upcoming</a></li>
          <?php 
            makeCollapseNav("tech", $dataTech, 'out', $char, $tech, '');
            makeCollapseNav("char", $dataChar, 'out', $char, $tech);
          ?>
        </ul>
      </div>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class='jumbotron full'>
        <h1 class="hddr2">Upcoming events</h1>
        </div>


        <div class='row centered'>

          <div class='col-md-9'>
            <div class='well'>
                <!-- NAV -->
                <div class='page-header'>
                  <div class="pull-right form-inline">
                    <div class="btn-group">
                      <button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
                      <button class="btn" data-calendar-nav="today">Today</button>
                      <button class="btn btn-primary" data-calendar-nav="next">Next >></button>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-warning" data-calendar-view="year">Year</button>
                      <button class="btn btn-warning active" data-calendar-view="month">Month</button>
                      <button class="btn btn-warning" data-calendar-view="week">Week</button>
                      <button class="btn btn-warning" data-calendar-view="day">Day</button>
                    </div>
                  </div>

                  <h3></h3>
                </div>
                

              <div id='calendar'></div>
            </div>
          </div>

          <div class='col-md-3'>
            <div class='panel panel-default'>
              <div class='panel-header'>
                <h4>Upcoming:</h4>
              </div>
              <div class='panel-body'>
                <ul id="eventlist" class="nav nav-list"></ul>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>


      <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toggler.js"></script>
    <script src="js/docs.min.js"></script>
    <script type="text/javascript" src="js/underscore-min.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>
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
                      .html('<a href="' + val.url + '">' + val.title + ' ' + time +  '</a>')
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