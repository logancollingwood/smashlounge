<?php
  $char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";
  require("techs/init.php");
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
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <li class="home active"><a href="/"><span class='glyphicon glyphicon-home pull-left'></span>&nbsp;Home</a></li>
            <li class="home"><a href="/lounge.php"><span class='glyphicon glyphicon-globe pull-left'></span>&nbsp;Lounge</a></li>
            <?php 
              makeCollapseNav("tech", $dataTech, 'out', $char, $tech, '');
              makeCollapseNav("char", $dataChar, 'out', $char, $tech, '');
            ?>
          </ul>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">



          <div class="jumbotron full">

            <h1 class="hddr">smash lounge</h1>
            <p class="fifty">A compendium for acquiring ultimate smash knowledge. Check out an example tech to get going<br/>
            <?php
              echo "<a class='btn btn-primary btn-lg bttn' href=techniques.php?tech=" .  urlencode($randomTech) . ">"."<span class='glyphicon glyphicon-search'></span>    " . $randomTech . "</a>";
              echo "</p>";
            ?>
          </div>

          <div class="row">
            <div class="col-md-8 col-sm-8">

            <?php
              $string_reddit = file_get_contents("http://www.reddit.com/r/smashgifs/hot.json");
              $json = json_decode($string_reddit, true);  
              $children = $json['data']['children'];
              $randGif = rand(0, count($children)-1);

                echo "<div class='panel panel-default gifTainer'>";
                  $title = $children[$randGif]['data']['title'];
                  $url = $children[$randGif]['data']['url'];
                  $permalink = "http://www.reddit.com" . $children[$randGif]['data']['permalink'];
                  if (strpos($url, "gfycat") == false) {
                    $url = getNewGif($url, $children);
                  }
                  drawGif($title, $url, $permalink);
                echo "</div>";
              ?>


            </div>

            <div class='col-md-4 col-sm-4'>
              <div class='panel panel-default'>
                <div class='panel-heading'>Introducing..</div>
                <div class='panel-body vimeo'>
                  <iframe src="//player.vimeo.com/video/101609571?byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/101609571">Smashlounge.com // Character Data</a> from <a href="http://vimeo.com/bobackv">boback</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
                </div>
              </div>

              <div class='panel panel-default'>
                <div class='panel-heading'> Live SSBM Streams </div>
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
                      echo "<hr>";
                      $counter++;
                    }
                  ?>
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
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toggler.js"></script>
    <script>
       $(document).ready(function(){
          // Target your .container, .wrapper, .post, etc.
          $(".vimeo").fitVids();
        });
    </script>
  </body>
</html>
