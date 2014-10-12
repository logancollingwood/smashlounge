


function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}



$( document ).ready(function() {

	var tech = getUrlVars()["tech"];
	var charz = getUrlVars()["char"];
	console.log("tech = " + tech);
	console.log("charz = " + charz)
	var amount = $("#techzz li").length - 1;

	console.log("Number of gifs: " + amount);
	var data = {"tech" : tech, "charz": charz, "amount": amount};

	$.getJSON( "api/FrameData.php", data )
	  .done(function( json ) {
	  	console.log(json['options']);
	  	if (json['status'] == 'success') {
	  		for (i = 1; i < json['gif'].length; i++) { 
		    	console.log("Current gif:" + i + " framedata = ");
		    	console.log(json['gif'][i]);
			}
	  	} else {
	  		console.log("No data found for this data set");
	  	}

	  })
	  .fail(function( jqxhr, textStatus, error ) {
	  	alert(jqxhr.responseText);
	    var err = textStatus + ", " + error;
	    console.log( "Request Failed: " + err );
	});
	  /*
    $.ajax({
    	dataType: "json",
      	url: 'api/frameData.php',
      	type: 'post',
      	data: {'tech': tech, 'char': charz},
      	success: function(data, status) {
        	if(data == "ok") {
          
        	}
      	},
      	error: function(xhr, desc, err) {
        	console.log(xhr);
        	console.log("Details: " + desc + "\nError:" + err);
      	}
    });
*/
});