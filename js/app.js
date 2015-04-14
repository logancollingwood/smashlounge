$(document).ready(function() {
	$window = $(window);
       
 	$('section[data-type="background"]').each(function(){

       	var $scroll = $(this);
                       
        $("#main").scroll(function() {          
          	var yPos = -($("#main").scrollTop() / $scroll.data('speed')); 
          	var coords = '50% '+ yPos + 'px';
   
          	$scroll.css({ backgroundPosition: coords });    
        });
 	});  

	$("#toggler").click(function(){
  		$(this).toggleClass('active, inactive');
	})

	$('#chars').on('shown.bs.collapse', function () {
       $("#collapseDownChars").removeClass("glyphicon-collapse-down").addClass("glyphicon-collapse-up");
    });

    $('#chars').on('hidden.bs.collapse', function () {
       $("#collapseDownChars").removeClass("glyphicon-collapse-up").addClass("glyphicon-collapse-down");
    });

    $('#techs').on('shown.bs.collapse', function () {
       $("#collapseDownTechs").removeClass("glyphicon-collapse-down").addClass("glyphicon-collapse-up");
    });

    $('#techs').on('hidden.bs.collapse', function () {
       $("#collapseDownTechs").removeClass("glyphicon-collapse-up").addClass("glyphicon-collapse-down");
    });

    $('#dataz').on('shown.bs.collapse', function () {
       $("#collapseDownDataz").removeClass("glyphicon-collapse-down").addClass("glyphicon-collapse-up");
    });

    $('#dataz').on('hidden.bs.collapse', function () {
       $("#collapseDownDataz").removeClass("glyphicon-collapse-up").addClass("glyphicon-collapse-down");
    });

    //$('#tip').popover();

    $('body').on('click', function (e) {
        $('[data-toggle="popover"]').each(function () {
          //the 'is' for buttons that trigger popups
          //the 'has' for icons within a button that triggers a popup
          if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
              $(this).popover('hide');
          }
        });

    });
     // hide .navbar first
    /*
    $("#navbar").hide();
    */
    $("#main").scroll(function () {

      var navbarColor = "26,188,156";

      //color attr for rgba
      var smallLogoHeight = $('.small-logo').height();
      var bigLogoHeight = $('.header').height();
      
      
      var smallLogoEndPos = 0;
      var smallSpeed = (smallLogoHeight / bigLogoHeight);
      
      var ySmall = ($("#main").scrollTop() * smallSpeed); 
      
      var smallPadding = navbarHeight - ySmall;
      if (smallPadding > navbarHeight) { smallPadding = navbarHeight + 3; }
      if (smallPadding < smallLogoEndPos) { smallPadding = smallLogoEndPos + 3; }
      if (smallPadding < 0) { smallPadding = 3; }
      
      $('.small-logo-container ').css({ "padding-top": smallPadding});
      
      var navOpacity = $(this).scrollTop()/250;

      var navBackColor = 'rgba(' + navbarColor + ',' + navOpacity + ')';
      var webkitgradient = " -webkit-gradient(linear, left bottom, left top, color-stop(0, " + navBackColor + "), color-stop(1, #1abc9c))";
      var mozgradient = "-moz-linear-gradient(center bottom, " + navBackColor + " 0%, #1abc9c 100%);";
      
      //console.log(mozgradient);
      //console.log(webkitgradient);
      //console.log($(this).scrollTop()/250);

      $('.navbar').css({"background": webkitgradient});

      //-webkit-gradient(linear, left bottom, left top, color-stop(0, rgba(26,188,156,0)), color-stop(1, #1abc9c))

      var shadowOpacity = navOpacity * 0.4;
      if ( ySmall > 1) {
        //$('.navbar').css({"box-shadow": "0 2px 3px rgba(0,0,0," + shadowOpacity + ")"});
      } else {
        //$('.navbar').css({"box-shadow": "none"});
      }
    });
	

	// Live Search
  	// On Search Submit and Get Results
  	function searchBar() {
    	var query_value = $('#searchBar').val();
    	//$('b#search-string').html(query_value);
    	

      	$.ajax({
        	type: "POST",
        	url: "/techs/searchBar.php",
        	data: { query: query_value },
        	cache: false,
        	success: function(html){
        		console.log(html);
          		$("#searchBarResults").html(html);
        	},
        	fail: function(html) {
        		console.log(html);
        	},
        	always: function(html){
        		console.log(html);
        	}
      	});
  	}

  	$("#searchBar").on("keyup", function(e) {
        // Set Timeout
        clearTimeout($.data(this, 'timer'));

        // Set Search String
        var search_string = $(this).val();


        $("ul#results").fadeIn();
        $('h4#results-text').fadeIn();
        $(this).data('timer', setTimeout(searchBar, 100));

   	});
   	$("#searchBarResults").on("click", function(e) {
   		e.stopPropagation();
   	});
    var navbarHeight = $('.navbar').height(); 


});