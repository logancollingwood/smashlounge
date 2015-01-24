function drawRandomGif() {
  $.getJSON("/api/smashgifs.php", function( data ) {
    var item;
    var spawned = false;
    var url;
    var permalink;
    var title;

    $.each( data, function( key, val ) {
      //console.log(data);
      item = data;
      permalink = "http://www.reddit.com" + item['data']['permalink'];
      url = item['data']['url'];
      title = item['data']['title'];
    });

    url = url.replace('#', '');

    var re = /((https?:)?\/\/)?(.+?\.)?gfycat\.com\/(.+)/; 
    var m = re.exec(url);

    if (m == null) {
      drawRandomGif();
    }

    var panelHeading = "<a href='//www.reddit.com/r/smashgifs'>Enjoy a random r/smashgif</a>&nbsp;-&nbsp;<button type='button' class='btn btn-default btn-lg' id='drawgif' aria-label='Left Align'>&nbsp;<span class='glyphicon glyphicon-random theme' aria-hidden='true'></span>&nbsp;another?</button><br>"; 
    var panelBody = "<img class='gfyitem' data-expand=true data-id='" + m[4] + "' />";
    var panelFooter = "<h4 randGifDesc><a href='" + permalink + "'>" +  title + "</a></h4>"
    $('#randomSlot').empty();
    $("#randomSlot").append("<div class='panel-heading'>" + panelHeading + "</div><div class='panel-body randgifz'>" + panelBody + "</div><div class='panel-footer'>" + panelFooter + "</div>");
    spawned = true;
    gfyCollection.init();
  });
}

$(document).ready(function(){
  drawRandomGif();
});

$(document).on("click", "#drawgif", function(e) {
  console.log('firing');
  drawRandomGif();
});
