<?php
  $char = isset($_GET['char'])       ? trim($_GET['char'])       : "";
  $tech = isset($_GET['tech'])       ? trim($_GET['tech'])       : "";
  $submit = isset($_GET['submit'])       ? trim($_GET['submit'])       : "";
  require("techs/init.php");
  require("techs/initTechs.php");
  require_once("techs/controller.php");
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
  logan.collingwood@gmail.com
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

    <title>Smash Lounge: <?php echo $tech ?></title>

    <?php printLibraries(); ?>

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
    
  </head>
  <body>
  
    <?php createNavBar(); ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php makeSidebar($loggedIn, 'techs'); ?>
        </div>
  
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="jumbotron banner">
            <h1 class="lead"><?php if ($tech){ echo $tech; } else { echo "Check out one of these techs!"; } ?></h1>
            <p class="fifty"><?php if ($description) echo $description; ?></p>
            <?php if ($input): ?>
              <p class='fifty2'>Inputs: <br /><?php echo $input; ?></p>
            <?php endif; ?>
            <?php if ($wiki): ?>
              <p><a class='btn btn-primary btn-lg bttn' role='button' href='" . $wiki . "'>Learn More</a></p>
            <?php endif; ?>
          </div>

          <div class='row'>
            <div class='col-md-8'>
              <?php if (!$notFound): ?>
                <div class='row centered'>
                  <?php $counter = 0; ?>
                  <?php if ($gifs): ?>
                    <ul id='techzz'>
                      <?php foreach ($gifs as $tmpGif): ?>
                        <li class='list-group-item'>
                          <?php if (in_array($tech, $hasFrameData)): ?>
                            <div class='row'>
                              <div class='col-md-8'>
                                <div id="gif<?php echo $counter; ?>" data-title=true data-autoplay=false data-controls=true data-speed=0.25 data-expand=false data-id='<?php echo $tmpGif['url']; ?>' style='width:100%'></div>
                              </div>
                              <div class='col-md-4'>
                                <div class='controller-wrapper'>
                                  <?php echo makeControllerWithID($counter); ?>
                                </div>
                                <hr>
                                <div class='well'>
                                  <span class='text-muted'><?php echo $tmpGif['description']; ?></span>
                                  <?php if ($tmpGif['source'] && filter_var($tmpGif['source'], FILTER_VALIDATE_URL)): ?>
                                    <br />
                                    <span class='text-muted'><a href='<?php echo $tmpGif['source']; ?>'>source</a></span>
                                  <?php elseif ($tmpGif['source']): ?>
                                    <br /><span class='text-muted'>Courtesy of: <?php echo $tmpGif['source']; ?></span>
                                  <?php endif; ?>
                                </div>
                              </div>
                            </div>
                          <?php else: ?>
                            <img class='gfyitem' data-expand=true data-id='<?php echo $tmpGif['url']; ?>'/>
                            <h4>Example of <?php echo $tech; ?></h4>
                            <span class='text-muted'><?php echo $tmpGif['description']; ?></span>
                            <?php if ($tmpGif['source'] && filter_var($tmpGif['source'], FILTER_VALIDATE_URL)): ?>
                              <br /><span class='text-muted'><a href='<?php echo $tmpGif['source']; ?>'>source</a></span>
                            <?php elseif ($tmpGif['source']): ?>
                              <br /><span class='text-muted'>Courtesy of: <?php echo $tmpGif['source']; ?></span>
                            <?php endif; ?>
                            <span class='badge'><?php echo $counter; ?></span>
                          <?php endif; ?>
                        </li>
                        <?php $counter++; ?>
                      <?php endforeach; ?>

                      <li class='list-group-item'>
                        <h4> Submit a gif: </h4>
                        <?php makeSubmitForm("tech" , $char, $tech); ?>
                      </li>
                      <?php
                        if ($submit) {
                          alertMSG($submit);
                        }
                      ?>
                    </ul>
                  <?php else: ?>
                    <ul class='list-group'>
                      <?php foreach ($dataTech as $techRec): ?>
                          <li class='list-group-item list-group-item-info'>
                            <a href='techs.php?tech=<?php echo urlencode($techRec); ?>'>
                              <?php echo $techRec; ?>
                            </a>
                          </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </div>
            
            <div class='col-md-4'>
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
              
              <?php createBeg(.5); ?>
              
              <hr>    
              
              <div class="well pull-right adtainer" id="canttouchthis">
                <div class="panel-body ad" id="adholder">
                  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                  <!-- responsive! -->
                  <ins class="adsbygoogle"
                       style="display:block"
                       data-ad-client="ca-pub-5354507002335154"
                       data-ad-slot="6479366620"
                       data-ad-format="auto"></ins>
                  <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/toggler.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/adblockzorz.js"></script>
    <script type="text/javascript" src="js/svg.min.js"></script>
    <script type="text/javascript" src="js/frameinput.js"></script>
    <?php
      /**
       * What we can do for this script is store json encoded variables
       * in the database, with the gifs.
       *
       * That way, all you have to do is a load a gif, and its frame data with one database pull.
       */
      
      $DOWN = array('270', '100');
      $UP = array('90', '100');
      $LEFT = array('180', '100');
      $RIGHT = array('0', '100');
      $SOUTHEAST = array('315', '100');
      $SOUTHWEST = array('225', '100');
      $NORTHWEST = array('135', '100');
      $NORTHEAST = array('45', '100');
      $EMPTY = array();

      $json = array();

      $json[0] = array(
        array('frame' => 33, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 34, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 35, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 36, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 37, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 38, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 39, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 40, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 41, 'buttons' => array('z'), 'ctrlStick' => array())

      );

      $json[1] = array(
        array('frame' => 30, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 31, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 32, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 33, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 34, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 35, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 36, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 37, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 38, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 39, 'buttons' => array(''), 'ctrlStick' => $RIGHT),
        array('frame' => 40, 'buttons' => array('y'), 'ctrlStick' => array()),
        array('frame' => 41, 'buttons' => array('z'), 'ctrlStick' => array())
      );
    ?>
    <script type="text/javascript">
        //Initialize Frame Inputs
        <?php for ($i = 0; $i <= $counter; $i++): ?>
            $( '#controller-<?php echo $i; ?>' ).frameinputs( <?php echo json_encode($json[$i]); ?> );
        <?php endfor; ?>
    </script>
</body>