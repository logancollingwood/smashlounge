function TestPage() {
	var ad = document.getElementById("adholder");
	var adContainer = document.getElementById("canttouchthis");
	if ($('.ad').filter(':visible').length == 0) {
        adContainer.className += " adblocked";
        adContainer.innerHTML = "<img src='img/adblockSmashlounge.jpg'>";
        adContainer.style.width = "250px";
        adContainer.style.padding = "0px";
    } else if ($('.ad').filter(':hidden').length > 0) {
        adContainer.className += " adblocked";
        adContainer.innerHTML = "<img src='img/adblockSmashlounge.jpg'>";
        adContainer.style.width = "250px";
        adContainer.style.padding = "0px";
    }
}

function showImage() {

}

$(document).ready(function(){
	window.setTimeout('TestPage()', 500); 

})

var resizeTimer;

function resizer() {
    googletag.pubads().refresh([window.Leaderslot]);
}

window.addEventListener("resize", function(){ 
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(resizer, 250);
});