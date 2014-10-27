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
      header("Location: login?redirect=moderate.php");
    }


    /* DO A CHECK HERE TO MAKE SURE USER IS A MODERATOR */

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Approve/Deny gifs!</title>

    <?php
      printLibraries();
    ?>
    <!-- Custom styles for this template -->
    <link href="css/dashboard_mobile.css" rel="stylesheet">


    <script type="text/javascript" src="/js/gfycat_test_june25.js"></script>
    <script type="text/javascript" src="static/js/submit.js"></script>
    <link rel="shortcut icon" href="/img/favicon.png">
</head>

<body>
    <?php
      createNavBar();
    ?>

    <div class="container-fluid">
      <div class="row">

        <!-- compartamentalize sidebar -->
        <div class="col-sm-3 col-md-2 sidebar">
           <?php makeSidebar($loggedIn, 'moderate'); ?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="jumbotron banner">
              <h1 class='lead'>Approve and deny user submissions!</h1>
              <p class="lead">Thanks for being a homie.</p>
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
        </div>
      </div>
    </div>

</body>
</html>