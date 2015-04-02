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