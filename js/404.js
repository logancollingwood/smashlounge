/// <reference path="../typings/jquery/jquery.d.ts"/>
$(document).ready(function(){
	
	$("#shot").animate({transform: 'scale(0.0, 0.0)'});
	console.log("shrinking");
	
	
	var currSize = 0;
	var shotInterval = setInterval(function() {shotScaler()}, 10);
	
	var screenWidth = $("#scene").width();
	var shotMover;
	var shotDegrees = 0;
	
	function shotScaler() {
		if (currSize > 1.3 ) {
			clearInterval(shotInterval);
		   shotMover = setInterval(function() {shotShooter();}, 1);;
		}
		 currSize = currSize + 0.01;
		 var scaleString = "scale(" + currSize + "," + currSize  + ")";
		 $("#shot").animate({transform: scaleString}, 10);
		 console.log("curr size = " + currSize);
	}
	//15 accounts for row padding
	var xPos = 0;
	var speed = 1;
	
	function shotShooter() {
		if (xPos > screenWidth-500) {
			clearInterval(shotMover);
			setTimeout(function () {reset();}, 5000);
			//var shotInterval = setInterval(function() {shotScaler()}, 10);
		}

		speed += 0.08;
		var horizString = "translateX(" + xPos + ")";
		 $("#shot").animate({transform: horizString}, 1);
		 xPos = xPos + speed;
	}
	
	/*
	var rotateInterval = setInterval(function() {shotRotater();}, 100);
	
	function shotRotater() {
		var rotateString = "rotate(" + shotDegrees +")";
		$("#shot").animate({transform: rotateString}, 100);
		shotDegrees += 1;
	}
	
	*/

	function reset() {
		var horizString = "translateX(" + 0 + ")";
		 $("#shot").animate({transform: horizString}, 10);
		 var scaleString = "scale(" + 0 + "," + 0  + ")";
		 $("#shot").animate({transform: scaleString}, 100);
		 currSize = 0;
		 xPos = 0;
		 speed = 1;
		var shotInterval = setInterval(function() {shotScaler()}, 10);
	}
});