var seen = [];
var global;

function drawRandomGif() {
  $.getJSON("/api/smashgifs.php", function( data ) {

    var found = data['data'];

    var item;
    var spawned = false;
    var url = found['url'];
    var permalink = "http://www.reddit.com" + found['permalink'];
    var title = found['title'];
    var score = found['score'];

    url = url.replace('#', '');
    if (seen.length > 10) {
      seen = [];
    }
    if (seen.indexOf(url) != -1) {
     drawRandomGif();
    }

    seen.push(url);

    var re = /((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/; 
    var m = re.exec(url);

    if (m == null) {
      drawRandomGif();
    }

    var panelHeading = "<a href='//www.reddit.com/r/smashgifs'>Enjoy a random r/smashgif</a>&nbsp;-&nbsp;<button type='button' class='btn btn-default btn-lg' id='drawgif' aria-label='Left Align'>&nbsp;<span class='glyphicon glyphicon-random theme' aria-hidden='true'></span>another?</button><br>"; 
    var panelBody = "<img class='gfyitem' data-expand=true data-id='" + m[4] + "' />";
    var panelFooter = "<span class='randGifDesc pull-left'><a href='" + permalink + "'>" +  title + "</a></span><span class='upvotecount pull-right'><small>upvotes: </small>" + score + "</span>";
    $('#randomSlot').empty();
    $("#randomSlot").append("<div class='panel-heading'>" + panelHeading + "</div><div class='panel-body'>" + panelBody + "</div><div class='panel-footer'>" + panelFooter + "</div>");
    spawned = true;
    gfyCollection.init();
  });
}

$(document).ready(function(){
  drawRandomGif();
});

$(document).on("click", "#drawgif", function(e) {
  drawRandomGif();
});
