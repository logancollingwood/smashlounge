/// <reference path="../typings/jquery/jquery.d.ts"/>
$(document).ready(function(){

	var animation = {


		start: function () {
			var animateOpts = {
			    duration: 3000,
			    complete: this.moveRight
			};
			$("#shot").animate({transform: "scale(1.3, 1.3)"}, animateOpts);
		},

		moveRight: function () {
			var animateOpts = {
			    duration: 2500,
			    complete: this.reset
			};
			var distance = $("#scene").width() - 1000;
			var horizString = "translateX(" +  distance + ")";
			console.log ("animating to " + horizString);
		    $("#shot").animate({transform: horizString}, animateOpts);

		},

		rotate: function () {
			console.log("rotating");
			var animateOpts = {
			    duration: 1000
			};
			$("#shot").animate({transform: 'rotate(360deg)'}, animateOpts);
		},

		reset: function () {
			console.log("resetting");
			$("#shot").animate({transform: "scale(0, 0)"}, 1);
		}
	}

	animation.reset();
	animation.rotate();
	animation.start();

});