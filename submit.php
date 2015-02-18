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

    <title>smashlounge - submit</title>

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

    <style>
      #map-canvas {
        height: 200px;
      }
    </style>
    
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- <script src="/js/jquery.min.js"></script> -->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqmaEEEbIm2Iln3ieqGdtfzVLi6AzHA1Q&sensor=true">
    </script>
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
          <?php //printBetaMast(); ?>
          <div class="jumbotron banner">
            <div class='row'>
              <h1 class='lead'>Submit Data</h1>
              <p class="fifty"><small>all submissions are reviewed by community moderators</small></p>
            </div>
          </div>
            <div class="alert alert-danger alert-dismissible" id="nullfields" role="alert" hidden='true'>
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <strong>Whoops!</strong> Looks like you forgot to fill out some fields
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

                <div class='tab-pane' id='tournament'>
                  
                  <div class='col-md-12'>
                    
                    <div class='well SL'>
                      <br>
                      <div class='submit-wrapper'>
                      <form method="post" class="form-horizontal">

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_nameid">Tournament Name</label>
                          <div class="col-md-8">
                            <input id="tournament_nameid" type="text" class="form-control" name="tournament_name" placeholder="Do You Fox With It?"/>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-md-4 control-label" for="tournament_hostid">Tournament Host</label>
                          <div class="col-md-8">
                            <input id="tournament_hostid" type="text" class="form-control" name="tournament_host" placeholder="NorCal Melee"/>
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

                        <br>
                        <button id="submittournament" class="btn btn-default post-submissions">submit</button>
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

              </div>

          </div>
        </div>
      </div>
    </div>

    <script>
      var map;
      var marker;
      var markers = [];

      var submittedFrameData = [{}];
      var gfyObj;
      var gfyEl;

      function bindInfoWindow(map, infoWindow) {


        google.maps.event.addListener(map, 'click', function( event ){
          var lat = event.latLng.lat();
          var lon = event.latLng.lng();
          document.getElementById('group_long').value = lon.toFixed(3);
          document.getElementById('group_lat').value = lat.toFixed(3);

        });

        google.maps.event.addListener(map, 'click', function(event) {
          placeMarker(event.latLng, map);
        });
      }

      function placeMarker(location, map) {
          if (marker == undefined){
              marker = new google.maps.Marker({
                  position: location,
                  map: map,
                  animation: google.maps.Animation.DROP,
              });
          }
          else{
              marker.setPosition(location);
          }
          markers.push(marker);
          map.setCenter(location);
      }


      function initialize() {
        var mapOptions = {
          zoom: 3,
          center: new google.maps.LatLng(37.6, -95.665),
        };
        var infoWindow = new google.maps.InfoWindow;
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);

        bindInfoWindow(map, infoWindow);
        $(document).ready(function(){
          $('a[href="#group"]').on('shown.bs.tab', function(e) {
            google.maps.event.trigger(map, 'resize');
          });
        });
      }

      google.maps.event.addDomListener(window, 'load', initialize);

      $(document).ready(function(){
        var currentPage = '';
        
        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');
          
        var spawned = false;

        $("#charSelector").hide();

        $("#giffyurl").change(function(event){
          console.log("fired");
            var url = $("#giffyurl").val();

            var re = /((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/; 
            var str = url;
            var m = re.exec(str);
            console.log(m);
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
            $(".gfyLocation").append("<div class='spawned'><br>" + linkAndString + "<hr><div class='well'><img class='gfyitem' data-expand=true data-id='" + m[4] + "' /></div></div>");
            $("#gfyFrameTarget").append("<div class='well'><div id='submittedGfy' data-autoplay=false data-expand=true data-id='" + m[4] + "'></div></div>")
            spawned = true;
            gfyCollection.init();
            //return;
        });

        $('#myTab').bind('click', function (e) {
           $("#nullfields").hide();
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

        $(".post-submissions").on("click", function(event) {
          // Prevent default behavior
          event.preventDefault();

          //this jQuery picks up what form is being submitted
          var ref_this = $("ul.nav-tabs li.active a");
          var key = ref_this.data("id");

          //let's build our post keys array, starting with what kind of post it is
          var data = 'key=' + key;
          data += '&' + $(".tab-pane.active form").serialize();
          if (key === "group") {
            lat = document.getElementById('group_lat').value;
            longz = document.getElementById('group_long').value
            data += '&group_lat=' + lat + '&group_long=' + longz;
          }

          //strip http & https off string for godaddy 406 error
          data = data.replace('http%3A%2F%2F','');
          data = data.replace('https%3A%2F%2F','');

          $.ajax({
            url: '/techs/submit.php',
            type: 'POST',
            data: data
          })
          .success(function(html) {
            $("#submit" + key).html('Thanks!');
            $("#submit" + key).prop("disabled", true);

            if (html == 'gfycat') {
              $("#submit" + key).html('Submit');
              $("#submit" + key).prop("disabled", false);
              alert('Looks like you didn\'t sumbit a gfycat!');
            } else {
              if ($('#boolean-framedata').prop('checked') == true) {
                $('#submit-gif-form').hide('fast');
                $('#gifFrameData').show('fast', function() {
                  loadGfySettings();
                });
              }
            }
          })
          .fail(function() {
          })
          .always(function(html) {
            if (html == 'nullfields') {
              $("#nullfields").show();
              $("#submit" + key).html('submit');
              $("#submit" + key).removeAttr("disabled");
            } else {
              $("#nullfields").hide();
            }
          });
        });

        // Frame Selection Event Handlers, Functions, and Init
        
        function loadGfySettings() {
          // Set gfyEl
          gfyEl = $( '#submittedGfy' )[ 0 ];

          // Initialize gfyObject
          gfyObj = gfyObject( gfyEl );
          gfyObj.init();
          $( '#frame-number' ).text(gfyObj.getFrame());
        }

        function storeFrameData() {
          // Set form jquery object
          var $form = $( '#gifFrameData' );

          // Set jquery object for number span
          var $numberSpan = $form.find( '#frame-number' );

          // Set current frame
          currentFrame = gfyObj.getFrame();

          // Create Object for Current Frame Data
          var currentFrameData = {};

          // Set default structures for 'buttons' and 'ctrlStick' array
          currentFrameData[ 'buttons' ] = [];

          // ...Iterate over all button input fields
          $form.find( "input[id^='button-']" ).each(function( index, el ){

            // Set jQuery object for element
            $el = $( el );

            // If input element is "checked"...
            if ( $el.prop( "checked" ) ) {
              currentFrameData[ 'buttons' ].push( $el.val() );
            }
          });

          // Set variables for values from control stick inputs
          degrees = $form.find( '#controlstick-degrees' ).val();
          // ... ternary operator to make sure default is 100 in case of undefined
          amount = $form.find( '#controlstick-amount' ).val() ? $form.find( '#controlstick-amount' ).val() : 100;

          // If degrees undefined...
          if ( degrees == undefined || degrees == null ) {
            // ... property will be an empty array
            constrolStickInputs = [];
          } else {
            // ... property will equal values
            controlStickInputs = [
              $form.find( '#controlstick-degrees' ).val(), 
              $form.find( '#controlstick-amount' ).val()
            ];            
          }

          // Set frame data for current frame based on inputs
          currentFrameData[ 'frame' ] = currentFrame;

          // Set control stick inputs
          currentFrameData[ 'ctrlStick' ] = controlStickInputs;

          submittedFrameData[ currentFrame ] = currentFrameData;
        }

        function loadFrameData() {
          // Set form jquery object
          var $form = $( '#gifFrameData' );

          // Set jquery object for number span
          var $span = $form.find( '#frame-number' );

          // Set current frame
          newFrame = gfyObj.getFrame();

          // Set dom elements to display new frame data
          $span.data( 'framenumber', newFrame );
          $span.text( newFrame );

          // Set object that holds frame data
          newFrameData = submittedFrameData[ newFrame ];

          // If newFrameData is undefined...
          if ( newFrameData === undefined ) {
            // Set input fields to default values
            $form.find( "input[id^='button-']" ).prop( "checked", false );
            $form.find( '#controlstick-degrees' ).val( '' );
            $form.find( '#controlstick-amount' ).val( '' );
          } else {
            // Iterate over all button input fields
            $form.find( "input[id^='button-']" ).each(function( index, el ){

              // Set jQuery object for element
              $el = $( el );

              // Set Current Button Name
              btnName = $el.attr( 'id' ).slice( -1 );

              // If button exists in frame data array...
              if ( newFrameData[ 'buttons' ].indexOf( btnName ) > -1 ) {
                // Mark the checkbox...
                $el.prop( "checked", true );
              } else {
                // Unmark the checkbox...
                $el.prop( "checked", false );
              }
            });

            if ( newFrameData[ 'ctrlStick' ][ 0 ] == undefined ) {
              $form.find( '#controlstick-degrees' ).val( '' );  
            } else {
              $form.find( '#controlstick-degrees' ).val(newFrameData[ 'ctrlStick' ][ 0 ]);
            }

            if ( newFrameData[ 'ctrlStick' ][ 1 ] == undefined ) {
              $form.find( '#controlstick-amount' ).val( '' );  
            } else {
              $form.find( '#controlstick-amount' ).val(newFrameData[ 'ctrlStick' ][ 1 ]);
            }
          }
        }

        $( '#toggleGfy' ).on( 'click', function() {
          event.preventDefault();

          // Set form jquery object
          var $form = $( '#gifFrameData' );

          // If play is clicked...
          if ( $( this ).find( '.fa-play' ).length > 0 ) {
            $( this ).html( '<i class="fa fa-pause"></i>' );

            // Save Frame Data
            storeFrameData();

            // Disable Input Fields
            $form.find( 'input' ).prop( 'disabled', true );

            // Play / Pause the gfyCat
            gfyObj.toggle();

          // Else if pause is clicked...
          } else {
            
            // Play / Pause the gfyCat
            gfyObj.toggle();

            $( this ).html( '<i class="fa fa-play"></i>' );

            // Set jquery object for number span
            var $numberSpan = $form.find( '#frame-number' );

            // Re-enable Input Fields
            $form.find( 'input' ).prop( 'disabled', false );

            // Load frame data for new frame
            loadFrameData();
          }
        });

        $( "#prevFrame" ).on( 'click', function() {
          event.preventDefault();

          // Store Current Frame Data
          storeFrameData();

          // Move gfy one frame backward
          gfyObj.stepBackward();

          // Load Previous Frame
          loadFrameData();
        });

        $( "#nextFrame" ).on( 'click', function() {
          event.preventDefault();

          // Store Current Frame Data
          storeFrameData();

          // Move gfy one frame backward
          gfyObj.stepForward();

          // Load frame data for new frame
          loadFrameData();
        });

        $( "#submitFrameData" ).on( 'click', function() {

          // Make an AJAX call to submit frame data.

        });
      });
    </script>
  </body>
</html>
