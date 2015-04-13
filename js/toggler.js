$(document).ready(function(){
  $('#loginPop').popover();
	
  $("#toggler").click(function(){
  		$(this).toggleClass('active, inactive');
      var which = $(this).data( "target" );
      which += "Anchor";
      console.log(which);
      $(which).scrollintoview();
      var rowpos = $(which).position();
      //$('#sidebar').scrollTop(rowpos.top);
	});

	 $('#chars').on('show.bs.collapse', function () {
      $("#collapseDownChars").addClass("fa-rotate-180");
    });

    $('#chars').on('hide.bs.collapse', function () {
      $("#collapseDownChars").removeClass("fa-rotate-180");
    });

    $('#techs').on('show.bs.collapse', function () {
      $("#collapseDownTechs").addClass("fa-rotate-180");
    });

    $('#techs').on('hide.bs.collapse', function () {
      $("#collapseDownTechs").removeClass("fa-rotate-180");
    });

    $('#vodsList').on('show.bs.collapse', function () {
      $("#collapseDownVods").addClass("fa-rotate-180");
    });

    $('#vodsList').on('hide.bs.collapse', function () {
      $("#collapseDownVods").removeClass("fa-rotate-180");
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
});