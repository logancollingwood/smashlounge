<?php
  require_once("techs/init.php");
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
    	<?php analytics(); ?>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="A compendium for Super Smash Bros">
    	<meta name="author" content="smashlounge">
    	<title>Smash Lounge: Vods</title>

    	<!-- Main Dependencies -->
    	<?php printNewLibraries(); ?>

      <link href="/css/less/rich.css" rel="stylesheet">


  	</head>
  	<body>
      <div class="wrapper">
        <div class="box">

          <!-- top nav -->
          <?php navbar(); ?>
          <!-- /top nav -->

          <div class="row row-offcanvas row-offcanvas-left">

          <?php sidebar('users'); ?>


           <!-- main right col -->
          <div class="column col-md-10" id="main">
            <section id="banner" data-speed="4" data-type="background">
              <div class="jumbotron">
                <div class='header'>vods</div>
                <div class="blur">

                  <div class="description">Learn from some great, moderator curated vods</div>

                  <div class="mast">
                  </div>
                </div>
              </div>
            </section>
            <div class="content-wrapper">
                <div class='container'>
                  <div class = 'row'>
                    <div class='col-md-12'>
                      <div class='panel panel-default'>
                        <div class='panel-heading'>From the <a href="https://www.youtube.com/playlist?list=PLhHSkxk_9ky44HiUFCkX7LSv4ID5E7Wis">SmashLounge Invitational</a>&nbsp;
                          <a class='button button-inline button-small button-success pull-right' id='newVod' aria-label='Left Align'><span> <i class="fa fa-arrow-circle-o-right"></i>next match</span></a>
                        </div>
                        <div class='panel-body full'>
                          <div id="vod">
                            <div id="player"></div>
                          </div>
                        </div>
                        <div class='panel-footer'>
                          <p>
                            <a class='button button-inline button-small button-success' href="http://www.youtube.com/c/smashlounge"><span> <i class="fa fa-youtube-play"></i>subscribe on youtube</span></a>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class='container'>
                  <div class='row'>
                      <div class='col-md-3'>
                        <h2> Vod Category 1 </h2>
                          <div class='panel panel-default'>
                            <div class='panel-body full'>
                                <ul>
                                <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                                <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                                <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                                <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                                <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>

                                </ul>
                            </div>
                          </div>
                      </div>
                      <div class='col-md-3'>
                        <h2> Vod Category 2 </h2>
                          <div class='panel panel-default'>
                            <div class='panel-body full'>
                              <ul>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>

                              </ul>
                            </div>
                          </div>
                      </div>
                      <div class='col-md-3'>
                        <h2> Vod Category 3 </h2>
                          <div class='panel panel-default'>
                            <div class='panel-body full'>
                              <ul>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>

                              </ul>
                            </div>
                          </div>
                      </div>
                      <div class='col-md-3'>
                        <h2> Vod Category 4 </h2>
                          <div class='panel panel-default'>
                            <div class='panel-body full'>
                              <ul>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>
                              <li><img src='/img/assets/tmgico.png' alt='Cat1' style='max-width:100%;max-height:100%;' width='60px' height='60px'></li><hr>

                              </ul>
                            </div>
                          </div>
                      </div>
                  </div>
                </div>

            </div>
          </div>
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
      <script src="/js/jquery.fitvids.js"></script>
      <script src="/js/initIndex.js"></script>
    </body>
</html>
