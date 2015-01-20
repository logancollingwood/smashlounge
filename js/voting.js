$(document).ready(function(){
	$( ".vote" ).on( "click", function() {
	  	var id =  $( this ).data("id");
	  	var page =  $( this ).data("type");
	  	var direction = $( this ).data("direction");

	 	console.log(id + " " + page + " " + direction);

	  	$.ajax({
	        url: '/techs/vote.php',
	        type: 'POST',
	        data: { gifId: id , page: page, direction: direction }
	    })
        .success(function(html) { 

        })
	    .fail(function() {
	      console.log('failing');
	    })
        .always(function(html) {

        });
	});
});
