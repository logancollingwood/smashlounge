<?php

  
  require_once("techs/init.php");
  require_once("techs/twitch.php");
  require_once("techs/initUser.php");
  require_once("techs/sentry.php");

    $username;
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
    

    <title>Smash Lounge: <?php echo $username ?></title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    

    <?php 
      printLibraries();
    ?>

    <!-- Custom styles for this template -->
    <link href="/css/dashboard_mobile.css" rel="stylesheet">

    <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqmaEEEbIm2Iln3ieqGdtfzVLi6AzHA1Q&sensor=true">
    </script>

  </head>

  <body>
    <div id="fb-root"></div>
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
      }(document, 'script', 'facebook-jssdk'));</script>

    <?php
      createNavBar();
    ?>

    <div class="container-fluid">
      <div class="row">


        <!-- compartamentalize sidebar -->
        <div class="col-sm-3 col-md-2 sidebar">
           <?php makeSidebar($loggedIn, 'users'); ?>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php if ($loggedIn && $user['username'] == $username) {
                  echo "<div class='alert alert-info alert-dismissible SL' role='alert'>
                          <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
                          <a href='/update.php'>Modify your profile information! </a>
                        </div>";
                }
          ?>
          <div class="jumbotron banner">
            <?php 

            if ($found) {
              
                echo "<div class='row'>";

                  echo "<div class='col-md-2 vcenter'>";
                    if ($hasImage) {
                      echo "<img id='profpic' border='0' src='/img/profiles/".$profileImage."' width='60%' alt='$username' height='60%'>";
                    }
                  echo "</div>";

                  echo "<div class='col-md-2 vcenter'>";
                    if ($hasSponsor) {
                      echo "<div class='sponsor'>$sponsor</div> ";
                    }
                  echo "</div>";

                  echo "<div class='col-md-7 vcenter'>";
                    echo "<h1 class='lead' style='text-align:left;'>$username</h1> ";
                  echo "</div>";

                  echo "<div class='col-md-1 vcenter'>";
                    /*
                    echo "<div class='row'>";
                    if ($hasFacebook) {
                      echo "<div class='fb-like' data-href='https://www.facebook.com/" . $facebook ."' data-layout='box_count' data-action='like' data-show-faces='true'></div>";
                    }
                    echo "</div>";
                    */
                    echo "<div class='row'>";
                    echo "<a class='anchor' href='/usercard?username=" . $username . "'><i class='fa fa-external-link-square fa-2x'></i></a>";
                    echo "</div>";
                  echo "</div>";

                echo "</div>";  
            } else { 
              $allUsers = getAllUsers($mysqli);
                echo "<div class='row'>";
                  echo "<h1 class='lead'>global directory</h1>";
                echo "</div>"; 

            }


            ?>
            
          </div>


          

            <?php if ($found) { ?>
              <div class="row">
                <div class='col-md-3'>
                  <?php makeMainPanel($hasMain, $main, $mysqli); ?>
                  <?php makeSponsorPanel($hasSponsor, $sponsor); ?>
                  <?php makeLocationPanel($hasLocation, $location); ?>
                  <?php makeFriendcodePanel($hasFriendcode, $friendcode); ?>
                  <?php makeTwitchPanel($hasTwitch, $twitch); ?>
                  <?php makeTwitterPanel($hasTwitter, $twitter); ?>

                </div>

                <div class="col-md-5">
                  <?php makePinnedPanel($hasVod, 'youtube', $vod, $hasGifs, $usergifs); ?>
                </div>

                <div class="col-md-4">
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
                  <hr>
                  <?php createBeg(.3); ?>
                  </div>

                <?php } else {
                  echo "<div class='row'>";
                    makeAllUsers($allUsers);
                  echo "</div>";
                } ?>
                
            </div>

            <!-- This is the handler for displaying all profiles in the event that the profile is NOT found-->


        </div>
      </div>
    </div>


    <script src="/js/jquery.fitvids.js"></script>
    <script src="/js/mapInitUser.js"></script>
    <script>

    $(document).ready(function() {  
      $(".youtube").fitVids();
      $(".panel-body.userlist").css({'height':($("#map-canvas").height()-$(".panel-heading").height()+'px')});
      // Live Search
      // On Search Submit and Get Results
      function search() {
        var query_value = $('input#search').val();
        $('b#search-string').html(query_value);
        
          $.ajax({
            type: "POST",
            url: "/techs/search.php",
            data: { query: query_value },
            cache: false,
            success: function(html){
              $("ul#results").html(html);
            }
          });
           
      }

      $("input#search").on("keyup", function(e) {
        // Set Timeout
        clearTimeout($.data(this, 'timer'));

        // Set Search String
        var search_string = $(this).val();


        $("ul#results").fadeIn();
        $('h4#results-text').fadeIn();
        $(this).data('timer', setTimeout(search, 100));

      });

    });
    </script>
  </body>
</html>
