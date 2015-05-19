/// <reference path="../typings/jquery/jquery.d.ts"/>
$(document).ready(function(){

	var animation = {
		startDur: 6000,
		moveRightDur: 1000,
		delay: 3000,
		resetSpeed: 1000,

		start: function () {
			//var duration = 3000;
			//var moveRightDur = 2500;
			//var delay = 3000;

			var animateOpts = {
			    duration: this.startDur,
			    complete: this.moveRight
			};

			var transformStr = "scale(1.3, 1.3) rotate(10rad)";
			console.log("start");
			$("#shot").animate({transform: transformStr}, animateOpts);

			setTimeout(this.reset, this.startDur + this.moveRightDur + this.delay);

			//setTimeout(this.start, this.startDur + this.moveRightDur + this.delay + this.resetSpeed);
		},

		moveRight: function () {
			$("#samus").animate({transform: "rotate(-10deg)"}, 1);
			console.log("right");
			var animateOpts = {
			    duration: this.moveRightDur
			};
			var distance = $("#scene").width() - 500;
			var horizString = "translateX(" +  distance + ")";

		    $("#shot").animate({transform: horizString}, animateOpts);
		    
		},

		reset: function () {
			console.log("resetting");


			var optz = {
				duration: this.resetSpeed
			}
			$("#samus").animate({transform: "rotate(0deg)"}, this.resetSpeed);
			$("#shot").animate({transform: "scale(0.1, 0.1) "}, this.resetSpeed);
			
			
		},
		
		

	};

	var optz =  {duration: 1};
	$("#shot").animate({transform: "scale(0.1, 0.1)"}, optz);

	animation.start();
	
	
});