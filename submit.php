<?php
  require("techs/init.php");
  require("techs/twitch.php");
  require("techs/initUser.php");
  require_once("techs/sentry.php");
    $username = isset($_GET['username'])       ? trim($_GET['username'])       : "";
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
  smashlounge@gmail.com

-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dev - An Example Submit Form</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php printLibraries(); ?>

    <!-- Custom styles for this template -->
    <link href="css/dashboard_tech.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">
    <link href="css/users.css" rel="stylesheet">
    <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

  </head>

  <body>
    <div id="fb-root"></div>
    <?php include_once('submit-nav.php'); ?>

    <div class="container-fluid">
      <div class="row">

        <!-- compartamentalize sidebar -->
        <div class="col-sm-3 col-md-2 sidebar">
           <?php makeSidebar($loggedIn, 'submit'); ?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="jumbotron banner">
            <div class='row'>
              <h1 class='lead'>Submit Data</h1>
            </div>
          </div>

            <ul class='nav nav-tabs' role='tablist' id='myTab'>
              <li class='active'><a href='#gif' role='tab' data-toggle='tab' class='tabz'>Gifs</a></li>
              <li><a href='#tournament' role='tab' data-toggle='tab' class='tabz'>Tournaments</a></li>
              <li><a href='#technique' role='tab' data-toggle='tab' class='tabz'>Techniques</a></li>
              <li><a href='#group' role='tab' data-toggle='tab' class='tabz'>Regional Group</a></li>
            </ul>

          <!-- Submit Form Row -->
          <div class="row">


            
              <div class='tab-content'>

                <div class='tab-pane active' id='gif'>
                  <div class='col-md-9'>
                    <hr>
                    <div class='well SL'>
                      <form class="form">
                        <!-- Potentially Use the following hidden fields -->
                        <input type="hidden" name="pageid" value="" />
                        <input type="hidden" name="dataid" value="" />
                        <fieldset>
                          <label for="url">GfyCat URL</label>
                          <input id='giffyurl' type="text" class="form-control" name="gif_url" placeholder="gfycat.com/AcceptableWelllitFruitbat"/>

                        </fieldset>
                        <fieldset>
                          <label for="source">Original Source</label>
                          <input type="text" class="form-control" maxlength="100" name="gif_source" placeholder="Big House 4"/>
                        </fieldset>
                        <fieldset>
                          <label for="description">Description</label>
                          <input type="text" class="form-control" maxlength="100" name="gif_description" placeholder="Mew2King Ken Comboes a Scrub"/>
                        </fieldset>
                        <fieldset>
                          <label for="description">credits:</label>
                          <input type="text" class="form-control" maxlength="100" name="gif_credits" 
                          <?php if($loggedIn) {
                              echo " value=" . $user['username'];
                            }
                          ?> placeholder="Mew2King Ken Comboes a Scrub"/>
                        </fieldset>
                        <br>
                        <button class="btn btn-default post-submissions">submit</button>
                      </form>
                    </div>
                  </div>

                  <div class='col-md-3'>
                    <div id='gfyLocation'>
                    </div>
                  </div>
                </div>

                <div class='tab-pane' id='tournament'>
                  <div class='tab-pane' id='tournament'>
                  <div class='col-md-6 col-md-offset-2'>
                    <hr>
                    <div class='well SL'>
                      <form class="form">
                        <!-- Potentially Use the following hidden fields -->
                        <input type="hidden" name="pageid" value="" />
                        <input type="hidden" name="dataid" value="" />
                        <fieldset>
                          <label for="url">Tournament Name</label>
                          <input type="text" class="form-control" name="tournament_name" placeholder="Do You Fox With It?"/>
                        </fieldset>
                        <fieldset>
                          <label for="source">Start Date</label>
                          <input type="date" class="form-control" maxlength="100" name="tournament_start" placeholder="6/24/15"/>
                        </fieldset>
                        <fieldset>
                          <label for="description">End Date</label>
                          <input type="date" class="form-control" maxlength="100" name="tournament_end" placeholder="6/25/15"/>
                        </fieldset>
                        <fieldset>
                          <label for="description">Twitch URL</label>
                          <input type="text" class="form-control" maxlength="100" name="tournament_twitch" placeholder="twitch.tv/showdownsmash"/>
                        </fieldset>
                        <fieldset>
                          <label for="description">Challonge URL</label>
                          <input type="text" class="form-control" maxlength="100" name="tournament_challonge" placeholder="http://challonge.com/BiWeekly1"/>
                        </fieldset>
                        <fieldset>
                          <label for="description">credits:</label>
                          <input type="text" class="form-control" maxlength="100" name="description" 
                          <?php echo " value=" . $user['username']?> placeholder="Mew2King Ken Comboes a Scrub"/>
                        </fieldset>
                        <br>
                        <button class="btn btn-default post-submissions">submit</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>

                <div class='tab-pane' id='technique'>
                  TECHNIQUE
                </div>

                <div class='tab-pane' id='group'>
                  GROUP
                </div>

              </div>
            
          </div>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toggler.js"></script>
    <script src="js/adblockzorz.js"></script>

    <script>
      $(document).ready(function(){

        $(".post-submissions").on("click", function(event) {
          // Prevent default behavior
          event.preventDefault();

          $.ajax({
            url: 'postSubmission.php',
            type: 'POST',
            data: $(".submit-wrapper form").serialize(),
          })
          .done(function() {
            // Place How We Should Handle Successful Gif Submissions
          })
          .fail(function() {
            // Place How We Should Handle Failed Submissions
          })
          .always(function() {
            // Handler for all gif submissions
          });
        });
        
      });
    </script>
    <script>
      $(document).ready(function(){
        var spawned = false;
        $("#giffyurl").change(function(event){     
            console.log('firing');
            // prevent form from being submitted
            //event.preventDefault();

            // get value of text box using .val()
            var url = $("#giffyurl").val();

            var re = /((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/; 
            var str = url;
            var m = re.exec(str);
            //console.log(m[4]);
            if (m == null) {
              if (spawned) {
                $( ".spawned" ).empty();
                $( ".spawned" ).remove();
                spawned = false;
              }
              return;
            }

            $("#gfyLocation").append("<div class='spawned'><hr><div class='well'><img class='gfyitem' data-expand=true data-id='" + m[4] + "' /></div></div>");
            spawned = true;
            gfyCollection.init();
            //return;
        });
      })
    </script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-51481444-1', 'auto');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');
    </script>

  </body>
</html>
