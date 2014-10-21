<?php
  require("techs/init.php");
  require("techs/twitch.php");
  require("techs/initUser.php");
  require_once("techs/sentry.php");
  $username = $_GET['username'];
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
           <?php makeSidebar(false, 'users'); ?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="jumbotron banner">
            <div class='row'>
              <h1 class='lead'>Submit a SmashGif</h1>
            </div>
          </div>

          <!-- Submit Form Row -->
          <div class="row">
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
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/adblockzorz.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.particleground.min.js"></script>

    <script>
      $(document).ready(function(){
        // Target your .container, .wrapper, .post, etc.
        $(".youtube").fitVids();

        $("#canttouchthis").sticky({topSpacing:70});

        $('#particles').particleground({
          dotColor: '#5cbdaa',
          lineColor: '#5cbdaa'
        });

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
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-51481444-1', 'auto');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');
    </script>
    
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '675204735898402',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
  </body>
</html>
