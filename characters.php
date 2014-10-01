<?php
	$char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";
  $submit = isset($_GET['submit'])       ? trim($_GET['submit'])       : "";
	require("techs/init.php");
  
  require ("techs/initChar.php");
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

    <title>Smash Lounge: <?php echo $char ?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard_tech.css" rel="stylesheet">
    <link href="css/new.css" rel="stylesheet">
    <link href="/css/users.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

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
      createNavBar()
    ?>

	<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php makeSidebar($loggedIn, 'chars') ?>
        </div>
  
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="jumbotron banner">
            <h1 class="lead"><?php 
            	if (!$charnotFound){
            		echo $char; 
            	} else {
            		echo "Check out one of these guides!";
            	}
            ?>
            </h1>
          </div>
          <?php 
            echo "<ul class='nav nav-tabs' role='tablist' id='myTab'>";
            echo "  <li class='active'><a href='#home' role='tab' data-toggle='tab' class='tabz'>General</a></li>";
            echo "  <li><a href='#data' role='tab' data-toggle='tab' class='tabz'>Data</a></li>";
            echo "</ul>";
            echo "<div class='row'>";
            echo "<div class='col-md-8'>";
            echo "<div class='tab-content'>";
          	if (!$charnotFound) {
              echo "<div class='tab-pane active' id='home'>";
	            echo "<div class='row'>";
                echo "<table>";
                  echo "<tr>";
                    echo "<td class='chargifs'>";
                    echo "<ul class='list-group chars'>";
                    $counter = 0;
                    if ($chargifs) {
                      foreach ($chargifs as $tmpGif) {
                        $counter++;
                        echo "<li class='list-group-item'>";
                        echo "<img class='gfyitem' data-expand=true data-id='" . $tmpGif['url'] . "'/>";
                        echo  "<h4>Example #" . $counter . "</h4>";
                        echo  "<span class='text-muted'>" . $tmpGif['description'] . "</span>";
                        if ($tmpGif['source']) {
                          echo "<br /><span class='text-muted'>Courtesy of: " . $tmpGif['source'] . "</a></span>";
                        }
                        echo "</li>";
                      }
                    }
                echo "<li class='list-group-item'>";
                echo "<h4> Submit a gif: </h4>";
                makeSubmitForm("char" , $char, $tech);
                echo "</li>";
                if ($submit) {
                  alertMSG($submit);
                }
                echo "</ul>";
                echo "</td>";
                echo "</div>";
              } else {
                  echo "<div class='row placeholders'>";
                  echo "<ul class='list-group chars'>";
                  foreach ($dataChar as $charRec) {
                          echo "<li class='list-group-item list-group-item-info'>";
                          echo "<a href=characters.php?char=" . urlencode($charRec['name']) . ">";
                          echo $charRec['name'] . "</a></li>";
                          echo "\n";
                  }
                  echo "</ul>";
                  echo "</div>";


                echo "</div>";
            }
            echo "</div>";
            echo "</table>";
            echo "</div>";
            echo "</div>";
            printCharData($moves, $author);
            echo "</div>";
            echo "</div>";
          ?>
                <div class='col-md-4'>
                <td valign='top' class='charinfo'>
                  <?php if (!$charnotFound) { ?>
                    <div class="panel panel-default">
                      <!-- Default panel contents -->
                        <div class="panel-heading">How to: <?php echo $char ?></div>
                        <div class="panel-body desc">
                          <p><?php echo $charGuide; ?></p>
                        </div>
                        <!-- List group -->
                        <?php 
                       
                            echo "<ul class='list-group'>";
                            if ($storedTechz) {
                              foreach ($storedTechz as $key => $value) {
                                echo "<li class='list-group-item techLink'><a href='/techniques.php?tech=" . urlencode($value['tech']) . "'>" . $value['tech'] . "</a></li>";
                              }
                            }
                            if (!$charnotFound) {
                              echo "<li class='list-group-item dataChar'>";
                              makeCharDataTable($charTier, $charWeight, $charFallSpeed);
                              echo "</li>";
                            }
                          echo "</ul>";
                          
                        ?>
                    </div>
                    <?php } ?>


                    <!-- BEGIN  ADS -->
                  <div class="well pull-right adtainer" id="canttouchthis">
                    <div class="panel-body ad" id="adholder">
                      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                      <!-- charpagead -->
                      <ins class="adsbygoogle"
                           style="display:inline-block;width:250px;height:250px"
                           data-ad-client="ca-pub-5354507002335154"
                           data-ad-slot="9895665829"></ins>
                      <script>
                      (adsbygoogle = window.adsbygoogle || []).push({});
                      </script>
                    </div>
                  </div>

                  </td>
                </div>

                  </tr>
                </table>
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
    <script src="js/adblockzorz.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script>
      $(document).ready(function(){
        $("#canttouchthis").sticky({topSpacing:70});
      });
    </script>
  </body>
</html>
