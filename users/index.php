<?php
  require("../techs/init.php");
  require("../techs/twitch.php");
  require("../techs/initUser.php");

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

    <title>Smash Lounge</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <link href="/css/users.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://test.gfycat.com/gfycat_test_june25.js"></script>
    <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
    <script type="text/javascript" src="http://test.gfycat.com/gfycat_test_june25.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  </head>

  <body>

    <?php
      createNavBar();
    ?>

    <div class="container-fluid">
      <div class="row">

        <!-- compartamentalize sidebar -->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar turnup">
            <li class="home"><a href="/"><span class='glyphicon glyphicon-home pull-left'></span>&nbsp;Home</a></li>
            <li class="home active"><a href='/users'><span class='glyphicon glyphicon-user pull-left'></span>&nbsp;Users</a></li>
            <li class="home"><a href="/lounge.php"><span class='glyphicon glyphicon-globe pull-left'></span>&nbsp;Lounge</a></li>
            <?php 
              makeCollapseNav("tech", $dataTech, 'out', $char, $tech, '');
              makeCollapseNav("char", $dataChar, 'out', $char, $tech, '');
            ?>
          </ul>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



          <div class="jumbotron full">
            <div class="hddr3"><?php echo $username; ?></div>
            
          </div>

          <div class="row">

            <div class='col-md-3'>
              <?php makeMainPanel($hasMain, $main, $mysqli); ?>
              <?php makeSponsorPanel($hasSponsor, $sponsor); ?>
              <?php makeTwitterPanel($hasTwitter, $twitter); ?>
              <?php createBeg(.5); ?>
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
            </div>


        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="/js/jquery.fitvids.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/toggler.js"></script>
    <script src="/js/jquery.fitvids.js"></script>
    <script>
       $(document).ready(function(){
          // Target your .container, .wrapper, .post, etc.
          $(".youtube").fitVids();
        });
    </script>
  </body>
</html>
