
$( document ).ready(function() {
	var numButtons = $(":button");
	console.log("numbuttons: " + numButtons.length);


	$(":button").each(function(  index ) {
		var id = $(this).attr('id');
		var split = id.split(".");
		var feel = split[0];
		var trueid = split[1];
		console.log ("treatment " + feel);
		console.log ("id " + trueid);
		$(this).on('click', function() {
			$.ajax({
			    url: '/admin/static/handler',
			    type: 'POST',
			    data: {treatment: feel, id: trueid},
			})
			.done(function() {
		    	console.log("success");
		    	$("#" + trueid).hide("slow");
			})
			.fail(function() {
		    	console.log("error");
			})
			.always(function() {
		    	console.log("complete");
			});
		});

	});

});