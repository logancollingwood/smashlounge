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
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Dev - An Example Submit Form</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php printLibraries(); ?>

    <!-- Custom styles for this template -->
    <link href="/css/dashboard_mobile.css" rel="stylesheet">

    <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>

  </head>

  <body>
    <div id="fb-root"></div>
    <?php //include_once('submit-nav.php'); ?>
    <?php createNavBar(); ?>
    <div class="container-fluid">
      <div class="row">

        <!-- compartamentalize sidebar -->
        <div class="col-sm-3 col-md-2 sidebar">
           <?php makeSidebar($loggedIn, 'submit'); ?>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="jumbotron banner">
            <div class='row'>
              <h1 class='lead'>Submit Data</h1>
              <p class="fifty"><small>all submissions are reviewed by community moderators</small></p>
            </div>
          </div>

            <ul class='nav nav-tabs' role='tablist' id='myTab'>
              <li class='active'><a href='#gif' role='tab' data-toggle='tab' class='tabz' data-id="gif">Gifs</a></li>
              <li><a href='#tournament' role='tab' data-toggle='tab' class='tabz' data-id="tournament">Tournaments</a></li>
              <li><a href='#technique' role='tab' data-toggle='tab' class='tabz' data-id="technique">Techniques</a></li>
              <li><a href='#group' role='tab' data-toggle='tab' class='tabz' data-id="group">Regional Group</a></li>
            </ul>

          <!-- Submit Form Row -->
          <div class="row">


            
              <div class='tab-content'>

                <div class='tab-pane active' id='gif'>
                  <div class='col-md-9'>
                    
                    <div class='well'>
                      <br>
                      <div class='submit-wrapper'>
                      <form method="post" class="form-horizontal">


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

                        <button class="btn btn-default post-submissions">submit</button>
                        <br>
                      </form>
                      </div>
                    </div>
                  </div>

                  <div class='col-md-3'>
                    <div id='gfyLocation'>
                    </div>
                  </div>
                </div>

                <div class='tab-pane' id='tournament'>
                  <div class='tab-pane' id='tournament'>
                  <div class='col-md-9'>
                    
                    <div class='well SL'>
                      <br>
                      <div class='submit-wrapper'>
                      <form method="post" class="form-horizontal">
                        <!-- Potentially Use the following hidden fields -->
                        <input type="hidden" name="pageid" value="" />
                        <input type="hidden" name="dataid" value="" />

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_urlid">Tournament Name</label>
                          <div class="col-md-8">
                            <input id="tournament_urlid" type="text" class="form-control" name="tournament_name" placeholder="Do You Fox With It?"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_startid">Start Date</label>
                          <div class="col-md-8">
                            <input id="tournament_startid" type="date" class="form-control" maxlength="100" name="tournament_start" placeholder="6/24/15"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_endid">End Date</label>
                          <div class="col-md-8">
                            <input id="tournament_endid" type="date" class="form-control" maxlength="100" name="tournament_end" placeholder="6/25/15"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_twitchid">Twitch URL</label>
                          <div class="col-md-8">
                            <input id="tournament_twitchid" type="text" class="form-control" maxlength="100" name="tournament_twitch" placeholder="twitch.tv/showdownsmash"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_challongeid">Challonge URL</label>
                          <div class="col-md-8">
                            <input id="tournament_challongeid" type="text" class="form-control" maxlength="100" name="tournament_challonge" placeholder="http://challonge.com/BiWeekly1"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_creditsid">credits:</label>
                          <div class="col-md-8">
                            <input id="tournament_creditsid" type="text" class="form-control" maxlength="100" name="technique_credits" 
                            <?php if($loggedIn) {
                                echo " value=" . $user['username'];
                              }
                            ?> placeholder="Your Username!"/>
                          </div>
                        </div>

                        <br>
                        <button class="btn btn-default post-submissions">submit</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>

                </div>

                <div class='tab-pane' id='technique'>
                  TECHNIQUE
                </div>

                <div class='tab-pane' id='group'>
                  GROUP
                </div>

              </div>
            
          </div>

        </div>
      </div>
    </div>


    <script src="js/adblockzorz.js"></script>

    <script>
      $(document).ready(function(){
        var currentPage = '';

        $(".post-submissions").on("click", function(event) {
          // Prevent default behavior
          event.preventDefault();
          var data = $(".submit-wrapper form-horizontal").serialize();

          //this jQuery picks up what form is being submitted
          var ref_this = $("ul.nav-tabs li.active a");
          var key = ref_this.data("id");
          console.log('submitting a ' + key);

          //let's build our post keys array, starting with what kind of post it is
          var data = 'key=' + key;
          data += '&' + $(".tab-pane.active form").serialize();
          
          console.log('submitting this ' + data);

          $.ajax({
            url: '/techs/submit.php',
            type: 'POST',
            data: data
          })
          .success(function(html) {
            if (html == 'gfycat') {
              alert('Looks like you didn\'t sumbit a gfycat!');
            }
            console.log(html);
          })
          .fail(function() {
            console.log('failing');
          })
          .always(function() {
            console.log('always');
          });
        });
        

      });
    </script>
    <script>
      $(document).ready(function(){
        var spawned = false;

        $("#charSelector").hide();
        

        $("#giffyurl").change(function(event){     

            var url = $("#giffyurl").val();

            var re = /((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/; 
            var str = url;
            var m = re.exec(str);
            //console.log(m[4]);
            if (m == null) {
              if (spawned) {
                $( ".spawned" ).empty();
                $( ".spawned" ).remove();
                spawned = false;
              }
              return;
            }
            $( ".spawned" ).empty();
            var linkAndString = "<a href='http://www.gfycat.com/" + m[4] + "'><p class='fifty2'>" + m[4] + "</p></a>"; 
            $("#gfyLocation").append("<div class='spawned'><br>" + linkAndString + "<hr><div class='well'><img class='gfyitem' data-expand=true data-id='" + m[4] + "' /></div></div>");
            spawned = true;
            gfyCollection.init();
            //return;
        });

        $("#gif_selectorid").change(function () {
          if ($( "#gif_selectorid" ).val() == 'tech') {
            $("#charSelector").hide();
            $("#techSelector").show();
          }
          if ($( "#gif_selectorid" ).val() == 'char') {
            $("#charSelector").show();
            $("#techSelector").hide();
          }
        });

      })
    </script>
    
  </body>
</html>
