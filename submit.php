<?php
  require("techs/init.php");
  require_once("techs/sentry.php");
  $username = isset($_GET['username'])       ? trim($_GET['username'])       : "";


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
    <meta name="description" content="A compendium for Super Smash Brothers">
    <meta name="author" content="smashlounge">

    <title>smashlounge - submit</title>

    <?php printNewLibraries(); ?>

    <link href="/css/less/rich.css" rel="stylesheet">

    <style>
      #map-canvas {
        height: 200px;
      }
    </style>
    
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqmaEEEbIm2Iln3ieqGdtfzVLi6AzHA1Q&sensor=true">
    </script>
  </head>

  <body>
    <div id="fb-root"></div>

    <div class="wrapper">
      <div class="box">

        <!-- top nav -->
        <?php navbar(); ?>
        <!-- /top nav -->

        <div class="row row-offcanvas row-offcanvas-left">

       
        <?php sidebar('submit'); ?>

          <!-- main right col -->
          <div class="column col-md-10" id="main">

          <section id="banner" data-speed="4" data-type="background">
              <div class="jumbotron">
                <div class='header'>
                  Submit Data
                </div>
                <div class="blur">
                  <div class="description">                   
                    All submissions are reviewed by community moderators.
                  </div>
                  <div class="mast">
                  </div>
                </div>
              </div>
            </section>


            <div class="alert alert-danger alert-dismissible" id="nullfields" role="alert" hidden='true'>
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Whoops!</strong> Looks like you forgot to fill out some fields
            </div>

            <div class="content-wrapper">
              <div class="row">
              <ul class='nav nav-tabs' role='tablist' id='myTab'>
                <li class='active'><a href='#gif' role='tab' data-toggle='tab' class='tabz' data-id="gif">Gifs</a></li>
                <li><a href='#vod' role='tab' data-toggle='tab' class='tabz' data-id="vod">Vods</a></li>
                <li><a href='#technique' role='tab' data-toggle='tab' class='tabz' data-id="technique">Techniques</a></li>
                <li><a href='#group' role='tab' data-toggle='tab' class='tabz' data-id="group">Regional Group</a></li>
              </ul>

            
              <div class='tab-content'>

                <div class='tab-pane active' id='gif'>
                  <div class='col-md-9'>
                    
                    <div class='well'>
                      <br>
                      <div class='submit-wrapper'>

                      <!-- ID Added, Consider Renaming -->
                      <form id="submit-gif-form" method="post" class="form-horizontal">

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="gif_selectorid">type</label>
                          <div class="col-md-8">
                            <select id='gif_selectorid' name='gif_selector' class="form-control">
                                <option value="tech">Technique Gif</option>
                                <option value="char">Character Gif</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group" id='techSelector'>
                          <label class="col-md-4 control-label" for="gif_techselectorid">technique</label>
                          <div class="col-md-8">
                            <select id='gif_techselectorid' name='gif_techselector' class="form-control">
                                <?php
                                  $techsList = getAllTechs($mysqli, $techTable);

                                  foreach($techsList as $tech) {
                                    
                                    echo "<option value='" . $tech['id'] . "'>" . $tech['tech'] . "</option>";
                                  }
                                ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group" id='charSelector'>
                          <label class="col-md-4 control-label" for="gif_charselectorid">character</label>
                          <div class="col-md-8">
                            <select id='gif_charselectorid' name='gif_charselector' class="form-control">
                              <?php

                                foreach($dataChar as $char) {
                                  echo "<option value='" . $char['id'] . "'>" . $char['name'] . "</option>";
                                }
                              ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="giffyurl">gfycat url</label>
                          <div class="col-md-8">
                            <input id='giffyurl' type="text" class="form-control" name="gif_url" placeholder="gfycat.com/AcceptableWelllitFruitbat"/>
                            <span class="help-block">(a valid gfycat will appear on the right after you finish typing)</span>  
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="gif_sourceid">original source</label>
                          <div class="col-md-8">
                            <input id='gif_sourceid' type="text" class="form-control" maxlength="100" name="gif_source" placeholder="Big House 4"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="gif_descriptionid">description</label>
                          <div class="col-md-8">
                            <input id='gif_descriptionid' type="text" class="form-control" maxlength="100" name="gif_description" placeholder="Mew2King Ken Comboes a Scrub"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_nameid">Include Frame Data?</label>
                          <div class="col-md-8">
                            <input id="boolean-framedata" type="checkbox" class="form-control" name="boolean-framedata"/>
                          </div>
                        </div>

                        <button id="submitgif" class="btn btn-default post-submissions">submit</button>
                        <br>
                      </form>

                      <!-- GIF Frame Data Form; Hidden Then Shown After GIF Submission -->
                      <form id="gifFrameData" method="post" class="form-horizontal" style="display: none">
                        <div id="gfyFrameTarget"></div>
                        
                        <p>Find the frame, and describe the input used at that frame.</p>

                        <button id="prevFrame" class="btn btn-default">
                          <i class="fa fa-step-backward"></i>
                        </button>

                        <button id="toggleGfy" class="btn btn-default">
                          <i class="fa fa-play"></i>
                        </button>
                        
                        <button id="nextFrame" class="btn btn-default">
                          <i class="fa fa-step-forward"></i>
                        </button>

                        <div class="form-group">
                          <div class="col-md-4 text-right">
                            <span>Frame:</span>
                          </div>
                          <div class="pull-left">
                            <span id="frame-number" data-framenumber="1">0</span>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-md-4 control-label">Button(s) Pressed:</label>
                          <div class="pull-left">
                            <label class="checkbox-inline">
                              <input id="button-a" type="checkbox" value="a"> A
                            </label>
                            <label class="checkbox-inline">
                              <input id="button-b" type="checkbox" value="b"> B
                            </label>
                            <label class="checkbox-inline">
                              <input id="button-x" type="checkbox" value="x"> X
                            </label>
                            <label class="checkbox-inline">
                              <input id="button-y" type="checkbox" value="y"> Y
                            </label>
                            <label class="checkbox-inline">
                              <input id="button-z" type="checkbox" value="z"> Z
                            </label>
                            <label class="checkbox-inline">
                              <input id="button-l" type="checkbox" value="l"> L
                            </label>
                            <label class="checkbox-inline">
                              <input id="button-r" type="checkbox" value="r"> R
                            </label>
                          </div>
                        </div>
                        
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_nameid">Control Stick Angle (Degrees):</label>
                          <div class="pull-left">
                            <input id="controlstick-degrees" type="number" class="form-control" min="0" max="360" placeholder="360"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_nameid">Control Stick Amount (Percent):</label>
                          <div class="pull-left">
                            <input id="controlstick-amount" type="number" class="form-control" min="0" max="100" placeholder="100"/>
                          </div>
                        </div>

                        <button id="submitFrameData" class="btn btn-default post-submission">Submit Frame Data</button>
                      </form>
                      </div>
                    </div>
                  </div>

                  <div class='col-md-3'>
                    <div class='gfyLocation'></div>
                  </div>
                </div>


                <div class='tab-pane' id='vod'>
                  
                  <div class='col-md-12'>
                    
                    <div class='well SL'>
                      <br>
                      <div class='submit-wrapper'>
                      <form method="post" class="form-horizontal">

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="vod_urlid">Vod URL</label>
                          <div class="col-md-8">
                            <input id="vod_urlid" type="text" class="form-control" name="vod_url" placeholder="youtube.com/v/"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="vod_titleid">Vod Title</label>
                          <div class="col-md-8">
                            <input id="vod_titleid" type="text" class="form-control" name="vod_title" placeholder="WOMBO COMBO"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="vod_descid">Vod Description</label>
                          <div class="col-md-8">
                            <input id="vod_descid" type="text" class="form-control" name="vod_desc" placeholder="PewPewU going OFF"/>
                          </div>
                        </div>

                        <div class="form-group" id='vodSelector'>
                          <label class="col-md-4 control-label" for="vod_selectorid">vod type</label>
                          <div class="col-md-8">
                            <select id='vod_selectorid' name='vod_type' class="form-control">
                              <?php

                                foreach($vodcategories as $key => $category) {
                                  echo "<option value='$key'>" . $category . "</option>";
                                }
                              ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="vod_creditid">Vod credit</label>
                          <div class="col-md-8">
                            <input id="vod_creditid" type="text" class="form-control" name="vod_credit" placeholder="VGBC GIMR"/>
                          </div>
                        </div>


                        <br>
                        <button id="submitvod" class="btn btn-default post-submissions">submit</button>
                      </form>
                      </div>
                    </div>
                  </div>


                </div>

                <div class='tab-pane' id='technique'>
                    <div class='col-md-12'>
                    <div class='well SL'>
                      <br>
                      <div class='submit-wrapper'>
                      <form method="post" class="form-horizontal">

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tech_nameid">Tech Name</label>
                          <div class="col-md-8">
                            <input id="tech_nameid" type="text" class="form-control" name="tech_name" placeholder="Wave Dash"/>
                            <span class="help-block">(once your technique is approved come back and submit a gif)</span>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tech_descid">Description</label>
                          <div class="col-md-8">
                            <textarea id="tech_descid" type="text" class="form-control" maxlength="650" name="tech_desc" placeholder="A technique used to space your character properly"></textarea>
                          </div>
                        </div>


                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tech_ssbwikiid">ssbwiki URL</label>
                          <div class="col-md-8">
                            <input id="tech_ssbwikiid" type="text" class="form-control" maxlength="100" name="tech_ssbwiki" placeholder="ssbwiki.com"/>
                          </div>
                        </div>

                        <br>
                        <button id="submittechnique" class="btn btn-default post-submissions">submit</button>
                      </form>
                      </div>
                    </div>
                  </div>

                </div>

                <div class='tab-pane' id='group'>
                    <div class='col-md-12'>
                      <div class='well SL'>
                      <br>
                      <div class='submit-wrapper'>
                        <form method="post" class="form-horizontal">
                          <div class='col-md-12'>
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="group_nameid">Group Name</label>
                              <div class="col-md-8">
                                <input id="group_nameid" type="text" class="form-control" name="group_name" placeholder="Santa Cruz Melee" required/>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="group_facebookid">Facebook</label>
                              <div class="col-md-8">
                                <textarea id="group_facebookid" type="text" class="form-control" maxlength="400" name="group_facebook" placeholder="https://www.facebook.com/groups/SantaCruzMelee/" required></textarea>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="group_regionid">Region</label>
                              <div class="col-md-8">
                                <select class="form-control" id="group_regionid" name="group_region">
                                  <option value="1">Atlantic North</option>
                                  <option value="2">Atlantic South</option>
                                  <option value="3">MidWest</option>
                                  <option value="4">SouthWest</option>
                                  <option value="5">West Coast</option>
                                  <option value="6">International</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="group_gameid">Game</label>
                              <div class="col-md-8">
                                <select class="form-control" id="group_gameid" name="group_game">
                                  <option value="0">All Games</option>
                                  <option value="1">Smash64</option>
                                  <option value="2">Melee</option>
                                  <option value="3">Brawl</option>
                                  <option value="4">Project M</option>
                                  <option value="5">Smash 4</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="col-md-4 control-label" for="group_facebookid">Pin your group to our map</label>
                              <div class="col-md-8">
                                <div id="map-canvas"/></div>
                              </div>
                            </div>
                            <div class='form-group'>
                              <label class="col-md-4 control-label" for="group_lat">latitude</label>
                              <div class="col-md-8">
                               <input id="group_lat" type="text" class="form-control" maxlength="100" name="group_lat" placeholder="0" disabled='disabled'/>
                              </div>
                            </div>
                            <div class='form-group'>
                              <label class="col-md-4 control-label" for="group_long">longitude</label>
                              <div class="col-md-8">
                                <input id="group_long" type="text" class="form-control" maxlength="100" name="group_lat" placeholder="0" disabled='disabled'/>
                              </div>
                            </div>
                          </div>

                          <br>
                          <button id='submitgroup' class="btn btn-default post-submissions">submit</button>


                        </form>
                      </div>
                    </div>
                  </div>

                </div>
                <?php footer(); ?>
              </div>

          </div>
        </div>
      </div>
    </div>

    <script src="/js/pageJs/submitInit.js"></script>
  </body>
</html>
