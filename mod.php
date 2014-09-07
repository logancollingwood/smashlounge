<?php
    require("techs/init.php");
    require_once("techs/sentry.php");
    $loggedIn = false;
    if (Sentry::check())
    {
        $loggedIn = true;
        $user = Sentry::getUser();
    }
    if (!$loggedIn) {
      header("Location: login?str=login");
    }


    /* DO A CHECK HERE TO MAKE SURE USER IS A MODERATOR */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Approve/Deny gifs!</title>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../css/custom.css" rel="stylesheet" media="screen">
    <link href="static/css/login.css" rel="stylesheet">
    <link href="static/css/manage.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://test.gfycat.com/gfycat_test_june25.js"></script>
    <script type="text/javascript" src="static/js/submit.js"></script>
    <link rel="shortcut icon" href="/img/favicon.png">
</head>

<body>
    <?php
      createNavBar('logout');
    ?>

    <div class="container">

       <div class="page-header">
        <h1>Approve and deny user submissions!</h1>
        <p class="lead">Thanks for being a homie.</p>
        <hr>
      </div>

      <?php 
        $column = 0;
        $width = 2;
        
        echo "<div class='row'>";
          foreach ($gifs as $tmpGif) {
            if ($column >= $width) {
              $column = 0;
              echo "</div>";
              echo "<div class='row'>";
            }
            echo "<div class='col-md-6' id='" . $tmpGif['id'] . "'>";
                echo "<div class='panel panel-default'>";
                  echo "<div class='panel-body'>";
                    echo "<img class='gfyitem' data-expand=true data-id='" . $tmpGif['url'] . "'/>";
                    echo "<div class='well'>";
                      if ($tmpGif['description'] != '') 
                        echo "<h3>Description:<br/> " . $tmpGif['description'] . "</h3>";
                      else {
                        echo "<h3>Title: No Title Submitted</h3>";
                      }
                    echo "</div>";
                echo "</div>";

                echo "<div class='panel-footer'>";
                  echo "<div class='btn-group btn-group-justified'>";

                    echo "<div class='btn-group'>";
                      echo "<button type='button' id='good." . $tmpGif['id'] . "' class='btn btn-success'><span class='glyphicon glyphicon-thumbs-up'></span></button>";
                    echo "</div>";
                    echo "<div class='btn-group'>";
                      echo "<button type='button' id='bad." . $tmpGif['id'] . "' class='btn btn-danger'><span class='glyphicon glyphicon-thumbs-down'></span></button>";
                    echo "</div>";

                  echo "</div>";
              echo "</div>";
            echo "</div>";
            echo "</div>";
            $column++;

          }
          echo "</div>";
      ?>

    </div> <!-- /container -->

</body>
</html>