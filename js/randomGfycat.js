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

    var panelHeading = "<a href='//www.reddit.com/r/smashgifs'>from /r/smashgifs</a>&nbsp;-&nbsp;";
    //<a class="button button-inline button-large button-info" href=characters/' .  urlencode($randomLink) . '>'.'<span><i class="fa fa-share-alt"></i>' . $randomLink . '</span></a>
    panelHeading += "<a class='button button-inline button-small button-info' id='drawgif'>&nbsp;<i class='fa fa-random'></i>another?</a><br>"; 
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
