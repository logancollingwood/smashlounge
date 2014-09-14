<?php

  require_once('api/users.php');

  $username = isset($_GET['username'])       ? trim($_GET['username'])       : "";

  $found = false;
  $id = getUserID($mysqli, $username);
  //echo $id;
  if ($id == '') {
    $found = false;
  } else {
    $found = true;
    $info = getInfoForUsername($mysqli, $id);
  }
  //print_r($info);

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
    <link href="css/new.css" rel="stylesheet">
    <link href='css/users.css' rel='stylesheet'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://test.gfycat.com/gfycat_test_june25.js"></script>
    <style type="text/css">
      html {
        width: 600px;
        height: 400px;
      }
      .row {
        margin-left: 0px;
        margin-right: 0px;
        padding: 5px;
      }
      body {
        width:600px;
        height:400px;
         -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
      }
      .rounded {
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
      }
      rounded {
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        border-radius: 20px;
      }
      body > div > div.navbar.navbar-inverse.navbar-fixed-top {
        width: 600px;
        -webkit-border-bottom-right-radius: 20px;
        -webkit-border-bottom-left-radius: 20px;
        -moz-border-radius-bottomright: 20px;
        -moz-border-radius-bottomleft: 20px;
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;
      }
      .panel-body.card {
        margin-left: 0px;
        width: 405px;
      }
      .info {
       padding-left: 5%;
      }



    </style>
  </head>

  <body>
    <div class='row rounded'>
      <div class='panel panel-default'>
        <div class='panel-heading'>
          <?php
           echo "      <a href='/$username'>smash lounge:&nbsp;&nbsp;&nbsp;&nbsp;$username</a>";
           ?>

        </div>
        <div class='panel-body'>
           
              <?php 

                if ($found) {

                  echo"<div class='info'>";
                  echo "  <h3><small>" .  $info['sponsor'] . "</small>    $username</h3>";
                  echo "</div>";
                }

              ?>

        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>