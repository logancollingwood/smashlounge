/// <reference path="../typings/jquery/jquery.d.ts"/>
$(document).ready(function(){

	var animation = {


		start: function () {
			var animateOpts = {
			    duration: 3000,
			    complete: this.moveRight
			};
			
			console.log(this);
			$("#shot").animate({transform: "scale(1.3, 1.3)"}, animateOpts);
			this.reset();
		},
		
		reset: function () {
			console.log("resetting");
			var distance = -$("#scene").width() - 1000;
			var horizString = "translateX(" +  distance + ")";
			console.log(horizString);
			$("#shot").animate({transform: "scale(-1.3, -1.3)"}, 1);
			$("#shot").animate({transform: horizString}, 1);
			
		},
		
		moveRight: function () {
			var animateOpts = {
			    duration: 2500,
			};
			var distance = $("#scene").width() - 1000;
			var horizString = "translateX(" +  distance + ")";
			//console.log ("animating to " + horizString);
		    $("#shot").animate({transform: horizString}, animateOpts);
		},

		rotate: function () {
			console.log("rotating");
			var animateOpts = {
			    duration: 1000
			};
			$("#shot").animate({transform: 'rotate(360deg)'}, animateOpts);
		},

	}

	//animation.reset();
	animation.rotate();
	animation.start();
	
	return animation;
	
});