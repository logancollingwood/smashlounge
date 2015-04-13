$(document).ready(function(){
	$('#loginPop').popover();

	$( ".vote" ).on( "click", function() {

	  	var id =  $( this ).data("id");
	  	var page =  $( this ).data("type");
	  	var direction = $( this ).data("direction");

	  	var target = $( this );

		var scoreElem = $("#score" + id);
		var children = scoreElem.children(".fa");
		console.log(children);

		scoreElem.children().removeClass("hidden");

	 	console.log(id + " " + page + " " + direction);

	 	//THIS SENDS AN AJAX REQUEST TO THE SERVER FOR HANDLING A VOTE
	 	//ON THE SERVER SIDE, LOGIN WILL BE CHECKED VIA A COOKIE
	 	//AND ECHO 'LOGIN' ON LOGIN FAILURE

	  	$.ajax({
	        url: '/techs/vote.php',
	        type: 'POST',
	        data: { gifId: id , page: page, direction: direction }
	    })
        .success(function(html) { 
        	console.log(html);
        	if (html == "login") {
        		console.log("requireLogin");
        		$('#loginPop').popover('show');
        		return;
        	} else if (html == "success" || html == "duplicateSuccess") {
        		console.log($(this));

        		var currScore = scoreElem.html();

        		if (direction == "down") {
        			currScore--;
        		} else if (direction == "up") {
        			currScore++;
        		}

        		scoreElem.html(currScore);
        		console.log(scoreElem);
        	}
        })
	    .fail(function() {
	      console.log('failing');
	    })
        .always(function(html) {
        	scoreElem.children().addClass("hidden");
        });
	});
});
