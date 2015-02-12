$(document).ready(function(){

	$("#toggler").click(function(){
  		$(this).toggleClass('active, inactive');
      var which = $(this).data( "target" );
      which += "Anchor";
      console.log(which);
      $(which).scrollintoview();
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

    $('#tip').popover();

    $('.popover-dismiss').popover({
      trigger: 'focus'
    })

    $('body').on('click', function (e) {
      $('[data-toggle="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
      });
  });
})