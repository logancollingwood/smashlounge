$(document).ready(function(){
	$('#loginPop').popover();

	$( ".vote" ).on( "click", function() {
		if ($(this).attr("disabled")) return;

	  	var id =  $( this ).data("id");
	  	var page =  $( this ).data("type");
	  	var direction = $( this ).data("direction");

	  	var target = $( this );

		var scoreElem = $("#score" + id);
		var children = scoreElem.children(".fa");
		scoreElem.children().removeClass("hidden");

	 	console.log(id + " " + page + " " + direction);

	 	//THIS SENDS AN AJAX REQUEST TO THE SERVER FOR HANDLING A VOTE
	 	//ON THE SERVER SIDE, LOGIN WILL BE CHECKED VIA A COOKIE
	 	//AND ECHO 'LOGIN' ON LOGIN FAILURE

	  	$.ajax({
	        url: '/techs/vote.php',
	        type: 'POST',
	        data: { gifId: id , page: page, direction: direction },
	        dataType: 'json'
	    })
        .success(function(data) { 
        	console.log(data);
        	if (data.login == 0 && data.success == 0) {
        		console.log("requireLogin");
        		$('#loginPop').popover('show');
        		return;
        	} else if (data.success || data.duplicateSuccess) {
        		console.log($(this));

        		var currScore = scoreElem.html();

        		if (direction == "down") {
        			
        			$("#down" + id).attr("disabled", true);
        			$("#up" + id).attr("disabled", false);
        			$("#up" + id).removeClass("SL");
        			$("#down" + id).addClass("SL");
        		} else if (direction == "up") {
        			
        			$("#up" + id).attr("disabled", true);
        			$("#down" + id).attr("disabled", false);
        			$("#up" + id).addClass("SL");
        			$("#down" + id).removeClass("SL");
        		}

        		scoreElem.html(data.score);
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
