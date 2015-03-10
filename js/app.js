$(document).ready(function() {

	$("#toggler").click(function(){
  		$(this).toggleClass('active, inactive');
      var which = $(this).data( "target" );
      which += "Anchor";
      console.log(which);
      $(which).scrollintoview();
      var rowpos = $(which).position();
      //$('#sidebar').scrollTop(rowpos.top);
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
    $("#navbar").hide();

    $("#main").scroll(function () {
        // set distance user needs to scroll before we start fadeIn
        if ($(this).scrollTop() > 100) {
            $('.navbar').fadeIn();
        } else {
            $('.navbar').fadeOut();
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
});