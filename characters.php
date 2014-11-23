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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A compendium for Super Smash Bros">
    <meta name="author" content="smashlounge">


    <title>Smash Lounge: <?php echo $char ?></title>

    <!-- Bootstrap core CSS -->
    <?php 
      printLibraries();
    ?>
    

    <!-- Custom styles for this template -->
    <link href="/css/dashboard_mobile.css" rel="stylesheet">


    

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
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
                          echo "<li class='list-group-item'>";
                          echo "<h4> <a href='/submit.php'> Submit a gif </a></h4>";
                          //makeSubmitForm("char" , $char, $tech);
                          echo "</li>";
                        }
                      } else {
                        echo "<li class='list-group-item'>";
                        echo  "<h4>Woops! This character has no general gifs! <br><small><a href='/submit.php'>Submit One</a></small></h4>";
                        echo "</li>";
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

  </body>
</html>
