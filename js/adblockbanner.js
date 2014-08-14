function TestPage() {
	var ad = document.getElementById("bannerad");
	var adContainer = document.getElementById("bannerzad");
	if ($('.ad').filter(':visible').length == 0) {
        adContainer.className += " adblocked";
        adContainer.innerHTML = "<img src='img/adblockSmashloungeBanner.jpg'>";
        adContainer.style.width = "900px";
        adContainer.style.height = "75px";
        adContainer.style.padding = "0px";
    } else if ($('.ad').filter(':hidden').length > 0) {
        adContainer.className += " adblocked";
        adContainer.innerHTML = "<img src='img/adblockSmashloungeBanner.jpg'>";
        adContainer.style.width = "900px";
        adContainer.style.height = "75px";
        adContainer.style.padding = "0px";
    }

}


$(document).ready(function(){
	window.setTimeout('TestPage()', 500); 
})
